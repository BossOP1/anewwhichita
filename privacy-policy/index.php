<?php
require __DIR__ . '/../includes/config.php';

$page_title       = 'Website Privacy Policy | ANew Mental Health Wichita';
$page_description = 'How ANew Mental Health collects, uses and protects information when you visit anewwichita.com.';
$canonical_path   = '/privacy-policy/';

$addr = e($site['street'] . ', ' . $site['city'] . ', ' . $site['region'] . ' ' . $site['postal']);

$doc = [
    'title'   => 'Website Privacy Policy',
    'eyebrow' => 'Legal',
    'summary' => 'This policy explains what information we collect when you visit anewwichita.com, how we use it, and the choices you have. How we protect your health information as a patient is described separately in our Notice of Privacy Practices.',
    'sections' => [
        ['scope', 'Who we are and what this covers', '
            <p>ANew Mental Health (“ANew,” “we,” “us”) is a mental health practice located at ' . $addr . '. This policy applies to our website, anewwichita.com. It does not apply to the third-party services we link to, such as our scheduling form or client portals, which have their own privacy policies.</p>
            <p class="note"><strong>Your health information is protected separately.</strong> Once you become a client, your protected health information is governed by HIPAA and described in our <a href="/notice-of-privacy-practices/">Notice of Privacy Practices</a>.</p>'],
        ['collect', 'Information we collect', '
            <h3>Information you choose to give us</h3>
            <ul>
                <li><strong>Appointment inquiries.</strong> When you click “Schedule an Appointment,” you are taken to a secure form hosted by SimplePractice, our electronic health record provider. Information you enter there goes directly to SimplePractice and our care team — it is not collected or stored by this website.</li>
                <li><strong>Career applications.</strong> If you apply through our careers page, we collect the information you submit (such as your name, contact details, licensure and message).</li>
                <li><strong>Phone, email and text.</strong> If you contact us directly, we receive the information you share.</li>
            </ul>
            <h3>Information collected automatically</h3>
            <p>Like most websites, our site and the service that hosts it may automatically log basic technical information such as your IP address, browser type, device type, pages visited and the date and time of your visit. If we use website analytics, they are used in aggregate to understand how the site is used and to improve it.</p>
            <p>Please do not use general website features, email or text to send sensitive health information. Use your client portal or call us instead.</p>'],
        ['use', 'How we use information', '
            <ul>
                <li>To respond to your questions and requests</li>
                <li>To review employment applications</li>
                <li>To operate, secure and improve our website</li>
                <li>To comply with legal obligations</li>
            </ul>
            <p>We do <strong>not</strong> sell your personal information, and we do not share it for third-party advertising.</p>'],
        ['third-parties', 'Third-party services', '
            <p>Our website links to or embeds services provided by others. When you use them, their privacy policies apply:</p>
            <ul>
                <li><strong>SimplePractice</strong> — appointment inquiries and the therapy client portal</li>
                <li><strong>AdvancedMD</strong> — the medication management client portal</li>
                <li><strong>Google Maps</strong> — the map on our contact page</li>
                <li><strong>Google Fonts and content delivery networks</strong> — fonts and site resources</li>
                <li><strong>CareCredit</strong> — financing applications</li>
                <li><strong>Facebook and Instagram</strong> — if you follow links to our social media pages</li>
            </ul>'],
        ['cookies', 'Cookies', '
            <p>Our website does not use cookies for advertising. Some embedded third-party services (such as Google Maps) may set their own cookies. You can block or delete cookies through your browser settings; the site will still work.</p>'],
        ['communications', 'Email and text messaging', '
            <p>ANew offers email and text messaging to make communication easier and more accessible. Please note that email and text messaging are not secure, and we cannot guarantee the privacy of these communications. If you receive a text from ANew, you may decline or opt out of text communication at any time.</p>'],
        ['security', 'How we protect information', '
            <p>We use reasonable administrative, technical and physical safeguards to protect information. No method of transmission over the internet is completely secure, so we cannot guarantee absolute security.</p>'],
        ['children', 'Children’s privacy', '
            <p>Our website is not directed to children under 13, and we do not knowingly collect personal information from children through it. Parents and guardians schedule care for minors on their behalf.</p>'],
        ['choices', 'Your choices', '
            <p>You may ask us to access, correct or delete personal information you have submitted through this website (for example, a job application) by contacting us. Rights regarding your health records are described in our <a href="/notice-of-privacy-practices/">Notice of Privacy Practices</a>.</p>'],
        ['changes', 'Changes to this policy', '
            <p>We may update this policy from time to time. The effective date at the top of the page shows when it was last revised.</p>'],
        ['contact', 'Contact us', '
            <p>ANew Mental Health<br>' . $addr . '<br>Phone: <a href="' . e($site['phone_href']) . '">' . e($site['phone']) . '</a><br>Email: <a href="mailto:' . e($legal['contact_email']) . '">' . e($legal['contact_email']) . '</a></p>'],
    ],
];

include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/partials/legal-page.php';
include __DIR__ . '/../includes/footer.php';
