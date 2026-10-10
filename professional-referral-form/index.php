<?php
require __DIR__ . '/../includes/config.php';

$page_title       = 'Professional Referral Form | Refer a Patient to ANew Mental Health | Wichita, KS';
$page_description = 'Providers can refer patients to ANew Mental Health in Wichita, Kansas for therapy, medication management and ADHD assessment. Submit a referral online or fax it to ' . $site['fax'] . '.';
$canonical_path   = '/professional-referral-form/';
$current_page     = 'contact';

$form_action = $site['referral_form_action'];

/* Clinicians a referral can be directed to, from the current team. */
$providers = array_filter($team, fn ($p) => in_array($p['lane'], ['medication', 'therapist', 'intern'], true));

include __DIR__ . '/../includes/header.php';
?>

<main id="main">

    <!-- ============ PAGE HERO ============ -->
    <section class="mx-auto max-w-site px-5 pb-12 pt-10 sm:px-8 lg:pb-16 lg:pt-14" aria-labelledby="page-title">
        <nav aria-label="Breadcrumb" class="reveal text-sm text-ink-mute">
            <a href="/" class="hover:text-ink">Home</a> <span aria-hidden="true">/</span>
            <a href="/contact-us/" class="hover:text-ink">Contact</a> <span aria-hidden="true">/</span>
            <span class="text-ink">Professional Referral</span>
        </nav>
        <div class="mt-8 grid gap-8 lg:grid-cols-12 lg:items-end lg:gap-16">
            <div class="lg:col-span-7">
                <p class="eyebrow reveal text-leaf-deep">For providers</p>
                <h1 id="page-title" class="reveal mt-5 font-serif text-[2.6rem] font-light leading-[1.05] tracking-tight sm:text-6xl">Refer a patient <em class="italic text-clay">to ANew.</em></h1>
            </div>
            <p class="reveal text-lg leading-relaxed text-ink-soft lg:col-span-5">Fill out this form so we can assist your patient efficiently and as soon as possible. We appreciate you choosing ANew to help care for your patients.</p>
        </div>
    </section>

    <!-- ============ FORM ============ -->
    <section class="px-3 pb-14 sm:px-4 lg:pb-20" aria-label="Referral form">
        <div class="rounded-4xl bg-cream-100">
            <div class="mx-auto grid max-w-site gap-10 px-5 py-14 sm:px-8 lg:grid-cols-12 lg:gap-16 lg:py-20">

                <!-- How it works + other ways to refer -->
                <aside class="order-last lg:order-first lg:col-span-4">
                    <div class="lg:sticky lg:top-32">
                        <h2 class="reveal font-serif text-3xl font-light leading-tight tracking-tight">How referrals work</h2>
                        <ol class="reveal mt-6 space-y-5 text-[15.5px] leading-relaxed text-ink-soft">
                            <?php foreach ([
                                ['Send the referral', 'Complete the form, or fax it to us.'],
                                ['We review it', 'Our team matches your patient with the right provider.'],
                                ['We reach out', 'We contact the patient (or guardian) to get them scheduled.'],
                            ] as $i => [$title, $text]): ?>
                                <li class="flex gap-4">
                                    <span class="font-serif text-base text-ink-mute">0<?= $i + 1 ?></span>
                                    <span><strong class="block font-semibold text-ink"><?= e($title) ?></strong><?= e($text) ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ol>

                        <dl class="reveal mt-10 space-y-5 border-t border-cream-300 pt-8 text-[15px]">
                            <div>
                                <dt class="text-xs font-semibold uppercase tracking-[0.16em] text-ink-mute">Fax referrals</dt>
                                <dd class="mt-1.5 font-serif text-2xl"><?= e($site['fax']) ?></dd>
                            </div>
                            <div>
                                <dt class="text-xs font-semibold uppercase tracking-[0.16em] text-ink-mute">Questions</dt>
                                <dd class="mt-1.5"><a href="<?= e($site['phone_href']) ?>" class="font-semibold text-ink underline-offset-4 hover:underline"><?= e($site['phone']) ?></a></dd>
                            </div>
                        </dl>

                        <p class="reveal mt-8 rounded-2xl bg-white/70 p-5 text-sm leading-relaxed text-ink-soft"><strong class="font-semibold text-ink">Referring for an ADHD assessment?</strong> Please list the diagnostic criteria you’ve observed in the reason for referral.</p>
                    </div>
                </aside>

                <!-- The form -->
                <div class="lg:col-span-8">
                    <form class="reveal rounded-3xl bg-white p-6 sm:p-10" method="post" <?= $form_action ? 'action="' . e($form_action) . '"' : '' ?> aria-describedby="form-note">

                        <fieldset>
                            <legend class="font-serif text-2xl">Referring provider</legend>
                            <div class="mt-6 grid gap-5 sm:grid-cols-2">
                                <div class="sm:col-span-2">
                                    <label class="form-label" for="ref-provider-name">Your first and last name <span class="text-clay" aria-hidden="true">*</span></label>
                                    <input class="form-input" id="ref-provider-name" name="referring_provider_name" type="text" autocomplete="name" required>
                                </div>
                                <div>
                                    <label class="form-label" for="ref-practice">Practice name</label>
                                    <input class="form-input" id="ref-practice" name="referring_practice" type="text" autocomplete="organization">
                                </div>
                                <div>
                                    <label class="form-label" for="ref-provider-email">Your email address <span class="text-clay" aria-hidden="true">*</span></label>
                                    <input class="form-input" id="ref-provider-email" name="referring_provider_email" type="email" autocomplete="email" required>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="mt-10 border-t border-cream-200 pt-10">
                            <legend class="sr-only">Patient</legend>
                            <p class="font-serif text-2xl" aria-hidden="true">Patient</p>
                            <div class="mt-6 grid gap-5 sm:grid-cols-2">
                                <div>
                                    <label class="form-label" for="pt-first">First name <span class="text-clay" aria-hidden="true">*</span></label>
                                    <input class="form-input" id="pt-first" name="patient_first_name" type="text" autocomplete="off" required>
                                </div>
                                <div>
                                    <label class="form-label" for="pt-last">Last name <span class="text-clay" aria-hidden="true">*</span></label>
                                    <input class="form-input" id="pt-last" name="patient_last_name" type="text" autocomplete="off" required>
                                </div>
                                <div>
                                    <label class="form-label" for="pt-dob">Date of birth <span class="text-clay" aria-hidden="true">*</span></label>
                                    <input class="form-input" id="pt-dob" name="patient_dob" type="date" required>
                                </div>
                                <div>
                                    <label class="form-label" for="pt-guardian">Guardian’s full name <span class="text-clay" aria-hidden="true">*</span></label>
                                    <input class="form-input" id="pt-guardian" name="guardian_name" type="text" autocomplete="off" required aria-describedby="pt-guardian-hint">
                                    <p id="pt-guardian-hint" class="mt-1.5 text-xs text-ink-mute">For minors. Enter “N/A” if not applicable.</p>
                                </div>
                                <div>
                                    <label class="form-label" for="pt-phone">Patient or guardian phone <span class="text-clay" aria-hidden="true">*</span></label>
                                    <input class="form-input" id="pt-phone" name="patient_phone" type="tel" autocomplete="off" required>
                                </div>
                                <div>
                                    <label class="form-label" for="pt-email">Patient or guardian email <span class="text-clay" aria-hidden="true">*</span></label>
                                    <input class="form-input" id="pt-email" name="patient_email" type="email" autocomplete="off" required>
                                </div>
                                <div class="sm:col-span-2">
                                    <label class="form-label" for="pt-insurance">Patient’s insurance <span class="text-clay" aria-hidden="true">*</span></label>
                                    <input class="form-input" id="pt-insurance" name="patient_insurance" type="text" autocomplete="off" required placeholder="Plan name, or self-pay">
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="mt-10 border-t border-cream-200 pt-10">
                            <legend class="sr-only">Referral details</legend>
                            <p class="font-serif text-2xl" aria-hidden="true">Referral details</p>
                            <div class="mt-6 grid gap-5 sm:grid-cols-2">
                                <div>
                                    <label class="form-label" for="ref-preferred">Preferred provider at ANew <span class="text-clay" aria-hidden="true">*</span></label>
                                    <select class="form-input" id="ref-preferred" name="preferred_provider" required>
                                        <option value="No preference">No preference</option>
                                        <?php foreach ($providers as $p): ?>
                                            <?php $label = $p['name'] . ($p['creds'] ? ', ' . $p['creds'] : ' (counselor intern)'); ?>
                                            <option value="<?= e($label) ?>"><?= e($label) ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <fieldset>
                                    <legend class="form-label">Is this referral urgent? <span class="text-clay" aria-hidden="true">*</span></legend>
                                    <div class="flex gap-3">
                                        <?php foreach (['No', 'Yes'] as $opt): ?>
                                            <label class="inline-flex flex-1 cursor-pointer items-center gap-2.5 rounded-2xl border border-cream-300 bg-cream-50 px-4 py-3 text-[15px] has-[:checked]:border-prairie-deep has-[:checked]:bg-white">
                                                <input type="radio" name="urgent" value="<?= e($opt) ?>" class="h-4 w-4 accent-[#2F3B2A]" required <?= $opt === 'No' ? 'checked' : '' ?>> <?= e($opt) ?>
                                            </label>
                                        <?php endforeach; ?>
                                    </div>
                                </fieldset>
                                <div class="sm:col-span-2">
                                    <label class="form-label" for="ref-reason">Reason for referral <span class="text-clay" aria-hidden="true">*</span></label>
                                    <textarea class="form-input min-h-[7rem]" id="ref-reason" name="reason" rows="4" required aria-describedby="ref-reason-hint"></textarea>
                                    <p id="ref-reason-hint" class="mt-1.5 text-xs text-ink-mute">For an ADHD referral, please list the diagnostic criteria you’ve observed.</p>
                                </div>
                                <div class="sm:col-span-2">
                                    <label class="form-label" for="ref-more">Anything else we should know about the patient? <span class="font-normal text-ink-mute">(optional)</span></label>
                                    <textarea class="form-input min-h-[6rem]" id="ref-more" name="notes" rows="3"></textarea>
                                </div>
                            </div>
                        </fieldset>

                        <div class="mt-10 flex flex-col gap-4 border-t border-cream-200 pt-8 sm:flex-row sm:items-center sm:justify-between">
                            <p id="form-note" class="text-sm leading-relaxed text-ink-soft sm:max-w-sm">
                                <?php if ($form_action): ?>
                                    Urgent? Please also call us at <a href="<?= e($site['phone_href']) ?>" class="font-semibold text-ink underline underline-offset-4"><?= e($site['phone']) ?></a> after submitting.
                                <?php else: ?>
                                    Online referrals are almost ready. For now, please fax referrals to <strong class="font-semibold text-ink"><?= e($site['fax']) ?></strong> or call <a href="<?= e($site['phone_href']) ?>" class="font-semibold text-ink underline underline-offset-4"><?= e($site['phone']) ?></a>.
                                <?php endif; ?>
                            </p>
                            <button type="submit" class="btn-primary shrink-0 disabled:cursor-not-allowed disabled:opacity-50" <?= $form_action ? '' : 'disabled' ?>>Submit referral</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>

<script type="application/ld+json">
<?= json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'WebPage',
    'name' => 'Professional Referral Form',
    'url' => $site['url'] . $canonical_path,
    'description' => $page_description,
    'breadcrumb' => [
        '@type' => 'BreadcrumbList',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $site['url'] . '/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Contact', 'item' => $site['url'] . '/contact-us/'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Professional Referral Form', 'item' => $site['url'] . $canonical_path],
        ],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>
