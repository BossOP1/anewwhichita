<?php
/**
 * Shared layout for legal / policy pages.
 *
 * The page sets $doc = ['title', 'eyebrow', 'summary', 'sections' => [[id, heading, html], ...]]
 * Section HTML is trusted, hand-written markup.
 *
 * @var array $doc @var array $site @var array $legal @var array $legal_pages
 */
?>

<main id="main">

    <section class="mx-auto max-w-site px-5 pb-10 pt-10 sm:px-8 lg:pb-14 lg:pt-14" aria-labelledby="page-title">
        <nav aria-label="Breadcrumb" class="text-sm text-ink-mute">
            <a href="/" class="hover:text-ink">Home</a> <span aria-hidden="true">/</span> <span class="text-ink"><?= e($doc['title']) ?></span>
        </nav>
        <p class="eyebrow mt-8 text-sky-deep"><?= e($doc['eyebrow']) ?></p>
        <h1 id="page-title" class="mt-5 max-w-4xl font-serif text-[2.4rem] font-light leading-[1.08] tracking-tight sm:text-5xl lg:text-6xl"><?= e($doc['title']) ?></h1>
        <p class="mt-6 max-w-3xl text-lg leading-relaxed text-ink-soft"><?= e($doc['summary']) ?></p>
        <p class="mt-6 text-sm text-ink-mute">Effective <?= e($legal['effective']) ?></p>
    </section>

    <div class="mx-auto max-w-site px-5 pb-16 sm:px-8 lg:pb-24">
        <div class="grid gap-10 border-t border-cream-200 pt-10 lg:grid-cols-12 lg:gap-16">

            <aside class="lg:col-span-3">
                <div class="lg:sticky lg:top-32">
                    <?php if (count($doc['sections']) > 3): ?>
                        <p class="text-xs font-semibold uppercase tracking-[0.18em] text-ink-mute">On this page</p>
                        <ol class="mt-4 space-y-2 text-[14.5px]">
                            <?php foreach ($doc['sections'] as [$id, $heading]): ?>
                                <li><a href="#<?= e($id) ?>" class="text-ink-soft hover:text-ink"><?= e($heading) ?></a></li>
                            <?php endforeach; ?>
                        </ol>
                    <?php endif; ?>
                    <div class="mt-8 rounded-3xl bg-cream-100 p-5 text-[14px] leading-relaxed text-ink-soft">
                        <p class="font-semibold text-ink">Questions?</p>
                        <p class="mt-1">Call <a href="<?= e($site['phone_href']) ?>" class="underline underline-offset-4"><?= e($site['phone']) ?></a> or email <a href="mailto:<?= e($legal['contact_email']) ?>" class="underline underline-offset-4"><?= e($legal['contact_email']) ?></a>.</p>
                    </div>
                </div>
            </aside>

            <article class="legal-prose lg:col-span-9">
                <?php foreach ($doc['sections'] as [$id, $heading, $html]): ?>
                    <section id="<?= e($id) ?>" class="scroll-mt-32">
                        <h2><?= e($heading) ?></h2>
                        <?= $html ?>
                    </section>
                <?php endforeach; ?>
            </article>
        </div>

        <nav class="mt-16 rounded-4xl border border-cream-200 bg-white p-6 sm:p-8" aria-label="Legal pages">
            <p class="text-xs font-semibold uppercase tracking-[0.18em] text-ink-mute">Other policies</p>
            <ul class="mt-4 flex flex-wrap gap-2">
                <?php foreach ($legal_pages as $url => $label): if ($url === $canonical_path) continue; ?>
                    <li><a href="<?= e($url) ?>" class="inline-flex rounded-full border border-cream-300 px-4 py-2 text-sm hover:border-ink"><?= e($label) ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>

</main>
