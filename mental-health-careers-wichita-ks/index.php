<?php
require __DIR__ . '/../includes/config.php';

$page_title       = 'Mental Health Careers in Wichita, KS | Join the ANew Team';
$page_description = 'Therapist, intern, PMHNP and medication provider careers at ANew Mental Health in Wichita, Kansas — a collaborative, growth-oriented practice built on whole-person care.';
$canonical_path   = '/mental-health-careers-wichita-ks/';
$current_page     = 'careers';
$og_image         = '/assets/images/office/front-desk.jpg';

$roles = [
    ['Licensed Therapists', 'LMSW, LSCSW, LPC, LCPC, LMFT, LCMFT'],
    ['Therapist Interns & Practicum Students', 'Supervision and mentorship from licensed clinicians'],
    ['Medication Providers', 'Psychiatrists, PMHNPs and APRNs'],
    ['Student Nurse Practitioners', 'Clinical experience in a collaborative practice'],
];

$ideal = [
    'Naturally compassionate and client-centered',
    'Dedicated to ethical, evidence-based care',
    'Whole-patient focused — considering mind, spirituality, body, family and community',
    'Autonomous yet collaborative within a supportive team',
    'Passionate about continued growth and professional development',
];

$why = [
    ['Supportive, values-driven environment', 'A culture of authenticity, clinical integrity and mutual respect.'],
    ['Autonomy balanced with teamwork', 'Run your caseload your way, with a multidisciplinary team behind you.'],
    ['Supervision & mentorship', 'Opportunities for supervision and mentorship as you grow.'],
    ['Flexible scheduling', 'Meaningful work-life balance, with in-person and telehealth options.'],
    ['Administrative support', 'Our front office handles the details so you can focus on client care.'],
    ['A home-like office', 'An intentionally warm space on East Central — for clients and for you.'],
];

$licensures = ['LMSW', 'LSCSW', 'LPC', 'LCPC', 'LMFT', 'LCMFT', 'Psychiatrist', 'PMHNP / APRN', 'Therapist intern / practicum student', 'Student nurse practitioner', 'Other'];

include __DIR__ . '/../includes/header.php';
?>

