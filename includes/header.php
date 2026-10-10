<?php
/** @var array $site @var array $services */
$page_title       = $page_title ?? $site['name'] . ' | Therapy & Medication Management in Wichita, KS';
$page_description = $page_description ?? 'ANew is a full-service mental health practice in Wichita, Kansas offering therapy, medication management, ADHD assessment, EMDR and now TMS therapy for children, adolescents and adults.';
?>
<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>document.documentElement.classList.add('js');</script>
    <title><?= e($page_title) ?></title>
    <meta name="description" content="<?= e($page_description) ?>">
    <?php if (!empty($noindex)): ?><meta name="robots" content="noindex">
    <?php endif; ?>    <link rel="canonical" href="<?= e($site['url'] . ($canonical_path ?? '/')) ?>">
    <link rel="icon" href="/assets/images/brand/favicon.png">
    <meta name="theme-color" content="#FBF8F3">

    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= e($page_title) ?>">
    <meta property="og:description" content="<?= e($page_description) ?>">
    <meta property="og:image" content="<?= e($site['url'] . ($og_image ?? $hero_image)) ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300..600;1,9..144,300..500&family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind (Play CDN for build/review). For production, compile with the Tailwind CLI using the same config. -->
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        cream:   { 50: '#FBF8F3', 100: '#F5EFE6', 200: '#ECE3D4', 300: '#DFD2BC' },
                        ink:     { DEFAULT: '#1E2A2C', soft: '#4B5759', mute: '#7A8486' },
                        clay:    { DEFAULT: '#B5784A', soft: '#E9D5C2', deep: '#8A5531' },
                        wheat:   { DEFAULT: '#E2C487', soft: '#F3E6C9' },
                        prairie: { DEFAULT: '#56664A', soft: '#DDE3D3', deep: '#2F3B2A' },
                        sky:     { DEFAULT: '#2AA4DC', soft: '#DCEFF8', deep: '#16719C' },   /* logo blue */
                        leaf:    { DEFAULT: '#3E9F48', soft: '#DFF0D9', deep: '#2B7433', lime: '#8CC63F' }, /* logo greens */
                    },
                    fontFamily: {
                        serif: ['Fraunces', 'Georgia', 'serif'],
                        sans:  ['Manrope', 'system-ui', 'sans-serif'],
                    },
                    maxWidth: { site: '84rem' },
                    borderRadius: { '4xl': '2rem' },
                },
            },
        };
    </script>
    <link rel="stylesheet" href="/assets/css/site.css">

    <script type="application/ld+json">
    <?= json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'MedicalClinic',
        'name' => $site['name'],
        'alternateName' => 'ANew Wichita',
        'slogan' => $site['tagline'],
        'url' => $site['url'],
        'logo' => $site['url'] . '/assets/images/brand/logo-color.png',
        'telephone' => '+1-316-260-3777',
        'faxNumber' => '+1-316-260-9382',
        'medicalSpecialty' => 'Psychiatric',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => $site['street'],
            'addressLocality' => $site['city'],
            'addressRegion' => $site['region'],
            'postalCode' => $site['postal'],
            'addressCountry' => 'US',
        ],
        'areaServed' => ['Wichita, KS', 'Sedgwick County, KS', 'Kansas'],
        'availableService' => array_map(fn ($s) => ['@type' => 'MedicalTherapy', 'name' => $s['name']], array_values($services)),
        'sameAs' => [$site['facebook'], $site['instagram']],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
    </script>
</head>
<body class="bg-cream-50 font-sans text-ink antialiased selection:bg-wheat-soft">
<a href="#main" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-[100] focus:rounded-full focus:bg-ink focus:px-5 focus:py-3 focus:text-white">Skip to content</a>

<!-- Announcement -->
<div class="relative z-50 bg-prairie-deep text-cream-100">
    <div class="mx-auto flex max-w-site items-center justify-between gap-4 px-5 py-2.5 text-[13px] sm:px-8">
        <a href="<?= e($services['tms']['url']) ?>" class="group inline-flex items-center gap-2.5">
            <span class="rounded-full bg-leaf-lime px-2 py-0.5 text-[10px] font-bold uppercase tracking-[0.14em] text-prairie-deep">New</span>
            <span>Now offering <strong class="font-semibold">TMS Therapy</strong> at ANew<span class="hidden sm:inline"> — learn whether it may be right for you</span></span>
            <span aria-hidden="true" class="transition group-hover:translate-x-0.5">→</span>
        </a>
        <div class="hidden items-center gap-6 md:flex">
            <a href="<?= e($site['maps_url']) ?>" class="opacity-80 hover:opacity-100" target="_blank" rel="noopener"><?= e($site['street']) ?>, Wichita</a>
            <a href="<?= e($site['phone_href']) ?>" class="font-semibold hover:text-white"><?= e($site['phone']) ?></a>
        </div>
    </div>
</div>

