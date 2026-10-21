<?php
/**
 * Shared layout for service pages. A page sets $svc and includes this file
 * between header.php and footer.php.
 *
 * $svc = [
 *   'name', 'eyebrow', 'title' (may contain <em>), 'intro', 'image', 'image_alt', 'image_pos'?,
 *   'blocks' => [ ['type' => text|list|steps|people|callout, 'id', 'nav', ...], ... ],
 *   'faqs' => [[q, a], ...], 'related' => [service keys],
 * ]
 *
 * @var array $svc @var array $site @var array $team @var array $services @var array $conditions
 */
?>
<?php
/* Service pages use one heading style: page data may carry <em> accents, which we flatten here. */
$plain = fn ($html) => preg_replace('#</?em\b[^>]*>#', '', $html);

/* Two-column section: header on the left, content on the right. Close with $split_close. */
$split_open = function ($id, $eyebrow, $title, $intro = null, $dark = false, $extra = '') use ($plain) { ?>
    <div class="grid gap-10 lg:grid-cols-12 lg:gap-16">
        <div class="lg:col-span-4">
            <div class="lg:sticky lg:top-32">
                <?php if ($eyebrow): ?><p class="eyebrow reveal <?= $dark ? 'text-wheat' : 'text-leaf-deep' ?>"><?= e($eyebrow) ?></p><?php endif; ?>
                <h2 id="<?= e($id) ?>-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-[2.75rem] <?= $dark ? 'text-white' : '' ?>"><?= $plain($title) ?></h2>
                <?php if ($intro): ?><p class="reveal mt-5 text-[17px] leading-relaxed <?= $dark ? 'text-cream-100/75' : 'text-ink-soft' ?>"><?= e($intro) ?></p><?php endif; ?>
                <?= $extra ?>
            </div>
        </div>
        <div class="lg:col-span-8">
<?php };
$split_close = '</div></div>';

/* Every block is a panel with the same outer and inner spacing; only the background changes. */
$panel_open = fn ($id, $bg = '') => '<section id="' . e($id) . '" class="scroll-mt-28 px-3 py-3 sm:px-4" aria-labelledby="' . e($id) . '-title"><div class="rounded-4xl ' . $bg . '"><div class="mx-auto max-w-site px-5 py-14 sm:px-8 lg:py-20">';
$panel_close = '</div></div></section>';

$dot_list = function ($items, $cols = 'sm:grid-cols-2', $dot = 'bg-leaf') { ?>
    <ul class="reveal grid gap-x-8 gap-y-2.5 text-[15.5px] <?= $cols ?>">
        <?php foreach ($items as $item): ?>
            <li class="flex items-start gap-2.5"><span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full <?= $dot ?>" aria-hidden="true"></span><span><?= $item ?></span></li>
        <?php endforeach; ?>
    </ul>
<?php };
?>

