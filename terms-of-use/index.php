<?php
require __DIR__ . '/../includes/config.php';

$page_title       = 'Terms of Use | ANew Mental Health Wichita';
$page_description = 'The terms that apply to your use of the ANew Mental Health website, anewwichita.com.';
$canonical_path   = '/terms-of-use/';

$doc = [
    'title'   => 'Terms of Use',
    'eyebrow' => 'Legal',
    'summary' => 'By using anewwichita.com, you agree to these terms. Please read them, especially the sections on medical information and emergencies.',
    'sections' => [
        ['not-advice', 'Not medical advice', '
            <p>The content on this website — including condition pages, self-guided tools such as “Find Your Next Step,” quizzes and articles — is for general educational purposes only. It is not a diagnosis, is not a substitute for professional medical or mental health advice, evaluation or treatment, and does not create a provider–patient relationship.</p>
            <p>Always seek the advice of a qualified provider with any questions about your health. A provider–patient relationship with ANew begins only after you complete our intake process and are accepted for care.</p>'],
        ['emergencies', 'Emergencies', '
            <p class="note"><strong>This website, email, text messaging and our scheduling form are not monitored for emergencies.</strong> If you are in crisis or thinking about harming yourself or others, call or text <a href="tel:988">988</a> (Suicide &amp; Crisis Lifeline), call <a href="tel:911">911</a>, or go to the nearest emergency room.</p>'],
        ['use', 'Using this website', '
            <p>You agree to use this website only for lawful purposes, and not to interfere with its operation, attempt to gain unauthorized access, or submit false or misleading information.</p>'],
        ['third-party', 'Third-party services and links', '
            <p>Our website links to services operated by others, including our scheduling form and client portals (SimplePractice and AdvancedMD), CareCredit, Google Maps and social media. We are not responsible for their content or practices, and your use of them is governed by their own terms and privacy policies.</p>'],
        ['ip', 'Content and trademarks', '
            <p>The ANew name, logo, text, photographs and design of this website belong to ANew Mental Health or are used with permission. You may view and print pages for personal, non-commercial use. Please do not otherwise copy, reproduce or distribute site content without our written permission.</p>'],
        ['accuracy', 'Accuracy of information', '
            <p>We work to keep information — such as provider availability and accepted insurance plans — accurate and current, but it can change without notice. Please call us to confirm details before your first visit.</p>'],
        ['disclaimer', 'Disclaimer and limitation of liability', '
            <p>This website is provided “as is,” without warranties of any kind. To the fullest extent permitted by law, ANew Mental Health is not liable for any damages arising from your use of, or inability to use, this website or its content.</p>'],
        ['law', 'Governing law', '
            <p>These terms are governed by the laws of the State of Kansas, without regard to conflict-of-law principles.</p>'],
        ['changes', 'Changes', '
            <p>We may update these terms at any time. The effective date at the top of this page shows when they were last revised. Continued use of the site means you accept the updated terms.</p>'],
        ['related', 'Related policies', '
            <p>See also our <a href="/privacy-policy/">Website Privacy Policy</a> and <a href="/notice-of-privacy-practices/">Notice of Privacy Practices</a>.</p>'],
    ],
];

include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/partials/legal-page.php';
include __DIR__ . '/../includes/footer.php';
