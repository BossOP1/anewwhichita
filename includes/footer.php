<?php /** @var array $site @var array $services @var array $conditions */
$address_full = $site['street'] . ', ' . $site['city'] . ', ' . $site['region'] . ' ' . $site['postal'];
$map_embed    = 'https://maps.google.com/maps?q=' . rawurlencode('ANew Mental Health, ' . $address_full) . '&z=15&output=embed';
?>
<footer class="bg-prairie-deep pb-28 pt-16 text-cream-200 sm:pb-12">
    <div class="mx-auto max-w-site px-5 sm:px-8">
        <div class="grid gap-12 lg:grid-cols-12">
            <div class="lg:col-span-4">
                <img src="/assets/images/brand/logo-white.png" alt="ANew Mental Health" class="h-20 w-auto" loading="lazy">
                <p class="mt-5 max-w-sm font-serif text-xl italic leading-snug text-cream-100">“<?= e($site['tagline']) ?>.”</p>
                <p class="mt-4 max-w-sm text-sm leading-relaxed text-cream-200/80">Full-service mental health therapy and medication management for children, adolescents and adults in Wichita, Kansas.</p>
                <div class="mt-6 flex gap-3">
                    <a href="<?= e($site['facebook']) ?>" target="_blank" rel="noopener" class="social" aria-label="ANew on Facebook">
                        <svg viewBox="0 0 24 24" class="h-4 w-4" fill="currentColor" aria-hidden="true"><path d="M13.5 21v-7.5h2.6l.4-3h-3V8.6c0-.9.3-1.5 1.5-1.5h1.6V4.4c-.3 0-1.2-.1-2.3-.1-2.3 0-3.8 1.4-3.8 3.9v2.3H8v3h2.5V21h3Z"/></svg>
                    </a>
                    <a href="<?= e($site['instagram']) ?>" target="_blank" rel="noopener" class="social" aria-label="ANew on Instagram">
                        <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="3.5" y="3.5" width="17" height="17" rx="5"/><circle cx="12" cy="12" r="3.8"/><circle cx="17.3" cy="6.7" r=".6" fill="currentColor"/></svg>
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-8 text-sm sm:grid-cols-3 lg:col-span-8">
                <div>
                    <h3 class="footer-h">Services</h3>
                    <ul class="footer-list">
                        <?php foreach ($services as $service): ?>
                            <li><a href="<?= e($service['url']) ?>"><?= e($service['name']) ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div>
                    <h3 class="footer-h">Conditions</h3>
                    <ul class="footer-list">
                        <?php foreach (array_slice($conditions, 0, 7, true) as $slug => $condition): ?>
                            <li><a href="/conditions/<?= e($slug) ?>/"><?= e($condition['name']) ?></a></li>
                        <?php endforeach; ?>
                        <li><a href="/conditions/">View all →</a></li>
                    </ul>
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="footer-h">ANew</h3>
                    <ul class="footer-list">
                        <li><a href="/about/">Our story</a></li>
                        <li><a href="/meet-our-team/">Meet our team</a></li>
                        <li><a href="/insurance/">Insurance &amp; payment</a></li>
                        <li><a href="/contact-us/">Contact us</a></li>
                        <li><a href="/mental-health-careers-wichita-ks/">Careers</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <?php if (empty($hide_footer_visit)): ?>
        <!-- Visit ANew -->
        <div class="mt-14 grid gap-10 border-t border-cream-100/10 pt-12 lg:grid-cols-12 lg:gap-16">
            <div class="text-sm lg:col-span-5">
                <h3 class="footer-h">Visit ANew</h3>
                <dl class="mt-5 space-y-6">
                    <div>
                        <dt class="text-xs font-semibold uppercase tracking-[0.16em] text-cream-200/60">Office</dt>
                        <dd class="mt-1.5 text-[15px] leading-relaxed text-cream-100"><?= e($site['street']) ?><br><?= e($site['city']) ?>, <?= e($site['region']) ?> <?= e($site['postal']) ?></dd>
                        <dd><a href="<?= e($site['maps_url']) ?>" target="_blank" rel="noopener" class="mt-1.5 inline-block font-semibold text-wheat underline-offset-4 hover:underline">Get directions →</a></dd>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <dt class="text-xs font-semibold uppercase tracking-[0.16em] text-cream-200/60">Phone</dt>
                            <dd class="mt-1.5 text-[15px]"><a href="<?= e($site['phone_href']) ?>" class="font-semibold text-white hover:underline"><?= e($site['phone']) ?></a></dd>
                        </div>
                        <div>
                            <dt class="text-xs font-semibold uppercase tracking-[0.16em] text-cream-200/60">Fax</dt>
                            <dd class="mt-1.5 text-[15px] text-cream-100"><?= e($site['fax']) ?></dd>
                        </div>
                    </div>
                    <div>
                        <dt class="text-xs font-semibold uppercase tracking-[0.16em] text-cream-200/60">Already a client?</dt>
                        <dd class="mt-2.5 flex flex-wrap gap-2">
                            <a href="<?= e($site['portal_therapy']) ?>" target="_blank" rel="noopener" class="rounded-full border border-cream-100/25 px-4 py-2 text-cream-100 transition hover:border-white hover:text-white">Therapy portal</a>
                            <a href="<?= e($site['portal_medication']) ?>" target="_blank" rel="noopener" class="rounded-full border border-cream-100/25 px-4 py-2 text-cream-100 transition hover:border-white hover:text-white">Medication portal</a>
                        </dd>
                    </div>
                    <div>
                        <dt class="sr-only">Referrals</dt>
                        <dd class="text-cream-200/80">Referring a patient? <a href="<?= e($site['referral_url']) ?>" class="font-semibold text-white underline underline-offset-4">Provider referral form</a></dd>
                    </div>
                </dl>
            </div>
            <div class="overflow-hidden rounded-3xl bg-white/5 lg:col-span-7">
                <iframe src="<?= e($map_embed) ?>" title="Map showing ANew Mental Health at <?= e($address_full) ?>" class="h-72 w-full border-0 lg:h-full lg:min-h-[340px]" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
            </div>
        </div>
        <?php endif; ?>

        <div class="mt-14 rounded-2xl border border-cream-100/15 bg-white/5 p-5 text-sm leading-relaxed sm:flex sm:items-center sm:gap-4">
            <span class="mb-2 inline-flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-wheat text-prairie-deep sm:mb-0" aria-hidden="true">
                <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M12 8v5M12 16.5v.01"/><circle cx="12" cy="12" r="9"/></svg>
            </span>
            <p><strong class="text-white">In crisis or need immediate help?</strong> Call or text <a href="tel:988" class="font-semibold text-white underline underline-offset-2">988</a> (Suicide &amp; Crisis Lifeline), or call <a href="tel:911" class="font-semibold text-white underline underline-offset-2">911</a>. ANew is not an emergency service.</p>
        </div>

        <nav class="mt-10 border-t border-cream-100/10 pt-8" aria-label="Legal">
            <ul class="flex flex-wrap gap-x-6 gap-y-3 text-[13px]">
                <?php foreach ($legal_pages as $url => $label): ?>
                    <li><a href="<?= e($url) ?>" class="text-cream-200/85 underline-offset-4 hover:text-white hover:underline"><?= e($label) ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>

        <div class="mt-8 flex flex-col gap-6 text-xs text-cream-200/70 lg:flex-row lg:justify-between">
            <p class="max-w-3xl leading-relaxed">ANew offers email and text messaging to make communication easier and more accessible. Please note that email and text messaging are not secure, and we cannot guarantee the privacy of these communications. If you receive a text from ANew, you may decline or opt out of text communication at any time.</p>
            <p class="shrink-0">© <?= date('Y') ?> ANew Wichita · <?= e($site['street']) ?>, <?= e($site['city']) ?>, <?= e($site['region']) ?> <?= e($site['postal']) ?></p>
        </div>
    </div>
