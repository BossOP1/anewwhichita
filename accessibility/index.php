<?php
require __DIR__ . '/../includes/config.php';

$page_title       = 'Accessibility Statement | ANew Mental Health Wichita';
$page_description = 'ANew Mental Health is committed to making our website and our care accessible to everyone.';
$canonical_path   = '/accessibility/';

$doc = [
    'title'   => 'Accessibility Statement',
    'eyebrow' => 'Accessibility',
    'summary' => 'Everyone should be able to find the help they need. We’re committed to making our website — and our office — accessible to people of all abilities.',
    'sections' => [
        ['website', 'Our website', '
            <p>We aim to meet the Web Content Accessibility Guidelines (WCAG) 2.1, Level AA. Features of this site include:</p>
            <ul>
                <li>A “skip to content” link and full keyboard navigation</li>
                <li>Descriptive alternative text for meaningful images</li>
                <li>Readable text sizes and color contrast, with layouts that adapt to phones, tablets and zoom</li>
                <li>Respect for your device’s “reduce motion” setting</li>
                <li>Clear headings and labeled buttons for screen readers</li>
            </ul>
            <p>Some content comes from third parties — such as our scheduling form, client portals and embedded maps — and may not be fully within our control. If you have trouble with any of them, call us and we’ll help directly.</p>'],
        ['office', 'Our office', '
            <p>If you need an accommodation to attend an appointment — or would prefer telehealth — please let our front desk know when you schedule. Many of our providers offer both in-person and telehealth sessions.</p>'],
        ['feedback', 'Feedback and help', '
            <p>We welcome your feedback. If you encounter a barrier on this website or need information in another format, please contact us:</p>
            <p>Phone: <a href="' . e($site['phone_href']) . '">' . e($site['phone']) . '</a><br>Email: <a href="mailto:' . e($legal['contact_email']) . '">' . e($legal['contact_email']) . '</a></p>
            <p>We’ll do our best to respond within two business days and provide the information you need in a way that works for you. See also our <a href="/nondiscrimination/">Nondiscrimination Notice</a>.</p>'],
    ],
];

include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/partials/legal-page.php';
include __DIR__ . '/../includes/footer.php';
