<?php
require __DIR__ . '/../includes/config.php';

$page_title       = 'ADHD Assessment in Wichita, KS | T.O.V.A. Testing for Children & Adults | ANew';
$page_description = 'ADHD assessment for children, teens and adults in Wichita, Kansas, using the T.O.V.A. objective attention test. Learn the signs, the process, and how to prepare.';
$canonical_path   = '/adhd-assessment/';
$current_page     = 'services';
$og_image         = '/assets/images/people/adhd.jpg';

$svc = [
    'name'      => 'ADHD Assessment',
    'schema_name' => 'ADHD assessment',
    'eyebrow'   => 'ADHD assessment in Wichita, KS',
    'title'     => 'Finally understand <em class="italic text-clay">how your mind works.</em>',
    'intro'     => 'Research has deepened our understanding of adult and childhood ADHD. A thorough assessment can help you make sense of years of struggle — and open the door to more effective support.',
    'image'     => '/assets/images/people/adhd.jpg',
    'image_alt' => 'A boy with glasses concentrating on writing in a notebook',
    'image_pos' => '50% 40%',
    'facts'     => ['Children, teens & adults', 'T.O.V.A. attention testing', 'Referral required'],
    'blocks'    => [
        [
            'type' => 'callout', 'id' => 'referral',
            'eyebrow' => 'Before you start',
            'title' => 'A referral is required.',
            'text' => 'You’ll need a doctor’s or therapist’s referral to begin an ADHD assessment. Fax it to <strong>' . e($site['fax']) . '</strong> or email it to <a class="font-semibold text-ink underline underline-offset-4" href="mailto:' . e($site['email']) . '">' . e($site['email']) . '</a>. Already working with an ANew therapist? Just ask them.',
            'actions' => [['Email a referral', 'mailto:' . $site['email'] . '?subject=ADHD%20assessment%20referral'], ['Call ' . $site['phone'], $site['phone_href']]],
        ],
        [
            'type' => 'list', 'id' => 'signs', 'nav' => 'Possible signs',
            'eyebrow' => 'Possible signs of ADHD',
            'title' => 'ADHD doesn’t always <em class="italic text-clay">look the way you’d expect.</em>',
            'intro' => 'It can show up very differently from one person to the next — and in adults, it often goes unrecognized for years. Some common signs:',
            'items' => [
                ['Constantly feeling overwhelmed'], ['Difficulty completing tasks or projects'],
                ['Difficulty keeping focus — or focusing too much'], ['Restless and fidgety, or a “couch potato”'],
                ['Impulsivity'], ['Excessive talking'], ['Easily agitated'], ['Social awkwardness'],
            ],
        ],
        [
            'type' => 'text', 'id' => 'tova', 'nav' => 'The T.O.V.A. test',
            'eyebrow' => 'An objective measure',
            'title' => 'What is the <em class="italic text-prairie">T.O.V.A.?</em>',
            'paras' => [
                'The T.O.V.A. is a highly sensitive, computerized test that measures attention. It helps clinicians in the assessment, evaluation, and treatment of ADHD.',
                'According to the official T.O.V.A. website, it is “the most widely used objective measure of attention in the world,” considered the “Gold Standard” among measures of its type — with more than 260 peer-reviewed articles using the test.',
            ],
            'points' => ['Computerized and objective', 'For children and adults', 'Used alongside a clinical intake', 'Results reviewed with you in person'],
            'image' => '/assets/images/office/therapy-room.jpg',
            'image_alt' => 'A calm, bright ANew office room',
            'flip' => true,
        ],
        [
            'type' => 'steps', 'id' => 'process', 'nav' => 'The process',
            'eyebrow' => 'The process',
            'title' => 'Three steps <em class="italic text-wheat">to clarity.</em>',
            'items' => [
                ['Referral & intake', 'Once we receive your referral, you’ll begin with an intake conducted by one of our trained providers.'],
                ['Take the T.O.V.A.', 'You’ll complete the computerized attention test at our Wichita office.'],
                ['Review your results', 'Schedule a follow-up to discuss your results, recommendations, and resources for what comes next.'],
            ],
            'note' => [
                'title' => 'How to prepare',
                'items' => [
                    'Avoid caffeine (coffee, caffeinated tea, energy drinks, chocolate) the day of your assessment.',
                    'If possible, don’t take your morning dose of mental health medications until after the T.O.V.A. test.',
                ],
            ],
        ],
        [
            'type' => 'people', 'id' => 'support', 'nav' => 'After the assessment',
            'eyebrow' => 'After the assessment',
            'title' => 'Support for <em class="italic text-clay">what comes next.</em>',
            'intro' => 'If ADHD is part of the picture, our medication providers and therapists can help — whether that’s medication, coping strategies, or support for the whole family.',
            'slugs' => ['ashley-ludlum', 'christina-wankum', 'barb-meyer', 'katlynn-miller'],
        ],
    ],
    'faqs' => [
        ['Do I need a referral for an ADHD assessment?', 'Yes. You’ll need a doctor’s or therapist’s referral to start the process. Fax it to ' . $site['fax'] . ' or email it to ' . $site['email'] . '.'],
        ['Can adults be assessed for ADHD?', 'Yes. We assess children, teens and adults. Many adults find that an assessment finally helps them understand years of struggle.'],
        ['What is the T.O.V.A. test?', 'The T.O.V.A. is a computerized, objective test of attention that helps clinicians assess, evaluate and treat ADHD. It’s one part of the assessment, alongside an intake with one of our trained providers.'],
        ['How should I prepare?', 'Avoid caffeine (coffee, caffeinated tea, energy drinks, chocolate) on the day of your assessment, and if possible, wait to take your morning dose of mental health medications until after the T.O.V.A. test.'],
        ['What happens after the test?', 'You’ll schedule a follow-up to discuss your results, our recommendations, and resources. If treatment would help, our medication management and therapy teams are right here.'],
        $common_faqs['insurance'],
    ],
    'related' => ['medication', 'therapy', 'play-therapy', 'tms'],
];

include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/partials/service-page.php';
include __DIR__ . '/../includes/footer.php';
