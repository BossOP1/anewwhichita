<?php
require __DIR__ . '/../includes/config.php';

$page_title       = 'About ANew Mental Health | Our Story & Mission | Wichita, KS';
$page_description = 'ANew is a family-run, multidisciplinary mental health practice in Wichita, Kansas. Meet the people behind ANew, our mission, and the values that guide our care.';
$canonical_path   = '/about/';
$current_page     = 'about';

$mosaic = ['wes-smothermon', 'ashley-ludlum', 'sierra-fair', 'katlynn-miller', 'judy-smothermon', 'chuck-edwards'];

$values = [
    ['Compassion first', 'We meet every person with warmth and without judgment — whatever brought you through our door.'],
    ['Ethical, evidence-based care', 'Accurate diagnosis and proven treatment, guided by clinical integrity at every step.'],
    ['The whole person', 'Mind, body, spirituality, family and community. Mental health doesn’t exist in isolation, so neither does our care.'],
    ['Stronger together', 'Therapists, medication providers and support staff work side by side on one coordinated plan for you.'],
    ['Authenticity & respect', 'We value authenticity, clinical integrity, and a culture of mutual respect — with clients and with each other.'],
    ['Home, not a hospital', 'Our office is intentionally home-like: soft chairs, natural light, and a front desk that knows your name.'],
];

$audiences = [
    ['Children & families', '/assets/images/people/child.jpg', 'Play therapy, parenting support and care for the whole family.'],
    ['Adolescents', '/assets/images/people/bipolar.jpg', 'A safe place for teens to be honest about what they’re carrying.'],
    ['Adults', '/assets/images/people/anxiety.jpg', 'Therapy and medication care for every season of adult life.'],
    ['Couples', '/assets/images/people/relationships.jpg', 'Rebuilding trust, communication and connection, together.'],
];

include __DIR__ . '/../includes/header.php';
?>

