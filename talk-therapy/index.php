<?php
require __DIR__ . '/../includes/config.php';

$page_title       = 'Talk Therapy in Wichita, KS | Individual, Couples & Family Counseling | ANew';
$page_description = 'Individual, couples and family therapy in Wichita, Kansas. ANew’s licensed therapists help with anxiety, depression, trauma, grief, relationships and more — in person or by telehealth.';
$canonical_path   = '/talk-therapy/';
$current_page     = 'services';
$og_image         = '/assets/images/office/therapy-session.jpg';

/* Topics link to their condition pathway where one exists. */
$therapy_types = [
    'individual' => [
        'name'  => 'Individual Therapy',
        'kicker'=> 'One-on-one',
        'image' => '/assets/images/office/therapy-session.jpg',
        'alt'   => 'An ANew therapist in a one-on-one session with a client',
        'tone'  => 'bg-sky-soft',
        'copy'  => [
            'Individual therapy is a professional, confidential process where you work with a trained therapist to address personal challenges, emotions, or mental health concerns. It provides a safe space to explore your thoughts, feelings, and behaviors — helping you gain clarity, develop coping strategies, and improve your overall well-being.',
            'People seek therapy for many reasons: managing stress, overcoming anxiety or depression, navigating life transitions, improving relationships, or simply understanding themselves more deeply. Therapy can help you build resilience, strengthen your emotional health, and support personal growth that empowers you to live a more fulfilling life.',
        ],
        'topics' => [
            'Anxiety and stress' => 'anxiety', 'Depression or low mood' => 'depression', 'Self-esteem and confidence' => null,
            'Relationship issues' => 'relationships', 'Grief and loss' => 'grief', 'Life transitions' => null,
            'Trauma and PTSD' => 'trauma', 'Anger management' => null, 'ADHD' => 'adhd',
            'Postpartum' => 'womens', 'Personal growth and discovery' => null, 'Addiction' => 'addiction',
        ],
        'people' => ['wes-smothermon', 'sierra-fair', 'barb-meyer', 'katlynn-miller', 'chuck-edwards', 'grace-henderson', 'jeremiah-coon', 'christina-wankum', 'sid-mead', 'lucas-shryock', 'katrina-amrine', 'honora-cummings'],
    ],
    'couples' => [
        'name'  => 'Couples Therapy',
        'kicker'=> 'Two people, one relationship',
        'image' => '/assets/images/people/relationships.jpg',
        'alt'   => 'A couple holding hands while walking through a grassy field',
        'tone'  => 'bg-clay-soft',
        'copy'  => [
            'Couples therapy focuses on the issues that come up between two people in a marital, intimate, or romantic relationship. It can happen in joint sessions, where you work on shared concerns together, or in individual sessions, where each partner explores personal issues that may be affecting the relationship.',
            'It gives partners a chance to heal the hurt parts of their relationship — and the tools to build a stronger, healthier foundation for the future.',
        ],
        'topics' => [
            'Attachment and connection' => null, 'Affairs and infidelity' => null, 'Commitment' => null,
            'Communication' => null, 'Differences' => null, 'Disconnection' => null,
            'Future goals and family planning' => null, 'Incompatibility' => null, 'Sexual concerns' => null, 'Financial stress' => null,
        ],
        'people' => ['wes-smothermon', 'chuck-edwards', 'sid-mead', 'katlynn-miller', 'christina-wankum', 'lucas-shryock'],
    ],
    'family' => [
        'name'  => 'Family Therapy',
        'kicker'=> 'The people who call themselves family',
        'image' => '/assets/images/people/family-walk.jpg',
        'alt'   => 'A family walking hand in hand across a grassy hill',
        'tone'  => 'bg-leaf-soft',
        'copy'  => [
            'Family therapy brings together family members, relatives, or any group of people who consider themselves a family. It’s a specialized type of therapy that helps improve the relationships and dynamics within a family unit.',
            'The goal is a safe, supportive space where everyone can openly share their thoughts, concerns, and feelings — and work together toward understanding, healing, or solutions. Family therapy can be valuable even when there’s no specific problem, too: as a preventive step that keeps relationships strong and fosters a positive home environment.',
        ],
        'topics' => [
            'Communication' => null, 'Conflict' => null, 'Cultural or intergenerational issues' => null,
            'Divorce and separation' => null, 'Blended family dynamics' => null, 'Finances' => null,
            'Grief and loss' => 'grief', 'Mental health' => null, 'Parenting' => 'child', 'Substance use' => 'addiction',
        ],
        'people' => ['wes-smothermon', 'christina-wankum', 'barb-meyer', 'jeremiah-coon', 'chuck-edwards'],
    ],
];

