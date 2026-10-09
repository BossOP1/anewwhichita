<?php
require __DIR__ . '/../includes/config.php';

$page_title       = 'Notice of Privacy Practices (HIPAA) | ANew Mental Health Wichita';
$page_description = 'How ANew Mental Health may use and disclose your protected health information, and your rights under HIPAA.';
$canonical_path   = '/notice-of-privacy-practices/';

/* Based on the structure of the HHS model Notice of Privacy Practices.
   If ANew already provides an NPP to clients (e.g., in SimplePractice), replace
   this content with that exact notice so the two always match. */

$addr = e($site['street'] . ', ' . $site['city'] . ', ' . $site['region'] . ' ' . $site['postal']);

$doc = [
    'title'   => 'Notice of Privacy Practices',
    'eyebrow' => 'HIPAA',
    'summary' => 'This notice describes how medical and mental health information about you may be used and disclosed and how you can get access to this information. Please review it carefully.',
    'sections' => [
        ['rights', 'Your rights', '
            <p>When it comes to your health information, you have certain rights. You can:</p>
            <ul>
                <li><strong>Get a copy of your health and claims records.</strong> Ask to see or get a paper or electronic copy. We will usually provide it within 30 days and may charge a reasonable, cost-based fee.</li>
                <li><strong>Ask us to correct your record</strong> if you think it is incorrect or incomplete. We may say “no,” but we will tell you why in writing within 60 days.</li>
                <li><strong>Request confidential communications</strong> — for example, to be contacted at a different phone number or address. We will say “yes” to all reasonable requests.</li>
                <li><strong>Ask us to limit what we use or share.</strong> We are not required to agree, except that if you pay for a service out of pocket in full, you can ask us not to share that information with your health insurer, and we will say “yes” unless a law requires us to share it.</li>
                <li><strong>Get a list of those with whom we’ve shared information</strong> for up to six years prior to the date you ask, with certain exceptions.</li>
                <li><strong>Get a copy of this notice</strong> at any time, even if you agreed to receive it electronically.</li>
                <li><strong>Choose someone to act for you,</strong> such as a medical power of attorney or legal guardian.</li>
                <li><strong>File a complaint</strong> if you feel your rights are violated (see “Complaints” below).</li>
            </ul>'],
        ['choices', 'Your choices', '
            <p>For certain health information, you can tell us your choices about what we share. You have both the right and choice to tell us to share information with family, close friends or others involved in your care, or in a disaster relief situation. If you are not able to tell us your preference — for example, if you are unconscious — we may share your information if we believe it is in your best interest, or when needed to lessen a serious and imminent threat to health or safety.</p>
            <p>We will never sell your information or use it for marketing without your written permission.</p>
            <p class="note"><strong>Psychotherapy notes.</strong> Psychotherapy notes, kept separately from the rest of your record, receive special protection. In most cases we will not share them without your written authorization.</p>'],
        ['uses', 'Our uses and disclosures', '
            <p>We typically use or share your health information in the following ways:</p>
            <ul>
                <li><strong>To treat you</strong> — for example, your therapist and medication provider at ANew coordinating your care, or consulting with another professional treating you.</li>
                <li><strong>To run our practice</strong> — to improve care, train staff and contact you when necessary.</li>
                <li><strong>To bill for your services</strong> — to get payment from health plans or other entities.</li>
            </ul>
            <p>We are also allowed or required to share your information in other ways — usually in ways that contribute to the public good — when certain legal conditions are met, including:</p>
            <ul>
                <li>Preventing or reducing a serious threat to anyone’s health or safety</li>
                <li>Reporting suspected abuse, neglect or domestic violence, as required by Kansas law</li>
                <li>Responding to court orders, subpoenas and other lawful processes</li>
                <li>Health oversight activities, workers’ compensation, and law enforcement or other government requests as permitted by law</li>
                <li>Complying with federal and state law, including when the Department of Health and Human Services wants to see that we are complying with privacy law</li>
            </ul>
            <p>If you receive treatment for substance use disorder in a federally assisted program, those records may have additional protections under federal law (42 CFR Part 2).</p>'],
        ['responsibilities', 'Our responsibilities', '
            <ul>
                <li>We are required by law to maintain the privacy and security of your protected health information.</li>
                <li>We will let you know promptly if a breach occurs that may have compromised the privacy or security of your information.</li>
                <li>We must follow the duties and privacy practices described in this notice and give you a copy of it.</li>
                <li>We will not use or share your information other than as described here unless you tell us we can in writing. If you tell us we can, you may change your mind at any time by letting us know in writing.</li>
            </ul>'],
        ['changes', 'Changes to this notice', '
            <p>We can change the terms of this notice, and the changes will apply to all information we have about you. The new notice will be available upon request, in our office, and on our website.</p>'],
        ['complaints', 'Complaints', '
            <p>You can complain if you feel we have violated your rights by contacting our Privacy Officer:</p>
            <p>' . e($legal['privacy_officer']) . '<br>ANew Mental Health, ' . $addr . '<br>' . e($site['phone']) . ' · <a href="mailto:' . e($legal['contact_email']) . '">' . e($legal['contact_email']) . '</a></p>
            <p>You can also file a complaint with the U.S. Department of Health and Human Services Office for Civil Rights by sending a letter to 200 Independence Avenue, S.W., Washington, D.C. 20201, calling 1-877-696-6775, or visiting <a href="https://www.hhs.gov/ocr/complaints/" target="_blank" rel="noopener">www.hhs.gov/ocr/complaints</a>.</p>
            <p>We will not retaliate against you for filing a complaint.</p>'],
    ],
];

include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/partials/legal-page.php';
include __DIR__ . '/../includes/footer.php';