<main id="main">

    <!-- ============ PAGE HERO ============ -->
    <section class="mx-auto max-w-site px-5 pb-11 pt-10 sm:px-8 lg:pb-16 lg:pt-14" aria-labelledby="page-title">
        <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-20">
            <div>
                <nav aria-label="Breadcrumb" class="reveal text-sm text-ink-mute">
                    <a href="/" class="hover:text-ink">Home</a> <span aria-hidden="true">/</span>
                    <a href="/#services" class="hover:text-ink">Services</a> <span aria-hidden="true">/</span>
                    <span class="text-ink"><?= e($svc['name']) ?></span>
                </nav>
                <p class="eyebrow reveal mt-8 text-leaf-deep"><?= e($svc['eyebrow']) ?></p>
                <h1 id="page-title" class="reveal mt-5 font-serif text-[2.6rem] font-light leading-[1.05] tracking-tight sm:text-6xl"><?= $plain($svc['title']) ?></h1>
                <p class="reveal mt-7 max-w-lg text-lg leading-relaxed text-ink-soft"><?= e($svc['intro']) ?></p>
                <div class="reveal mt-9 flex flex-col gap-3 sm:flex-row">
                    <a href="<?= e($site['schedule_url']) ?>" target="_blank" rel="noopener" class="btn-primary">Schedule an Appointment</a>
                    <a href="<?= e($site['phone_href']) ?>" class="btn-ghost">Call <?= e($site['phone']) ?></a>
                </div>
            </div>
            <figure class="reveal" style="--d: 120ms">
                <?php if (($svc['image_fit'] ?? '') === 'contain'): /* product cutouts: show the whole thing on a soft panel */ ?>
                    <img src="<?= e($svc['image']) ?>" alt="<?= e($svc['image_alt']) ?>" class="aspect-[4/3] w-full rounded-4xl bg-cream-100 object-contain p-4 sm:p-8" fetchpriority="high">
                <?php else: ?>
                    <img src="<?= e($svc['image']) ?>" alt="<?= e($svc['image_alt']) ?>" class="aspect-[4/3] w-full rounded-4xl object-cover" style="object-position: <?= e($svc['image_pos'] ?? '50% 50%') ?>" fetchpriority="high">
                <?php endif; ?>
            </figure>
        </div>
    </section>

    <?php foreach ($svc['blocks'] as $bi => $block): $id = $block['id'] ?? 'block-' . $bi; ?>

        <?php if ($block['type'] === 'text' && $bi === 0): ?>
            <!-- intro block: centered header, then image and explanation side by side -->
            <?= $panel_open($id, 'bg-cream-100') ?>
                <?php $split_open($id, $block['eyebrow'], $block['title'], null, false, !empty($block['image'])
                    ? '<img src="' . e($block['image']) . '" alt="' . e($block['image_alt'] ?? '') . '" class="reveal mt-10 aspect-[4/3] w-full rounded-3xl object-cover" style="object-position: ' . e($block['image_pos'] ?? '50% 50%') . '" loading="lazy">'
                    : ''); ?>
                    <div class="reveal space-y-5 text-[17px] leading-relaxed text-ink-soft lg:pt-11">
                        <?php foreach ($block['paras'] as $para): ?><p><?= e($para) ?></p><?php endforeach; ?>
                    </div>
                    <?php if (!empty($block['points'])): ?>
                        <div class="mt-8 border-t border-cream-300 pt-6 text-ink-soft"><?php $dot_list(array_map('e', $block['points'])); ?></div>
                    <?php endif; ?>
                <?= $split_close ?>
            <?= $panel_close ?>

        <?php elseif ($block['type'] === 'text'): $flip = !empty($block['flip']); ?>
            <!-- text block: equal halves, image alternating sides -->
            <?= $panel_open($id) ?>
                <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-16">
                    <?php if (!empty($block['image'])): ?>
                        <img src="<?= e($block['image']) ?>" alt="<?= e($block['image_alt'] ?? '') ?>" class="reveal order-last aspect-[4/3] w-full rounded-3xl object-cover <?= $flip ? '' : 'lg:order-first' ?>" style="object-position: <?= e($block['image_pos'] ?? '50% 50%') ?>" loading="lazy">
                    <?php endif; ?>
                    <div class="<?= empty($block['image']) ? 'max-w-3xl lg:col-span-2' : '' ?>">
                        <p class="eyebrow reveal text-leaf-deep"><?= e($block['eyebrow']) ?></p>
                        <h2 id="<?= e($id) ?>-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-[2.75rem]"><?= $plain($block['title']) ?></h2>
                        <div class="reveal mt-6 space-y-5 text-[17px] leading-relaxed text-ink-soft">
                            <?php foreach ($block['paras'] as $para): ?><p><?= e($para) ?></p><?php endforeach; ?>
                        </div>
                        <?php if (!empty($block['points'])): ?>
                            <div class="mt-8 border-t border-cream-200 pt-6 text-ink-soft"><?php $dot_list(array_map('e', $block['points'])); ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            <?= $panel_close ?>

        <?php elseif ($block['type'] === 'list'): ?>
            <!-- list block: conditions / signs / who it helps -->
            <?= $panel_open($id, 'bg-white') ?>
                <?php $split_open($id, $block['eyebrow'], $block['title'], $block['intro'] ?? null); ?>
                <?php $detailed = !empty(array_filter(array_column($block['items'], 1))); ?>
                <?php if ($detailed): ?>
                    <ul class="grid gap-x-10 sm:grid-cols-2">
                        <?php foreach ($block['items'] as $i => $item): [$label, $text, $slug] = $item + [null, null, null]; $tag = $slug ? 'a' : 'div'; ?>
                            <li class="reveal border-t border-cream-200" style="--d: <?= ($i % 3) * 60 ?>ms">
                                <<?= $tag ?> <?= $slug ? 'href="/conditions/' . e($slug) . '/"' : '' ?> class="group block py-6">
                                    <span class="flex items-center justify-between gap-3">
                                        <span class="font-serif text-xl <?= $slug ? 'transition group-hover:text-clay' : '' ?>"><?= e($label) ?></span>
                                        <?php if ($slug): ?><span aria-hidden="true" class="text-ink-mute transition group-hover:translate-x-1 group-hover:text-ink">→</span><?php endif; ?>
                                    </span>
                                    <?php if ($text): ?><span class="mt-2 block text-[15px] leading-relaxed text-ink-soft"><?= e($text) ?></span><?php endif; ?>
                                </<?= $tag ?>>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    <div class="border-t border-cream-200 pt-6 text-ink-soft">
                        <?php $dot_list(array_map(function ($item) {
                            [$label, , $slug] = $item + [null, null, null];
                            return $slug ? '<a href="/conditions/' . e($slug) . '/" class="text-ink underline decoration-cream-300 underline-offset-4 hover:decoration-ink">' . e($label) . '</a>' : e($label);
                        }, $block['items']), 'sm:grid-cols-2 lg:grid-cols-3'); ?>
                    </div>
                <?php endif; ?>
                <?= $split_close ?>
            <?= $panel_close ?>

        <?php elseif ($block['type'] === 'steps'): ?>
            <!-- steps block -->
            <?= $panel_open($id, 'bg-prairie-deep text-cream-100') ?>
                <?php $split_open($id, $block['eyebrow'], $block['title'], $block['intro'] ?? null, true); ?>
                <ol class="grid gap-x-10 gap-y-8 <?= count($block['items']) === 3 ? 'md:grid-cols-3' : 'md:grid-cols-2' ?>">
                    <?php foreach ($block['items'] as $i => [$title, $text]): ?>
                        <li class="reveal border-t border-white/15 pt-5" style="--d: <?= $i * 70 ?>ms">
                            <span class="font-serif text-base text-wheat">0<?= $i + 1 ?></span>
                            <h3 class="mt-2 font-serif text-2xl text-white"><?= e($title) ?></h3>
                            <p class="mt-2 text-[15px] leading-relaxed text-cream-100/75"><?= $text ?></p>
                        </li>
                    <?php endforeach; ?>
                </ol>
                <?php if (!empty($block['note'])): ?>
                    <div class="mt-10 border-t border-white/15 pt-8">
                        <h3 class="reveal font-serif text-xl text-white"><?= e($block['note']['title']) ?></h3>
                        <div class="mt-4 text-cream-100/75"><?php $dot_list(array_map('e', $block['note']['items']), 'md:grid-cols-2', 'bg-wheat'); ?></div>
                    </div>
                <?php endif; ?>
                <?= $split_close ?>
            <?= $panel_close ?>

        <?php elseif ($block['type'] === 'callout'): ?>
            <!-- callout block -->
            <?= $panel_open($id, 'bg-cream-100') ?>
                <?php $split_open($id, $block['eyebrow'], $block['title']); ?>
                <p class="reveal text-[17px] leading-relaxed text-ink-soft lg:pt-11"><?= $block['text'] ?></p>
                <?php if (!empty($block['actions'])): ?>
                    <div class="reveal mt-8 flex flex-col gap-3 sm:flex-row">
                        <?php foreach ($block['actions'] as $k => [$label, $href]): ?>
                            <a href="<?= e($href) ?>" class="<?= $k === 0 ? 'btn-primary' : 'btn-ghost' ?>"><?= e($label) ?></a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <?= $split_close ?>
            <?= $panel_close ?>

        <?php elseif ($block['type'] === 'facts'): ?>
            <!-- facts block: a short row of at-a-glance numbers -->
            <section id="<?= e($id) ?>" class="mx-auto max-w-site px-5 pb-6 sm:px-8" aria-label="<?= e($block['label'] ?? 'At a glance') ?>">
                <dl class="grid grid-cols-2 gap-x-6 gap-y-8 border-y border-cream-200 py-8 lg:grid-cols-4">
                    <?php foreach ($block['items'] as $i => [$value, $label]): ?>
                        <div class="reveal" style="--d: <?= $i * 60 ?>ms">
                            <dt class="sr-only"><?= e($label) ?></dt>
                            <dd class="font-serif text-3xl font-light tracking-tight sm:text-4xl"><?= e($value) ?></dd>
                            <dd class="mt-1.5 text-sm leading-snug text-ink-soft"><?= e($label) ?></dd>
                        </div>
                    <?php endforeach; ?>
                </dl>
            </section>

        <?php elseif ($block['type'] === 'quiz'): ?>
            <!-- quiz block: a short self-check that points to a conversation, never a diagnosis (logic in main.js) -->
            <?= $panel_open($id, 'bg-cream-100') ?>
                <?php $split_open($id, $block['eyebrow'], $block['title'], $block['intro'] ?? null, false,
                    '<p class="reveal mt-6 text-[13.5px] leading-relaxed text-ink-mute">' . e($block['disclaimer']) . '</p>'); ?>
                <form class="reveal" data-quiz novalidate>
                    <ol class="space-y-3">
                        <?php foreach ($block['questions'] as $qi => $q): ?>
                            <li class="rounded-3xl bg-white p-5 sm:p-6">
                                <fieldset>
                                    <legend class="flex gap-3 font-serif text-lg leading-snug sm:text-xl">
                                        <span class="text-ink-mute"><?= $qi + 1 ?>.</span><span><?= e($q['q']) ?></span>
                                    </legend>
                                    <?php if (!empty($q['hint'])): ?><p class="mt-2 pl-7 text-sm text-ink-mute"><?= e($q['hint']) ?></p><?php endif; ?>
                                    <div class="mt-4 flex flex-wrap gap-2 pl-7">
                                        <?php foreach (['yes' => 'Yes', 'no' => 'No', 'unsure' => 'Not sure'] as $val => $label): ?>
                                            <label class="cursor-pointer">
                                                <input type="radio" name="q<?= $qi ?>" value="<?= $val ?>" data-key="<?= e($q['key']) ?>" class="peer sr-only">
                                                <span class="inline-flex min-h-[44px] items-center rounded-full border border-cream-300 px-5 text-[15px] transition hover:border-ink peer-checked:border-ink peer-checked:bg-ink peer-checked:text-white peer-focus-visible:ring-2 peer-focus-visible:ring-leaf peer-focus-visible:ring-offset-2"><?= $label ?></span>
                                            </label>
                                        <?php endforeach; ?>
                                    </div>
                                </fieldset>
                            </li>
                        <?php endforeach; ?>
                    </ol>
                    <div class="mt-6 flex flex-col gap-3 sm:flex-row sm:items-center">
                        <button type="submit" class="btn-primary">See my next step</button>
                        <p class="text-sm text-ink-mute" data-quiz-count aria-live="polite"></p>
                    </div>
                    <div class="mt-8 hidden rounded-3xl bg-white p-6 sm:p-8" data-quiz-result tabindex="-1" aria-live="polite">
                        <?php foreach ($block['results'] as $key => $res): ?>
                            <div class="hidden" data-result="<?= e($key) ?>">
                                <p class="eyebrow text-leaf-deep"><?= e($res['eyebrow']) ?></p>
                                <h3 class="mt-3 font-serif text-2xl leading-snug sm:text-3xl"><?= e($res['title']) ?></h3>
                                <p class="mt-4 text-[16px] leading-relaxed text-ink-soft"><?= e($res['text']) ?></p>
                            </div>
                        <?php endforeach; ?>
                        <div class="mt-7 flex flex-col gap-3 sm:flex-row">
                            <a href="<?= e($site['schedule_url']) ?>" target="_blank" rel="noopener" class="btn-primary">Request a TMS consultation</a>
                            <a href="<?= e($site['phone_href']) ?>" class="btn-ghost">Call <?= e($site['phone']) ?></a>
                        </div>
                        <button type="button" class="mt-5 text-sm text-ink-mute underline underline-offset-4 hover:text-ink" data-quiz-reset>Start over</button>
                    </div>
                </form>
                <?= $split_close ?>
            <?= $panel_close ?>

        <?php elseif ($block['type'] === 'videos'): $vids = array_values(array_filter($videos ?? [], fn ($v) => ($v['topic'] ?? '') === $block['topic'])); ?>
            <?php if ($vids): ?>
            <!-- videos block: renders once videos with this topic are added to $videos in config -->
            <?= $panel_open($id) ?>
                <?php $split_open($id, $block['eyebrow'], $block['title'], $block['intro'] ?? null); ?>
                <div class="grid gap-6 sm:grid-cols-2">
                    <?php foreach ($vids as $video): ?>
                        <figure class="reveal">
                            <div class="aspect-video overflow-hidden rounded-3xl bg-cream-200">
                                <iframe class="h-full w-full" src="https://www.youtube-nocookie.com/embed/<?= e($video['youtube_id']) ?>" title="<?= e($video['title']) ?>" loading="lazy" allow="accelerometer; encrypted-media; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <figcaption class="mt-3 font-serif text-lg"><?= e($video['title']) ?></figcaption>
                        </figure>
                    <?php endforeach; ?>
                </div>
                <?= $split_close ?>
            <?= $panel_close ?>
            <?php endif; ?>

        <?php elseif ($block['type'] === 'people'): ?>
            <!-- people block -->
            <?= $panel_open($id) ?>
                <?php $split_open($id, $block['eyebrow'], $block['title'], $block['intro'] ?? null); ?>
                <?php if (count($block['slugs']) === 1): $slug = $block['slugs'][0]; $p = $team[$slug]; ?>
                    <article class="reveal grid items-center gap-8 sm:grid-cols-2 sm:gap-10">
                        <img src="/assets/images/team/<?= e($p['photo']) ?>" alt="<?= e($p['name']) ?>" class="aspect-[4/3] w-full rounded-3xl object-cover" style="object-position: <?= e($p['pos']) ?>" loading="lazy">
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-[0.16em] text-ink-mute"><?= e($p['role']) ?></p>
                            <h3 class="mt-3 font-serif text-3xl leading-tight"><?= e($p['name']) ?><?php if ($p['creds']): ?><span class="text-ink-mute">, <?= e($p['creds']) ?></span><?php endif; ?></h3>
                            <p class="mt-5 whitespace-pre-line text-[16.5px] leading-relaxed text-ink-soft"><?= e($p['bio']) ?></p>
                            <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                                <a href="<?= e($site['schedule_url']) ?>" target="_blank" rel="noopener" class="btn-primary">Schedule with <?= e(strtok($p['name'], ' ')) ?></a>
                                <button type="button" class="btn-ghost" data-person="<?= e($slug) ?>" aria-haspopup="dialog">More about <?= e(strtok($p['name'], ' ')) ?></button>
                            </div>
                        </div>
                    </article>
                <?php else: ?>
                    <?php $cols = [2 => 'sm:grid-cols-2', 3 => 'sm:grid-cols-3'][count($block['slugs'])] ?? 'sm:grid-cols-3 xl:grid-cols-4'; ?>
                    <ul class="grid grid-cols-2 gap-x-5 gap-y-10 <?= $cols ?>">
                        <?php foreach ($block['slugs'] as $i => $slug): $p = $team[$slug]; ?>
                            <li class="reveal" style="--d: <?= ($i % 4) * 60 ?>ms">
                                <button type="button" class="group block w-full text-left" data-person="<?= e($slug) ?>" aria-haspopup="dialog">
                                    <span class="block overflow-hidden rounded-3xl bg-cream-200">
                                        <img src="/assets/images/team/<?= e($p['photo']) ?>" alt="" class="aspect-[4/5] w-full object-cover transition duration-700 group-hover:scale-[1.04]" style="object-position: <?= e($p['pos']) ?>" loading="lazy">
                                    </span>
                                    <span class="mt-4 block font-serif text-xl leading-tight"><?= e($p['name']) ?></span>
                                    <span class="mt-1 block text-sm text-ink-mute"><?= e($p['creds'] ?: $p['role']) ?></span>
                                </button>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <?= $split_close ?>
            <?= $panel_close ?>
        <?php endif; ?>

    <?php endforeach; ?>

    <?php if (!empty($svc['faqs'])): ?>
        <!-- ============ FAQ ============ -->
        <?= $panel_open('faq', 'bg-white') ?>
            <?php $split_open('faq', 'Questions', $svc['name'] . ' FAQ', null, false,
                '<p class="reveal mt-6 text-[15px] leading-relaxed text-ink-soft">Still wondering about something? Call us at <a href="' . e($site['phone_href']) . '" class="font-semibold text-ink underline underline-offset-4">' . e($site['phone']) . '</a>.</p>'); ?>
            <div class="divide-y divide-cream-200 border-y border-cream-200">
                <?php foreach ($svc['faqs'] as [$q, $a]): ?>
                    <details class="faq group reveal">
                        <summary class="flex cursor-pointer list-none items-start justify-between gap-6 py-5 font-serif text-xl leading-snug">
                            <?= e($q) ?>
                            <span class="mt-0.5 inline-flex h-8 w-8 shrink-0 items-center justify-center rounded-full border border-cream-300 text-base transition group-open:rotate-45" aria-hidden="true">+</span>
                        </summary>
                        <p class="pb-6 text-[16px] leading-relaxed text-ink-soft"><?= e($a) ?></p>
                    </details>
                <?php endforeach; ?>
            </div>
            <?= $split_close ?>
        <?= $panel_close ?>
    <?php endif; ?>

    <!-- ============ RELATED SERVICES ============ -->
    <?= $panel_open('related') ?>
        <?php $split_open('related', 'One team, connected care', 'More ways we help.'); ?>
        <ul class="grid gap-x-10 sm:grid-cols-2">
            <?php foreach ($svc['related'] as $i => $key): $rel = $services[$key]; ?>
                <li class="reveal border-t border-cream-200" style="--d: <?= $i * 70 ?>ms">
                    <a href="<?= e($rel['url']) ?>" class="group block py-6">
                        <span class="flex items-center justify-between gap-3">
                            <span class="font-serif text-xl transition group-hover:text-clay"><?= e($rel['name']) ?><?php if (!empty($rel['new'])): ?> <span class="ml-1 rounded-full bg-leaf-soft px-2 py-0.5 align-middle font-sans text-[10px] font-bold uppercase tracking-wider text-leaf-deep">New</span><?php endif; ?></span>
                            <span aria-hidden="true" class="text-ink-mute transition group-hover:translate-x-1 group-hover:text-ink">→</span>
                        </span>
                        <span class="mt-2 block text-[15px] leading-relaxed text-ink-soft"><?= e($rel['blurb']) ?></span>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <?= $split_close ?>
    <?= $panel_close ?>

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