$faqs = [
    ['How do I know if therapy is right for me?', 'If something is weighing on you — stress, worry, low mood, a loss, a relationship, or just feeling stuck — that’s reason enough to talk to someone. You don’t need a diagnosis or a crisis to start. Our team will help you figure out the best next step, whether that’s therapy, medication management, an assessment, or a combination.'],
    ['Do you offer telehealth?', 'Yes. Many of our therapists see clients both in person at our Wichita office and by telehealth, and some offer telehealth only. Ask our team which option fits you best when you reach out.'],
    ['Do you accept insurance?', 'ANew is contracted with many major plans, including Aetna, Ambetter, Blue Cross Blue Shield, Cigna, Healthy Blue, Sunflower Health Plan, TriWest, UMR and UnitedHealthcare (including KanCare). Coverage varies by provider, so give us a call and we’ll gladly check yours. We also accept cash, major credit cards, CareCredit, HSA and FSA.'],
    ['Can therapy be combined with medication?', 'Yes — and at ANew it’s coordinated. Our therapists and medication providers work side by side, so if medication could help, your care stays connected under one roof.'],
    ['Do you see children and teens?', 'Yes. ANew gladly welcomes children and their families, adolescents and adults. For younger children we also offer play therapy, which helps kids express what they can’t yet put into words.'],
    ['Is therapy confidential?', 'Therapy is a professional, confidential process. Your therapist will walk you through confidentiality and its legal limits at your first session so you know exactly what to expect.'],
    ['How do I get started?', 'Send a quick inquiry through our secure scheduling form or call us at ' . $site['phone'] . '. Once it’s submitted, our team will reach out to you shortly to get you matched with a therapist.'],
];

$related = ['medication', 'emdr', 'adhd-assessment', 'tms'];

include __DIR__ . '/../includes/header.php';
?>

