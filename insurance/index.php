<?php
require __DIR__ . '/../includes/config.php';

$page_title       = 'Insurance & Payment | Mental Health Care in Wichita, KS | ANew';
$page_description = 'See which insurance plans ANew Mental Health accepts in Wichita, Kansas — including KanCare — and learn about self-pay, CareCredit, HSA and FSA.';
$canonical_path   = '/insurance/';
$current_page     = 'insurance';

$faqs = [
    ['Do you accept my insurance?', 'ANew is contracted with many major plans, including Aetna, Ambetter, Blue Cross Blue Shield, Cigna, Healthy Blue, Sunflower Health Plan, TriWest, UMR and UnitedHealthcare. Each provider is in network with different plans, so call us at ' . $site['phone'] . ' and we’ll check for you.'],
    ['Do you accept KanCare (Kansas Medicaid)?', 'Yes — many of our therapists are in network with KanCare plans, including Healthy Blue, Sunflower Health Plan and United Community Plan. Call us and we’ll match you with a provider who accepts yours.'],
    ['Do you accept Tricare?', 'Yes. Several of our providers accept Tricare, including our medication management provider. Call us and we’ll match you with one.'],
    ['What if my provider isn’t in network with my plan?', 'Call us. We’ll help you find another provider on our team who is in network, or talk through self-pay options.'],
    ['Can I pay out of pocket?', 'Yes. ANew accepts cash, all major credit cards, CareCredit, health savings accounts (HSA) and flexible spending accounts (FSA) for co-payments and self-pay sessions. Call our office to learn about per-session self-pay rates.'],
    ['What is CareCredit?', 'CareCredit is a health care credit card that can help you pay for care over time. ANew accepts CareCredit, and you can apply online.'],
    ['Is telehealth covered by insurance?', 'Many plans cover telehealth sessions the same way as in-person visits, but coverage varies. We recommend confirming with your insurance company before your first appointment.'],
];

include __DIR__ . '/../includes/header.php';
?>