<!-- Header -->
<header id="site-header" class="sticky top-0 z-40 border-b border-transparent transition-all duration-300" data-header>
    <div class="mx-auto flex max-w-site items-center justify-between gap-4 px-5 py-3.5 sm:px-8 xl:gap-6">
        <a href="/" class="flex items-center gap-3" aria-label="ANew Mental Health — home">
            <img src="/assets/images/brand/logo-color.png" alt="ANew" class="h-14 w-auto" width="45" height="56">
            <span class="block whitespace-nowrap border-l border-cream-300 pl-3 text-[10px] font-semibold uppercase leading-[1.5] tracking-[0.18em] text-ink-mute sm:text-[10.5px] sm:tracking-[0.2em] lg:hidden min-[1400px]:block">Mental Health<br>Wichita, Kansas</span>
        </a>

        <nav aria-label="Primary" class="hidden lg:block">
            <ul class="flex items-center gap-1 text-[14.5px] font-medium text-ink-soft">
                <li><a class="nav-link" href="/"<?= ($canonical_path ?? '/') === '/' ? ' aria-current="page"' : '' ?>>Home</a></li>
                <li><a class="nav-link" href="/about/"<?= ($current_page ?? '') === 'about' ? ' aria-current="page"' : '' ?>>About</a></li>
                <li class="group relative">
                    <a class="nav-link inline-flex items-center gap-1" href="/#services" aria-haspopup="true"<?= ($current_page ?? '') === 'services' ? ' aria-current="page"' : '' ?>>
                        Services
                        <svg class="h-3.5 w-3.5 transition group-hover:rotate-180" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M5.5 7.5 10 12l4.5-4.5"/></svg>
                    </a>
                    <div class="invisible absolute left-1/2 top-full w-72 -translate-x-1/2 pt-3 opacity-0 transition duration-200 group-hover:visible group-hover:opacity-100 group-focus-within:visible group-focus-within:opacity-100">
                        <ul class="rounded-2xl border border-cream-200 bg-white p-2 shadow-xl shadow-ink/5">
                            <?php foreach ($services as $key => $service): ?>
                                <li>
                                    <a href="<?= e($service['url']) ?>" class="flex items-center justify-between rounded-xl px-4 py-2.5 hover:bg-cream-100">
                                        <span><?= e($service['name']) ?></span>
                                        <?php if (!empty($service['new'])): ?>
                                            <span class="rounded-full bg-leaf-soft px-2 py-0.5 text-[10px] font-bold uppercase tracking-wider text-leaf-deep">New</span>
                                        <?php endif; ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </li>
                <li class="group relative">
                    <a class="nav-link inline-flex items-center gap-1" href="/conditions/" aria-haspopup="true"<?= ($current_page ?? '') === 'conditions' ? ' aria-current="page"' : '' ?>>
                        Conditions
                        <svg class="h-3.5 w-3.5 transition group-hover:rotate-180" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M5.5 7.5 10 12l4.5-4.5"/></svg>
                    </a>
                    <div class="invisible absolute left-1/2 top-full w-[34rem] -translate-x-1/2 pt-3 opacity-0 transition duration-200 group-hover:visible group-hover:opacity-100 group-focus-within:visible group-focus-within:opacity-100">
                        <div class="rounded-2xl border border-cream-200 bg-white p-2 shadow-xl shadow-ink/5">
                            <ul class="grid grid-cols-2 gap-0.5">
                                <?php foreach ($conditions as $cslug => $cond): ?>
                                    <li>
                                        <a href="/conditions/<?= e($cslug) ?>/" class="flex items-center justify-between gap-2 rounded-xl px-4 py-2.5 hover:bg-cream-100">
                                            <span><?= e($cond['name']) ?></span>
                                            <?php if (!empty($cond['tms'])): ?>
                                                <span class="rounded-full bg-leaf-soft px-2 py-0.5 text-[10px] font-bold uppercase tracking-wider text-leaf-deep">TMS</span>
                                            <?php endif; ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <div class="mt-2 flex items-center justify-between gap-3 rounded-xl bg-cream-100 px-4 py-3 text-[13.5px]">
                                <a href="/conditions/" class="font-semibold text-ink hover:underline">All conditions we treat →</a>
                                <a href="/#next-step" class="text-ink-soft hover:text-ink">Not sure? Find your next step</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li><a class="nav-link" href="/meet-our-team/"<?= ($current_page ?? '') === 'team' ? ' aria-current="page"' : '' ?>>Our Team</a></li>
                <li><a class="nav-link" href="/insurance/"<?= ($current_page ?? '') === 'insurance' ? ' aria-current="page"' : '' ?>>Insurance</a></li>
                <li><a class="nav-link" href="/contact-us/"<?= ($current_page ?? '') === 'contact' ? ' aria-current="page"' : '' ?>>Contact</a></li>
            </ul>
        </nav>

        <div class="flex items-center gap-2">
            <div class="group relative hidden lg:block">
                <button type="button" class="nav-link inline-flex items-center gap-1 text-[14.5px] font-medium text-ink-soft" aria-haspopup="true">
                    <span class="xl:hidden">Portal</span><span class="hidden xl:inline">Client Portal</span>
                    <svg class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M5.5 7.5 10 12l4.5-4.5"/></svg>
                </button>
                <div class="invisible absolute right-0 top-full w-56 pt-3 opacity-0 transition group-hover:visible group-hover:opacity-100 group-focus-within:visible group-focus-within:opacity-100">
                    <ul class="rounded-2xl border border-cream-200 bg-white p-2 text-[14px] shadow-xl shadow-ink/5">
                        <li><a class="block rounded-xl px-4 py-2.5 hover:bg-cream-100" href="<?= e($site['portal_therapy']) ?>" target="_blank" rel="noopener">Therapy clients</a></li>
                        <li><a class="block rounded-xl px-4 py-2.5 hover:bg-cream-100" href="<?= e($site['portal_medication']) ?>" target="_blank" rel="noopener">Medication clients</a></li>
                    </ul>
                </div>
            </div>
            <a href="<?= e($site['schedule_url']) ?>" target="_blank" rel="noopener" class="btn-primary hidden sm:inline-flex">Schedule an Appointment</a>
            <button type="button" class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-cream-300 bg-white/70 lg:hidden" aria-controls="mobile-menu" aria-expanded="false" data-menu-toggle>
                <span class="sr-only">Open menu</span>
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true"><path d="M4 7h16M4 12h16M4 17h10"/></svg>
            </button>
        </div>
    </div>
