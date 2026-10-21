<?php /** @var array $site */ ?>
<!-- Provider dialog (filled by main.js) -->
<dialog id="person-dialog" class="person-dialog" aria-labelledby="pd-name">
    <div class="grid max-h-[90vh] overflow-y-auto sm:grid-cols-[minmax(0,5fr)_minmax(0,7fr)]">
        <div class="relative bg-cream-200">
            <!-- pinned on desktop so a long bio scrolls past the photo instead of stretching it -->
            <img src="" alt="" class="h-72 w-full object-cover sm:sticky sm:top-0 sm:h-full sm:max-h-[90vh]" data-pd-photo>
        </div>
        <div class="flex flex-col p-6 sm:p-9">
            <div class="flex items-start justify-between gap-4">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.16em] text-ink-mute" data-pd-role></p>
                    <h2 id="pd-name" class="mt-2 font-serif text-3xl leading-tight" data-pd-name></h2>
                </div>
                <button type="button" class="inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-cream-300 hover:bg-cream-100" data-pd-close>
                    <span class="sr-only">Close</span>
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M6 6l12 12M18 6 6 18"/></svg>
                </button>
            </div>
            <p class="mt-3 inline-flex w-max items-center gap-2 rounded-full bg-leaf-soft px-3 py-1 text-xs font-semibold text-leaf-deep" data-pd-format></p>
            <p class="mt-5 whitespace-pre-line text-[15.5px] leading-relaxed text-ink-soft" data-pd-bio></p>
            <div class="mt-6" data-pd-focus-wrap>
                <h3 class="text-xs font-semibold uppercase tracking-[0.16em] text-ink-mute">Areas of focus</h3>
                <div class="mt-2.5 flex flex-wrap gap-1.5" data-pd-focus></div>
            </div>
            <div class="mt-6" data-pd-conditions-wrap>
                <h3 class="text-xs font-semibold uppercase tracking-[0.16em] text-ink-mute">Helps with</h3>
                <div class="mt-2.5 flex flex-wrap gap-1.5" data-pd-conditions></div>
            </div>
            <div class="mt-6" data-pd-insurance-wrap>
                <h3 class="text-xs font-semibold uppercase tracking-[0.16em] text-ink-mute" data-pd-insurance-title>Insurance accepted</h3>
                <p class="mt-2.5 text-sm leading-relaxed text-ink-soft" data-pd-insurance></p>
                <a href="/insurance/" class="mt-1 inline-block text-sm font-semibold text-sky-deep underline underline-offset-4">Insurance &amp; payment details</a>
            </div>
            <div class="mt-8 flex flex-col gap-3 pt-2 sm:mt-auto sm:flex-row">
                <a href="<?= e($site['schedule_url']) ?>" target="_blank" rel="noopener" class="btn-primary justify-center" data-pd-schedule>Schedule an Appointment</a>
                <a href="#" class="btn-ghost justify-center" data-pd-bio-link>View on our team page</a>
            </div>
        </div>
    </div>
</dialog>
