(() => {
    const data = window.ANEW || {};
    const $ = (sel, root = document) => root.querySelector(sel);
    const $$ = (sel, root = document) => [...root.querySelectorAll(sel)];
    const esc = (s) => String(s ?? '').replace(/[&<>"']/g, (c) => ({ '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[c]));

    /* ---------- Header shadow on scroll ---------- */
    const header = $('[data-header]');
    const onScroll = () => header?.classList.toggle('is-scrolled', window.scrollY > 8);
    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });

    /* ---------- Mobile menu ---------- */
    const menu = $('[data-menu]');
    const menuToggle = $('[data-menu-toggle]');
    const setMenu = (open) => {
        menu.classList.toggle('hidden', !open);
        menuToggle.setAttribute('aria-expanded', String(open));
        document.body.style.overflow = open ? 'hidden' : '';
        if (open) $('[data-menu-close]', menu.lastElementChild)?.focus();
    };
    menuToggle?.addEventListener('click', () => setMenu(true));
    $$('[data-menu-close]').forEach((el) => el.addEventListener('click', () => setMenu(false)));
    document.addEventListener('keydown', (e) => { if (e.key === 'Escape' && !menu.classList.contains('hidden')) setMenu(false); });

    /* ---------- Scroll reveal ---------- */
    const reveals = $$('.reveal');
    if ('IntersectionObserver' in window) {
        const io = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) { entry.target.classList.add('is-visible'); io.unobserve(entry.target); }
            });
        }, { rootMargin: '0px 0px -8% 0px', threshold: 0.08 });
        reveals.forEach((el) => io.observe(el));
    } else {
        reveals.forEach((el) => el.classList.add('is-visible'));
    }

    /* ---------- Find your next step ---------- */
    const chips = $$('[data-symptom]');
    const selected = new Set();
    const empty = $('[data-ns-empty]');
    const filled = $('[data-ns-filled]');
    const clearBtn = $('[data-ns-clear]');

    const renderNextStep = () => {
        if (!empty) return;
        const has = selected.size > 0;
        empty.classList.toggle('hidden', has);
        empty.classList.toggle('flex', !has);
        filled.classList.toggle('hidden', !has);
        filled.classList.toggle('flex', has);
        clearBtn.classList.toggle('hidden', !has);
        if (!has) return;

        // Rank conditions by how many selected experiences point to them.
        const score = {};
        selected.forEach((key) => (data.symptoms[key]?.conditions || []).forEach((c, i) => {
            score[c] = (score[c] || 0) + 3 - Math.min(i, 2) * 0.5;
        }));
        const conditions = Object.keys(score).sort((a, b) => score[b] - score[a]).slice(0, 4);

        const serviceKeys = [];
        conditions.forEach((c) => data.conditions[c].services.forEach((s) => { if (!serviceKeys.includes(s)) serviceKeys.push(s); }));

        const peopleScore = {};
        Object.entries(data.team).forEach(([slug, p]) => {
            const hits = p.conditions.filter((c) => conditions.includes(c));
            if (hits.length) peopleScore[slug] = hits.reduce((n, c) => n + score[c], 0);
        });
        const people = Object.keys(peopleScore).sort((a, b) => peopleScore[b] - peopleScore[a]).slice(0, 5);

        $('[data-ns-conditions]').innerHTML = conditions.map((c) =>
            `<a class="result-pill" href="/conditions/${esc(c)}/">${esc(data.conditions[c].name)} <span aria-hidden="true">→</span></a>`
        ).join('');

        $('[data-ns-services]').innerHTML = serviceKeys.slice(0, 4).map((s) => {
            const svc = data.services[s];
            const badge = svc.new ? '<span class="rounded-full bg-leaf-lime px-2 py-0.5 text-[10px] font-bold uppercase tracking-wider text-prairie-deep">New</span>' : '<span aria-hidden="true">→</span>';
            return `<a class="result-card" href="${esc(svc.url)}">${esc(svc.name)} ${badge}</a>`;
        }).join('');

        $('[data-ns-people]').innerHTML = people.map((slug) => {
            const p = data.team[slug];
            const creds = p.creds ? `<span class="-ml-2 text-cream-100/60">, ${esc(p.creds)}</span>` : '';
            return `<button type="button" class="result-pill !py-1 !pl-1" data-person="${esc(slug)}"><img src="${esc(p.photo)}" alt="" class="h-8 w-8 rounded-full object-cover" style="object-position:${esc(p.pos)}"><span>${esc(p.name)}</span>${creds}</button>`;
        }).join('');
    };

    const toggleSymptom = (key, force) => {
        const on = force ?? !selected.has(key);
        on ? selected.add(key) : selected.delete(key);
        $(`[data-symptom="${key}"]`)?.setAttribute('aria-pressed', String(on));
    };

    chips.forEach((chip) => chip.addEventListener('click', () => { toggleSymptom(chip.dataset.symptom); renderNextStep(); }));
    clearBtn?.addEventListener('click', () => { [...selected].forEach((k) => toggleSymptom(k, false)); renderNextStep(); });
    $$('[data-preselect]').forEach((link) => link.addEventListener('click', () => {
        toggleSymptom(link.dataset.preselect, true);
        renderNextStep();
    }));

    /* ---------- Service page section switcher: highlight the section in view ---------- */
    const tabLinks = $$('.tab-link[href^="#"]');
    if (tabLinks.length && 'IntersectionObserver' in window) {
        const byId = new Map(tabLinks.map((a) => [a.getAttribute('href').slice(1), a]));
        const spy = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;
                tabLinks.forEach((a) => a.classList.remove('is-active'));
                byId.get(entry.target.id)?.classList.add('is-active');
            });
        }, { rootMargin: '-45% 0px -50% 0px' });
        byId.forEach((_, id) => { const el = document.getElementById(id); if (el) spy.observe(el); });
    }

    /* ---------- Insurance plan finder ---------- */
    const planPicker = $('[data-plan-picker]');
    if (planPicker) {
        const planButtons = $$('[data-plan]', planPicker);
        const summary = $('[data-plan-summary]');
        const cards = $$('[data-plan-results] > li');
        const setPlan = (plan) => {
            planButtons.forEach((b) => b.setAttribute('aria-pressed', String(b.dataset.plan === plan)));
            let inNet = 0; let soon = 0;
            cards.forEach((li) => {
                const accepts = li.dataset.accepts.split(' ').includes(plan);
                const coming = li.dataset.soon.split(' ').includes(plan);
                const show = !plan || accepts || coming;
                li.classList.toggle('hidden', !show);
                $('[data-soon-badge]', li).classList.toggle('hidden', !(plan && coming && !accepts));
                $('[data-soon-badge]', li).classList.toggle('inline-block', !!(plan && coming && !accepts));
                if (plan && accepts) inNet++;
                if (plan && coming && !accepts) soon++;
            });
            if (!plan) { summary.textContent = 'Select a plan above to filter the providers below.'; return; }
            const name = planButtons.find((b) => b.dataset.plan === plan).textContent.trim().replace(/\s+/g, ' ');
            summary.textContent = inNet
                ? `${inNet} provider${inNet === 1 ? '' : 's'} in network with ${name}${soon ? ` · ${soon} coming soon` : ''}. Tap anyone to learn more.`
                : `No providers are in network with ${name} yet${soon ? ` — ${soon} coming soon` : ''}. Call us and we’ll help.`;
        };
        planButtons.forEach((b) => b.addEventListener('click', () => setPlan(b.getAttribute('aria-pressed') === 'true' ? '' : b.dataset.plan)));
    }

    /* ---------- Team directory filters ---------- */
    const teamCards = $$('[data-person-card]');
    if (teamCards.length) {
        const laneBtns = $$('[data-team-lane]');
        const condSel = $('[data-team-condition]');
        const tele = $('[data-team-telehealth]');
        const summary = $('[data-team-summary]');
        let lane = 'all';
        const applyTeam = () => {
            let shown = 0;
            teamCards.forEach((li) => {
                const ok = (lane === 'all' || li.dataset.lane === lane)
                    && (!condSel.value || li.dataset.conditions.split(' ').includes(condSel.value))
                    && (!tele.checked || li.dataset.telehealth === '1');
                li.classList.toggle('hidden', !ok);
                if (ok) shown++;
            });
            $$('[data-team-group]').forEach((g) => {
                const n = $$('[data-person-card]:not(.hidden)', g).length;
                g.classList.toggle('hidden', n === 0);
                $('[data-team-count]', g).textContent = n;
            });
            $('[data-team-empty]').classList.toggle('hidden', shown > 0);
            const filtered = lane !== 'all' || condSel.value || tele.checked;
            summary.textContent = filtered ? `Showing ${shown} of ${teamCards.length} team members.` : '';
        };
        laneBtns.forEach((b) => b.addEventListener('click', () => {
            lane = b.dataset.teamLane;
            laneBtns.forEach((x) => { x.classList.toggle('is-active', x === b); x.setAttribute('aria-pressed', String(x === b)); });
            applyTeam();
        }));
        condSel.addEventListener('change', applyTeam);
        tele.addEventListener('change', applyTeam);
        $('[data-team-reset]').addEventListener('click', () => { condSel.value = ''; tele.checked = false; laneBtns[0].click(); });
    }

    /* ---------- Self-check quiz (TMS page): points to a conversation, never a diagnosis ---------- */
    $$('[data-quiz]').forEach((form) => {
        const result = $('[data-quiz-result]', form);
        const count = $('[data-quiz-count]', form);
        const total = new Set($$('input[type=radio]', form).map((r) => r.name)).size;

        const answers = () => Object.fromEntries($$('input:checked', form).map((r) => [r.dataset.key, r.value]));

        form.addEventListener('change', () => { count.textContent = ''; });

        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const a = answers();
            const answered = Object.keys(a).length;
            if (answered < total) {
                count.textContent = `${total - answered} question${total - answered === 1 ? '' : 's'} left — answer them all for your result.`;
                return;
            }
            // Safety comes first: implants or seizures need a provider conversation before anything else.
            let key = 'explore';
            if (a.safety !== 'no') key = 'safety';
            else if (a.depression === 'yes' && (a.tried_meds === 'yes' || a.side_effects === 'yes')) key = 'good';
            $$('[data-result]', result).forEach((el) => el.classList.toggle('hidden', el.dataset.result !== key));
            result.classList.remove('hidden');
            result.focus({ preventScroll: true });
            result.scrollIntoView({ behavior: 'smooth', block: 'center' });
        });

        $('[data-quiz-reset]', form)?.addEventListener('click', () => {
            form.reset();
            result.classList.add('hidden');
            count.textContent = '';
            form.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    });

    /* ---------- Review slider ---------- */
    $$('[data-slider]').forEach((slider) => {
        const track = $('[data-slider-track]', slider);
        const slides = [...track.children];
        const prev = $('[data-slider-prev]', slider);
        const next = $('[data-slider-next]', slider);
        const dotsWrap = $('[data-slider-dots]', slider);
        const step = () => slides[0].getBoundingClientRect().width + parseFloat(getComputedStyle(track).columnGap || 0);
        const dots = slides.map(() => {
            const d = document.createElement('span');
            d.className = 'h-1.5 w-1.5 rounded-full bg-cream-300 transition-all';
            dotsWrap.appendChild(d);
            return d;
        });
        const update = () => {
            const max = track.scrollWidth - track.clientWidth;
            prev.disabled = track.scrollLeft <= 2;
            next.disabled = track.scrollLeft >= max - 2;
            const active = Math.round(track.scrollLeft / step());
            dots.forEach((d, i) => { d.classList.toggle('bg-ink', i === active); d.classList.toggle('w-5', i === active); });
        };
        prev.addEventListener('click', () => track.scrollBy({ left: -step(), behavior: 'smooth' }));
        next.addEventListener('click', () => track.scrollBy({ left: step(), behavior: 'smooth' }));
        track.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowRight') { e.preventDefault(); next.click(); }
            if (e.key === 'ArrowLeft') { e.preventDefault(); prev.click(); }
        });
        track.addEventListener('scroll', () => requestAnimationFrame(update), { passive: true });
        window.addEventListener('resize', update);
        update();
    });

    /* ---------- Provider dialog ---------- */
    const dialog = $('#person-dialog');
    const openPerson = (slug) => {
        const p = data.team[slug];
        if (!p || !dialog) return;
        const photo = $('[data-pd-photo]', dialog);
        photo.src = p.photo;
        photo.alt = `${p.name}${p.creds ? ', ' + p.creds : ''}`;
        photo.style.objectPosition = p.pos;
        $('[data-pd-name]', dialog).textContent = p.name + (p.creds ? `, ${p.creds}` : '');
        $('[data-pd-role]', dialog).textContent = p.role;
        const format = $('[data-pd-format]', dialog);
        format.textContent = p.format;
        format.classList.toggle('hidden', !p.format);
        $('[data-pd-bio]', dialog).textContent = p.bio || `${p.name.split(' ')[0]} is part of the ANew family. Read the full bio to learn more.`;
        $('[data-pd-focus]', dialog).innerHTML = p.focus.map((f) => `<span class="tag">${esc(f)}</span>`).join('');
        $('[data-pd-focus-wrap]', dialog).classList.toggle('hidden', !p.focus.length);
        $('[data-pd-conditions]', dialog).innerHTML = p.conditions.map((c) =>
            `<a class="tag" href="/conditions/${esc(c)}/">${esc(data.conditions[c]?.name)}</a>`).join('');
        $('[data-pd-conditions-wrap]', dialog).classList.toggle('hidden', !p.conditions.length);
        $('[data-pd-schedule]', dialog).classList.toggle('hidden', p.lane === 'office');
        const bioLink = $('[data-pd-bio-link]', dialog);
        bioLink.href = p.bioUrl;
        bioLink.classList.toggle('hidden', location.pathname.startsWith('/meet-our-team'));
        const ins = [...p.insurance, ...p.insuranceSoon.map((n) => `${n} (coming soon)`)];
        $('[data-pd-insurance-title]', dialog).textContent = !ins.length && p.selfPay ? 'Rates' : 'Insurance accepted';
        $('[data-pd-insurance]', dialog).textContent = ins.length ? ins.join(' · ')
            : p.selfPay ? `Self-pay rate: ${p.selfPay}. Call our office with any questions about payment.`
            : 'Call our office to ask about coverage and self-pay rates.';
        $('[data-pd-insurance-wrap]', dialog).classList.toggle('hidden', p.lane === 'office');
        dialog.showModal();
    };

    document.addEventListener('click', (e) => {
        const trigger = e.target.closest('[data-person]');
        if (trigger) openPerson(trigger.dataset.person);
    });
    $('[data-pd-close]')?.addEventListener('click', () => dialog.close());

    // Deep links like /meet-our-team/#wes-smothermon open that person's bio.
    const openFromHash = () => {
        const hashSlug = decodeURIComponent(location.hash.slice(1));
        if (hashSlug && data.team?.[hashSlug] && document.getElementById(hashSlug)?.matches('[data-person-card]')) {
            setTimeout(() => openPerson(hashSlug), 400);
        }
    };
    openFromHash();
    window.addEventListener('hashchange', openFromHash);
    dialog?.addEventListener('click', (e) => { if (e.target === dialog) dialog.close(); });
})();
