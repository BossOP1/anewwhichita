<?php
require __DIR__ . '/../includes/config.php';

$page_title       = 'Contact ANew Mental Health | 8080 E Central Ave, Wichita, KS';
$page_description = 'Contact ANew Mental Health in Wichita, Kansas. Schedule an appointment, call (316) 260-3777, find directions to 8080 E Central Ave, Suite 190, or reach our client portals.';
$canonical_path   = '/contact-us/';
$current_page     = 'contact';
$og_image         = '/assets/images/office/front-desk.jpg';

$address_full = $site['street'] . ', ' . $site['city'] . ', ' . $site['region'] . ' ' . $site['postal'];
$map_embed    = 'https://maps.google.com/maps?q=' . rawurlencode('ANew Mental Health, ' . $address_full) . '&z=15&output=embed';

$routes = [
    ['New to ANew?', 'Send a quick inquiry and our team will reach out shortly to get you scheduled with the right provider.', [['Schedule an Appointment', $site['schedule_url'], true]]],
    ['Prefer to talk?', 'Call our front desk. We’re happy to answer questions, check your insurance, or help you find a starting point.', [['Call ' . $site['phone'], $site['phone_href'], false]]],
    ['Already a client?', 'Message your provider, manage appointments and complete paperwork in your client portal.', [['Therapy portal', $site['portal_therapy'], true], ['Medication portal', $site['portal_medication'], true]]],
    ['Referring a patient?', 'Submit our professional referral form, or fax referrals to ' . $site['fax'] . '.', [['Provider referral form', $site['referral_url'], false]]],
    ['Insurance or billing?', 'See which plans we accept, or call and our billing team will help.', [['Insurance & payment', '/insurance/', false]]],
    ['Want to join our team?', 'Therapists, interns and medication providers welcome.', [['Careers at ANew', '/mental-health-careers-wichita-ks/', false]]],
];

/* The page has its own map, so the footer's visit/map row is skipped here. */
$hide_footer_visit = true;

$front_desk = ['judy-smothermon', 'laurie-pelham', 'denise-maier', 'cari-smothermon'];

include __DIR__ . '/../includes/header.php';
?>