</header>

<!-- Mobile menu -->
<div id="mobile-menu" class="fixed inset-0 z-[60] hidden lg:hidden" role="dialog" aria-modal="true" aria-label="Menu" data-menu>
    <div class="absolute inset-0 bg-ink/40 backdrop-blur-sm" data-menu-close></div>
    <div class="absolute inset-y-0 right-0 flex w-full max-w-sm flex-col overflow-y-auto bg-cream-50 px-6 pb-8 pt-5 shadow-2xl">
        <div class="flex items-center justify-between">
            <img src="/assets/images/brand/logo-color.png" alt="ANew" class="h-10 w-auto">
            <button type="button" class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-cream-300" data-menu-close>
                <span class="sr-only">Close menu</span>
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true"><path d="M6 6l12 12M18 6 6 18"/></svg>
            </button>
        </div>
        <nav class="mt-8 text-lg" aria-label="Mobile">
            <a class="mobile-link" href="/" data-menu-close>Home</a>
            <a class="mobile-link" href="/#next-step" data-menu-close>Find your next step</a>
            <a class="mobile-link" href="/about/" data-menu-close>About ANew</a>
            <details class="border-b border-cream-200">
                <summary class="flex cursor-pointer list-none items-center justify-between py-4 font-medium">Services <span aria-hidden="true">+</span></summary>
                <div class="pb-3 text-base">
                    <?php foreach ($services as $service): ?>
                        <a class="flex items-center gap-2 py-2 text-ink-soft" href="<?= e($service['url']) ?>">
                            <?= e($service['name']) ?>
                            <?php if (!empty($service['new'])): ?><span class="rounded-full bg-leaf-soft px-2 py-0.5 text-[10px] font-bold uppercase text-leaf-deep">New</span><?php endif; ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </details>
            <details class="border-b border-cream-200">
                <summary class="flex cursor-pointer list-none items-center justify-between py-4 font-medium">Conditions we treat <span aria-hidden="true">+</span></summary>
                <div class="grid grid-cols-2 gap-x-3 pb-3 text-base">
                    <?php foreach ($conditions as $cslug => $cond): ?>
                        <a class="py-2 text-ink-soft" href="/conditions/<?= e($cslug) ?>/"><?= e($cond['name']) ?></a>
                    <?php endforeach; ?>
                    <a class="col-span-2 py-2 font-semibold" href="/conditions/">All conditions →</a>
                </div>
            </details>
            <a class="mobile-link" href="/meet-our-team/" data-menu-close>Our team</a>
            <a class="mobile-link" href="/insurance/" data-menu-close>Insurance & payment</a>
            <a class="mobile-link" href="/contact-us/" data-menu-close>Contact & directions</a>
        </nav>
        <div class="mt-6 grid grid-cols-2 gap-2 text-sm">
            <a class="rounded-xl border border-cream-300 px-4 py-3 text-center" href="<?= e($site['portal_therapy']) ?>" target="_blank" rel="noopener">Therapy portal</a>
            <a class="rounded-xl border border-cream-300 px-4 py-3 text-center" href="<?= e($site['portal_medication']) ?>" target="_blank" rel="noopener">Medication portal</a>
        </div>
        <div class="mt-auto space-y-3 pt-8">
            <a href="<?= e($site['schedule_url']) ?>" target="_blank" rel="noopener" class="btn-primary w-full justify-center">Schedule an Appointment</a>
            <a href="<?= e($site['phone_href']) ?>" class="btn-ghost w-full justify-center">Call <?= e($site['phone']) ?></a>
        </div>
    </div>
</div>