<main id="main">

    <!-- ============ PAGE HERO ============ -->
    <section class="mx-auto max-w-site px-5 pb-14 pt-10 sm:px-8 lg:pb-20 lg:pt-14" aria-labelledby="page-title">
        <div class="grid items-end gap-12 lg:grid-cols-12">
            <div class="lg:col-span-7">
                <nav aria-label="Breadcrumb" class="reveal text-sm text-ink-mute">
                    <a href="/" class="hover:text-ink">Home</a> <span aria-hidden="true">/</span> <span class="text-ink">Insurance &amp; Payment</span>
                </nav>
                <p class="eyebrow reveal mt-8 text-sky-deep">Insurance &amp; payment</p>
                <h1 id="page-title" class="reveal mt-5 font-serif text-[2.6rem] font-light leading-[1.05] tracking-tight sm:text-6xl lg:text-[4.2rem]">
                    Care that’s <em class="italic text-clay">within reach.</em>
                </h1>
                <p class="reveal mt-7 max-w-xl text-lg leading-relaxed text-ink-soft">
                    ANew is contracted with and accepting many major insurance plans, including KanCare. Money questions shouldn’t stand between you and care — we’re happy to help you sort them out.
                </p>
                <div class="reveal mt-9 flex flex-col gap-3 sm:flex-row">
                    <a href="<?= e($site['schedule_url']) ?>" target="_blank" rel="noopener" class="btn-primary">Schedule an Appointment</a>
                    <a href="<?= e($site['phone_href']) ?>" class="btn-ghost">Call to check your coverage</a>
                </div>
            </div>
            <div class="reveal lg:col-span-5" style="--d: 120ms">
                <div class="rounded-4xl bg-cream-100 p-7 sm:p-8">
                    <p class="text-xs font-semibold uppercase tracking-[0.18em] text-ink-mute">Plans we’re contracted with</p>
                    <ul class="mt-5 flex flex-wrap gap-2">
                        <?php foreach ($insurances as $insurer): ?>
                            <li class="rounded-full bg-white px-3.5 py-2 text-[14px] font-medium"><?= e($insurer) ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <p class="mt-5 text-sm leading-relaxed text-ink-soft">Accepted plans vary by provider. Call us and we’ll confirm yours.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ PAYMENT OPTIONS ============ -->
    <section class="px-3 sm:px-4" aria-labelledby="pay-title">
        <div class="rounded-4xl bg-prairie-deep text-cream-100">
        <div class="mx-auto grid max-w-site gap-10 px-5 py-14 sm:px-8 lg:grid-cols-12 lg:py-20">
            <div class="lg:col-span-5">
                <p class="eyebrow reveal text-wheat">Paying out of pocket</p>
                <h2 id="pay-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight text-white sm:text-5xl">Flexible ways <em class="italic text-wheat">to pay.</em></h2>
                <p class="reveal mt-6 text-[17px] leading-relaxed text-cream-100/75">ANew accepts the following for co-payments and self-pay sessions. Call our office to learn about per-session self-pay rates.</p>
            </div>
            <div class="grid gap-3 sm:grid-cols-2 lg:col-span-7">
                <?php foreach ([
                    ['Cash', 'Simple and straightforward.'],
                    ['Major credit cards', 'All major cards accepted.'],
                    ['HSA & FSA', 'Use your health savings or flexible spending account.'],
                    ['CareCredit', 'A health care credit card that lets you pay over time.'],
                ] as $i => [$title, $text]): ?>
                    <div class="reveal rounded-3xl border border-white/10 bg-white/5 p-6" style="--d: <?= $i * 60 ?>ms">
                        <h3 class="font-serif text-2xl text-white"><?= e($title) ?></h3>
                        <p class="mt-1.5 text-[15px] text-cream-100/75"><?= e($text) ?></p>
                        <?php if ($title === 'CareCredit'): ?>
                            <a href="<?= e($site['carecredit_url']) ?>" target="_blank" rel="noopener" class="mt-3 inline-block text-sm font-semibold text-wheat underline underline-offset-4">Apply for CareCredit →</a>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        </div>
    </section>

    <!-- ============ CHECK YOUR BENEFITS ============ -->
    <section class="mx-auto max-w-site px-5 py-14 sm:px-8 lg:py-20" aria-labelledby="benefits-title">
        <div class="grid gap-10 lg:grid-cols-12">
            <div class="lg:col-span-5">
                <p class="eyebrow reveal text-sky-deep">Before your first visit</p>
                <h2 id="benefits-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-5xl">Questions to ask <em class="italic text-clay">your insurance.</em></h2>
                <p class="reveal mt-6 text-[17px] leading-relaxed text-ink-soft">A quick call to the number on the back of your card can save surprises later. Here’s what to ask about <strong class="font-semibold text-ink">outpatient mental health</strong> benefits:</p>
            </div>
            <ol class="grid gap-3 sm:grid-cols-2 lg:col-span-7">
                <?php foreach ([
                    'Is outpatient mental health covered under my plan?',
                    'What is my copay or coinsurance per session?',
                    'Do I have a deductible, and how much of it have I met?',
                    'Is there a limit on the number of sessions per year?',
                    'Do I need a referral or prior authorization?',
                    'Are telehealth sessions covered the same as in-person?',
                ] as $i => $q): ?>
                    <li class="reveal flex gap-4 rounded-3xl border border-cream-200 bg-white p-5" style="--d: <?= ($i % 2) * 60 ?>ms">
                        <span class="font-serif text-2xl text-clay"><?= $i + 1 ?></span>
                        <span class="text-[15.5px] leading-relaxed text-ink-soft"><?= e($q) ?></span>
                    </li>
                <?php endforeach; ?>
            </ol>
        </div>
    </section>

    <!-- ============ FAQ ============ -->
    <section id="faq" class="scroll-mt-24 border-t border-cream-200 bg-white" aria-labelledby="faq-title">
        <div class="mx-auto grid max-w-site gap-10 px-5 py-14 sm:px-8 lg:grid-cols-12 lg:py-20">
            <div class="lg:col-span-4">
                <p class="eyebrow reveal text-clay">Questions</p>
                <h2 id="faq-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-5xl">Insurance FAQ</h2>
                <p class="reveal mt-6 text-[17px] leading-relaxed text-ink-soft">Our billing team is happy to help. Call <a href="<?= e($site['phone_href']) ?>" class="font-semibold text-ink underline underline-offset-4"><?= e($site['phone']) ?></a>.</p>
            </div>
            <div class="divide-y divide-cream-200 border-y border-cream-200 lg:col-span-8">
                <?php foreach ($faqs as $i => [$q, $a]): ?>
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

    <?php include __DIR__ . '/../includes/partials/visit-cta.php'; ?>

</main>

<?php include __DIR__ . '/../includes/partials/person-dialog.php'; ?>

<script type="application/ld+json">
<?= json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'WebPage',
            'name' => 'Insurance & Payment',
            'url' => $site['url'] . $canonical_path,
            'description' => $page_description,
            'about' => [
                '@type' => 'MedicalClinic',
                'name' => $site['name'],
                'paymentAccepted' => 'Cash, Credit Card, CareCredit, HSA, FSA',
            ],
        ],
        ['@type' => 'FAQPage', 'mainEntity' => array_map(fn ($f) => ['@type' => 'Question', 'name' => $f[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]]], $faqs)],
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $site['url'] . '/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Insurance & Payment', 'item' => $site['url'] . $canonical_path],
        ]],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>