<main id="main">

    <!-- ============ PAGE HERO ============ -->
    <section class="mx-auto max-w-site px-5 pb-14 pt-10 sm:px-8 lg:pb-20 lg:pt-14" aria-labelledby="page-title">
        <div class="grid items-center gap-12 lg:grid-cols-12">
            <div class="lg:col-span-6">
                <nav aria-label="Breadcrumb" class="reveal text-sm text-ink-mute">
                    <a href="/" class="hover:text-ink">Home</a> <span aria-hidden="true">/</span> <span class="text-ink">Careers</span>
                </nav>
                <p class="eyebrow reveal mt-8 text-leaf-deep">Careers at ANew</p>
                <h1 id="page-title" class="reveal mt-5 font-serif text-[2.6rem] font-light leading-[1.05] tracking-tight sm:text-6xl lg:text-[4.2rem]">
                    Join a team that believes <em class="italic text-clay">people matter.</em>
                </h1>
                <p class="reveal mt-7 max-w-xl text-lg leading-relaxed text-ink-soft">
                    Our mission is simple yet profound: to provide compassionate, ethical, and effective mental health care that transforms and empowers people. If you’re searching for a mental health career in Wichita, KS, we invite you to explore what we have to offer.
                </p>
                <div class="reveal mt-9 flex flex-col gap-3 sm:flex-row">
                    <a href="#apply" class="btn-primary">Start the conversation</a>
                    <a href="/about/" class="btn-ghost">About ANew</a>
                </div>
            </div>
            <figure class="reveal relative lg:col-span-6" style="--d: 120ms">
                <img src="/assets/images/office/therapy-session.jpg" alt="An ANew therapist in session in a sunlit Wichita office" class="aspect-[4/3] w-full rounded-4xl object-cover lg:aspect-[5/4]" fetchpriority="high">
                <figcaption class="absolute -bottom-6 left-6 right-6 rounded-3xl border border-cream-200 bg-cream-50/95 p-5 shadow-xl shadow-ink/5 backdrop-blur sm:left-auto sm:right-[-1rem] sm:max-w-xs">
                    <p class="font-serif text-lg leading-snug">“We’re not just hiring providers — we’re building a community of care.”</p>
                </figcaption>
            </figure>
        </div>
    </section>

    <!-- ============ WHO WE ARE ============ -->
    <section class="px-3 sm:px-4" aria-labelledby="who-title">
        <div class="rounded-4xl bg-prairie-deep text-cream-100">
            <div class="mx-auto grid max-w-site gap-10 px-5 py-14 sm:px-8 lg:grid-cols-12 lg:py-20">
                <div class="lg:col-span-5">
                    <p class="eyebrow reveal text-wheat">Who we are</p>
                    <h2 id="who-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight text-white sm:text-5xl">Whole-person care, <em class="italic text-wheat">together.</em></h2>
                </div>
                <div class="reveal space-y-5 text-[17px] leading-relaxed text-cream-100/85 lg:col-span-7">
                    <p>ANew Mental Health is a multidisciplinary mental health team passionate about whole-person care. We recognize that mental health doesn’t exist in isolation — it’s deeply connected to family, community, and physical well-being.</p>
                    <p>We are a collaborative, growth-oriented practice dedicated to serving our community with integrity and heart. Each of us — therapists, medication providers, students, and front office alike — plays a vital role in creating a space where people feel seen, supported, and empowered.</p>
                    <p>Our providers are committed to professional excellence and compassion. We value authenticity, clinical integrity, and a culture of mutual respect.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ ROLES + IDEAL ============ -->
    <section class="mx-auto max-w-site px-5 py-14 sm:px-8 lg:py-20" aria-labelledby="roles-title">
        <div class="grid gap-10 lg:grid-cols-12">
            <div class="lg:col-span-7">
                <p class="eyebrow reveal text-sky-deep">Who we’re looking for</p>
                <h2 id="roles-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-5xl">We welcome inquiries for:</h2>
                <ul class="mt-8 grid gap-3 sm:grid-cols-2">
                    <?php foreach ($roles as $i => [$role, $detail]): ?>
                        <li class="reveal rounded-3xl bg-white p-6" style="--d: <?= ($i % 2) * 60 ?>ms">
                            <h3 class="font-serif text-2xl leading-tight"><?= e($role) ?></h3>
                            <p class="mt-2 text-[15px] text-ink-soft"><?= e($detail) ?></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="lg:col-span-5">
                <div class="reveal h-full rounded-4xl bg-cream-100 p-8 sm:p-10">
                    <p class="eyebrow text-clay">Our ideal teammate is</p>
                    <ul class="mt-6 space-y-4">
                        <?php foreach ($ideal as $trait): ?>
                            <li class="flex items-start gap-3 text-[16px] leading-relaxed">
                                <span class="mt-0.5 inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-leaf text-white">
                                    <svg viewBox="0 0 16 16" class="h-3 w-3" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m3.5 8.5 3 3 6-7"/></svg>
                                </span>
                                <?= e($trait) ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ WHY ANEW ============ -->
    <section class="border-y border-cream-200 bg-white" aria-labelledby="why-title">
        <div class="mx-auto max-w-site px-5 py-14 sm:px-8 lg:py-20">
            <p class="eyebrow reveal text-leaf-deep">Why ANew</p>
            <h2 id="why-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-5xl">A place to do your best work.</h2>
            <ol class="mt-10 grid gap-x-10 gap-y-2 md:grid-cols-2 lg:grid-cols-3">
                <?php foreach ($why as $i => [$title, $text]): ?>
                    <li class="reveal border-t border-cream-200 py-7" style="--d: <?= ($i % 3) * 60 ?>ms">
                        <span class="font-serif text-lg text-clay">0<?= $i + 1 ?></span>
                        <h3 class="mt-3 font-serif text-2xl"><?= e($title) ?></h3>
                        <p class="mt-2 text-[15.5px] leading-relaxed text-ink-soft"><?= e($text) ?></p>
                    </li>
                <?php endforeach; ?>
            </ol>
        </div>
    </section>

    <?php include __DIR__ . '/../includes/partials/step-inside.php'; ?>

    <!-- ============ APPLY ============ -->
    <section id="apply" class="scroll-mt-24 px-3 py-14 sm:px-4 lg:py-20" aria-labelledby="apply-title">
        <div class="mx-auto grid max-w-site gap-10 rounded-4xl bg-cream-100 p-6 sm:p-10 lg:grid-cols-12 lg:p-14">
            <div class="lg:col-span-4">
                <p class="eyebrow text-clay">Apply</p>
                <h2 id="apply-title" class="mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-5xl">Start the conversation.</h2>
                <p class="mt-6 text-[17px] leading-relaxed text-ink-soft">Tell us a little about yourself. We’ll be in touch — and you’re always welcome to call us at <a href="<?= e($site['phone_href']) ?>" class="font-semibold text-ink underline underline-offset-4"><?= e($site['phone']) ?></a>.</p>
                <p class="mt-6 rounded-2xl bg-white p-4 text-sm leading-relaxed text-ink-soft"><strong class="text-ink">Looking for care, not a job?</strong> Please use <a href="<?= e($site['schedule_url']) ?>" target="_blank" rel="noopener" class="underline underline-offset-4">Schedule an Appointment</a> instead — this form is for job applicants only.</p>
            </div>

            <form name="careers" method="POST" action="/thank-you/" data-netlify="true" netlify-honeypot="company_website" enctype="multipart/form-data" class="grid gap-5 rounded-3xl bg-white p-6 sm:grid-cols-2 sm:p-8 lg:col-span-8">
                <input type="hidden" name="form-name" value="careers">
                <p class="hidden"><label>Leave this empty: <input name="company_website"></label></p>

                <div>
                    <label for="c-first" class="form-label">First name <span class="text-clay">*</span></label>
                    <input id="c-first" name="first_name" type="text" required autocomplete="given-name" class="form-input">
                </div>
                <div>
                    <label for="c-last" class="form-label">Last name <span class="text-clay">*</span></label>
                    <input id="c-last" name="last_name" type="text" required autocomplete="family-name" class="form-input">
                </div>
                <div>
                    <label for="c-email" class="form-label">Email <span class="text-clay">*</span></label>
                    <input id="c-email" name="email" type="email" required autocomplete="email" class="form-input">
                </div>
                <div>
                    <label for="c-phone" class="form-label">Phone <span class="text-clay">*</span></label>
                    <input id="c-phone" name="phone" type="tel" required autocomplete="tel" class="form-input">
                </div>
                <div class="sm:col-span-2">
                    <label for="c-lic" class="form-label">Licensure / role <span class="text-clay">*</span></label>
                    <select id="c-lic" name="licensure" required class="form-input">
                        <option value="">Choose one…</option>
                        <?php foreach ($licensures as $l): ?><option><?= e($l) ?></option><?php endforeach; ?>
                    </select>
                </div>
                <div class="sm:col-span-2">
                    <label for="c-msg" class="form-label">Let us know more about you!</label>
                    <textarea id="c-msg" name="message" rows="5" class="form-input" placeholder="Your experience, the populations you love working with, what you’re looking for…"></textarea>
                </div>
                <div class="sm:col-span-2">
                    <label for="c-resume" class="form-label">Résumé <span class="font-normal text-ink-mute">(optional · PDF or Word, up to 8 MB)</span></label>
                    <input id="c-resume" name="resume" type="file" accept=".pdf,.doc,.docx" class="form-input file:mr-4 file:rounded-full file:border-0 file:bg-cream-100 file:px-4 file:py-2 file:text-sm file:font-semibold">
                </div>
                <p class="text-xs leading-relaxed text-ink-mute sm:col-span-2">By submitting, you agree that ANew may contact you about employment. Please don’t include health information. See our <a href="/privacy-policy/" class="underline underline-offset-4">Privacy Policy</a>.</p>
                <div class="sm:col-span-2">
                    <button type="submit" class="btn-primary w-full sm:w-auto">Send my application</button>
                </div>
            </form>
        </div>
    </section>

</main>

<script type="application/ld+json">
<?= json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'WebPage',
    'name' => 'Careers at ANew Mental Health',
    'url' => $site['url'] . $canonical_path,
    'description' => $page_description,
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>
