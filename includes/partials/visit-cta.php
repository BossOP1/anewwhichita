<?php /** @var array $site */ ?>
    <!-- ============ VISIT / FINAL CTA ============ -->
    <section id="visit" class="scroll-mt-24 px-3 pb-3 sm:px-4 sm:pb-4" aria-labelledby="visit-title">
        <div class="relative isolate overflow-hidden rounded-4xl">
            <img src="/assets/images/people/hillside-walk.jpg" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover object-[50%_55%]" loading="lazy">
            <div class="absolute inset-0 -z-10 bg-gradient-to-br from-[#16201A]/75 via-[#16201A]/45 to-[#16201A]/20"></div>
            <div class="mx-auto grid max-w-site gap-12 px-5 py-14 sm:px-10 lg:grid-cols-12 lg:items-end lg:py-20">
                <div class="text-white lg:col-span-7">
                    <p class="eyebrow text-wheat reveal">Your next step</p>
                    <h2 id="visit-title" class="reveal mt-5 font-serif text-5xl font-light leading-[1.04] tracking-tight sm:text-6xl">Your next step can be <em class="italic text-wheat">a small one.</em></h2>
                    <p class="reveal mt-6 max-w-lg text-lg leading-relaxed text-cream-100/90">Send a quick inquiry and our team will reach out to you shortly. We’ll take it from there, together.</p>
                    <div class="reveal mt-9 flex flex-col gap-3 sm:flex-row">
                        <a href="<?= e($site['schedule_url']) ?>" target="_blank" rel="noopener" class="btn-light">Schedule an Appointment</a>
                        <a href="<?= e($site['phone_href']) ?>" class="btn-glass">Call <?= e($site['phone']) ?></a>
                    </div>
                </div>
                <address class="reveal rounded-4xl bg-cream-50 p-7 not-italic text-ink shadow-2xl sm:p-8 lg:col-span-5" style="--d: 120ms">
                    <p class="font-serif text-2xl">Visit ANew</p>
                    <dl class="mt-6 space-y-5 text-[15px]">
                        <div>
                            <dt class="text-xs font-semibold uppercase tracking-[0.16em] text-ink-mute">Office</dt>
                            <dd class="mt-1"><?= e($site['street']) ?><br><?= e($site['city']) ?>, <?= e($site['region']) ?> <?= e($site['postal']) ?></dd>
                            <dd><a href="<?= e($site['maps_url']) ?>" target="_blank" rel="noopener" class="mt-1 inline-block text-sm font-semibold text-sky-deep underline underline-offset-4">Get directions →</a></dd>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <dt class="text-xs font-semibold uppercase tracking-[0.16em] text-ink-mute">Phone</dt>
                                <dd class="mt-1"><a href="<?= e($site['phone_href']) ?>" class="font-semibold"><?= e($site['phone']) ?></a></dd>
                            </div>
                            <div>
                                <dt class="text-xs font-semibold uppercase tracking-[0.16em] text-ink-mute">Fax</dt>
                                <dd class="mt-1"><?= e($site['fax']) ?></dd>
                            </div>
                        </div>
                        <div class="border-t border-cream-200 pt-5">
                            <dt class="text-xs font-semibold uppercase tracking-[0.16em] text-ink-mute">Already a client?</dt>
                            <dd class="mt-2 flex flex-wrap gap-2 text-sm">
                                <a href="<?= e($site['portal_therapy']) ?>" target="_blank" rel="noopener" class="rounded-full border border-cream-300 px-4 py-2 hover:border-ink">Therapy portal</a>
                                <a href="<?= e($site['portal_medication']) ?>" target="_blank" rel="noopener" class="rounded-full border border-cream-300 px-4 py-2 hover:border-ink">Medication portal</a>
                            </dd>
                        </div>
                        <div>
                            <dt class="sr-only">Referrals</dt>
                            <dd class="text-sm text-ink-soft">Referring a patient? <a href="<?= e($site['referral_url']) ?>" class="font-semibold text-ink underline underline-offset-4">Provider referral form</a></dd>
                        </div>
                    </dl>
                </address>
            </div>
        </div>
    </section>