<main id="main">

    <!-- ============ PAGE HERO ============ -->
    <section class="mx-auto max-w-site px-5 pb-14 pt-10 sm:px-8 lg:pb-20 lg:pt-14" aria-labelledby="about-title">
        <div class="grid items-center gap-12 lg:grid-cols-12">
            <div class="lg:col-span-6">
                <nav aria-label="Breadcrumb" class="reveal text-sm text-ink-mute">
                    <a href="/" class="hover:text-ink">Home</a> <span aria-hidden="true">/</span> <span class="text-ink">About</span>
                </nav>
                <p class="eyebrow reveal mt-8 text-leaf-deep">About ANew</p>
                <h1 id="about-title" class="reveal mt-5 font-serif text-[2.6rem] font-light leading-[1.05] tracking-tight sm:text-6xl lg:text-[4.4rem]">
                    A family practice, built because <em class="italic text-clay">people matter.</em>
                </h1>
                <p class="reveal mt-7 max-w-xl text-lg leading-relaxed text-ink-soft">
                    ANew Mental Health is a multidisciplinary mental health team in Wichita, Kansas, passionate about whole-person care. We recognize that mental health doesn’t exist in isolation — it’s deeply connected to family, community, and physical well-being.
                </p>
                <div class="reveal mt-9 flex flex-col gap-3 sm:flex-row">
                    <a href="<?= e($site['schedule_url']) ?>" target="_blank" rel="noopener" class="btn-primary">Schedule an Appointment</a>
                    <a href="#people" class="btn-ghost">Meet the people behind ANew</a>
                </div>
            </div>

            <div class="reveal lg:col-span-6" style="--d: 120ms">
                <div class="grid grid-cols-3 gap-3">
                    <?php foreach ($mosaic as $i => $slug): $p = $team[$slug]; ?>
                        <img src="/assets/images/team/<?= e($p['photo']) ?>" alt="<?= e($p['name']) ?>" class="aspect-[4/5] w-full rounded-3xl object-cover <?= $i % 3 === 1 ? 'translate-y-6' : '' ?>" style="object-position: <?= e($p['pos']) ?>" loading="<?= $i < 3 ? 'eager' : 'lazy' ?>">
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ OUR STORY ============ -->
    <section id="people" class="scroll-mt-24 px-3 sm:px-4" aria-labelledby="story-title">
        <div class="rounded-4xl bg-prairie-deep text-cream-100">
            <div class="mx-auto grid max-w-site items-center gap-14 px-5 py-14 sm:px-8 lg:grid-cols-12 lg:py-20">
                <div class="reveal relative order-last lg:order-first lg:col-span-5">
                    <img src="/assets/images/team/<?= e($team['wes-smothermon']['photo']) ?>" alt="Wes Smothermon, LCMFT, co-founder of ANew" class="aspect-[4/5] w-full rounded-4xl object-cover object-[50%_20%]" loading="lazy">
                    <figure class="absolute -bottom-8 -right-3 w-[46%] overflow-hidden rounded-3xl border-4 border-prairie-deep sm:-right-8">
                        <img src="/assets/images/team/<?= e($team['cari-smothermon']['photo']) ?>" alt="Cari Smothermon, RN, BSN, co-founder of ANew" class="aspect-square w-full object-cover object-[50%_25%]" loading="lazy">
                    </figure>
                </div>

                <div class="lg:col-span-7 lg:pl-8">
                    <p class="eyebrow reveal text-wheat">Our story</p>
                    <h2 id="story-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.08] tracking-tight text-white sm:text-5xl">Two careers spent caring for people. <em class="italic text-wheat">One practice built around them.</em></h2>
                    <!-- TODO: confirm founding year and details with Wes & Cari, then expand. -->
                    <div class="reveal mt-8 space-y-5 text-[17px] leading-relaxed text-cream-100/85">
                        <p>ANew was started by Wes and Cari Smothermon. Before becoming a therapist, Wes served in youth ministry, where he developed a passion for supporting teenagers and their families through difficult seasons. Cari is a registered nurse with over a decade of experience in women’s health — specifically labor and delivery — and it has always been her passion to go above and beyond to make every patient feel well cared for.</p>
                        <p>Together they set out to build the kind of mental health practice they’d want for their own family: one with a whole team behind every person, care that’s personal instead of rushed, and an office that feels less like a clinic and more like being welcomed home.</p>
                        <p>Today ANew has grown into a full team of therapists, medication providers, counselor interns and office staff — and it’s still a family practice. Wes sees clients of his own, Cari runs the day-to-day, and Judy Smothermon greets you at the front desk.</p>
                    </div>
                    <blockquote class="reveal mt-10 border-l-2 border-wheat pl-6">
                        <p class="font-serif text-2xl font-light italic leading-snug text-white">“We are honored to be a part of your mental health journey and are looking forward to taking care of you.”</p>
                        <footer class="mt-4 text-xs font-semibold uppercase tracking-[0.16em] text-cream-100/60">Cari Smothermon, RN, BSN · Co-founder</footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ MISSION ============ -->
    <section class="mx-auto max-w-site px-5 py-14 sm:px-8 lg:py-20" aria-labelledby="mission-title">
        <div class="grid gap-4 lg:grid-cols-12">
            <div class="reveal flex flex-col justify-between rounded-4xl bg-cream-100 p-8 sm:p-12 lg:col-span-7">
                <p class="eyebrow text-clay">Our mission</p>
                <h2 id="mission-title" class="mt-6 font-serif text-3xl font-light leading-[1.2] tracking-tight sm:text-[2.6rem]">
                    To provide compassionate, ethical, and effective mental health care that <em class="italic text-prairie">transforms and empowers people.</em>
                </h2>
            </div>
            <div class="reveal flex flex-col justify-between gap-10 rounded-4xl bg-sky-soft p-8 sm:p-12 lg:col-span-5" style="--d: 100ms">
                <p class="eyebrow text-sky-deep">What we believe</p>
                <p class="font-serif text-2xl leading-snug text-ink">Every person deserves access to high-quality care — guided by accurate diagnosis, evidence-based treatment, and genuine human connection.</p>
            </div>
        </div>
    </section>

    <!-- ============ VALUES ============ -->
    <section class="border-y border-cream-200 bg-white" aria-labelledby="values-title">
        <div class="mx-auto max-w-site px-5 py-14 sm:px-8 lg:py-20">
            <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
                <div class="max-w-2xl">
                    <p class="eyebrow reveal text-leaf-deep">What guides us</p>
                    <h2 id="values-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-5xl">“Because people matter” isn’t a slogan. <em class="italic text-clay">It’s how we work.</em></h2>
                </div>
            </div>
            <ol class="mt-10 grid gap-x-10 gap-y-2 md:grid-cols-2 lg:grid-cols-3">
                <?php foreach ($values as $i => [$title, $text]): ?>
                    <li class="reveal border-t border-cream-200 py-7" style="--d: <?= ($i % 3) * 70 ?>ms">
                        <span class="font-serif text-lg text-clay">0<?= $i + 1 ?></span>
                        <h3 class="mt-3 font-serif text-2xl"><?= e($title) ?></h3>
                        <p class="mt-2 text-[15.5px] leading-relaxed text-ink-soft"><?= e($text) ?></p>
                    </li>
                <?php endforeach; ?>
            </ol>
        </div>
    </section>

    <!-- ============ WHO WE CARE FOR ============ -->
    <section class="mx-auto max-w-site px-5 py-14 sm:px-8 lg:py-20" aria-labelledby="who-title">
        <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
            <div class="max-w-2xl">
                <p class="eyebrow reveal text-sky-deep">Who we care for</p>
                <h2 id="who-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-5xl">Every age. Every season of life.</h2>
            </div>
            <p class="reveal max-w-md text-[17px] leading-relaxed text-ink-soft">ANew gladly welcomes children and their families, adolescents and adults — in person at our Wichita office or by telehealth.</p>
        </div>
        <div class="mt-10 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
            <?php foreach ($audiences as $i => [$title, $img, $text]): ?>
                <article class="reveal group overflow-hidden rounded-4xl bg-cream-100" style="--d: <?= $i * 70 ?>ms">
                    <div class="overflow-hidden">
                        <img src="<?= e($img) ?>" alt="" class="aspect-[4/3] w-full object-cover transition duration-700 group-hover:scale-[1.05]" loading="lazy">
                    </div>
                    <div class="p-6">
                        <h3 class="font-serif text-2xl"><?= e($title) ?></h3>
                        <p class="mt-2 text-[15px] leading-relaxed text-ink-soft"><?= e($text) ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ============ HOW CARE WORKS ============ -->
    <section class="px-3 sm:px-4" aria-labelledby="how-title">
        <div class="rounded-4xl bg-cream-100">
            <div class="mx-auto grid max-w-site gap-12 px-5 py-14 sm:px-8 lg:grid-cols-12 lg:py-20">
                <div class="lg:col-span-5">
                    <p class="eyebrow reveal text-clay">How care works at ANew</p>
                    <h2 id="how-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-5xl">One team. <em class="italic text-prairie">One plan.</em> Built around you.</h2>
                    <p class="reveal mt-6 text-[17px] leading-relaxed text-ink-soft">At the heart of great care is great collaboration. By combining our unique expertise and perspectives, we create a care plan that’s personalized, coordinated, and designed just for you.</p>
                    <figure class="reveal mt-8 overflow-hidden rounded-4xl">
                        <img src="/assets/images/office/therapy-session.jpg" alt="An ANew therapist in conversation with a client" class="aspect-[4/3] w-full object-cover" loading="lazy">
                    </figure>
                </div>
                <ol class="space-y-4 lg:col-span-7">
                    <?php foreach ([
                        ['Reach out', 'Send a quick inquiry through our secure scheduling form, or give us a call. Once it’s submitted, our team will reach out to you shortly.'],
                        ['We help you find the right fit', 'Not sure if you need therapy, medication management, an assessment or something else? You don’t have to know. We’ll help match you with the right provider.'],
                        ['Your team works together', 'Therapists and medication providers coordinate behind the scenes, so your care stays connected — and adjusts as you grow.'],
                    ] as $i => [$title, $text]): ?>
                        <li class="reveal flex gap-5 rounded-3xl bg-white p-6 sm:p-8" style="--d: <?= $i * 80 ?>ms">
                            <span class="inline-flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-prairie-deep font-serif text-xl text-wheat"><?= $i + 1 ?></span>
                            <div>
                                <h3 class="font-serif text-2xl"><?= e($title) ?></h3>
                                <p class="mt-2 text-[15.5px] leading-relaxed text-ink-soft"><?= e($text) ?></p>
                            </div>
                        </li>
                    <?php endforeach; ?>
                    <li class="reveal flex flex-col gap-4 rounded-3xl border border-cream-300 p-6 sm:flex-row sm:items-center sm:justify-between sm:p-8">
                        <p class="text-[15.5px] text-ink-soft"><strong class="font-semibold text-ink">Services:</strong>
                            <?php $links = []; foreach ($services as $svc) { $links[] = '<a class="underline decoration-cream-300 underline-offset-4 hover:text-ink" href="' . e($svc['url']) . '">' . e($svc['name']) . '</a>'; } echo implode(' · ', $links); ?>
                        </p>
                    </li>
                </ol>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/../includes/partials/step-inside.php'; ?>

    <!-- ============ TEAM + CAREERS ============ -->
    <section class="mx-auto max-w-site px-5 py-14 sm:px-8 lg:py-20" aria-labelledby="team-title">
        <div class="grid gap-4 lg:grid-cols-12">
            <div class="reveal rounded-4xl border border-cream-200 bg-white p-8 sm:p-10 lg:col-span-8">
                <p class="eyebrow text-clay">Our team</p>
                <h2 id="team-title" class="mt-5 font-serif text-3xl font-light leading-tight tracking-tight sm:text-4xl">Not one provider. A whole team with lanes of expertise.</h2>
                <ul class="mt-8 flex flex-wrap gap-2.5" aria-label="ANew team members">
                    <?php foreach ($team as $slug => $p): ?>
                        <li>
                            <a href="/meet-our-team/#<?= e($slug) ?>" title="<?= e($p['name'] . ($p['creds'] ? ', ' . $p['creds'] : '')) ?>" class="block">
                                <img src="/assets/images/team/<?= e($p['photo']) ?>" alt="<?= e($p['name']) ?>" class="h-14 w-14 rounded-full object-cover ring-2 ring-white transition hover:scale-110 sm:h-16 sm:w-16" style="object-position: <?= e($p['pos']) ?>" loading="lazy">
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <a href="/meet-our-team/" class="btn-primary mt-8">Meet our team</a>
            </div>
            <div class="reveal flex flex-col justify-between gap-8 rounded-4xl bg-prairie-deep p-8 text-cream-100 sm:p-10 lg:col-span-4" style="--d: 100ms">
                <div>
                    <p class="eyebrow text-wheat">Careers</p>
                    <p class="mt-5 font-serif text-2xl leading-snug text-white">“We’re not just hiring providers — we’re building a community of care.”</p>
                    <p class="mt-4 text-sm leading-relaxed text-cream-100/75">Therapists, interns, medication providers and student NPs: if you’re looking for a mental health career in Wichita, we’d love to talk.</p>
                </div>
                <a href="/mental-health-careers-wichita-ks/" class="btn-light self-start">Join the ANew team</a>
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
