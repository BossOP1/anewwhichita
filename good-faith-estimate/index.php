<?php
require __DIR__ . '/../includes/config.php';

$page_title       = 'Good Faith Estimate | No Surprises Act Notice | ANew Mental Health';
$page_description = 'Under the No Surprises Act, uninsured and self-pay clients have the right to a Good Faith Estimate of the cost of their care at ANew Mental Health.';
$canonical_path   = '/good-faith-estimate/';

$doc = [
    'title'   => 'Your Right to a Good Faith Estimate',
    'eyebrow' => 'No Surprises Act',
    'summary' => 'You have the right to receive a “Good Faith Estimate” explaining how much your medical and mental health care will cost.',
    'sections' => [
        ['notice', 'Your rights', '
            <p>Under the law, health care providers need to give patients who don’t have insurance or who are not using insurance an estimate of the bill for medical items and services.</p>
            <ul>
                <li>You have the right to receive a Good Faith Estimate for the total expected cost of any non-emergency items or services. This includes related costs like medical tests, prescription drugs, equipment and hospital fees.</li>
                <li>Make sure your health care provider gives you a Good Faith Estimate in writing at least 1 business day before your medical service or item. You can also ask your health care provider, and any other provider you choose, for a Good Faith Estimate before you schedule an item or service.</li>
                <li>If you receive a bill that is at least $400 more than your Good Faith Estimate, you can dispute the bill.</li>
                <li>Make sure to save a copy or picture of your Good Faith Estimate.</li>
            </ul>
            <p>For questions or more information about your right to a Good Faith Estimate, visit <a href="https://www.cms.gov/nosurprises" target="_blank" rel="noopener">www.cms.gov/nosurprises</a> or call 1-800-985-3059.</p>'],
        ['at-anew', 'Requesting an estimate at ANew', '
            <p>If you are uninsured or choose to self-pay, let our office know when you schedule. We will provide a Good Faith Estimate of expected charges for your services. Because the number of sessions you need can vary, the estimate is based on the care we expect to provide and will be updated if your plan of care changes.</p>
            <p>Call <a href="' . e($site['phone_href']) . '">' . e($site['phone']) . '</a> to ask about self-pay rates or request an estimate. You can also learn about payment options on our <a href="/insurance/">Insurance &amp; Payment</a> page.</p>'],
    ],
];

include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/partials/legal-page.php';
include __DIR__ . '/../includes/footer.php';
