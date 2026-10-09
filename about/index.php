<?php
require __DIR__ . '/../includes/config.php';

$page_title       = 'About ANew Mental Health | Our Story & Mission | Wichita, KS';
$page_description = 'ANew is a family-run, multidisciplinary mental health practice in Wichita, Kansas. Meet the people behind ANew, our mission, and the values that guide our care.';
$canonical_path   = '/about/';
$current_page     = 'about';

$values = [
    ['Compassion first', 'We meet every person with warmth and without judgment — whatever brought you through our door.'],
    ['Evidence-based care', 'Accurate diagnosis and proven treatment, guided by clinical integrity at every step.'],
    ['The whole person', 'Mind, body, family and community. Mental health doesn’t exist in isolation, so neither does our care.'],
    ['Stronger together', 'Therapists, medication providers and support staff work side by side on one plan for you.'],
];

include __DIR__ . '/../includes/header.php';
?>

<main id="main">

    <!-- ============ PAGE HERO ============ -->
    <section class="mx-auto max-w-site px-5 pb-14 pt-10 sm:px-8 lg:pb-20 lg:pt-14" aria-labelledby="about-title">
        <div class="grid items-center gap-12 lg:grid-cols-12 lg:gap-20">
            <div class="lg:col-span-6">
                <nav aria-label="Breadcrumb" class="reveal text-sm text-ink-mute">
                    <a href="/" class="hover:text-ink">Home</a> <span aria-hidden="true">/</span> <span class="text-ink">About</span>
                </nav>
                <p class="eyebrow reveal mt-8 text-leaf-deep">About ANew</p>
                <h1 id="about-title" class="reveal mt-5 font-serif text-[2.6rem] font-light leading-[1.05] tracking-tight sm:text-6xl">
                    A family practice, built because <em class="italic text-clay">people matter.</em>
                </h1>
                <p class="reveal mt-7 max-w-lg text-lg leading-relaxed text-ink-soft">
                    A multidisciplinary mental health team in Wichita, Kansas, caring for children and their families, adolescents and adults — in person or by telehealth.
                </p>
                <a href="<?= e($site['schedule_url']) ?>" target="_blank" rel="noopener" class="reveal btn-primary mt-9">Schedule an Appointment</a>
            </div>
            <figure class="reveal lg:col-span-6" style="--d: 120ms">
                <img src="/assets/images/office/reception.jpg" alt="The ANew reception area, with the ANew logo on the wall and a coffee station" class="aspect-[4/3] w-full rounded-4xl object-cover" fetchpriority="high">
            </figure>
        </div>
    </section>

    <!-- ============ OUR STORY ============ -->
    <section id="people" class="scroll-mt-24 px-3 sm:px-4" aria-labelledby="story-title">
        <div class="rounded-4xl bg-prairie-deep text-cream-100">
            <div class="mx-auto grid max-w-site items-center gap-14 px-5 py-14 sm:px-8 lg:grid-cols-12 lg:gap-20 lg:py-20">
                <div class="lg:col-span-6">
                    <p class="eyebrow reveal text-wheat">Our story</p>
                    <h2 id="story-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.08] tracking-tight text-white sm:text-5xl">Two careers spent caring for people. <em class="italic text-wheat">One practice built around them.</em></h2>
                    <!-- TODO: confirm founding year and details with Wes & Cari, then expand. -->
                    <div class="reveal mt-8 max-w-lg space-y-5 text-[17px] leading-relaxed text-cream-100/85">
                        <p>ANew was started by Wes and Cari Smothermon. Wes came to therapy from youth ministry, with a passion for supporting teenagers and families through hard seasons. Cari is a registered nurse with over a decade in women’s health who has always gone above and beyond for her patients.</p>
                        <p>Together they built the practice they’d want for their own family — and it still is one. Wes sees clients, Cari runs the day-to-day, and Judy Smothermon greets you at the front desk.</p>
                    </div>
                </div>
                <figure class="reveal lg:col-span-6" style="--d: 120ms">
                    <div class="grid grid-cols-2 gap-4">
                        <img src="/assets/images/team/<?= e($team['cari-smothermon']['photo']) ?>" alt="Cari Smothermon, RN, BSN, co-founder of ANew" class="aspect-[3/4] w-full rounded-3xl object-cover object-[50%_25%]" loading="lazy">
                        <img src="/assets/images/team/<?= e($team['wes-smothermon']['photo']) ?>" alt="Wes Smothermon, LCMFT, co-founder of ANew" class="mt-12 aspect-[3/4] w-full rounded-3xl object-cover object-[50%_20%]" loading="lazy">
                    </div>
                    <figcaption class="mt-5 text-sm text-cream-100/70">Cari &amp; Wes Smothermon, co-founders</figcaption>
                </figure>
            </div>
        </div>
    </section>

    <!-- ============ MISSION + VALUES ============ -->
    <section class="mx-auto max-w-site px-5 py-14 sm:px-8 lg:py-20" aria-labelledby="mission-title">
        <div class="mx-auto max-w-3xl text-center">
            <p class="eyebrow reveal text-leaf-deep">Our mission</p>
            <h2 id="mission-title" class="reveal mt-5 font-serif text-3xl font-light leading-[1.2] tracking-tight sm:text-[2.6rem]">
                To provide compassionate, ethical and effective mental health care that <em class="italic text-clay">transforms and empowers people.</em>
            </h2>
        </div>
        <ul class="mt-12 grid gap-x-10 sm:grid-cols-2 lg:grid-cols-4">
            <?php foreach ($values as $i => [$title, $text]): ?>
                <li class="reveal border-t border-cream-200 py-6" style="--d: <?= $i * 70 ?>ms">
                    <h3 class="font-serif text-xl"><?= e($title) ?></h3>
                    <p class="mt-2 text-[15px] leading-relaxed text-ink-soft"><?= e($text) ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>

    <!-- ============ HOW CARE WORKS ============ -->
    <section class="px-3 sm:px-4" aria-labelledby="how-title">
        <div class="rounded-4xl bg-cream-100">
            <div class="mx-auto grid max-w-site gap-12 px-5 py-14 sm:px-8 lg:grid-cols-12 lg:gap-20 lg:py-20">
                <div class="lg:col-span-5">
                    <p class="eyebrow reveal text-leaf-deep">How care works</p>
                    <h2 id="how-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-5xl">One team. <em class="italic text-clay">One plan.</em> Built around you.</h2>
                </div>
                <ol class="lg:col-span-7">
                    <?php foreach ([
                        ['Reach out', 'Send a quick inquiry through our secure scheduling form, or give us a call. Our team will reach out to you shortly.'],
                        ['We find the right fit', 'Not sure if you need therapy, medication management or an assessment? You don’t have to know — we’ll match you with the right provider.'],
                        ['Your team works together', 'Therapists and medication providers coordinate behind the scenes, so your care stays connected as you grow.'],
                    ] as $i => [$title, $text]): ?>
                        <li class="reveal grid grid-cols-[2.5rem_1fr] gap-4 border-t border-cream-300 py-6 first:border-t-0 first:pt-0" style="--d: <?= $i * 80 ?>ms">
                            <span class="pt-1 font-serif text-base text-ink-mute">0<?= $i + 1 ?></span>
                            <div>
                                <h3 class="font-serif text-2xl"><?= e($title) ?></h3>
                                <p class="mt-2 text-[15.5px] leading-relaxed text-ink-soft"><?= e($text) ?></p>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ol>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/../includes/partials/step-inside.php'; ?>

    <!-- ============ TEAM + CAREERS ============ -->
    <section class="mx-auto max-w-site px-5 py-14 sm:px-8 lg:py-20" aria-labelledby="team-title">
        <div class="grid gap-10 border-t border-cream-200 pt-10 md:grid-cols-2 md:gap-16">
            <div class="reveal">
                <h2 id="team-title" class="font-serif text-3xl font-light leading-tight tracking-tight">Not one provider. <em class="italic text-clay">A whole team.</em></h2>
                <p class="mt-3 max-w-md text-[15.5px] leading-relaxed text-ink-soft">Therapists, medication providers and support staff, each with their own lanes of expertise.</p>
                <a href="/meet-our-team/" class="mt-5 inline-flex items-center gap-1.5 text-sm font-semibold text-ink underline-offset-4 hover:underline">Meet our team <span aria-hidden="true">→</span></a>
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

<script type="application/ld+json">
<?= json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'AboutPage',
    'name' => 'About ANew Mental Health',
    'url' => $site['url'] . $canonical_path,
    'description' => $page_description,
    'mainEntity' => [
        '@type' => 'MedicalClinic',
        'name' => $site['name'],
        'founder' => [
            ['@type' => 'Person', 'name' => 'Wes Smothermon', 'jobTitle' => 'LCMFT'],
            ['@type' => 'Person', 'name' => 'Cari Smothermon', 'jobTitle' => 'RN, BSN'],
        ],
    ],
    'breadcrumb' => [
        '@type' => 'BreadcrumbList',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $site['url'] . '/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'About', 'item' => $site['url'] . $canonical_path],
        ],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>
