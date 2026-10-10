<?php
require __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/icons.php';

include __DIR__ . '/includes/header.php';
?>

<main id="main">

    <!-- ============ HERO ============ -->
    <section class="px-3 pt-2 sm:px-4" aria-labelledby="hero-title">
        <div class="relative isolate flex min-h-[88svh] overflow-hidden rounded-4xl bg-prairie-deep text-white sm:min-h-[86vh]">
            <?php if ($hero_video): ?>
                <video class="absolute inset-0 -z-10 h-full w-full object-cover" autoplay muted loop playsinline poster="<?= e($hero_image) ?>">
                    <source src="<?= e($hero_video) ?>" type="video/mp4">
                </video>
            <?php else: ?>
                <img src="<?= e($hero_image) ?>" alt="A young woman walking across a field beside sunflowers at sunset" class="hero-drift absolute inset-0 -z-10 h-full w-full object-cover object-[35%_50%]" fetchpriority="high">
            <?php endif; ?>
            <div class="absolute inset-0 -z-10 bg-gradient-to-t from-[#16201A]/85 via-[#16201A]/30 to-[#16201A]/5"></div>
            <div class="absolute inset-0 -z-10 bg-gradient-to-r from-[#16201A]/50 via-transparent to-transparent"></div>
            <div class="absolute inset-0 -z-10 bg-[#16201A]/25 sm:hidden"></div>

            <div class="mx-auto flex w-full max-w-site flex-col justify-end px-5 pb-10 pt-28 sm:px-10 sm:pb-16">
                <div class="max-w-3xl reveal">
                    <p class="eyebrow text-wheat">Wichita, Kansas</p>
                    <h1 id="hero-title" class="mt-5 font-serif text-[2.65rem] font-light leading-[1.04] tracking-tight sm:text-6xl lg:text-[5.2rem]">
                        We exist because <br class="hidden sm:block"><em class="font-normal italic text-wheat">people matter.</em>
                    </h1>
                    <p class="mt-6 max-w-xl text-base leading-relaxed text-cream-100/90 sm:text-lg">
                        Full-service mental health therapy and medication management for children, families, teens and adults.
                    </p>
                    <div class="mt-9 flex flex-col gap-3 sm:flex-row">
                        <a href="<?= e($site['schedule_url']) ?>" target="_blank" rel="noopener" class="btn-light">Schedule an Appointment</a>
                        <a href="#next-step" class="btn-glass">
                            Find your next step
                            <span aria-hidden="true">↓</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust strip -->
    <section class="mx-auto max-w-site px-5 sm:px-8" aria-label="At a glance">
        <ul class="grid grid-cols-2 gap-x-6 gap-y-3 py-8 sm:flex sm:flex-wrap sm:justify-center sm:gap-x-8 text-sm font-medium text-ink-soft">
            <?php foreach (['Children, teens & adults', 'In-person & telehealth', 'Most major insurance, including KanCare', 'Therapy and medication, together'] as $item): ?>
                <li class="flex items-center gap-2.5">
                    <span class="h-1.5 w-1.5 rounded-full bg-leaf-lime" aria-hidden="true"></span>
                    <?= e($item) ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>

    <!-- ============ ABOUT / WHO WE ARE ============ -->
    <section id="about" class="mx-auto max-w-site scroll-mt-28 px-5 py-14 sm:px-8 lg:py-20">
        <div class="grid items-center gap-14 lg:grid-cols-12 lg:gap-20">
            <div class="lg:col-span-6">
                <p class="eyebrow text-leaf-deep reveal">Who we are</p>
                <h2 class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-5xl">
                    A Wichita practice with a team that <em class="italic text-clay">knows your name.</em>
                </h2>
                <div class="reveal mt-7 max-w-lg space-y-5 text-[17px] leading-relaxed text-ink-soft">
                    <p>ANew is a full-service mental health practice that provides care with a team approach. Our therapists, medication providers and support staff walk alongside every individual to build a personalized plan that promotes overall mind and body health. Because when we work together, <em>you</em> benefit most.</p>
                    <p>It’s a family practice, too. ANew was started by Wes and Cari Smothermon, a marriage and family therapist and a registered nurse, who wanted Wichita to have a practice that felt less like a clinic and more like being welcomed home.</p>
                </div>
                <ul class="reveal mt-9 grid max-w-lg grid-cols-3 gap-4 border-t border-cream-200 pt-6">
                    <?php foreach ([
                        ['Therapy', 'Individual, couples & family', 'therapy'],
                        ['Medication', 'Evaluation & ongoing care', 'medication'],
                        ['Assessment', 'ADHD & mental health', 'adhd-assessment'],
                    ] as [$title, $text, $key]): ?>
                        <li>
                            <a href="<?= e($services[$key]['url']) ?>" class="group block">
                                <span class="font-serif text-lg leading-tight transition group-hover:text-clay sm:text-xl"><?= e($title) ?></span>
                                <span class="mt-1 block text-[13px] leading-snug text-ink-mute"><?= e($text) ?></span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <a href="/about/" class="reveal mt-8 inline-flex items-center gap-1.5 text-sm font-semibold text-ink underline-offset-4 hover:underline">Read our story <span aria-hidden="true">→</span></a>
            </div>
            <figure class="reveal lg:col-span-6" style="--d: 120ms">
                <img src="/assets/images/office/front-desk.jpg" alt="Two smiling ANew team members at the front desk of the Wichita office" class="aspect-[5/4] w-full rounded-4xl object-cover object-[50%_40%] lg:aspect-[1/1]" loading="lazy">
            </figure>
        </div>
    </section>

    <!-- ============ FIND YOUR NEXT STEP ============ -->
    <section id="next-step" class="scroll-mt-24 px-3 sm:px-4" aria-labelledby="next-step-title">
        <div class="rounded-4xl bg-cream-100">
            <div class="mx-auto max-w-site px-5 py-14 sm:px-8 lg:py-20">
                <div class="mx-auto max-w-3xl text-center">
                    <p class="eyebrow text-leaf-deep reveal">Find your next step</p>
                    <h2 id="next-step-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-5xl">
                        You don’t need a diagnosis to start.
                    </h2>
                    <p class="reveal mt-5 text-[17px] leading-relaxed text-ink-soft">Choose anything that sounds familiar, and we’ll show you the care that may help and the people who do this work.</p>
                </div>

                <div class="mt-10 grid gap-6 lg:grid-cols-12">
                    <!-- Symptoms -->
                    <div class="reveal rounded-4xl bg-white p-6 sm:p-8 lg:col-span-5">
                        <div class="flex items-center justify-between">
                            <h3 class="text-sm font-semibold uppercase tracking-[0.16em] text-ink-mute">Lately I’ve been…</h3>
                            <button type="button" class="hidden text-sm font-medium text-ink-soft underline underline-offset-4 hover:text-ink" data-ns-clear>Clear</button>
                        </div>
                        <div class="mt-5 flex flex-wrap gap-2" role="group" aria-label="What you’re noticing">
                            <?php foreach ($symptoms as $key => $symptom): ?>
                                <button type="button" class="chip" aria-pressed="false" data-symptom="<?= e($key) ?>">
                                    <span class="chip-check" aria-hidden="true">
                                        <svg viewBox="0 0 16 16" class="h-3 w-3" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="m3.5 8.5 3 3 6-7"/></svg>
                                    </span>
                                    <?= e($symptom['label']) ?>
                                </button>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Results -->
                    <div class="reveal lg:col-span-7" style="--d: 100ms">
                        <div class="flex h-full min-h-[22rem] flex-col rounded-4xl bg-prairie-deep p-6 text-cream-100 sm:p-10" aria-live="polite" data-ns-results>
                            <!-- Empty state -->
                            <div class="flex flex-1 flex-col items-start justify-center" data-ns-empty>
                                <p class="max-w-md font-serif text-3xl font-light leading-snug text-white sm:text-4xl">Every path here starts with a conversation.</p>
                                <p class="mt-4 max-w-sm text-cream-100/70">Pick one or more experiences and your next step will take shape here.</p>
                            </div>

                            <!-- Filled state (rendered by main.js) -->
                            <div class="hidden flex-1 flex-col gap-7" data-ns-filled>
                                <div>
                                    <h3 class="text-xs font-semibold uppercase tracking-[0.18em] text-wheat">This may be connected to</h3>
                                    <div class="mt-3 flex flex-wrap gap-2" data-ns-conditions></div>
                                </div>
                                <div>
                                    <h3 class="text-xs font-semibold uppercase tracking-[0.18em] text-wheat">Care that may help</h3>
                                    <div class="mt-3 grid gap-2 sm:grid-cols-2" data-ns-services></div>
                                </div>
                                <div>
                                    <h3 class="text-xs font-semibold uppercase tracking-[0.18em] text-wheat">People on our team who do this work</h3>
                                    <div class="mt-3 flex flex-wrap gap-2" data-ns-people></div>
                                </div>
                                <div class="mt-auto flex flex-col gap-3 border-t border-white/10 pt-6 sm:flex-row sm:items-center sm:justify-between">
                                    <a href="<?= e($site['schedule_url']) ?>" target="_blank" rel="noopener" class="btn-light">Schedule an Appointment</a>
                                    <p class="text-xs leading-relaxed text-cream-100/60 sm:max-w-[16rem]">Mention what you selected here — our team will help match you with the right provider.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="mx-auto mt-6 max-w-2xl text-center text-xs leading-relaxed text-ink-mute">This is a guide to help you explore, not a diagnosis. Only a conversation with a licensed provider can tell you what’s really going on.</p>
            </div>
        </div>
    </section>

    <!-- ============ CONDITIONS ============ -->
    <section id="conditions" class="mx-auto max-w-site scroll-mt-24 px-5 py-14 sm:px-8 lg:py-20" aria-labelledby="conditions-title">
        <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
            <div class="max-w-2xl">
                <p class="eyebrow text-leaf-deep reveal">Conditions we treat</p>
                <h2 id="conditions-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-5xl">Does any of this <em class="italic text-clay">sound like you?</em></h2>
            </div>
            <p class="reveal max-w-sm text-[17px] leading-relaxed text-ink-soft">What you’re experiencing, how we treat it, and who on our team can help.</p>
        </div>

        <div class="mt-12 grid grid-cols-2 gap-x-4 gap-y-8 sm:gap-x-5 sm:gap-y-10 lg:grid-cols-3 xl:grid-cols-4">
            <?php $i = 0; foreach ($conditions as $slug => $condition): ?>
                <a href="/conditions/<?= e($slug) ?>/" class="reveal group block" style="--d: <?= ($i++ % 4) * 60 ?>ms">
                    <span class="relative block overflow-hidden rounded-3xl bg-cream-200">
                        <img src="<?= e($condition['image']) ?>" alt="" class="aspect-[4/3] w-full object-cover transition duration-700 group-hover:scale-[1.04]" loading="lazy">
                        <?php if (!empty($condition['tms'])): ?>
                            <span class="absolute left-3 top-3 rounded-full bg-white/90 px-2.5 py-1 text-[10px] font-bold uppercase tracking-wider text-leaf-deep backdrop-blur">TMS available</span>
                        <?php endif; ?>
                    </span>
                    <span class="mt-4 flex items-baseline justify-between gap-3 sm:mt-5">
                        <span class="font-serif text-lg leading-tight transition group-hover:text-clay sm:text-2xl"><?= e($condition['name']) ?></span>
                        <span aria-hidden="true" class="hidden text-ink-mute transition group-hover:translate-x-1 group-hover:text-ink sm:inline">→</span>
                    </span>
                    <span class="mt-2 hidden text-[15px] leading-relaxed text-ink-soft sm:block"><?= e($condition['blurb']) ?></span>
                </a>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ============ SERVICES ============ -->
    <section id="services" class="scroll-mt-24 bg-white" aria-labelledby="services-title">
        <div class="mx-auto grid max-w-site gap-14 px-5 py-14 sm:px-8 lg:grid-cols-12 lg:py-20">
            <div class="lg:col-span-5">
                <div class="lg:sticky lg:top-32">
                    <p class="eyebrow text-leaf-deep reveal">How we help</p>
                    <h2 id="services-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-5xl">Care that fits the person, <em class="italic text-clay">not the other way around.</em></h2>
                    <p class="reveal mt-6 max-w-md text-[17px] leading-relaxed text-ink-soft">Our therapists and providers work side by side, so your plan can combine whatever you need — and change as you do.</p>
                    <img src="/assets/images/office/therapy-session.jpg" alt="An ANew therapist in conversation with a client in a sunlit therapy room" class="reveal mt-10 hidden aspect-[4/3] w-full rounded-4xl object-cover lg:block" loading="lazy">
                </div>
            </div>
            <ol class="lg:col-span-7">
                <?php $n = 0; foreach ($services as $key => $service): $n++; ?>
                    <li class="reveal border-t border-cream-200 first:border-t-0">
                        <a href="<?= e($service['url']) ?>" class="group grid grid-cols-[2.5rem_1fr_auto] items-start gap-4 py-7 sm:grid-cols-[3.5rem_1fr_auto]">
                            <span class="pt-2 font-serif text-base text-ink-mute">0<?= $n ?></span>
                            <span>
                                <span class="flex flex-wrap items-center gap-3">
                                    <span class="font-serif text-2xl leading-tight transition group-hover:text-clay sm:text-3xl"><?= e($service['name']) ?></span>
                                    <?php if (!empty($service['new'])): ?>
                                        <span class="rounded-full bg-leaf-soft px-2.5 py-1 text-[10px] font-bold uppercase tracking-wider text-leaf-deep">New</span>
                                    <?php endif; ?>
                                </span>
                                <span class="mt-2 block max-w-lg text-[15px] leading-relaxed text-ink-soft"><?= e($service['blurb']) ?></span>
                            </span>
                            <span class="mt-1 inline-flex h-10 w-10 items-center justify-center rounded-full border border-cream-300 transition group-hover:border-ink group-hover:bg-ink group-hover:text-white" aria-hidden="true">→</span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ol>
        </div>
    </section>

    <!-- ============ TMS SPOTLIGHT ============ -->
    <section id="tms" class="mx-auto max-w-site scroll-mt-24 px-5 py-14 sm:px-8 lg:py-20" aria-labelledby="tms-title">
        <div class="grid overflow-hidden rounded-4xl bg-cream-100 lg:grid-cols-2">
            <div class="relative min-h-[320px]">
                <img src="/assets/images/people/prairie-walk.jpg" alt="A woman walking through tall prairie grass toward the evening sun" class="absolute inset-0 h-full w-full object-cover object-[50%_35%]" loading="lazy">
            </div>
            <div class="p-8 sm:p-12 lg:p-16">
                <p class="eyebrow text-leaf-deep reveal">New · TMS Therapy</p>
                <h2 id="tms-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-[2.6rem]">When depression hasn’t lifted, there may be <em class="italic text-clay">another path forward.</em></h2>
                <p class="reveal mt-6 text-[17px] leading-relaxed text-ink-soft">TMS is a non-invasive, FDA-cleared treatment that uses gentle magnetic pulses to stimulate areas of the brain involved in mood — often considered when medication and therapy haven’t brought enough relief.</p>
                <ul class="reveal mt-7 grid gap-2.5 text-[15px] text-ink-soft sm:grid-cols-2">
                    <?php foreach (['No medication or anesthesia', 'Drive yourself to and from sessions', 'Delivered in our Wichita office', 'Works alongside your current care'] as $point): ?>
                        <li class="flex items-center gap-2.5">
                            <span class="h-1.5 w-1.5 shrink-0 rounded-full bg-leaf" aria-hidden="true"></span>
                            <?= e($point) ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <div class="reveal mt-9 flex flex-col gap-3 sm:flex-row">
                    <a href="<?= e($services['tms']['url']) ?>#quiz" class="btn-primary">Is TMS right for me?</a>
                    <a href="<?= e($services['tms']['url']) ?>" class="btn-ghost">Learn about TMS</a>
                </div>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/includes/partials/step-inside.php'; ?>

    <?php if ($videos): ?>
    <!-- ============ VIDEOS (renders once videos are added in config) ============ -->
    <section class="mx-auto max-w-site px-5 pb-14 sm:px-8" aria-labelledby="videos-title">
        <p class="eyebrow text-leaf-deep">Watch &amp; learn</p>
        <h2 id="videos-title" class="mt-5 font-serif text-4xl font-light tracking-tight">Hear from our team.</h2>
        <div class="mt-10 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            <?php foreach ($videos as $video): ?>
                <figure>
                    <div class="aspect-video overflow-hidden rounded-3xl bg-cream-200">
                        <iframe class="h-full w-full" src="https://www.youtube-nocookie.com/embed/<?= e($video['youtube_id']) ?>" title="<?= e($video['title']) ?>" loading="lazy" allow="accelerometer; encrypted-media; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <figcaption class="mt-3 font-serif text-lg"><?= e($video['title']) ?></figcaption>
                </figure>
            <?php endforeach; ?>
        </div>
    </section>
    <?php endif; ?>

    <?php if ($reviews): ?>
    <!-- ============ REVIEWS (genuine reviews only) ============ -->
    <section class="bg-cream-100 py-14" aria-labelledby="reviews-title">
        <div class="mx-auto max-w-site px-5 sm:px-8">
            <p class="eyebrow text-leaf-deep">In their words</p>
            <h2 id="reviews-title" class="mt-5 font-serif text-4xl font-light tracking-tight">What our clients say.</h2>
            <div class="mt-10 grid gap-6 md:grid-cols-3">
                <?php foreach ($reviews as $review): ?>
                    <figure class="rounded-3xl bg-white p-8">
                        <blockquote class="font-serif text-xl leading-snug">“<?= e($review['quote']) ?>”</blockquote>
                        <figcaption class="mt-5 text-sm text-ink-soft"><?= e($review['author']) ?> · <?= e($review['source']) ?></figcaption>
                    </figure>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- ============ INSURANCE ============ -->
    <section id="insurance" class="mt-14 scroll-mt-24 bg-white lg:mt-20" aria-labelledby="insurance-title">
        <div class="mx-auto grid max-w-site gap-12 px-5 py-14 sm:px-8 lg:grid-cols-12 lg:gap-20 lg:py-20">
            <div class="lg:col-span-5">
                <p class="eyebrow text-leaf-deep reveal">Insurance &amp; payment</p>
                <h2 id="insurance-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-5xl">Care that’s <em class="italic text-clay">within reach.</em></h2>
                <p class="reveal mt-6 text-[17px] leading-relaxed text-ink-soft">ANew accepts many major insurance plans, including KanCare. Coverage can vary by provider — give us a call and we’ll gladly check yours.</p>
                <div class="reveal mt-8 flex flex-col gap-3 sm:flex-row">
                    <a href="/insurance/" class="btn-primary">Insurance &amp; payment</a>
                    <a href="<?= e($site['phone_href']) ?>" class="btn-ghost">Call <?= e($site['phone']) ?></a>
                </div>
            </div>
            <div class="lg:col-span-7 lg:pt-12">
                <ul class="reveal flex flex-wrap gap-2.5">
                    <?php foreach ($insurances as $insurer): ?>
                        <li class="rounded-full bg-cream-100 px-4 py-2.5 text-[15px] font-medium text-ink-soft"><?= e($insurer) ?></li>
                    <?php endforeach; ?>
                </ul>
                <p class="reveal mt-8 text-[15px] leading-relaxed text-ink-soft">Paying out of pocket? We accept cash, all major credit cards, CareCredit, HSA and FSA. <a href="<?= e($site['carecredit_url']) ?>" target="_blank" rel="noopener" class="font-semibold text-ink underline underline-offset-4">Apply for CareCredit</a></p>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/includes/partials/visit-cta.php'; ?>

</main>

<?php include __DIR__ . '/includes/partials/person-dialog.php'; ?>

<?php include __DIR__ . '/includes/footer.php'; ?>