<main id="main">

    <!-- ============ PAGE HERO ============ -->
    <section class="mx-auto max-w-site px-5 pb-14 pt-10 sm:px-8 lg:pb-16 lg:pt-14" aria-labelledby="page-title">
        <div class="grid items-center gap-12 lg:grid-cols-12 lg:gap-20">
            <div class="lg:col-span-6">
                <nav aria-label="Breadcrumb" class="reveal text-sm text-ink-mute">
                    <a href="/" class="hover:text-ink">Home</a> <span aria-hidden="true">/</span> <span class="text-ink">Contact</span>
                </nav>
                <p class="eyebrow reveal mt-8 text-leaf-deep">Contact ANew</p>
                <h1 id="page-title" class="reveal mt-5 font-serif text-[2.6rem] font-light leading-[1.05] tracking-tight sm:text-6xl lg:text-[4.2rem]">
                    We’d love to <em class="italic text-clay">hear from you.</em>
                </h1>
                <p class="reveal mt-7 max-w-xl text-lg leading-relaxed text-ink-soft">
                    Ready to schedule, have a question, or not sure where to start? Our front desk team is here to help.
                </p>
                <dl class="reveal mt-10 grid gap-6 sm:grid-cols-2">
                    <div>
                        <dt class="text-xs font-semibold uppercase tracking-[0.16em] text-ink-mute">Phone</dt>
                        <dd class="mt-1.5"><a href="<?= e($site['phone_href']) ?>" class="font-serif text-3xl hover:text-clay"><?= e($site['phone']) ?></a></dd>
                    </div>
                    <div>
                        <dt class="text-xs font-semibold uppercase tracking-[0.16em] text-ink-mute">Visit</dt>
                        <dd class="mt-1.5 text-[16px] leading-snug"><?= e($site['street']) ?><br><?= e($site['city']) ?>, <?= e($site['region']) ?> <?= e($site['postal']) ?></dd>
                    </div>
                    <div>
                        <dt class="text-xs font-semibold uppercase tracking-[0.16em] text-ink-mute">Fax</dt>
                        <dd class="mt-1.5 text-[16px]"><?= e($site['fax']) ?></dd>
                    </div>
                    <div>
                        <dt class="text-xs font-semibold uppercase tracking-[0.16em] text-ink-mute">Email</dt>
                        <dd class="mt-1.5 text-[16px]"><a href="mailto:<?= e($site['email']) ?>" class="underline decoration-cream-300 underline-offset-4 hover:text-ink"><?= e($site['email']) ?></a></dd>
                    </div>
                </dl>
            </div>
            <figure class="reveal lg:col-span-6" style="--d: 120ms">
                <img src="/assets/images/office/front-desk.jpg" alt="Two smiling ANew team members at the front desk" class="aspect-[4/3] w-full rounded-4xl object-cover object-[50%_40%]" fetchpriority="high">
            </figure>
        </div>
    </section>

    <!-- ============ HOW CAN WE HELP ============ -->
    <section class="mx-auto max-w-site px-5 py-14 sm:px-8 lg:py-20" aria-labelledby="help-title">
        <div class="grid gap-10 lg:grid-cols-12 lg:gap-16">
            <div class="lg:col-span-4">
                <p class="eyebrow reveal text-leaf-deep">How can we help?</p>
                <h2 id="help-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-5xl">The fastest way to <em class="italic text-clay">Find the right person to help you.</em></h2>
            </div>
            <ul class="grid gap-x-12 sm:grid-cols-2 lg:col-span-8">
                <?php foreach ($routes as $i => [$title, $text, $actions]): ?>
                    <li class="reveal border-t border-cream-200 py-7" style="--d: <?= ($i % 2) * 60 ?>ms">
                        <h3 class="font-serif text-2xl"><?= e($title) ?></h3>
                        <p class="mt-2 text-[15.5px] leading-relaxed text-ink-soft"><?= e($text) ?></p>
                        <div class="mt-4 flex flex-wrap gap-x-5 gap-y-2 text-sm font-semibold">
                            <?php foreach ($actions as [$label, $href, $external]): ?>
                                <a href="<?= e($href) ?>" <?= $external ? 'target="_blank" rel="noopener"' : '' ?> class="group inline-flex items-center gap-1.5 text-ink underline-offset-4 hover:underline"><?= e($label) ?> <span aria-hidden="true" class="transition group-hover:translate-x-1">→</span></a>
                            <?php endforeach; ?>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

    <!-- ============ MAP ============ -->
    <section class="px-3 sm:px-4" aria-labelledby="map-title">
        <div class="grid overflow-hidden rounded-4xl bg-cream-100 lg:grid-cols-12">
            <div class="flex flex-col justify-between gap-10 p-8 sm:p-12 lg:col-span-5">
                <div>
                    <p class="eyebrow reveal text-leaf-deep">Find us</p>
                    <h2 id="map-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-5xl">On East Central, <em class="italic text-clay">in east Wichita.</em></h2>
                    <address class="reveal mt-6 text-[17px] not-italic leading-relaxed text-ink-soft">
                        ANew Mental Health<br><?= e($site['street']) ?><br><?= e($site['city']) ?>, <?= e($site['region']) ?> <?= e($site['postal']) ?>
                    </address>
                    <!-- TODO: add office hours and parking/entrance notes once confirmed with the office. -->
                </div>
                <div class="reveal flex flex-col gap-3 sm:flex-row lg:flex-col xl:flex-row">
                    <a href="<?= e($site['maps_url']) ?>" target="_blank" rel="noopener" class="btn-primary">Get directions</a>
                </div>
            </div>
            <div class="min-h-[360px] lg:col-span-7">
                <iframe src="<?= e($map_embed) ?>" title="Map showing ANew Mental Health at <?= e($address_full) ?>" class="h-full min-h-[360px] w-full border-0" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <!-- ============ FRONT DESK TEAM ============ -->
    <section class="mx-auto max-w-site px-5 py-14 sm:px-8 lg:py-20" aria-labelledby="desk-title">
        <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
            <div class="max-w-2xl">
                <p class="eyebrow reveal text-leaf-deep">The voices you’ll hear</p>
                <h2 id="desk-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-5xl">Meet our front office team.</h2>
            </div>
            <p class="reveal max-w-md text-[17px] leading-relaxed text-ink-soft">When you call or walk in, these are the people who’ll greet you, help you get settled, and make sure you’re taken care of.</p>
        </div>
        <ul class="mt-10 grid grid-cols-2 gap-x-4 gap-y-8 lg:grid-cols-4">
            <?php foreach ($front_desk as $i => $slug): $p = $team[$slug]; ?>
                <li class="reveal" style="--d: <?= $i * 60 ?>ms">
                    <button type="button" class="group block w-full text-left" data-person="<?= e($slug) ?>" aria-haspopup="dialog">
                        <span class="block overflow-hidden rounded-3xl bg-cream-200">
                            <img src="/assets/images/team/<?= e($p['photo']) ?>" alt="" class="aspect-[4/5] w-full object-cover transition duration-700 group-hover:scale-[1.04]" style="object-position: <?= e($p['pos']) ?>" loading="lazy">
                        </span>
                        <span class="mt-4 block font-serif text-xl leading-tight"><?= e($p['name']) ?></span>
                        <span class="mt-1 block text-sm text-ink-soft"><?= e($p['role']) ?></span>
                    </button>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>

</main>

<?php include __DIR__ . '/../includes/partials/person-dialog.php'; ?>

<script type="application/ld+json">
<?= json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'ContactPage',
            'name' => 'Contact ANew Mental Health',
            'url' => $site['url'] . $canonical_path,
            'description' => $page_description,
        ],
        [
            '@type' => 'MedicalClinic',
            'name' => $site['name'],
            'url' => $site['url'],
            'telephone' => '+1-316-260-3777',
            'faxNumber' => '+1-316-260-9382',
            'email' => $site['email'],
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => $site['street'],
                'addressLocality' => $site['city'],
                'addressRegion' => $site['region'],
                'postalCode' => $site['postal'],
                'addressCountry' => 'US',
            ],
            'hasMap' => $site['maps_url'],
        ],
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $site['url'] . '/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Contact', 'item' => $site['url'] . $canonical_path],
        ]],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>
