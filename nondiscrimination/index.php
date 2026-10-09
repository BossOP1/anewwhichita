<?php
require __DIR__ . '/../includes/config.php';

$page_title       = 'Nondiscrimination Notice | ANew Mental Health Wichita';
$page_description = 'ANew Mental Health complies with applicable federal civil rights laws and does not discriminate. Free language assistance and accommodations are available.';
$canonical_path   = '/nondiscrimination/';

$doc = [
    'title'   => 'Nondiscrimination Notice',
    'eyebrow' => 'Civil rights',
    'summary' => 'ANew Mental Health complies with applicable federal civil rights laws and does not discriminate on the basis of race, color, national origin, age, disability, or sex (including sexual orientation and gender identity).',
    'sections' => [
        ['policy', 'Our commitment', '
            <p>ANew Mental Health does not exclude people or treat them differently because of race, color, national origin, age, disability, or sex. Because people matter, everyone who comes to us deserves to be treated with dignity and respect.</p>'],
        ['assistance', 'Free help we provide', '
            <ul>
                <li><strong>For people with disabilities:</strong> reasonable accommodations and free aids and services to communicate effectively with us, such as qualified sign language interpreters and written information in other formats (large print, accessible electronic formats).</li>
                <li><strong>For people whose primary language is not English:</strong> free language services, such as qualified interpreters and information written in other languages.</li>
            </ul>
            <p>If you need these services, call us at <a href="' . e($site['phone_href']) . '">' . e($site['phone']) . '</a>.</p>'],
        ['grievance', 'Filing a grievance', '
            <p>If you believe that ANew has failed to provide these services or discriminated in another way, you can file a grievance with:</p>
            <p>' . e($legal['privacy_officer']) . '<br>ANew Mental Health, ' . e($site['street'] . ', ' . $site['city'] . ', ' . $site['region'] . ' ' . $site['postal']) . '<br>Phone: ' . e($site['phone']) . ' · Fax: ' . e($site['fax']) . ' · <a href="mailto:' . e($legal['contact_email']) . '">' . e($legal['contact_email']) . '</a></p>
            <p>You can file a grievance in person, by mail, fax or email. If you need help filing a grievance, we are available to help you.</p>
            <p>You can also file a civil rights complaint with the U.S. Department of Health and Human Services, Office for Civil Rights, electronically through the Office for Civil Rights Complaint Portal at <a href="https://ocrportal.hhs.gov/ocr/portal/lobby.jsf" target="_blank" rel="noopener">ocrportal.hhs.gov</a>, or by mail or phone at: U.S. Department of Health and Human Services, 200 Independence Avenue SW, Room 509F, HHH Building, Washington, D.C. 20201, 1-800-368-1019, 800-537-7697 (TDD). Complaint forms are available at <a href="https://www.hhs.gov/ocr/office/file/index.html" target="_blank" rel="noopener">www.hhs.gov/ocr/office/file/index.html</a>.</p>'],
    ],
];

include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/partials/legal-page.php';
include __DIR__ . '/../includes/footer.php';
