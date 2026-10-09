<?php
require __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/icons.php';

$page_title       = 'Conditions We Treat | Anxiety, Depression, ADHD, Trauma & More | ANew Wichita';
$page_description = 'ANew Mental Health in Wichita, Kansas treats anxiety, depression, ADHD, trauma, grief, bipolar disorder, OCD, stress, addiction and more — for children, teens and adults.';
$canonical_path   = '/conditions/';
$current_page     = 'conditions';

$tones = [
    'sky'     => ['bg' => 'bg-sky-soft',     'ink' => 'text-sky-deep'],
    'clay'    => ['bg' => 'bg-clay-soft',    'ink' => 'text-clay-deep'],
    'leaf'    => ['bg' => 'bg-leaf-soft',    'ink' => 'text-leaf-deep'],
    'prairie' => ['bg' => 'bg-prairie-soft', 'ink' => 'text-prairie-deep'],
    'sand'    => ['bg' => 'bg-wheat-soft',   'ink' => 'text-clay-deep'],
];

include __DIR__ . '/../includes/header.php';
?>

<main id="main">

    <!-- ============ PAGE HERO ============ -->
    <section class="mx-auto max-w-site px-5 pb-10 pt-10 sm:px-8 lg:pb-14 lg:pt-14" aria-labelledby="page-title">
        <nav aria-label="Breadcrumb" class="reveal text-sm text-ink-mute">
            <a href="/" class="hover:text-ink">Home</a> <span aria-hidden="true">/</span> <span class="text-ink">Conditions</span>
        </nav>
        <div class="mt-8 grid gap-8 lg:grid-cols-12 lg:items-end">
            <div class="lg:col-span-7">
                <p class="eyebrow reveal text-sky-deep">Conditions we treat</p>
                <h1 id="page-title" class="reveal mt-5 font-serif text-[2.6rem] font-light leading-[1.05] tracking-tight sm:text-6xl lg:text-[4.2rem]">
                    Does any of this <em class="italic text-clay">sound like you?</em>
                </h1>
            </div>
            <div class="reveal lg:col-span-5">
                <p class="text-lg leading-relaxed text-ink-soft">Explore what you’re experiencing, how we treat it, and the people on our team who specialize in it. You don’t need a diagnosis to start — just a sense that something isn’t right.</p>
                <a href="/#next-step" class="btn-ghost mt-6">Not sure? Start with what you’re noticing</a>
            </div>
        </div>
    </section>

    <!-- ============ GRID ============ -->
    <section class="mx-auto max-w-site px-5 pb-14 sm:px-8 lg:pb-20" aria-label="All conditions">
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            <?php $i = 0; foreach ($conditions as $slug => $condition): $tone = $tones[$condition['tone']]; ?>
                <a href="/conditions/<?= e($slug) ?>/" class="condition-card reveal group <?= $tone['bg'] ?>" style="--d: <?= ($i++ % 4) * 60 ?>ms">
                    <div class="relative -mx-2 -mt-2 overflow-hidden rounded-[1.35rem]">
                        <img src="<?= e($condition['image']) ?>" alt="" class="aspect-[4/3] w-full object-cover transition duration-700 group-hover:scale-[1.05]" loading="<?= $i <= 4 ? 'eager' : 'lazy' ?>">
                        <span class="absolute bottom-3 left-3 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-white/90 backdrop-blur <?= $tone['ink'] ?>"><?= icon($icons[$slug], 'h-5 w-5') ?></span>
                        <?php if (!empty($condition['tms'])): ?>
                            <span class="absolute right-3 top-3 rounded-full bg-white px-2.5 py-1 text-[10px] font-bold uppercase tracking-wider text-leaf-deep">TMS available</span>
                        <?php endif; ?>
                    </div>
                    <h2 class="mt-6 font-serif text-[1.65rem] leading-tight"><?= e($condition['name']) ?></h2>
                    <p class="mt-2 text-[15px] leading-relaxed text-ink-soft"><?= e($condition['blurb']) ?></p>
                    <div class="condition-reveal">
                        <div class="flex flex-wrap gap-1.5 pt-4">
                            <?php foreach ($condition['services'] as $serviceKey): ?>
                                <span class="rounded-full bg-white/80 px-2.5 py-1 text-xs font-medium text-ink-soft"><?= e($services[$serviceKey]['name']) ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <span class="mt-6 inline-flex items-center gap-1.5 text-sm font-semibold text-ink">
                        Learn more <span aria-hidden="true" class="transition group-hover:translate-x-1">→</span>
                    </span>
                </a>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ============ NOT LISTED ============ -->
    <section class="mx-auto max-w-site px-5 pb-14 sm:px-8 lg:pb-20" aria-labelledby="notlisted-title">
        <div class="reveal grid gap-6 rounded-4xl bg-prairie-deep p-8 text-cream-100 sm:p-12 lg:grid-cols-12 lg:items-center">
            <div class="lg:col-span-8">
                <p class="eyebrow text-wheat">Don’t see what you’re looking for?</p>
                <h2 id="notlisted-title" class="mt-4 font-serif text-3xl font-light leading-tight text-white sm:text-4xl">This list isn’t everything we help with.</h2>
                <p class="mt-4 max-w-2xl text-[16.5px] leading-relaxed text-cream-100/80">Our therapists and providers also work with self-esteem, anger, life transitions, personality disorders, emotional regulation, personal and spiritual growth, and more. Reach out and we’ll help you find the right fit.</p>
            </div>
            <div class="flex flex-col gap-3 lg:col-span-4 lg:items-end">
                <a href="<?= e($site['schedule_url']) ?>" target="_blank" rel="noopener" class="btn-light w-full justify-center lg:w-auto">Schedule an Appointment</a>
                <a href="<?= e($site['phone_href']) ?>" class="btn-glass w-full justify-center lg:w-auto">Call <?= e($site['phone']) ?></a>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/../includes/partials/visit-cta.php'; ?>

</main>

<script type="application/ld+json">
<?= json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'CollectionPage',
    'name' => 'Conditions We Treat',
    'url' => $site['url'] . $canonical_path,
    'description' => $page_description,
    'hasPart' => array_values(array_map(fn ($slug, $c) => [
        '@type' => 'MedicalWebPage', 'name' => $c['name'], 'url' => $site['url'] . '/conditions/' . $slug . '/',
    ], array_keys($conditions), $conditions)),
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>
