<?php /** @var array $site */ ?>
    <!-- ============ VISIT / FINAL CTA ============ -->
    <section id="visit" class="scroll-mt-24 px-3 pb-3 sm:px-4 sm:pb-4" aria-labelledby="visit-title">
        <div class="relative isolate overflow-hidden rounded-4xl">
            <img src="/assets/images/people/hillside-walk.jpg" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover object-[50%_55%]" loading="lazy">
            <div class="absolute inset-0 -z-10 bg-gradient-to-br from-[#16201A]/75 via-[#16201A]/45 to-[#16201A]/20"></div>
            <div class="mx-auto max-w-site px-5 py-14 sm:px-10 lg:py-20">
                <div class="max-w-2xl text-white">
                    <p class="eyebrow text-wheat reveal">Your next step</p>
                    <h2 id="visit-title" class="reveal mt-5 font-serif text-5xl font-light leading-[1.04] tracking-tight sm:text-6xl">Your next step can be <em class="italic text-wheat">a small one.</em></h2>
                    <p class="reveal mt-6 max-w-lg text-lg leading-relaxed text-cream-100/90">Send a quick inquiry and our team will reach out to you shortly. We’ll take it from there, together.</p>
                    <div class="reveal mt-9 flex flex-col gap-3 sm:flex-row">
                        <a href="<?= e($site['schedule_url']) ?>" target="_blank" rel="noopener" class="btn-light">Schedule an Appointment</a>
                        <a href="<?= e($site['phone_href']) ?>" class="btn-glass">Call <?= e($site['phone']) ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