</footer>

<!-- Mobile action bar -->
<div class="fixed inset-x-3 bottom-3 z-40 grid grid-cols-[auto_1fr] gap-2 rounded-full border border-cream-200 bg-white/90 p-1.5 shadow-lg shadow-ink/10 backdrop-blur sm:hidden" data-mobile-bar>
    <a href="<?= e($site['phone_href']) ?>" class="inline-flex h-12 items-center gap-2 rounded-full px-5 text-sm font-semibold text-ink">
        <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M5 4h3l2 5-2.5 1.5a11 11 0 0 0 6 6L15 14l5 2v3a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2Z"/></svg>
        Call
    </a>
    <a href="<?= e($site['schedule_url']) ?>" target="_blank" rel="noopener" class="inline-flex h-12 items-center justify-center rounded-full bg-ink text-sm font-semibold text-white">Schedule an Appointment</a>
</div>

<script>window.ANEW = <?= json_encode([
    'symptoms' => $symptoms,
    'conditions' => array_map(fn ($c) => ['name' => $c['name'], 'services' => $c['services'], 'tms' => !empty($c['tms'])], $conditions),
    'services' => array_map(fn ($s) => ['name' => $s['name'], 'url' => $s['url'], 'new' => !empty($s['new'])], $services),
    'team' => array_combine(array_keys($team), array_map(fn ($slug, $p) => [
        'name' => $p['name'], 'creds' => $p['creds'], 'role' => $p['role'], 'lane' => $p['lane'],
        'format' => $p['format'], 'photo' => '/assets/images/team/' . $p['photo'], 'pos' => $p['pos'],
        'focus' => $p['focus'], 'conditions' => $p['conditions'], 'bio' => $p['bio'],
        'bioUrl' => '/meet-our-team/#' . $slug,
        'insurance' => array_map(fn ($k) => $plans[$k]['name'] . ($plans[$k]['note'] ? ' (' . $plans[$k]['note'] . ')' : ''), $p['insurance'] ?? []),
        'selfPay' => $p['self_pay'] ?? '',
        'insuranceSoon' => array_map(fn ($k) => $plans[$k]['name'] . ($plans[$k]['note'] ? ' (' . $plans[$k]['note'] . ')' : ''), $p['insurance_soon'] ?? []),
    ], array_keys($team), $team)),
    'scheduleUrl' => $site['schedule_url'],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) ?>;</script>
<script src="/assets/js/main.js" defer></script>
</body>
</html>
