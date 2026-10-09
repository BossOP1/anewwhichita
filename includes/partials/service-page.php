<?php
/**
 * Shared layout for service pages. A page sets $svc and includes this file
 * between header.php and footer.php.
 *
 * $svc = [
 *   'name', 'eyebrow', 'title' (may contain <em>), 'intro', 'image', 'image_alt', 'image_pos'?,
 *   'quote' => ['text', 'by']?, 'facts' => [...],
 *   'blocks' => [ ['type' => text|list|steps|people|callout, 'id', 'nav', ...], ... ],
 *   'faqs' => [[q, a], ...], 'related' => [service keys],
 * ]
 *
 * @var array $svc @var array $site @var array $team @var array $services @var array $conditions
 */

$nav_items = array_filter($svc['blocks'], fn ($b) => !empty($b['nav']));
?>

<main id="main">

    <!-- ============ PAGE HERO ============ -->
    <section class="mx-auto max-w-site px-5 pb-14 pt-10 sm:px-8 lg:pb-20 lg:pt-14" aria-labelledby="page-title">
        <div class="grid items-center gap-12 lg:grid-cols-12">
            <div class="lg:col-span-6">
                <nav aria-label="Breadcrumb" class="reveal text-sm text-ink-mute">
                    <a href="/" class="hover:text-ink">Home</a> <span aria-hidden="true">/</span>
                    <a href="/#services" class="hover:text-ink">Services</a> <span aria-hidden="true">/</span>
                    <span class="text-ink"><?= e($svc['name']) ?></span>
                </nav>
                <p class="eyebrow reveal mt-8 text-sky-deep"><?= e($svc['eyebrow']) ?></p>
                <h1 id="page-title" class="reveal mt-5 font-serif text-[2.6rem] font-light leading-[1.05] tracking-tight sm:text-6xl lg:text-[4.2rem]"><?= $svc['title'] ?></h1>
                <p class="reveal mt-7 max-w-xl text-lg leading-relaxed text-ink-soft"><?= e($svc['intro']) ?></p>
                <div class="reveal mt-9 flex flex-col gap-3 sm:flex-row">
                    <a href="<?= e($site['schedule_url']) ?>" target="_blank" rel="noopener" class="btn-primary">Schedule an Appointment</a>
                    <a href="<?= e($site['phone_href']) ?>" class="btn-ghost">Call <?= e($site['phone']) ?></a>
                </div>
                <?php if (!empty($svc['facts'])): ?>
                    <ul class="reveal mt-10 flex flex-wrap gap-x-6 gap-y-3 text-sm text-ink-soft">
                        <?php foreach ($svc['facts'] as $fact): ?>
                            <li class="flex items-center gap-2"><span class="h-1.5 w-1.5 rounded-full bg-leaf-lime"></span><?= e($fact) ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
            <figure class="reveal relative lg:col-span-6" style="--d: 120ms">
                <img src="<?= e($svc['image']) ?>" alt="<?= e($svc['image_alt']) ?>" class="aspect-[4/3] w-full rounded-4xl object-cover lg:aspect-[5/4]" style="object-position: <?= e($svc['image_pos'] ?? '50% 50%') ?>" fetchpriority="high">
                <?php if (!empty($svc['quote'])): ?>
                    <figcaption class="absolute -bottom-6 left-6 right-6 rounded-3xl border border-cream-200 bg-cream-50/95 p-5 shadow-xl shadow-ink/5 backdrop-blur sm:left-auto sm:right-[-1rem] sm:max-w-xs">
                        <p class="font-serif text-lg leading-snug">“<?= e($svc['quote']['text']) ?>”</p>
                        <p class="mt-2 text-xs font-semibold uppercase tracking-[0.16em] text-ink-mute"><?= e($svc['quote']['by']) ?></p>
                    </figcaption>
                <?php endif; ?>
            </figure>
        </div>
    </section>

    <!-- ============ SECTION SWITCHER ============ -->
    <nav class="sticky top-[84px] z-30 border-y border-cream-200 bg-cream-50/90 backdrop-blur" aria-label="On this page">
        <div class="mx-auto flex max-w-site gap-2 overflow-x-auto px-5 py-3 sm:px-8">
            <?php foreach ($nav_items as $block): ?>
                <a href="#<?= e($block['id']) ?>" class="tab-link"><?= e($block['nav']) ?></a>
            <?php endforeach; ?>
            <?php if (!empty($svc['faqs'])): ?><a href="#faq" class="tab-link">FAQ</a><?php endif; ?>
        </div>
    </nav>

    <?php foreach ($svc['blocks'] as $bi => $block): $id = $block['id'] ?? 'block-' . $bi; ?>

        <?php if ($block['type'] === 'text'): $flip = !empty($block['flip']); ?>
            <!-- text block -->
            <section id="<?= e($id) ?>" class="mx-auto max-w-site scroll-mt-40 px-5 py-14 sm:px-8 lg:py-20" aria-labelledby="<?= e($id) ?>-title">
                <div class="grid items-center gap-10 lg:grid-cols-12 lg:gap-14">
                    <?php if (!empty($block['image'])): ?>
                        <div class="reveal lg:col-span-5 <?= $flip ? 'lg:order-last' : '' ?>">
                            <img src="<?= e($block['image']) ?>" alt="<?= e($block['image_alt'] ?? '') ?>" class="aspect-[4/3] w-full rounded-4xl object-cover lg:aspect-[4/5]" style="object-position: <?= e($block['image_pos'] ?? '50% 50%') ?>" loading="lazy">
                        </div>
                    <?php endif; ?>
                    <div class="<?= !empty($block['image']) ? 'lg:col-span-7' : 'lg:col-span-9' ?>">
                        <p class="eyebrow reveal text-clay"><?= e($block['eyebrow']) ?></p>
                        <h2 id="<?= e($id) ?>-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-5xl"><?= $block['title'] ?></h2>
                        <div class="reveal mt-6 space-y-5 text-[17px] leading-relaxed text-ink-soft">
                            <?php foreach ($block['paras'] as $para): ?><p><?= e($para) ?></p><?php endforeach; ?>
                        </div>
                        <?php if (!empty($block['points'])): ?>
                            <ul class="reveal mt-8 grid gap-3 text-[15.5px] sm:grid-cols-2">
                                <?php foreach ($block['points'] as $point): ?>
                                    <li class="flex items-start gap-3">
                                        <span class="mt-0.5 inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-leaf text-white">
                                            <svg viewBox="0 0 16 16" class="h-3 w-3" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m3.5 8.5 3 3 6-7"/></svg>
                                        </span>
                                        <?= e($point) ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </section>

        <?php elseif ($block['type'] === 'list'): ?>
            <!-- list block: conditions / signs / who it helps -->
            <section id="<?= e($id) ?>" class="scroll-mt-40 border-y border-cream-200 bg-white" aria-labelledby="<?= e($id) ?>-title">
                <div class="mx-auto max-w-site px-5 py-14 sm:px-8 lg:py-20">
                    <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
                        <div class="max-w-2xl">
                            <p class="eyebrow reveal text-sky-deep"><?= e($block['eyebrow']) ?></p>
                            <h2 id="<?= e($id) ?>-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-5xl"><?= $block['title'] ?></h2>
                        </div>
                        <?php if (!empty($block['intro'])): ?><p class="reveal max-w-md text-[17px] leading-relaxed text-ink-soft"><?= e($block['intro']) ?></p><?php endif; ?>
                    </div>
                    <?php $detailed = !empty(array_filter(array_column($block['items'], 1))); ?>
                    <?php if ($detailed): ?>
                        <ul class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                            <?php foreach ($block['items'] as $i => $item): [$label, $text, $slug] = $item + [null, null, null]; ?>
                                <li class="reveal" style="--d: <?= ($i % 3) * 60 ?>ms">
                                    <?php $tag = $slug ? 'a' : 'div'; ?>
                                    <<?= $tag ?> <?= $slug ? 'href="/conditions/' . e($slug) . '/"' : '' ?> class="group flex h-full flex-col rounded-3xl bg-cream-100 p-6 transition <?= $slug ? 'hover:-translate-y-1 hover:bg-cream-200' : '' ?>">
                                        <span class="font-serif text-2xl"><?= e($label) ?></span>
                                        <?php if ($text): ?><span class="mt-2 text-[15px] leading-relaxed text-ink-soft"><?= e($text) ?></span><?php endif; ?>
                                        <?php if ($slug): ?><span class="mt-auto pt-5 text-sm font-semibold">Learn more <span aria-hidden="true" class="inline-block transition group-hover:translate-x-1">→</span></span><?php endif; ?>
                                    </<?= $tag ?>>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php else: ?>
                        <ul class="reveal mt-10 flex flex-wrap gap-2.5">
                            <?php foreach ($block['items'] as $item): [$label, , $slug] = $item + [null, null, null]; ?>
                                <li>
                                    <?php if ($slug): ?>
                                        <a href="/conditions/<?= e($slug) ?>/" class="inline-flex items-center gap-1.5 rounded-full border border-cream-300 bg-cream-50 px-4 py-2.5 text-[15px] text-ink transition hover:border-ink"><?= e($label) ?> <span aria-hidden="true" class="text-ink-mute">→</span></a>
                                    <?php else: ?>
                                        <span class="inline-flex rounded-full bg-cream-100 px-4 py-2.5 text-[15px] text-ink-soft"><?= e($label) ?></span>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </section>

        <?php elseif ($block['type'] === 'steps'): ?>
            <!-- steps block -->
            <section id="<?= e($id) ?>" class="scroll-mt-40 px-3 py-6 sm:px-4" aria-labelledby="<?= e($id) ?>-title">
                <div class="rounded-4xl bg-prairie-deep text-cream-100">
                    <div class="mx-auto max-w-site px-5 py-14 sm:px-8 lg:py-20">
                        <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
                            <div class="max-w-2xl">
                                <p class="eyebrow reveal text-wheat"><?= e($block['eyebrow']) ?></p>
                                <h2 id="<?= e($id) ?>-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight text-white sm:text-5xl"><?= $block['title'] ?></h2>
                            </div>
                            <?php if (!empty($block['intro'])): ?><p class="reveal max-w-md text-[17px] leading-relaxed text-cream-100/80"><?= e($block['intro']) ?></p><?php endif; ?>
                        </div>
                        <ol class="mt-10 grid gap-4 md:grid-cols-2 <?= count($block['items']) >= 4 ? 'lg:grid-cols-4' : 'lg:grid-cols-3' ?>">
                            <?php foreach ($block['items'] as $i => [$title, $text]): ?>
                                <li class="reveal rounded-3xl border border-white/10 bg-white/5 p-6" style="--d: <?= $i * 70 ?>ms">
                                    <span class="font-serif text-3xl text-wheat"><?= $i + 1 ?></span>
                                    <h3 class="mt-4 font-serif text-2xl text-white"><?= e($title) ?></h3>
                                    <p class="mt-2 text-[15px] leading-relaxed text-cream-100/75"><?= $text ?></p>
                                </li>
                            <?php endforeach; ?>
                        </ol>
                        <?php if (!empty($block['note'])): ?>
                            <div class="reveal mt-6 rounded-3xl bg-wheat-soft p-6 text-ink sm:p-8">
                                <h3 class="font-serif text-2xl"><?= e($block['note']['title']) ?></h3>
                                <ul class="mt-3 space-y-2 text-[15.5px] leading-relaxed text-ink-soft">
                                    <?php foreach ($block['note']['items'] as $line): ?><li class="flex gap-3"><span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-clay"></span><span><?= e($line) ?></span></li><?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>

        <?php elseif ($block['type'] === 'callout'): ?>
            <!-- callout block -->
            <section id="<?= e($id) ?>" class="mx-auto max-w-site scroll-mt-40 px-5 py-6 sm:px-8" aria-labelledby="<?= e($id) ?>-title">
                <div class="reveal grid gap-6 rounded-4xl border border-cream-300 bg-sky-soft p-8 sm:p-10 lg:grid-cols-12 lg:items-center">
                    <div class="lg:col-span-8">
                        <p class="eyebrow text-sky-deep"><?= e($block['eyebrow']) ?></p>
                        <h2 id="<?= e($id) ?>-title" class="mt-4 font-serif text-3xl leading-tight"><?= e($block['title']) ?></h2>
                        <p class="mt-3 text-[16px] leading-relaxed text-ink-soft"><?= $block['text'] ?></p>
                    </div>
                    <?php if (!empty($block['actions'])): ?>
                        <div class="flex flex-col gap-3 lg:col-span-4 lg:items-end">
                            <?php foreach ($block['actions'] as $k => [$label, $href]): ?>
                                <a href="<?= e($href) ?>" class="<?= $k === 0 ? 'btn-primary' : 'btn-ghost' ?> w-full justify-center lg:w-auto"><?= e($label) ?></a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </section>

        <?php elseif ($block['type'] === 'people'): ?>
            <!-- people block -->
            <section id="<?= e($id) ?>" class="mx-auto max-w-site scroll-mt-40 px-5 py-14 sm:px-8 lg:py-20" aria-labelledby="<?= e($id) ?>-title">
                <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
                    <div class="max-w-2xl">
                        <p class="eyebrow reveal text-leaf-deep"><?= e($block['eyebrow']) ?></p>
                        <h2 id="<?= e($id) ?>-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-5xl"><?= $block['title'] ?></h2>
                    </div>
                    <?php if (!empty($block['intro'])): ?><p class="reveal max-w-md text-[17px] leading-relaxed text-ink-soft"><?= e($block['intro']) ?></p><?php endif; ?>
                </div>
                <?php if (count($block['slugs']) === 1): $slug = $block['slugs'][0]; $p = $team[$slug]; ?>
                    <article class="reveal mt-10 grid overflow-hidden rounded-4xl bg-cream-100 md:grid-cols-2">
                        <img src="/assets/images/team/<?= e($p['photo']) ?>" alt="<?= e($p['name']) ?>" class="aspect-[4/3] h-full w-full object-cover md:aspect-auto" style="object-position: <?= e($p['pos']) ?>" loading="lazy">
                        <div class="flex flex-col p-8 sm:p-12">
                            <p class="text-xs font-semibold uppercase tracking-[0.16em] text-ink-mute"><?= e($p['role']) ?></p>
                            <h3 class="mt-3 font-serif text-3xl leading-tight sm:text-4xl"><?= e($p['name']) ?><?php if ($p['creds']): ?><span class="text-ink-mute">, <?= e($p['creds']) ?></span><?php endif; ?></h3>
                            <?php if ($p['format']): ?><p class="mt-4 inline-flex w-max rounded-full bg-leaf-soft px-3 py-1 text-xs font-semibold text-leaf-deep"><?= e($p['format']) ?></p><?php endif; ?>
                            <p class="mt-5 text-[16.5px] leading-relaxed text-ink-soft"><?= e($p['bio']) ?></p>
                            <?php if ($p['focus']): ?>
                                <div class="mt-6 flex flex-wrap gap-1.5"><?php foreach ($p['focus'] as $f): ?><span class="tag bg-white"><?= e($f) ?></span><?php endforeach; ?></div>
                            <?php endif; ?>
                            <div class="mt-8 flex flex-col gap-3 sm:flex-row md:mt-auto md:pt-8">
                                <a href="<?= e($site['schedule_url']) ?>" target="_blank" rel="noopener" class="btn-primary">Schedule with <?= e(strtok($p['name'], ' ')) ?></a>
                                <button type="button" class="btn-ghost" data-person="<?= e($slug) ?>" aria-haspopup="dialog">More about <?= e(strtok($p['name'], ' ')) ?></button>
                            </div>
                        </div>
                    </article>
                <?php else: $few = count($block['slugs']) <= 2; ?>
                <ul class="mt-10 grid gap-x-4 gap-y-8 <?= $few ? 'sm:grid-cols-2 lg:max-w-4xl' : 'grid-cols-2 sm:grid-cols-3 lg:grid-cols-4' ?>">
                    <?php foreach ($block['slugs'] as $i => $slug): $p = $team[$slug]; ?>
                        <li class="reveal" style="--d: <?= ($i % 4) * 60 ?>ms">
                            <button type="button" class="group block w-full text-left" data-person="<?= e($slug) ?>" aria-haspopup="dialog">
                                <span class="block overflow-hidden rounded-3xl bg-cream-200">
                                    <img src="/assets/images/team/<?= e($p['photo']) ?>" alt="" class="<?= $few ? 'aspect-[4/3]' : 'aspect-[4/5]' ?> w-full object-cover transition duration-700 group-hover:scale-[1.04]" style="object-position: <?= e($p['pos']) ?>" loading="lazy">
                                </span>
                                <span class="mt-4 block font-serif text-xl leading-tight"><?= e($p['name']) ?><?php if ($p['creds']): ?><span class="text-ink-mute">, <?= e($p['creds']) ?></span><?php endif; ?></span>
                                <span class="mt-1 block text-sm text-ink-soft"><?= e($p['role']) ?></span>
                                <?php if ($few && $p['bio']): ?><span class="mt-3 block text-[15px] leading-relaxed text-ink-soft"><?= e($p['bio']) ?></span><?php endif; ?>
                                <span class="mt-3 inline-flex text-sm font-semibold">Read more <span aria-hidden="true" class="ml-1 transition group-hover:translate-x-1">→</span></span>
                            </button>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
            </section>
        <?php endif; ?>

    <?php endforeach; ?>

    <?php if (!empty($svc['faqs'])): ?>
        <!-- ============ FAQ ============ -->
        <section id="faq" class="scroll-mt-40 border-y border-cream-200 bg-white" aria-labelledby="faq-title">
            <div class="mx-auto grid max-w-site gap-10 px-5 py-14 sm:px-8 lg:grid-cols-12 lg:py-20">
                <div class="lg:col-span-4">
                    <p class="eyebrow reveal text-clay">Questions</p>
                    <h2 id="faq-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-5xl"><?= e($svc['name']) ?> FAQ</h2>
                    <p class="reveal mt-6 text-[17px] leading-relaxed text-ink-soft">Still wondering about something? Call us at <a href="<?= e($site['phone_href']) ?>" class="font-semibold text-ink underline underline-offset-4"><?= e($site['phone']) ?></a> — we’re happy to help.</p>
                </div>
                <div class="divide-y divide-cream-200 border-y border-cream-200 lg:col-span-8">
                    <?php foreach ($svc['faqs'] as $i => [$q, $a]): ?>
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
    <?php endif; ?>

    <!-- ============ RELATED SERVICES ============ -->
    <section class="mx-auto max-w-site px-5 py-14 sm:px-8 lg:py-20" aria-labelledby="related-title">
        <p class="eyebrow reveal text-leaf-deep">One team, connected care</p>
        <h2 id="related-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-5xl">More ways we help.</h2>
        <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            <?php foreach ($svc['related'] as $i => $key): $rel = $services[$key]; ?>
                <a href="<?= e($rel['url']) ?>" class="reveal group flex flex-col rounded-4xl border border-cream-200 bg-white p-7 transition hover:-translate-y-1 hover:shadow-xl hover:shadow-ink/5" style="--d: <?= $i * 70 ?>ms">
                    <span class="flex items-center gap-2">
                        <span class="font-serif text-2xl"><?= e($rel['name']) ?></span>
                        <?php if (!empty($rel['new'])): ?><span class="rounded-full bg-leaf-soft px-2 py-0.5 text-[10px] font-bold uppercase tracking-wider text-leaf-deep">New</span><?php endif; ?>
                    </span>
                    <span class="mt-3 text-[15px] leading-relaxed text-ink-soft"><?= e($rel['blurb']) ?></span>
                    <span class="mt-6 inline-flex items-center gap-1 text-sm font-semibold">Learn more <span aria-hidden="true" class="transition group-hover:translate-x-1">→</span></span>
                </a>
            <?php endforeach; ?>
        </div>
    </section>

    <?php include __DIR__ . '/visit-cta.php'; ?>

</main>

<?php include __DIR__ . '/person-dialog.php'; ?>

<script type="application/ld+json">
<?php
$graph = [
    [
        '@type' => 'MedicalWebPage',
        'name' => $svc['name'] . ' in Wichita, KS',
        'url' => $site['url'] . $canonical_path,
        'description' => $page_description,
        'about' => ['@type' => 'MedicalTherapy', 'name' => $svc['schema_name'] ?? $svc['name']],
        'provider' => ['@type' => 'MedicalClinic', 'name' => $site['name'], 'telephone' => '+1-316-260-3777'],
    ],
    [
        '@type' => 'BreadcrumbList',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $site['url'] . '/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $site['url'] . '/#services'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => $svc['name'], 'item' => $site['url'] . $canonical_path],
        ],
    ],
];
if (!empty($svc['faqs'])) {
    $graph[] = ['@type' => 'FAQPage', 'mainEntity' => array_map(fn ($f) => [
        '@type' => 'Question', 'name' => $f[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]],
    ], $svc['faqs'])];
}
echo json_encode(['@context' => 'https://schema.org', '@graph' => $graph], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
?>
</script>