<main id="main">

    <!-- ============ PAGE HERO ============ -->
    <section class="mx-auto max-w-site px-5 pb-14 pt-10 sm:px-8 lg:pb-20 lg:pt-14" aria-labelledby="page-title">
        <div class="grid items-center gap-12 lg:grid-cols-12">
            <div class="lg:col-span-6">
                <nav aria-label="Breadcrumb" class="reveal text-sm text-ink-mute">
                    <a href="/" class="hover:text-ink">Home</a> <span aria-hidden="true">/</span>
                    <a href="/#services" class="hover:text-ink">Services</a> <span aria-hidden="true">/</span>
                    <span class="text-ink">Talk Therapy</span>
                </nav>
                <p class="eyebrow reveal mt-8 text-sky-deep">Talk therapy in Wichita, KS</p>
                <h1 id="page-title" class="reveal mt-5 font-serif text-[2.6rem] font-light leading-[1.05] tracking-tight sm:text-6xl lg:text-[4.2rem]">
                    A safe place to talk. <em class="italic text-clay">Someone who listens.</em>
                </h1>
                <p class="reveal mt-7 max-w-xl text-lg leading-relaxed text-ink-soft">
                    Individual, couples and family therapy with licensed therapists who take the time to understand your story — and walk alongside you as you write the next chapter.
                </p>
                <div class="reveal mt-9 flex flex-col gap-3 sm:flex-row">
                    <a href="<?= e($site['schedule_url']) ?>" target="_blank" rel="noopener" class="btn-primary">Schedule an Appointment</a>
                    <a href="#therapists" class="btn-ghost">Meet our therapists</a>
                </div>
                <ul class="reveal mt-10 flex flex-wrap gap-x-6 gap-y-3 text-sm text-ink-soft">
                    <?php foreach (['In-person & telehealth', 'Children, teens & adults', 'Most major insurance'] as $fact): ?>
                        <li class="flex items-center gap-2"><span class="h-1.5 w-1.5 rounded-full bg-leaf-lime"></span><?= e($fact) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <figure class="reveal relative lg:col-span-6" style="--d: 120ms">
                <img src="/assets/images/office/therapy-session.jpg" alt="An ANew therapist in conversation with a client in a sunlit Wichita therapy room" class="aspect-[4/3] w-full rounded-4xl object-cover lg:aspect-[5/4]" fetchpriority="high">
                <figcaption class="absolute -bottom-6 left-6 right-6 rounded-3xl border border-cream-200 bg-cream-50/95 p-5 shadow-xl shadow-ink/5 backdrop-blur sm:left-auto sm:right-[-1rem] sm:max-w-xs">
                    <p class="font-serif text-lg leading-snug">“My goal is to walk alongside you as we explore the patterns, emotions, and experiences that shape your life.”</p>
                    <p class="mt-2 text-xs font-semibold uppercase tracking-[0.16em] text-ink-mute">Katlynn Miller, LPC</p>
                </figcaption>
            </figure>
        </div>
    </section>

    <!-- ============ TYPE SWITCHER ============ -->
    <nav class="sticky top-[84px] z-30 border-y border-cream-200 bg-cream-50/90 backdrop-blur" aria-label="Types of therapy">
        <div class="mx-auto flex max-w-site gap-2 overflow-x-auto px-5 py-3 sm:px-8">
            <?php foreach ($therapy_types as $key => $type): ?>
                <a href="#<?= e($key) ?>" class="tab-link"><?= e($type['name']) ?></a>
            <?php endforeach; ?>
            <a href="#first-session" class="tab-link">Your first session</a>
            <a href="#faq" class="tab-link">FAQ</a>
        </div>
    </nav>

    <!-- ============ THERAPY TYPES ============ -->
    <?php $n = 0; foreach ($therapy_types as $key => $type): $flip = $n++ % 2 === 1; ?>
        <section id="<?= e($key) ?>" class="mx-auto max-w-site scroll-mt-40 px-5 py-14 sm:px-8 lg:py-20" aria-labelledby="<?= e($key) ?>-title">
            <div class="grid items-start gap-10 lg:grid-cols-12 lg:gap-14">
                <div class="reveal lg:col-span-5 <?= $flip ? 'lg:order-last' : '' ?>">
                    <div class="overflow-hidden rounded-4xl <?= $type['tone'] ?>">
                        <img src="<?= e($type['image']) ?>" alt="<?= e($type['alt']) ?>" class="aspect-[4/3] w-full object-cover lg:aspect-[4/5]" loading="lazy">
                    </div>
                </div>
                <div class="lg:col-span-7">
                    <p class="eyebrow reveal text-clay">0<?= $n ?> · <?= e($type['kicker']) ?></p>
                    <h2 id="<?= e($key) ?>-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-5xl"><?= e($type['name']) ?></h2>
                    <div class="reveal mt-6 space-y-5 text-[17px] leading-relaxed text-ink-soft">
                        <?php foreach ($type['copy'] as $para): ?><p><?= e($para) ?></p><?php endforeach; ?>
                    </div>

                    <h3 class="reveal mt-10 text-xs font-semibold uppercase tracking-[0.18em] text-ink-mute">Common topics we address</h3>
                    <ul class="reveal mt-4 flex flex-wrap gap-2">
                        <?php foreach ($type['topics'] as $topic => $slug): ?>
                            <li>
                                <?php if ($slug): ?>
                                    <a href="/conditions/<?= e($slug) ?>/" class="inline-flex items-center gap-1.5 rounded-full border border-cream-300 bg-white px-3.5 py-2 text-sm text-ink transition hover:border-ink"><?= e($topic) ?> <span aria-hidden="true" class="text-ink-mute">→</span></a>
                                <?php else: ?>
                                    <span class="inline-flex rounded-full bg-cream-100 px-3.5 py-2 text-sm text-ink-soft"><?= e($topic) ?></span>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                    <h3 class="reveal mt-10 text-xs font-semibold uppercase tracking-[0.18em] text-ink-mute">Therapists who offer <?= e(mb_strtolower($type['name'])) ?></h3>
                    <ul class="reveal mt-4 flex flex-wrap gap-2">
                        <?php foreach ($type['people'] as $slug): $p = $team[$slug]; ?>
                            <li>
                                <button type="button" data-person="<?= e($slug) ?>" aria-haspopup="dialog" class="inline-flex items-center gap-2.5 rounded-full border border-cream-200 bg-white py-1 pl-1 pr-4 text-sm transition hover:border-ink">
                                    <img src="/assets/images/team/<?= e($p['photo']) ?>" alt="" class="h-9 w-9 rounded-full object-cover" style="object-position: <?= e($p['pos']) ?>" loading="lazy">
                                    <span><?= e($p['name']) ?><?php if ($p['creds']): ?><span class="hidden text-ink-mute sm:inline">, <?= e($p['creds']) ?></span><?php endif; ?></span>
                                </button>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </section>
        <?php if ($n < count($therapy_types)): ?><div class="mx-auto max-w-site px-5 sm:px-8"><hr class="border-cream-200"></div><?php endif; ?>
    <?php endforeach; ?>

    <!-- ============ FIRST SESSION ============ -->
    <section id="first-session" class="scroll-mt-40 px-3 sm:px-4" aria-labelledby="first-title">
        <div class="rounded-4xl bg-prairie-deep text-cream-100">
            <div class="mx-auto max-w-site px-5 py-14 sm:px-8 lg:py-20">
                <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
                    <div class="max-w-2xl">
                        <p class="eyebrow reveal text-wheat">What to expect</p>
                        <h2 id="first-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight text-white sm:text-5xl">Your first session, <em class="italic text-wheat">without the guesswork.</em></h2>
                    </div>
                    <p class="reveal max-w-md text-[17px] leading-relaxed text-cream-100/80">Starting therapy can feel like a big step. Here’s how it usually goes at ANew — at your pace, with no pressure.</p>
                </div>
                <ol class="mt-10 grid gap-4 md:grid-cols-2 lg:grid-cols-4">
                    <?php foreach ([
                        ['Reach out', 'Send a quick inquiry or call. Our front desk team will follow up shortly to get you scheduled.'],
                        ['Get matched', 'We’ll pair you with a therapist whose lane of expertise fits what you’re facing — in person or telehealth.'],
                        ['Talk it through', 'Your first session is a conversation: what brought you in, what you hope will change, and what matters to you.'],
                        ['Build your plan', 'Together you’ll set goals and a rhythm for sessions. If medication or an assessment could help, we’ll coordinate it.'],
                    ] as $i => [$title, $text]): ?>
                        <li class="reveal rounded-3xl border border-white/10 bg-white/5 p-6" style="--d: <?= $i * 70 ?>ms">
                            <span class="font-serif text-3xl text-wheat"><?= $i + 1 ?></span>
                            <h3 class="mt-4 font-serif text-2xl text-white"><?= e($title) ?></h3>
                            <p class="mt-2 text-[15px] leading-relaxed text-cream-100/75"><?= e($text) ?></p>
                        </li>
                    <?php endforeach; ?>
                </ol>
                <div class="reveal mt-10 flex flex-col gap-3 sm:flex-row">
                    <a href="<?= e($site['schedule_url']) ?>" target="_blank" rel="noopener" class="btn-light">Schedule an Appointment</a>
                    <a href="/#next-step" class="btn-glass">Not sure? Find your next step</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ ALL THERAPISTS ============ -->
    <section id="therapists" class="mx-auto max-w-site scroll-mt-40 px-5 py-14 sm:px-8 lg:py-20" aria-labelledby="therapists-title">
        <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
            <div class="max-w-2xl">
                <p class="eyebrow reveal text-leaf-deep">Our therapists</p>
                <h2 id="therapists-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-5xl">Find someone you click with.</h2>
            </div>
            <p class="reveal max-w-md text-[17px] leading-relaxed text-ink-soft">The relationship with your therapist matters. Tap anyone to read about who they work with and how they help.</p>
        </div>
        <ul class="mt-10 grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-3 lg:grid-cols-6">
            <?php $i = 0; foreach ($team as $slug => $p): if (!in_array($p['lane'], ['therapist', 'intern'], true)) continue; ?>
                <li class="reveal" style="--d: <?= ($i++ % 6) * 50 ?>ms">
                    <button type="button" class="group block w-full text-left" data-person="<?= e($slug) ?>" aria-haspopup="dialog">
                        <span class="block overflow-hidden rounded-3xl bg-cream-200">
                            <img src="/assets/images/team/<?= e($p['photo']) ?>" alt="" class="aspect-[4/5] w-full object-cover transition duration-700 group-hover:scale-[1.04]" style="object-position: <?= e($p['pos']) ?>" loading="lazy">
                        </span>
                        <span class="mt-3 block font-serif text-lg leading-tight"><?= e($p['name']) ?><?php if ($p['creds']): ?><span class="text-ink-mute">, <?= e($p['creds']) ?></span><?php endif; ?></span>
                        <span class="mt-1 block text-[13px] text-ink-soft"><?= e($p['focus'] ? implode(' · ', array_slice($p['focus'], 0, 2)) : $p['role']) ?></span>
                    </button>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>

    <!-- ============ FAQ ============ -->
    <section id="faq" class="scroll-mt-40 border-y border-cream-200 bg-white" aria-labelledby="faq-title">
        <div class="mx-auto grid max-w-site gap-10 px-5 py-14 sm:px-8 lg:grid-cols-12 lg:py-20">
            <div class="lg:col-span-4">
                <p class="eyebrow reveal text-clay">Questions</p>
                <h2 id="faq-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-5xl">Talk therapy FAQ</h2>
                <p class="reveal mt-6 text-[17px] leading-relaxed text-ink-soft">Still wondering about something? Call us at <a href="<?= e($site['phone_href']) ?>" class="font-semibold text-ink underline underline-offset-4"><?= e($site['phone']) ?></a> — we’re happy to help.</p>
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

    <!-- ============ RELATED SERVICES ============ -->
    <section class="mx-auto max-w-site px-5 py-14 sm:px-8 lg:py-20" aria-labelledby="related-title">
        <p class="eyebrow reveal text-leaf-deep">Care that works alongside therapy</p>
        <h2 id="related-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-5xl">More ways we help.</h2>
        <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            <?php foreach ($related as $i => $key): $svc = $services[$key]; ?>
                <a href="<?= e($svc['url']) ?>" class="reveal group flex flex-col rounded-4xl border border-cream-200 bg-white p-7 transition hover:-translate-y-1 hover:shadow-xl hover:shadow-ink/5" style="--d: <?= $i * 70 ?>ms">
                    <span class="flex items-center gap-2">
                        <span class="font-serif text-2xl"><?= e($svc['name']) ?></span>
                        <?php if (!empty($svc['new'])): ?><span class="rounded-full bg-leaf-soft px-2 py-0.5 text-[10px] font-bold uppercase tracking-wider text-leaf-deep">New</span><?php endif; ?>
                    </span>
                    <span class="mt-3 text-[15px] leading-relaxed text-ink-soft"><?= e($svc['blurb']) ?></span>
                    <span class="mt-6 inline-flex items-center gap-1 text-sm font-semibold">Learn more <span aria-hidden="true" class="transition group-hover:translate-x-1">→</span></span>
                </a>
            <?php endforeach; ?>
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
            '@type' => 'MedicalWebPage',
            'name' => 'Talk Therapy in Wichita, KS',
            'url' => $site['url'] . $canonical_path,
            'description' => $page_description,
            'about' => ['@type' => 'MedicalTherapy', 'name' => 'Psychotherapy'],
            'provider' => ['@type' => 'MedicalClinic', 'name' => $site['name'], 'telephone' => '+1-316-260-3777'],
        ],
        [
            '@type' => 'FAQPage',
            'mainEntity' => array_map(fn ($f) => [
                '@type' => 'Question', 'name' => $f[0],
                'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]],
            ], $faqs),
        ],
        [
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $site['url'] . '/'],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $site['url'] . '/#services'],
                ['@type' => 'ListItem', 'position' => 3, 'name' => 'Talk Therapy', 'item' => $site['url'] . $canonical_path],
            ],
        ],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>
