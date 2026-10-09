<?php
/**
 * Shared layout for /conditions/{slug}/ pages. A page sets $slug, then
 * includes config, conditions-content, icons, header, this file and footer.
 *
 * @var string $slug @var array $site @var array $team @var array $services
 * @var array $conditions @var array $condition_pages @var array $icons
 */

$c    = $conditions[$slug];
$page = $condition_pages[$slug];

/* Clinicians who list this condition (office staff excluded). */
$providers = array_filter($team, fn ($p) => in_array($slug, $p['conditions'], true) && in_array($p['lane'], ['medication', 'therapist'], true));

$tones = [
    'sky'     => ['bg' => 'bg-sky-soft',     'ink' => 'text-sky-deep'],
    'clay'    => ['bg' => 'bg-clay-soft',    'ink' => 'text-clay-deep'],
    'leaf'    => ['bg' => 'bg-leaf-soft',    'ink' => 'text-leaf-deep'],
    'prairie' => ['bg' => 'bg-prairie-soft', 'ink' => 'text-prairie-deep'],
    'sand'    => ['bg' => 'bg-wheat-soft',   'ink' => 'text-clay-deep'],
];
$tone = $tones[$c['tone']];

$replace = ['%fax%' => e($site['fax']), '%email%' => '<a class="font-semibold text-ink underline underline-offset-4" href="mailto:' . e($site['email']) . '">' . e($site['email']) . '</a>'];
?>

