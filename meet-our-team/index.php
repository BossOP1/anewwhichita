<?php
require __DIR__ . '/../includes/config.php';

$page_title       = 'Meet Our Team | Therapists & Psychiatric Providers in Wichita, KS | ANew';
$page_description = 'Meet the ANew Mental Health team in Wichita, Kansas — licensed therapists, a psychiatric nurse practitioner, counselor interns and the front office staff who’ll welcome you.';
$canonical_path   = '/meet-our-team/';
$current_page     = 'team';

$groups = [
    'medication' => ['Medication Management', 'Psychiatric evaluation and ongoing medication care, coordinated with your therapist.'],
    'therapist'  => ['Therapists', 'Licensed therapists for individuals, couples, families, teens and children.'],
    'intern'     => ['Counselor Interns', 'Graduate-level counselors-in-training, supervised by our licensed clinicians.'],
    'office'     => ['Office Team', 'The friendly faces who greet you, answer the phone, and keep ANew running.'],
];

/* Info cards that round out the smaller groups. */
$group_extras = [
    'medication' => ['Medication works best together.', 'Our medication provider coordinates with your therapist, so your care stays connected. Medication management is available for children and adults.', 'About medication management', '/mental-health-medication-management/', 'bg-sky-soft'],
    'intern'     => ['Supervised, caring, and ready to help.', 'Our counselor interns are completing their graduate training under the supervision and mentorship of ANew’s licensed clinicians. Call our office to ask about availability and rates.', 'Call ' . $site['phone'], $site['phone_href'], 'bg-leaf-soft'],
];

$mosaic = ['wes-smothermon', 'ashley-ludlum', 'katlynn-miller', 'judy-smothermon', 'chuck-edwards', 'sierra-fair'];

include __DIR__ . '/../includes/header.php';
?>

