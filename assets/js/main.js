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
        $('[data-pd-bio-link]', dialog).href = p.bioUrl;
        dialog.showModal();
    };

    document.addEventListener('click', (e) => {
        const trigger = e.target.closest('[data-person]');
        if (trigger) openPerson(trigger.dataset.person);
    });
    $('[data-pd-close]')?.addEventListener('click', () => dialog.close());
    dialog?.addEventListener('click', (e) => { if (e.target === dialog) dialog.close(); });
})();
