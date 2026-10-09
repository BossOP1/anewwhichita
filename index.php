<?php
require __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/icons.php';

$tones = [
    'sky'     => ['bg' => 'bg-sky-soft',     'ink' => 'text-sky-deep',     'dot' => 'bg-sky'],
    'clay'    => ['bg' => 'bg-clay-soft',    'ink' => 'text-clay-deep',    'dot' => 'bg-clay'],
    'leaf'    => ['bg' => 'bg-leaf-soft',    'ink' => 'text-leaf-deep',    'dot' => 'bg-leaf'],
    'prairie' => ['bg' => 'bg-prairie-soft', 'ink' => 'text-prairie-deep', 'dot' => 'bg-prairie'],
    'sand'    => ['bg' => 'bg-wheat-soft',   'ink' => 'text-clay-deep',    'dot' => 'bg-wheat'],
];

$founders = ['wes-smothermon', 'cari-smothermon', 'judy-smothermon'];

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

            <div class="mx-auto flex w-full max-w-site flex-col justify-end px-5 pb-8 pt-28 sm:px-10 sm:pb-12 lg:flex-row lg:items-end lg:justify-between lg:gap-12">
                <div class="max-w-3xl reveal">
                    <p class="eyebrow text-wheat">Welcome to ANew · Wichita, Kansas</p>
                    <h1 id="hero-title" class="mt-5 font-serif text-[2.65rem] font-light leading-[1.04] tracking-tight sm:text-6xl lg:text-[5.2rem]">
                        We exist because <br class="hidden sm:block"><em class="font-normal italic text-wheat">people matter.</em>
                    </h1>
                    <p class="mt-6 max-w-xl text-base leading-relaxed text-cream-100/90 sm:text-lg">
                        Full-service mental health therapy and medication management — a whole team walking alongside children and their families, adolescents, and adults.
                    </p>
                    <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                        <a href="<?= e($site['schedule_url']) ?>" target="_blank" rel="noopener" class="btn-light">Schedule an Appointment</a>
                        <a href="#next-step" class="btn-glass">
                            Find your next step
                            <span aria-hidden="true">↓</span>
                        </a>
                    </div>
                </div>

                <aside class="reveal mt-10 w-full max-w-sm rounded-3xl border border-white/20 bg-white/10 p-5 backdrop-blur-md lg:mt-0" style="--d: 150ms" aria-label="Quick start">
                    <p class="font-serif text-xl leading-snug">Not sure what kind of help you need?</p>
                    <p class="mt-1.5 text-sm text-cream-100/80">That’s okay. Start with what you’re noticing.</p>
                    <div class="mt-4 flex flex-wrap gap-2">
                        <?php foreach (['worry', 'low-mood', 'sleep', 'child'] as $key): ?>
                            <a href="#next-step" data-preselect="<?= e($key) ?>" class="rounded-full border border-white/25 bg-white/10 px-3.5 py-1.5 text-[13px] transition hover:bg-white hover:text-ink"><?= e($symptoms[$key]['label']) ?></a>
                        <?php endforeach; ?>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <!-- Trust strip -->
    <section class="mx-auto max-w-site px-5 sm:px-8" aria-label="At a glance">
        <ul class="grid grid-cols-2 gap-x-6 gap-y-5 border-b border-cream-200 py-8 text-sm text-ink-soft lg:grid-cols-4">
            <?php foreach ([
                ['Children, teens & adults', 'Care for every stage of life'],
                ['In-person & telehealth', 'From our Wichita office or home'],
                ['Most major insurance', 'Including KanCare plans'],
                ['One coordinated team', 'Therapy and medication together'],
            ] as [$title, $sub]): ?>
                <li class="flex items-start gap-3">
                    <span class="mt-1.5 h-2 w-2 shrink-0 rounded-full bg-leaf-lime"></span>
                    <span><strong class="block font-semibold text-ink"><?= e($title) ?></strong><?= e($sub) ?></span>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>

    <!-- ============ ABOUT / WHO WE ARE ============ -->
    <section id="about" class="mx-auto max-w-site scroll-mt-28 px-5 py-14 sm:px-8 lg:py-20">
        <div class="grid gap-14 lg:grid-cols-12 lg:gap-16">
            <div class="lg:col-span-7">
                <p class="eyebrow text-leaf-deep reveal">Who we are</p>
                <h2 class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-5xl lg:text-[3.6rem]">
                    A full-service mental health practice in Wichita — with a team that <em class="italic text-clay">knows your name.</em>
                </h2>
                <div class="reveal mt-8 grid gap-6 text-[17px] leading-relaxed text-ink-soft sm:grid-cols-2">
                    <p>ANew is a mental health practice that provides care with a team approach. Our providers and therapists strive to walk alongside every individual and formulate a personalized plan that promotes overall mind and body health.</p>
                    <p>Our multidisciplinary team — clinicians and support staff providing therapy, medication management and mental health assessment — works closely together. Because when we work together, <em>you</em> benefit most.</p>
                </div>

                <div class="mt-10 grid gap-3 sm:grid-cols-3">
                    <?php foreach ([
                        ['Therapy', 'Individual, couples, family & play therapy', 'therapy', 'bg-sky-soft text-sky-deep'],
                        ['Medication', 'Psychiatric evaluation & ongoing care', 'medication', 'bg-leaf-soft text-leaf-deep'],
                        ['Assessment', 'ADHD and mental health assessment', 'adhd-assessment', 'bg-wheat-soft text-clay-deep'],
                    ] as $i => [$title, $text, $key, $tone]): ?>
                        <a href="<?= e($services[$key]['url']) ?>" class="reveal group rounded-3xl border border-cream-200 bg-white p-6 transition hover:-translate-y-1 hover:shadow-xl hover:shadow-ink/5" style="--d: <?= $i * 80 ?>ms">
                            <span class="inline-flex h-10 w-10 items-center justify-center rounded-full font-serif text-lg <?= $tone ?>"><?= $i + 1 ?></span>
                            <h3 class="mt-5 font-serif text-2xl"><?= e($title) ?></h3>
                            <p class="mt-1.5 text-sm text-ink-soft"><?= e($text) ?></p>
                            <span class="mt-5 inline-flex items-center gap-1 text-sm font-semibold text-ink">Learn more <span aria-hidden="true" class="transition group-hover:translate-x-1">→</span></span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <figure class="reveal relative lg:col-span-5" style="--d: 120ms">
                <div class="overflow-hidden rounded-4xl">
                    <img src="/assets/images/office/front-desk.jpg" alt="Two smiling ANew team members at the front desk of the Wichita office" class="aspect-[4/5] w-full object-cover object-[50%_40%]" loading="lazy">
                </div>
                <figcaption class="absolute -bottom-6 left-6 right-6 rounded-3xl border border-cream-200 bg-cream-50/95 p-5 shadow-xl shadow-ink/5 backdrop-blur sm:left-auto sm:right-[-1.5rem] sm:max-w-xs">
                    <p class="font-serif text-lg leading-snug">“Our home-like environment is intentional and is meant to be relaxed in and enjoyed.”</p>
                    <p class="mt-2 text-xs font-semibold uppercase tracking-[0.16em] text-ink-mute">Cari Smothermon, RN, BSN</p>
                </figcaption>
            </figure>
        </div>
    </section>

    <!-- ============ FIND YOUR NEXT STEP ============ -->
    <section id="next-step" class="scroll-mt-24 px-3 sm:px-4" aria-labelledby="next-step-title">
        <div class="relative overflow-hidden rounded-4xl bg-cream-100">
            <div class="mx-auto max-w-site px-5 py-14 sm:px-8 lg:py-20">
                <div class="grid items-end gap-10 lg:grid-cols-12">
                    <div class="lg:col-span-7">
                        <p class="eyebrow text-clay reveal">Find your next step</p>
                        <h2 id="next-step-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-5xl">
                            You don’t need a diagnosis to start. <em class="italic text-prairie">Just tell us what you’re noticing.</em>
                        </h2>
                    </div>
                    <p class="reveal text-[17px] leading-relaxed text-ink-soft lg:col-span-5">
                        Choose anything that sounds familiar. We’ll show you what it may be connected to, the kinds of care that can help, and the people on our team who do this work every day.
                    </p>
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
                        <div class="mt-8 overflow-hidden rounded-3xl">
                            <img src="/assets/images/scenery/flint-hills-path.jpg" alt="A gravel footpath winding through green Flint Hills prairie under a wide sky" class="h-44 w-full object-cover sm:h-52" loading="lazy">
                        </div>
                    </div>

                    <!-- Results -->
                    <div class="reveal lg:col-span-7" style="--d: 100ms">
                        <div class="flex h-full flex-col rounded-4xl bg-prairie-deep p-6 text-cream-100 sm:p-8" aria-live="polite" data-ns-results>
                            <!-- Empty state -->
                            <div class="flex flex-1 flex-col justify-center" data-ns-empty>
                                <p class="font-serif text-3xl font-light leading-snug text-white sm:text-4xl">Every path here starts with a conversation.</p>
                                <p class="mt-4 max-w-md text-cream-100/75">Pick one or more of the experiences on the left and your next step will take shape here.</p>
                                <ol class="mt-10 grid gap-4 text-sm sm:grid-cols-3">
                                    <?php foreach (['Notice what you’re feeling', 'Learn how ANew can help', 'Meet the people who’ll walk with you'] as $i => $step): ?>
                                        <li class="rounded-2xl border border-white/10 p-4"><span class="font-serif text-2xl text-wheat"><?= $i + 1 ?></span><span class="mt-2 block text-cream-100/85"><?= e($step) ?></span></li>
                                    <?php endforeach; ?>
                                </ol>
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
                        <p class="mt-4 px-2 text-xs leading-relaxed text-ink-mute">This is a guide to help you explore, not a diagnosis. Only a conversation with a licensed provider can tell you what’s really going on — and that’s exactly what we’re here for.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ CONDITIONS ============ -->
    <section id="conditions" class="mx-auto max-w-site scroll-mt-24 px-5 py-14 sm:px-8 lg:py-20" aria-labelledby="conditions-title">
        <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
            <div class="max-w-2xl">
                <p class="eyebrow text-sky-deep reveal">Conditions we treat</p>
                <h2 id="conditions-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-5xl">Does any of this sound like you?</h2>
            </div>
            <p class="reveal max-w-md text-[17px] leading-relaxed text-ink-soft">Explore what you’re experiencing, how we treat it, and which members of our team specialize in it.</p>
        </div>

        <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            <?php $i = 0; foreach ($conditions as $slug => $condition): $tone = $tones[$condition['tone']]; ?>
                <a href="/conditions/<?= e($slug) ?>/" class="condition-card reveal group <?= $tone['bg'] ?>" style="--d: <?= ($i++ % 4) * 60 ?>ms">
                    <div class="relative -mx-2 -mt-2 overflow-hidden rounded-[1.35rem]">
                        <img src="<?= e($condition['image']) ?>" alt="" class="aspect-[4/3] w-full object-cover transition duration-700 group-hover:scale-[1.05]" loading="lazy">
                        <span class="absolute bottom-3 left-3 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-white/90 backdrop-blur <?= $tone['ink'] ?>"><?= icon($icons[$slug], 'h-5 w-5') ?></span>
                        <?php if (!empty($condition['tms'])): ?>
                            <span class="absolute right-3 top-3 rounded-full bg-white px-2.5 py-1 text-[10px] font-bold uppercase tracking-wider text-leaf-deep">TMS available</span>
                        <?php endif; ?>
                    </div>
                    <h3 class="mt-6 font-serif text-[1.65rem] leading-tight"><?= e($condition['name']) ?></h3>
                    <p class="mt-2 text-[15px] leading-relaxed text-ink-soft"><?= e($condition['blurb']) ?></p>
                    <div class="condition-reveal">
                        <div class="flex flex-wrap gap-1.5 pt-4">
                            <?php foreach ($condition['services'] as $serviceKey): ?>
                                <span class="rounded-full bg-white/80 px-2.5 py-1 text-xs font-medium text-ink-soft"><?= e($services[$serviceKey]['name']) ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <span class="mt-6 inline-flex items-center gap-1.5 text-sm font-semibold text-ink">
                        Learn about <?= e(in_array($slug, ['adhd', 'ocd'], true) ? $condition['name'] : mb_strtolower($condition['name'])) ?>
                        <span aria-hidden="true" class="transition group-hover:translate-x-1">→</span>
                    </span>
                </a>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ============ SERVICES ============ -->
    <section id="services" class="scroll-mt-24 border-y border-cream-200 bg-white" aria-labelledby="services-title">
        <div class="mx-auto grid max-w-site gap-14 px-5 py-14 sm:px-8 lg:grid-cols-12 lg:py-20">
            <div class="lg:col-span-5">
                <div class="lg:sticky lg:top-32">
                    <p class="eyebrow text-leaf-deep reveal">How we help</p>
                    <h2 id="services-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-5xl">Care that fits the person, <em class="italic text-prairie">not the other way around.</em></h2>
                    <p class="reveal mt-6 max-w-md text-[17px] leading-relaxed text-ink-soft">Our therapists and providers work side by side, so your plan can combine whatever you need — and change as you do.</p>
                    <figure class="reveal mt-10 overflow-hidden rounded-4xl">
                        <img src="/assets/images/office/therapy-session.jpg" alt="An ANew therapist in conversation with a client in a sunlit therapy room" class="aspect-[4/3] w-full object-cover" loading="lazy">
                        <figcaption class="bg-cream-100 px-5 py-3 text-sm text-ink-soft">A session in one of our Wichita therapy rooms.</figcaption>
                    </figure>
                </div>
            </div>
            <ol class="lg:col-span-7">
                <?php $n = 0; foreach ($services as $key => $service): $n++; ?>
                    <li class="reveal border-t border-cream-200 first:border-t-0">
                        <a href="<?= e($service['url']) ?>" class="group grid grid-cols-[3rem_1fr_auto] items-start gap-4 py-7 sm:grid-cols-[4rem_1fr_auto] sm:py-9">
                            <span class="font-serif text-lg text-ink-mute">0<?= $n ?></span>
                            <span>
                                <span class="flex flex-wrap items-center gap-3">
                                    <span class="font-serif text-3xl leading-tight transition group-hover:text-prairie sm:text-[2.4rem]"><?= e($service['name']) ?></span>
                                    <?php if (!empty($service['new'])): ?>
                                        <span class="rounded-full bg-leaf-soft px-2.5 py-1 text-[10px] font-bold uppercase tracking-wider text-leaf-deep">New at ANew</span>
                                    <?php endif; ?>
                                </span>
                                <span class="mt-2 block max-w-lg text-[15.5px] leading-relaxed text-ink-soft"><?= e($service['blurb']) ?></span>
                            </span>
                            <span class="mt-2 inline-flex h-11 w-11 items-center justify-center rounded-full border border-cream-300 transition group-hover:border-ink group-hover:bg-ink group-hover:text-white" aria-hidden="true">→</span>
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
                <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                <span class="absolute left-6 top-6 rounded-full bg-white/90 px-3 py-1.5 text-[11px] font-bold uppercase tracking-[0.14em] text-leaf-deep backdrop-blur">New service</span>
            </div>
            <div class="p-8 sm:p-12 lg:p-16">
                <p class="eyebrow text-leaf-deep reveal">Now offering TMS Therapy</p>
                <h2 id="tms-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-[2.8rem]">When depression hasn’t lifted, there may be another path forward.</h2>
                <p class="reveal mt-6 text-[17px] leading-relaxed text-ink-soft">Transcranial Magnetic Stimulation (TMS) is a non-invasive, FDA-cleared treatment that uses gentle magnetic pulses to stimulate areas of the brain involved in mood. It’s often considered when medication and therapy haven’t brought enough relief — and at ANew, it’s part of the same coordinated care you already know.</p>
                <ul class="reveal mt-8 grid gap-3 text-[15px] sm:grid-cols-2">
                    <?php foreach (['No medication or anesthesia', 'Drive yourself to and from sessions', 'Delivered in our Wichita office', 'Works alongside your current care'] as $point): ?>
                        <li class="flex items-start gap-3">
                            <span class="mt-0.5 inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-leaf text-white">
                                <svg viewBox="0 0 16 16" class="h-3 w-3" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m3.5 8.5 3 3 6-7"/></svg>
                            </span>
                            <?= e($point) ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <div class="reveal mt-10 flex flex-col gap-3 sm:flex-row">
                    <a href="<?= e($services['tms']['url']) ?>#quiz" class="btn-primary">Is TMS right for me? Take the quiz</a>
                    <a href="<?= e($services['tms']['url']) ?>" class="btn-ghost">Learn about TMS</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ OUR STORY ============ -->
    <section id="story" class="px-3 sm:px-4" aria-labelledby="story-title">
        <div class="relative isolate overflow-hidden rounded-4xl bg-prairie-deep text-cream-100">
            <div class="mx-auto grid max-w-site items-center gap-14 px-5 py-14 sm:px-8 lg:grid-cols-12 lg:py-20">
                <div class="lg:col-span-7">
                    <p class="eyebrow text-wheat reveal">Our story</p>
                    <h2 id="story-title" class="reveal mt-5 font-serif text-5xl font-light leading-[1.04] tracking-tight text-white sm:text-6xl lg:text-7xl">Because <em class="italic text-wheat">people</em> matter.</h2>
                    <div class="reveal mt-8 space-y-5 text-[17px] leading-relaxed text-cream-100/85">
                        <!-- TODO: replace with Wes & Cari’s founding story once interviewed. -->
                        <p>ANew was built by Wes and Cari Smothermon — a marriage and family therapist and a registered nurse — who wanted Wichita to have a mental health practice that felt less like a clinic and more like being welcomed home.</p>
                        <p>It’s still a family practice today. The same people who started ANew greet you, care for you, and make sure you never feel like a number. That’s the whole idea.</p>
                    </div>

                    <div class="reveal mt-10 flex items-center gap-5">
                        <div class="flex -space-x-4">
                            <?php foreach ($founders as $slug): $p = $team[$slug]; ?>
                                <img src="/assets/images/team/<?= e($p['photo']) ?>" alt="<?= e($p['name']) ?>" class="h-16 w-16 rounded-full border-[3px] border-prairie-deep object-cover" style="object-position: <?= e($p['pos']) ?>" loading="lazy">
                            <?php endforeach; ?>
                        </div>
                        <p class="text-sm text-cream-100/75"><span class="font-semibold text-white">Wes, Cari &amp; Judy Smothermon</span><br>The family behind ANew</p>
                    </div>

                    <blockquote class="reveal mt-12 border-l-2 border-wheat pl-6">
                        <p class="font-serif text-2xl font-light italic leading-snug text-white">“I pride myself in caring for my patients like family. From the moment you arrive at ANew, I want you to know that your experience will be different.”</p>
                        <footer class="mt-4 text-xs font-semibold uppercase tracking-[0.16em] text-cream-100/60">Cari Smothermon, RN, BSN</footer>
                    </blockquote>

                    <a href="/about/" class="reveal btn-light mt-10">Read our story</a>
                </div>

                <div class="reveal relative lg:col-span-5" style="--d: 120ms">
                    <img src="/assets/images/team/<?= e($team['cari-smothermon']['photo']) ?>" alt="Cari Smothermon, RN, co-founder of ANew" class="aspect-[4/5] w-full rounded-4xl object-cover object-[50%_25%]" loading="lazy">
                    <figure class="absolute -bottom-8 -left-4 w-[46%] overflow-hidden rounded-3xl border-4 border-prairie-deep sm:-left-8">
                        <img src="/assets/images/team/<?= e($team['wes-smothermon']['photo']) ?>" alt="Wes Smothermon, LCMFT, co-founder of ANew" class="aspect-square w-full object-cover object-[50%_20%]" loading="lazy">
                    </figure>
                    <p class="absolute -bottom-6 right-0 rounded-full bg-wheat px-4 py-2 text-xs font-bold uppercase tracking-[0.14em] text-prairie-deep">Wes &amp; Cari · Co-founders</p>
                </div>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/includes/partials/step-inside.php'; ?>

    <!-- ============ TEAM ============ -->
    <section id="team" class="mx-auto max-w-site scroll-mt-24 px-5 py-14 sm:px-8 lg:py-20" aria-labelledby="team-title">
        <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
            <div class="max-w-2xl">
                <p class="eyebrow text-clay reveal">Meet our team</p>
                <h2 id="team-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-5xl">The people who’ll walk alongside you.</h2>
            </div>
            <p class="reveal max-w-md text-[17px] leading-relaxed text-ink-soft">A whole team with their own lanes of expertise — from therapy to medication management. Tap anyone to learn how they help.</p>
        </div>

        <ul class="mt-10 grid grid-cols-2 gap-x-4 gap-y-8 lg:grid-cols-4">
            <?php foreach ($featured_team as $i => $slug): $person = $team[$slug]; ?>
                <li class="reveal" style="--d: <?= $i * 70 ?>ms">
                    <button type="button" class="group block w-full text-left" data-person="<?= e($slug) ?>" aria-haspopup="dialog">
                        <span class="relative block overflow-hidden rounded-3xl bg-cream-200">
                            <img src="/assets/images/team/<?= e($person['photo']) ?>" alt="" class="aspect-[4/5] w-full object-cover transition duration-700 group-hover:scale-[1.04]" style="object-position: <?= e($person['pos']) ?>" loading="lazy">
                            <span class="absolute bottom-3 right-3 inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/90 text-ink opacity-0 shadow transition group-hover:opacity-100 group-focus-visible:opacity-100" aria-hidden="true">+</span>
                        </span>
                        <span class="mt-4 block font-serif text-xl leading-tight"><?= e($person['name']) ?><?php if ($person['creds']): ?><span class="text-ink-mute">, <?= e($person['creds']) ?></span><?php endif; ?></span>
                        <span class="mt-1 block text-sm text-ink-soft"><?= e($person['role']) ?></span>
                    </button>
                </li>
            <?php endforeach; ?>
        </ul>

        <?php $others = array_diff_key($team, array_flip($featured_team)); ?>
        <div class="reveal mt-12 flex flex-col gap-6 rounded-3xl border border-cream-200 bg-white p-6 sm:p-8 lg:flex-row lg:items-center lg:justify-between">
            <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:gap-5">
                <div class="flex shrink-0 -space-x-3">
                    <?php foreach (array_slice($others, 0, 6, true) as $slug => $person): ?>
                        <img src="/assets/images/team/<?= e($person['photo']) ?>" alt="<?= e($person['name']) ?>" class="h-12 w-12 rounded-full border-[3px] border-white object-cover" style="object-position: <?= e($person['pos']) ?>" loading="lazy">
                    <?php endforeach; ?>
                    <?php if (count($others) > 6): ?>
                        <span class="inline-flex h-12 w-12 items-center justify-center rounded-full border-[3px] border-white bg-cream-100 text-sm font-semibold text-ink-soft">+<?= count($others) - 6 ?></span>
                    <?php endif; ?>
                </div>
                <p class="font-serif text-xl leading-snug sm:text-2xl"><?= count($others) ?> more therapists, providers &amp; staff. <span class="text-ink-soft">Not sure who to see? We’ll match you.</span></p>
            </div>
            <div class="flex shrink-0 flex-col gap-3 sm:flex-row">
                <a href="/meet-our-team/" class="btn-ghost">Meet the full team</a>
                <a href="<?= e($site['schedule_url']) ?>" target="_blank" rel="noopener" class="btn-primary">Schedule an Appointment</a>
            </div>
        </div>
    </section>

    <?php if ($videos): ?>
    <!-- ============ VIDEOS (renders once videos are added in config) ============ -->
    <section class="mx-auto max-w-site px-5 pb-14 sm:px-8" aria-labelledby="videos-title">
        <p class="eyebrow text-sky-deep">Watch &amp; learn</p>
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
            <p class="eyebrow text-clay">In their words</p>
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
    <section id="insurance" class="scroll-mt-24 border-t border-cream-200 bg-white" aria-labelledby="insurance-title">
        <div class="mx-auto grid max-w-site gap-12 px-5 py-14 sm:px-8 lg:grid-cols-12 lg:py-20">
            <div class="lg:col-span-5">
                <p class="eyebrow text-sky-deep reveal">Insurance &amp; payment</p>
                <h2 id="insurance-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-5xl">Care that’s within reach.</h2>
                <p class="reveal mt-6 text-[17px] leading-relaxed text-ink-soft">ANew is contracted with and accepting many major insurance plans, including KanCare. Coverage can vary by provider — give us a call and we’ll gladly check yours.</p>
                <div class="reveal mt-8 flex flex-col gap-3 sm:flex-row">
                    <a href="/insurance/" class="btn-primary">Find a provider for your plan</a>
                    <a href="<?= e($site['phone_href']) ?>" class="btn-ghost">Call <?= e($site['phone']) ?></a>
                </div>
            </div>
            <div class="lg:col-span-7">
                <ul class="reveal flex flex-wrap gap-2.5">
                    <?php foreach ($insurances as $insurer): ?>
                        <li class="rounded-full border border-cream-200 bg-cream-50 px-4 py-2.5 text-[15px] font-medium"><?= e($insurer) ?></li>
                    <?php endforeach; ?>
                </ul>
                <div class="reveal mt-8 grid gap-4 rounded-3xl bg-cream-100 p-6 sm:grid-cols-[1fr_auto] sm:items-center sm:p-8">
                    <p class="text-[15px] leading-relaxed text-ink-soft"><strong class="font-semibold text-ink">Paying out of pocket?</strong> ANew accepts cash, all major credit cards, CareCredit, HSA and FSA for co-payments and self-pay sessions.</p>
                    <a href="<?= e($site['carecredit_url']) ?>" target="_blank" rel="noopener" class="text-sm font-semibold text-sky-deep underline underline-offset-4">Apply for CareCredit →</a>
                </div>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/includes/partials/visit-cta.php'; ?>

</main>

<?php include __DIR__ . '/includes/partials/person-dialog.php'; ?>

<?php include __DIR__ . '/includes/footer.php'; ?>
