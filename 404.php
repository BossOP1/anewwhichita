<?php
require __DIR__ . '/includes/config.php';

$page_title       = 'Page Not Found | ANew Mental Health';
$page_description = 'We couldn’t find that page.';
$noindex          = true;
$canonical_path   = '/404/';

$popular = [
    ['Schedule an Appointment', $site['schedule_url']], ['Conditions we treat', '/conditions/'],
    ['Talk therapy', '/talk-therapy/'], ['Medication management', '/mental-health-medication-management/'],
    ['Meet our team', '/meet-our-team/'], ['Insurance & payment', '/insurance/'], ['Contact us', '/contact-us/'],
];

include __DIR__ . '/includes/header.php';
?>
<main id="main" class="mx-auto max-w-site px-5 py-20 sm:px-8 lg:py-28">
    <div class="grid items-center gap-12 lg:grid-cols-12">
        <div class="lg:col-span-6">
            <p class="eyebrow text-clay">404 · Page not found</p>
            <h1 class="mt-5 font-serif text-5xl font-light leading-[1.05] tracking-tight sm:text-6xl">This path <em class="italic text-prairie">wandered off.</em></h1>
            <p class="mt-6 max-w-lg text-lg leading-relaxed text-ink-soft">The page you’re looking for may have moved as we refreshed our website. Here are a few places to pick up the trail.</p>
            <ul class="mt-8 flex flex-wrap gap-2">
                <?php foreach ($popular as [$label, $href]): ?>
                    <li><a href="<?= e($href) ?>" class="inline-flex rounded-full border border-cream-300 bg-white px-4 py-2.5 text-sm hover:border-ink"><?= e($label) ?></a></li>
                <?php endforeach; ?>
            </ul>
            <a href="/" class="btn-primary mt-10">Back to home</a>
        </div>
        <div class="lg:col-span-6">
            <img src="/assets/images/scenery/flint-hills-path.jpg" alt="A footpath winding through the Flint Hills prairie" class="aspect-[4/3] w-full rounded-4xl object-cover">
        </div>
    </div>
</main>
<?php include __DIR__ . '/includes/footer.php';