<main id="main">

    <!-- ============ PAGE HERO ============ -->
    <section class="mx-auto max-w-site px-5 pb-14 pt-10 sm:px-8 lg:pb-20 lg:pt-14" aria-labelledby="page-title">
        <div class="grid items-center gap-12 lg:grid-cols-12">
            <div class="lg:col-span-6">
                <nav aria-label="Breadcrumb" class="reveal text-sm text-ink-mute">
                    <a href="/" class="hover:text-ink">Home</a> <span aria-hidden="true">/</span>
                    <a href="/conditions/" class="hover:text-ink">Conditions</a> <span aria-hidden="true">/</span>
                    <span class="text-ink"><?= e($c['name']) ?></span>
                </nav>
                <p class="eyebrow reveal mt-8 flex items-center gap-2.5 <?= $tone['ink'] ?>">
                    <span class="inline-flex h-8 w-8 items-center justify-center rounded-xl <?= $tone['bg'] ?>"><?= icon($icons[$slug], 'h-4 w-4') ?></span>
                    <?= e($c['name']) ?> care in Wichita, KS
                </p>
                <h1 id="page-title" class="reveal mt-5 font-serif text-[2.6rem] font-light leading-[1.05] tracking-tight sm:text-6xl lg:text-[4.2rem]"><?= $page['title'] ?></h1>
                <p class="reveal mt-7 max-w-xl text-lg leading-relaxed text-ink-soft"><?= e($page['intro']) ?></p>
                <div class="reveal mt-9 flex flex-col gap-3 sm:flex-row">
                    <a href="<?= e($site['schedule_url']) ?>" target="_blank" rel="noopener" class="btn-primary">Schedule an Appointment</a>
                    <a href="#help" class="btn-ghost">How we can help</a>
                </div>
            </div>
            <figure class="reveal relative lg:col-span-6" style="--d: 120ms">
                <img src="<?= e($c['image']) ?>" alt="" class="aspect-[4/3] w-full rounded-4xl object-cover lg:aspect-[5/4]" fetchpriority="high">
                <?php if (!empty($c['tms'])): ?>
                    <a href="<?= e($services['tms']['url']) ?>" class="absolute -bottom-6 left-6 right-6 flex items-center gap-4 rounded-3xl border border-cream-200 bg-cream-50/95 p-5 shadow-xl shadow-ink/5 backdrop-blur transition hover:bg-white sm:left-auto sm:right-[-1rem] sm:max-w-sm">
                        <span class="rounded-full bg-leaf-lime px-2 py-1 text-[10px] font-bold uppercase tracking-wider text-prairie-deep">New</span>
                        <span class="text-sm leading-snug"><strong class="font-semibold">TMS Therapy is now at ANew</strong> — an option when depression hasn’t lifted with medication. <span aria-hidden="true">→</span></span>
                    </a>
                <?php endif; ?>
            </figure>
        </div>
    </section>

    <!-- ============ SECTION SWITCHER ============ -->
    <nav class="sticky top-[84px] z-30 border-y border-cream-200 bg-cream-50/90 backdrop-blur" aria-label="On this page">
        <div class="mx-auto flex max-w-site gap-2 overflow-x-auto px-5 py-3 sm:px-8">
            <a href="#signs" class="tab-link">Signs</a>
            <a href="#help" class="tab-link">How we help</a>
            <?php if ($providers): ?><a href="#providers" class="tab-link">Who can help</a><?php endif; ?>
            <a href="#faq" class="tab-link">FAQ</a>
        </div>
    </nav>

    <!-- ============ SIGNS ============ -->
    <section id="signs" class="mx-auto max-w-site scroll-mt-40 px-5 py-14 sm:px-8 lg:py-20" aria-labelledby="signs-title">
        <div class="grid gap-10 lg:grid-cols-12">
            <div class="lg:col-span-4">
                <p class="eyebrow reveal <?= $tone['ink'] ?>">Does this sound familiar?</p>
                <h2 id="signs-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-5xl">What <?= e(in_array($slug, ['adhd', 'ocd'], true) ? $c['name'] : mb_strtolower($c['name'])) ?> can feel like.</h2>
                <p class="reveal mt-6 text-[16px] leading-relaxed text-ink-soft">Everyone’s experience is different, and this list isn’t a diagnosis. If several of these feel true for you — or someone you love — it’s worth a conversation.</p>
                <a href="/#next-step" class="reveal mt-6 inline-flex items-center gap-1.5 text-sm font-semibold underline decoration-cream-300 underline-offset-4 hover:decoration-ink">Not sure? Find your next step →</a>
            </div>
            <div class="lg:col-span-8">
                <ul class="grid gap-3 sm:grid-cols-2">
                    <?php foreach ($page['signs'] as $i => $sign): ?>
                        <li class="reveal flex items-start gap-3 rounded-3xl bg-white p-5" style="--d: <?= ($i % 2) * 60 ?>ms">
                            <span class="mt-0.5 inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full <?= $tone['bg'] ?> <?= $tone['ink'] ?>">
                                <svg viewBox="0 0 16 16" class="h-3 w-3" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m3.5 8.5 3 3 6-7"/></svg>
                            </span>
                            <span class="text-[15.5px] leading-relaxed"><?= e($sign) ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <?php if (!empty($page['types'])): ?>
                    <div class="reveal mt-8">
                        <h3 class="text-xs font-semibold uppercase tracking-[0.18em] text-ink-mute">It can include</h3>
                        <ul class="mt-3 flex flex-wrap gap-2">
                            <?php foreach ($page['types'] as $type): ?><li class="rounded-full bg-cream-100 px-3.5 py-2 text-sm text-ink-soft"><?= e($type) ?></li><?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- ============ HOW WE HELP ============ -->
    <section id="help" class="scroll-mt-40 px-3 sm:px-4" aria-labelledby="help-title">
        <div class="rounded-4xl bg-prairie-deep text-cream-100">
            <div class="mx-auto max-w-site px-5 py-14 sm:px-8 lg:py-20">
                <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
                    <div class="max-w-2xl">
                        <p class="eyebrow reveal text-wheat">How ANew can help</p>
                        <h2 id="help-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight text-white sm:text-5xl">One team, <em class="italic text-wheat">a plan that fits you.</em></h2>
                    </div>
                    <p class="reveal max-w-md text-[17px] leading-relaxed text-cream-100/80">Our therapists and providers work side by side, so your care can combine whatever you need — and change as you do.</p>
                </div>
                <div class="mt-10 grid gap-4 md:grid-cols-2 <?= count($page['help']) >= 3 ? 'lg:grid-cols-3' : '' ?> <?= count($page['help']) === 4 ? 'xl:grid-cols-4' : '' ?>">
                    <?php $i = 0; foreach ($page['help'] as $key => $text): $svc = $services[$key]; $isNew = !empty($svc['new']); ?>
                        <a href="<?= e($svc['url']) ?>" class="reveal group flex flex-col rounded-3xl p-7 transition <?= $isNew ? 'bg-wheat-soft text-ink hover:bg-white' : 'border border-white/10 bg-white/5 hover:bg-white/10' ?>" style="--d: <?= ($i++) * 70 ?>ms">
                            <span class="flex items-center gap-2">
                                <span class="font-serif text-2xl <?= $isNew ? '' : 'text-white' ?>"><?= e($svc['name']) ?></span>
                                <?php if ($isNew): ?><span class="rounded-full bg-leaf px-2 py-0.5 text-[10px] font-bold uppercase tracking-wider text-white">New</span><?php endif; ?>
                            </span>
                            <span class="mt-3 text-[15.5px] leading-relaxed <?= $isNew ? 'text-ink-soft' : 'text-cream-100/75' ?>"><?= e($text) ?></span>
                            <span class="mt-auto pt-6 text-sm font-semibold <?= $isNew ? '' : 'text-white' ?>">Learn about <?= e(mb_strtolower($svc['name']) === 'tms therapy' ? 'TMS' : mb_strtolower($svc['name'])) ?> <span aria-hidden="true" class="inline-block transition group-hover:translate-x-1">→</span></span>
                        </a>
                    <?php endforeach; ?>
                </div>
                <div class="reveal mt-10 flex flex-col gap-3 sm:flex-row">
                    <a href="<?= e($site['schedule_url']) ?>" target="_blank" rel="noopener" class="btn-light">Schedule an Appointment</a>
                    <a href="<?= e($site['phone_href']) ?>" class="btn-glass">Call <?= e($site['phone']) ?></a>
                </div>
            </div>
        </div>
    </section>

    <?php if (!empty($page['callout'])): [$ct, $cx, $cl, $ch] = $page['callout']; ?>
        <!-- ============ CALLOUT ============ -->
        <section class="mx-auto max-w-site px-5 pt-10 sm:px-8" aria-label="<?= e($ct) ?>">
            <div class="reveal flex flex-col gap-6 rounded-4xl border border-cream-300 bg-sky-soft p-8 sm:p-10 lg:flex-row lg:items-center lg:justify-between">
                <div class="max-w-3xl">
                    <h2 class="font-serif text-2xl leading-tight sm:text-3xl"><?= e($ct) ?></h2>
                    <p class="mt-3 text-[16px] leading-relaxed text-ink-soft"><?= strtr(e($cx), $replace) ?></p>
                </div>
                <a href="<?= e($ch) ?>" class="btn-primary shrink-0"><?= e($cl) ?></a>
            </div>
        </section>
    <?php endif; ?>

    <?php if ($providers): ?>
        <!-- ============ PROVIDERS ============ -->
        <section id="providers" class="mx-auto max-w-site scroll-mt-40 px-5 py-14 sm:px-8 lg:py-20" aria-labelledby="providers-title">
            <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
                <div class="max-w-2xl">
                    <p class="eyebrow reveal text-leaf-deep">Who can help</p>
                    <h2 id="providers-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-5xl">Providers who work with <?= e(in_array($slug, ['adhd', 'ocd'], true) ? $c['name'] : mb_strtolower($c['name'])) ?>.</h2>
                </div>
                <p class="reveal max-w-md text-[17px] leading-relaxed text-ink-soft">Tap anyone to learn about their approach and who they see. Not sure who’s right? We’ll match you.</p>
            </div>
            <ul class="mt-10 grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-3 lg:grid-cols-5">
                <?php $i = 0; foreach ($providers as $pslug => $p): ?>
                    <li class="reveal" style="--d: <?= ($i++ % 5) * 50 ?>ms">
                        <button type="button" class="group block w-full text-left" data-person="<?= e($pslug) ?>" aria-haspopup="dialog">
                            <span class="block overflow-hidden rounded-3xl bg-cream-200">
                                <img src="/assets/images/team/<?= e($p['photo']) ?>" alt="" class="aspect-[4/5] w-full object-cover transition duration-700 group-hover:scale-[1.04]" style="object-position: <?= e($p['pos']) ?>" loading="lazy">
                            </span>
                            <span class="mt-3 block font-serif text-lg leading-tight"><?= e($p['name']) ?><span class="text-ink-mute">, <?= e($p['creds']) ?></span></span>
                            <span class="mt-1 block text-[13px] text-ink-soft"><?= e($p['lane'] === 'medication' ? 'Medication management' : 'Therapy') ?> · <?= e($p['format']) ?></span>
                        </button>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
    <?php endif; ?>

    <!-- ============ FAQ ============ -->
    <section id="faq" class="scroll-mt-40 border-y border-cream-200 bg-white" aria-labelledby="faq-title">
        <div class="mx-auto grid max-w-site gap-10 px-5 py-14 sm:px-8 lg:grid-cols-12 lg:py-20">
            <div class="lg:col-span-4">
                <p class="eyebrow reveal text-clay">Questions</p>
                <h2 id="faq-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-5xl"><?= e($c['name']) ?> FAQ</h2>
                <div class="reveal mt-8 rounded-3xl border border-clay/30 bg-clay-soft/40 p-5 text-[15px] leading-relaxed text-ink-soft">
                    <strong class="font-semibold text-ink">In crisis?</strong> Call or text <a href="tel:988" class="font-semibold text-ink underline underline-offset-4">988</a>, or call <a href="tel:911" class="font-semibold text-ink underline underline-offset-4">911</a> in an emergency.
                </div>
            </div>
            <div class="divide-y divide-cream-200 border-y border-cream-200 lg:col-span-8">
                <?php foreach ($page['faqs'] as $i => [$q, $a]): ?>
                    <details class="faq group reveal" <?= $i === 0 ? 'open' : '' ?>>
                        <summary class="flex cursor-pointer list-none items-start justify-between gap-6 py-6 font-serif text-xl leading-snug sm:text-2xl">
                            <?= e($q) ?>
                            <span class="mt-1 inline-flex h-8 w-8 shrink-0 items-center justify-center rounded-full border border-cream-300 text-base transition group-open:rotate-45" aria-hidden="true">+</span>
                        </summary>
                        <p class="max-w-2xl pb-6 text-[16px] leading-relaxed text-ink-soft"><?= e($a) ?></p>
                    </details>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ============ RELATED ============ -->
    <section class="mx-auto max-w-site px-5 py-14 sm:px-8 lg:py-20" aria-labelledby="related-title">
        <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <p class="eyebrow reveal text-sky-deep">Often connected</p>
                <h2 id="related-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-5xl">Related conditions.</h2>
            </div>
            <a href="/conditions/" class="reveal text-sm font-semibold underline decoration-cream-300 underline-offset-4 hover:decoration-ink">All conditions we treat →</a>
        </div>
        <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            <?php foreach ($page['related'] as $i => $rslug): $r = $conditions[$rslug]; $rt = $tones[$r['tone']]; ?>
                <a href="/conditions/<?= e($rslug) ?>/" class="reveal group overflow-hidden rounded-4xl <?= $rt['bg'] ?>" style="--d: <?= $i * 60 ?>ms">
                    <img src="<?= e($r['image']) ?>" alt="" class="aspect-[4/3] w-full object-cover transition duration-700 group-hover:scale-[1.05]" loading="lazy">
                    <span class="block p-6">
                        <span class="block font-serif text-2xl"><?= e($r['name']) ?></span>
                        <span class="mt-2 block text-[14.5px] leading-relaxed text-ink-soft"><?= e($r['blurb']) ?></span>
                    </span>
                </a>
            <?php endforeach; ?>
        </div>
    </section>

    <?php include __DIR__ . '/visit-cta.php'; ?>

</main>

<?php include __DIR__ . '/person-dialog.php'; ?>

<script type="application/ld+json">
<?= json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'MedicalWebPage',
            'name' => $c['name'] . ' Treatment in Wichita, KS',
            'url' => $site['url'] . $canonical_path,
            'description' => $page_description,
            'about' => [
                '@type' => 'MedicalCondition',
                'name' => $c['name'],
                'signOrSymptom' => array_map(fn ($s) => ['@type' => 'MedicalSignOrSymptom', 'name' => $s], $page['signs']),
                'possibleTreatment' => array_map(fn ($k) => ['@type' => 'MedicalTherapy', 'name' => $services[$k]['name']], array_keys($page['help'])),
            ],
            'provider' => ['@type' => 'MedicalClinic', 'name' => $site['name'], 'telephone' => '+1-316-260-3777'],
        ],
        ['@type' => 'FAQPage', 'mainEntity' => array_map(fn ($f) => ['@type' => 'Question', 'name' => $f[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]]], $page['faqs'])],
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $site['url'] . '/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Conditions', 'item' => $site['url'] . '/conditions/'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => $c['name'], 'item' => $site['url'] . $canonical_path],
        ]],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
</script>