<main id="main">

    <!-- ============ PAGE HERO ============ -->
    <section class="mx-auto max-w-site px-5 pb-12 pt-10 sm:px-8 lg:pb-16 lg:pt-14" aria-labelledby="page-title">
        <div class="grid items-center gap-12 lg:grid-cols-12">
            <div class="lg:col-span-6">
                <nav aria-label="Breadcrumb" class="reveal text-sm text-ink-mute">
                    <a href="/" class="hover:text-ink">Home</a> <span aria-hidden="true">/</span> <span class="text-ink">Our Team</span>
                </nav>
                <p class="eyebrow reveal mt-8 text-clay">Meet our team</p>
                <h1 id="page-title" class="reveal mt-5 font-serif text-[2.6rem] font-light leading-[1.05] tracking-tight sm:text-6xl lg:text-[4.2rem]">
                    The people who’ll <em class="italic text-prairie">walk alongside you.</em>
                </h1>
                <p class="reveal mt-7 max-w-xl text-lg leading-relaxed text-ink-soft">
                    Our staff is highly trained across a wide variety of disciplines — and every person here has their own lane of expertise. Together, we create care that’s personalized, coordinated, and designed just for you.
                </p>
                <div class="reveal mt-9 flex flex-col gap-3 sm:flex-row">
                    <a href="#directory" class="btn-primary">Find the right fit</a>
                    <a href="<?= e($site['schedule_url']) ?>" target="_blank" rel="noopener" class="btn-ghost">Schedule an Appointment</a>
                </div>
            </div>
            <div class="reveal lg:col-span-6" style="--d: 120ms">
                <div class="grid grid-cols-3 gap-3">
                    <?php foreach ($mosaic as $i => $slug): $p = $team[$slug]; ?>
                        <img src="/assets/images/team/<?= e($p['photo']) ?>" alt="" class="aspect-[4/5] w-full rounded-3xl object-cover <?= $i % 3 === 1 ? 'translate-y-6' : '' ?>" style="object-position: <?= e($p['pos']) ?>" loading="<?= $i < 3 ? 'eager' : 'lazy' ?>">
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ FILTERS ============ -->
    <div id="directory" class="sticky top-[84px] z-30 scroll-mt-24 border-y border-cream-200 bg-cream-50/90 backdrop-blur">
        <div class="mx-auto flex max-w-site flex-col gap-3 px-5 py-3 sm:px-8 lg:flex-row lg:items-center lg:justify-between">
            <div class="-mx-5 flex gap-2 overflow-x-auto px-5 sm:mx-0 sm:px-0" role="group" aria-label="Filter by role">
                <button type="button" class="tab-link is-active" data-team-lane="all" aria-pressed="true">Everyone</button>
                <?php foreach ($groups as $lane => [$label]): ?>
                    <button type="button" class="tab-link" data-team-lane="<?= e($lane) ?>" aria-pressed="false"><?= e($label) ?></button>
                <?php endforeach; ?>
            </div>
            <div class="flex flex-wrap items-center gap-2">
                <label class="sr-only" for="team-condition">Filter by what you need help with</label>
                <select id="team-condition" class="rounded-full border border-cream-300 bg-white px-4 py-2 text-sm text-ink" data-team-condition>
                    <option value="">Help with… anything</option>
                    <?php foreach ($conditions as $slug => $c): ?>
                        <option value="<?= e($slug) ?>"><?= e($c['name']) ?></option>
                    <?php endforeach; ?>
                </select>
                <label class="inline-flex cursor-pointer items-center gap-2 rounded-full border border-cream-300 bg-white px-4 py-2 text-sm">
                    <input type="checkbox" class="h-4 w-4 accent-[#2F3B2A]" data-team-telehealth> Offers telehealth
                </label>
            </div>
        </div>
    </div>

    <!-- ============ DIRECTORY ============ -->
    <div class="mx-auto max-w-site px-5 sm:px-8">
        <p class="pt-8 text-sm text-ink-mute" aria-live="polite" data-team-summary></p>

        <?php foreach ($groups as $lane => [$label, $blurb]): ?>
            <?php $members = array_filter($team, fn ($p) => $p['lane'] === $lane); ?>
            <section id="<?= e($lane === 'therapist' ? 'therapists' : ($lane === 'intern' ? 'interns' : $lane)) ?>" class="scroll-mt-48 border-b border-cream-200 py-12 last:border-0 lg:py-16" data-team-group="<?= e($lane) ?>" aria-labelledby="group-<?= e($lane) ?>">
                <div class="flex flex-col gap-3 lg:flex-row lg:items-end lg:justify-between">
                    <h2 id="group-<?= e($lane) ?>" class="font-serif text-3xl font-light tracking-tight sm:text-4xl"><?= e($label) ?> <span class="text-ink-mute" data-team-count><?= count($members) ?></span></h2>
                    <p class="max-w-md text-[15.5px] text-ink-soft"><?= e($blurb) ?></p>
                </div>
                <ul class="mt-8 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                    <?php foreach ($members as $slug => $p): ?>
                        <li id="<?= e($slug) ?>" class="scroll-mt-48" data-person-card data-lane="<?= e($lane) ?>" data-conditions="<?= e(implode(' ', $p['conditions'])) ?>" data-telehealth="<?= str_contains(strtolower($p['format']), 'telehealth') ? '1' : '0' ?>">
                            <article class="group flex h-full flex-col overflow-hidden rounded-4xl border border-cream-200 bg-white transition hover:-translate-y-1 hover:shadow-xl hover:shadow-ink/5">
                                <button type="button" class="relative block overflow-hidden text-left" data-person="<?= e($slug) ?>" aria-haspopup="dialog" aria-label="Read about <?= e($p['name']) ?>">
                                    <img src="/assets/images/team/<?= e($p['photo']) ?>" alt="" class="aspect-[4/5] w-full object-cover transition duration-700 group-hover:scale-[1.04]" style="object-position: <?= e($p['pos']) ?>" loading="lazy">
                                    <?php if ($p['format']): ?>
                                        <span class="absolute left-3 top-3 rounded-full bg-white/90 px-2.5 py-1 text-[11px] font-semibold text-ink backdrop-blur"><?= e($p['format']) ?></span>
                                    <?php endif; ?>
                                </button>
                                <div class="flex flex-1 flex-col p-5">
                                    <h3 class="font-serif text-xl leading-tight"><?= e($p['name']) ?><?php if ($p['creds']): ?><span class="text-ink-mute">, <?= e($p['creds']) ?></span><?php endif; ?></h3>
                                    <p class="mt-1 text-sm text-ink-soft"><?= e($p['role']) ?></p>
                                    <?php if ($p['focus']): ?>
                                        <div class="mt-3 flex flex-wrap gap-1.5">
                                            <?php foreach (array_slice($p['focus'], 0, 3) as $f): ?><span class="tag"><?= e($f) ?></span><?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                    <button type="button" class="mt-auto inline-flex items-center gap-1 pt-5 text-sm font-semibold" data-person="<?= e($slug) ?>" aria-haspopup="dialog">
                                        <?= $p['bio'] ? 'Read bio' : 'Learn more' ?> <span aria-hidden="true" class="transition group-hover:translate-x-1">→</span>
                                    </button>
                                </div>
                            </article>
                        </li>
                    <?php endforeach; ?>
                    <?php if (isset($group_extras[$lane])): [$xt, $xb, $xl, $xh, $xtone] = $group_extras[$lane]; ?>
                        <li class="sm:col-span-1 lg:col-span-2">
                            <div class="flex h-full flex-col justify-between gap-8 rounded-4xl p-8 sm:p-10 <?= $xtone ?>">
                                <div>
                                    <h3 class="font-serif text-3xl leading-tight"><?= e($xt) ?></h3>
                                    <p class="mt-3 max-w-md text-[16px] leading-relaxed text-ink-soft"><?= e($xb) ?></p>
                                </div>
                                <a href="<?= e($xh) ?>" class="btn-primary self-start"><?= e($xl) ?></a>
                            </div>
                        </li>
                    <?php endif; ?>
                </ul>
            </section>
        <?php endforeach; ?>

        <div class="hidden py-16 text-center" data-team-empty>
            <p class="font-serif text-3xl">No one matches all of those filters.</p>
            <p class="mt-3 text-ink-soft">Try removing a filter — or call <a href="<?= e($site['phone_href']) ?>" class="font-semibold underline underline-offset-4"><?= e($site['phone']) ?></a> and we’ll match you.</p>
            <button type="button" class="btn-ghost mt-6" data-team-reset>Clear filters</button>
        </div>
    </div>

    <!-- ============ MATCH + CAREERS ============ -->
    <section class="mx-auto max-w-site px-5 py-14 sm:px-8 lg:py-20" aria-label="Get matched">
        <div class="grid gap-4 lg:grid-cols-12">
            <div class="reveal flex flex-col justify-between gap-8 rounded-4xl bg-prairie-deep p-8 text-cream-100 sm:p-10 lg:col-span-8">
                <div>
                    <p class="eyebrow text-wheat">Not sure who to see?</p>
                    <h2 class="mt-5 font-serif text-4xl font-light leading-tight text-white sm:text-5xl">You don’t have to choose. <em class="italic text-wheat">We’ll match you.</em></h2>
                    <p class="mt-5 max-w-xl text-[17px] leading-relaxed text-cream-100/80">Tell us a little about what’s going on when you reach out, and our team will pair you with the provider whose lane of expertise fits best.</p>
                </div>
                <div class="flex flex-col gap-3 sm:flex-row">
                    <a href="<?= e($site['schedule_url']) ?>" target="_blank" rel="noopener" class="btn-light">Schedule an Appointment</a>
                    <a href="/#next-step" class="btn-glass">Find your next step</a>
                </div>
            </div>
            <div class="reveal flex flex-col justify-between gap-8 rounded-4xl bg-cream-100 p-8 sm:p-10 lg:col-span-4" style="--d: 100ms">
                <div>
                    <p class="eyebrow text-clay">Careers</p>
                    <p class="mt-5 font-serif text-2xl leading-snug">“We’re not just hiring providers — we’re building a community of care.”</p>
                    <p class="mt-4 text-sm leading-relaxed text-ink-soft">Therapists, interns, medication providers and student NPs welcome.</p>
                </div>
                <a href="/mental-health-careers-wichita-ks/" class="btn-primary self-start">Join the ANew team</a>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/../includes/partials/visit-cta.php'; ?>

</main>

<?php include __DIR__ . '/../includes/partials/person-dialog.php'; ?>

<script type="application/ld+json">
<?= json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'MedicalClinic',
    'name' => $site['name'],
    'url' => $site['url'] . $canonical_path,
    'employee' => array_values(array_map(fn ($p) => array_filter([
        '@type' => 'Person',
        'name' => $p['name'],
        'jobTitle' => trim($p['role'] . ($p['creds'] ? ' (' . $p['creds'] . ')' : '')),
        'image' => $site['url'] . '/assets/images/team/' . $p['photo'],
        'knowsAbout' => $p['focus'] ?: null,
    ]), $team)),
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>
