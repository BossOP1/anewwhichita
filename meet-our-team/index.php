<?php
require __DIR__ . '/../includes/config.php';

$page_title       = 'Meet Our Team | Therapists & Psychiatric Providers in Wichita, KS | ANew';
$page_description = 'Meet the ANew Mental Health team in Wichita, Kansas — licensed therapists, a psychiatric nurse practitioner, counselor interns and the front office staff who’ll welcome you.';
$canonical_path   = '/meet-our-team/';
$current_page     = 'team';

$groups = [
    'medication' => ['Medication Management', 'Psychiatric evaluation and ongoing medication care, coordinated with your therapist.'],
    'therapist'  => ['Therapists', 'Licensed therapists for individuals, couples, families, teens and children.'],
    'intern'     => ['Counselor Interns', 'Our graduate-level counseling interns work under the supervision of licensed clinicians. Contact our office to learn more about availability and rates.'],
    'office'     => ['Office Team', 'The friendly faces who greet you, answer the phone, and keep ANew running.'],
];

/* A short note and link under each group's description. */
$group_notes = [
    'medication' => ['Available for children and adults.', 'About medication management', '/mental-health-medication-management/'],
    'intern'     => ['Call our office to ask about availability and rates.', 'Call ' . $site['phone'], $site['phone_href']],
];

include __DIR__ . '/../includes/header.php';
?>

<main id="main">

    <!-- ============ PAGE HERO ============ -->
    <section class="mx-auto max-w-site px-5 pb-12 pt-10 sm:px-8 lg:pb-16 lg:pt-14" aria-labelledby="page-title">
        <nav aria-label="Breadcrumb" class="reveal text-sm text-ink-mute">
            <a href="/" class="hover:text-ink">Home</a> <span aria-hidden="true">/</span> <span class="text-ink">Our Team</span>
        </nav>
        <div class="mt-8 grid gap-8 lg:grid-cols-12 lg:items-end lg:gap-16">
            <div class="lg:col-span-7">
                <p class="eyebrow reveal text-leaf-deep">Meet our team</p>
                <h1 id="page-title" class="reveal mt-5 font-serif text-[2.6rem] font-light leading-[1.05] tracking-tight sm:text-6xl">The people who’ll walk alongside you.</h1>
            </div>
            <div class="lg:col-span-5">
                <p class="reveal text-lg leading-relaxed text-ink-soft">Every person here has their own lane of expertise. Together, we create care that’s personalized, coordinated, and designed just for you.</p>
                <a href="<?= e($site['schedule_url']) ?>" target="_blank" rel="noopener" class="reveal btn-primary mt-7">Schedule an Appointment</a>
            </div>
        </div>
    </section>

    <!-- ============ FILTERS ============ -->
    <div id="directory" class="mx-auto max-w-site scroll-mt-28 px-5 sm:px-8">
        <div class="flex flex-col gap-3 border-y border-cream-200 py-4 lg:flex-row lg:items-center lg:justify-between">
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
                    <input type="checkbox" class="h-4 w-4 accent-[#2F3B2A]" data-team-telehealth> Telehealth
                </label>
            </div>
        </div>
        <p class="pt-6 text-sm text-ink-mute" aria-live="polite" data-team-summary></p>
    </div>

    <!-- ============ DIRECTORY ============ -->
    <div class="mx-auto max-w-site px-5 sm:px-8">
        <?php foreach ($groups as $lane => [$label, $blurb]): ?>
            <?php $members = array_filter($team, fn ($p) => $p['lane'] === $lane); ?>
            <section id="<?= e($lane === 'therapist' ? 'therapists' : ($lane === 'intern' ? 'interns' : $lane)) ?>" class="scroll-mt-28 border-b border-cream-200 py-12 last:border-0 lg:py-16" data-team-group="<?= e($lane) ?>" aria-labelledby="group-<?= e($lane) ?>">
                <div class="grid gap-8 lg:grid-cols-12 lg:gap-16">
                    <div class="lg:col-span-4">
                        <div class="lg:sticky lg:top-32">
                            <h2 id="group-<?= e($lane) ?>" class="font-serif text-3xl font-light tracking-tight sm:text-4xl"><?= e($label) ?> <span class="text-ink-mute" data-team-count><?= count($members) ?></span></h2>
                            <p class="mt-4 max-w-sm text-[15.5px] leading-relaxed text-ink-soft"><?= e($blurb) ?><?php if (isset($group_notes[$lane])): ?> <?= e($group_notes[$lane][0]) ?><?php endif; ?></p>
                            <?php if (isset($group_notes[$lane])): [, $nl, $nh] = $group_notes[$lane]; ?>
                                <a href="<?= e($nh) ?>" class="mt-4 inline-flex items-center gap-1.5 text-sm font-semibold text-ink underline-offset-4 hover:underline"><?= e($nl) ?> <span aria-hidden="true">→</span></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <ul class="grid grid-cols-2 gap-x-5 gap-y-10 sm:grid-cols-3 lg:col-span-8 xl:grid-cols-4">
                        <?php foreach ($members as $slug => $p): ?>
                            <li id="<?= e($slug) ?>" class="scroll-mt-28" data-person-card data-lane="<?= e($lane) ?>" data-conditions="<?= e(implode(' ', $p['conditions'])) ?>" data-telehealth="<?= str_contains(strtolower($p['format']), 'telehealth') ? '1' : '0' ?>">
                                <button type="button" class="group block w-full text-left" data-person="<?= e($slug) ?>" aria-haspopup="dialog" aria-label="Read about <?= e($p['name']) ?>">
                                    <span class="block overflow-hidden rounded-3xl bg-cream-200">
                                        <img src="/assets/images/team/<?= e($p['photo']) ?>" alt="" class="aspect-[4/5] w-full object-cover transition duration-700 group-hover:scale-[1.04]" style="object-position: <?= e($p['pos']) ?>" loading="lazy">
                                    </span>
                                    <span class="mt-3 block font-serif text-lg leading-tight transition group-hover:text-clay"><?= e($p['name']) ?></span>
                                    <span class="mt-1 block text-sm text-ink-mute"><?= e($p['creds'] ?: $p['role']) ?></span>
                                </button>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
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
        <div class="grid gap-10 border-t border-cream-200 pt-10 md:grid-cols-2 md:gap-16">
            <div class="reveal">
                <h2 class="font-serif text-3xl font-light leading-tight tracking-tight">Not sure who to see? We’ll match you.</h2>
                <p class="mt-3 max-w-md text-[15.5px] leading-relaxed text-ink-soft">Tell us a little about what’s going on when you reach out, and we’ll pair you with the provider whose expertise fits best.</p>
                <a href="<?= e($site['schedule_url']) ?>" target="_blank" rel="noopener" class="mt-5 inline-flex items-center gap-1.5 text-sm font-semibold text-ink underline-offset-4 hover:underline">Schedule an Appointment <span aria-hidden="true">→</span></a>
            </div>
            <div class="reveal" style="--d: 100ms">
                <h2 class="font-serif text-3xl font-light leading-tight tracking-tight">Work with us.</h2>
                <p class="mt-3 max-w-md text-[15.5px] leading-relaxed text-ink-soft">Therapists, interns, medication providers and student NPs looking for a mental health career in Wichita — we’d love to talk.</p>
                <a href="/mental-health-careers-wichita-ks/" class="mt-5 inline-flex items-center gap-1.5 text-sm font-semibold text-ink underline-offset-4 hover:underline">See careers <span aria-hidden="true">→</span></a>
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
