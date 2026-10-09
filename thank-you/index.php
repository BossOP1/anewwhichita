<?php
require __DIR__ . '/../includes/config.php';

$page_title       = 'Thank You | ANew Mental Health';
$page_description = 'Thanks for reaching out to ANew Mental Health.';
$noindex          = true;
$canonical_path   = '/thank-you/';

include __DIR__ . '/../includes/header.php';
?>
<main id="main" class="mx-auto max-w-site px-5 py-20 sm:px-8 lg:py-32">
    <div class="mx-auto max-w-2xl text-center">
        <span class="mx-auto inline-flex h-16 w-16 items-center justify-center rounded-full bg-leaf-soft text-leaf-deep">
            <svg viewBox="0 0 16 16" class="h-7 w-7" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m3.5 8.5 3 3 6-7"/></svg>
        </span>
        <h1 class="mt-8 font-serif text-5xl font-light tracking-tight sm:text-6xl">Thank you — <em class="italic text-clay">we got it.</em></h1>
        <p class="mt-6 text-lg leading-relaxed text-ink-soft">Your message is on its way to our team, and we’ll be in touch soon. If it’s time-sensitive, call us at <a href="<?= e($site['phone_href']) ?>" class="font-semibold text-ink underline underline-offset-4"><?= e($site['phone']) ?></a>.</p>
        <div class="mt-10 flex flex-col justify-center gap-3 sm:flex-row">
            <a href="/" class="btn-primary">Back to home</a>
            <a href="/meet-our-team/" class="btn-ghost">Meet our team</a>
        </div>
    </div>
</main>
<?php include __DIR__ . '/../includes/footer.php';
