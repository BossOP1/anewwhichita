<?php
require __DIR__ . '/../includes/config.php';

$page_title       = 'Mental Health Medication Management in Wichita, KS | ANew';
$page_description = 'Compassionate, evidence-based psychiatric medication management for children and adults in Wichita, Kansas — coordinated with your therapist at ANew.';
$canonical_path   = '/mental-health-medication-management/';
$current_page     = 'services';
$og_image         = '/assets/images/team/ashley-ludlum.jpg';

$svc = [
    'name'      => 'Medication Management',
    'faq_topic' => 'medication management', // FAQ intro: “Have questions about …?”
    'schema_name' => 'Psychiatric medication management',
    'eyebrow'   => 'Medication management in Wichita, KS',
    'title'     => 'Medication care that <em class="italic text-clay">listens first.</em>',
    'intro'     => 'Compassionate, evidence-based psychiatric care for children and adults — helping you find balance, stability, and relief, with a provider who takes the time to know you.',
    'image'     => '/assets/images/team/ashley-ludlum.jpg',
    'image_alt' => 'Ashley Ludlum, APRN, PMHNP-BC, ANew’s psychiatric mental health nurse practitioner',
    'image_pos' => '50% 30%',
    'blocks'    => [
        [
            'type' => 'text', 'id' => 'what', 'nav' => 'What it is',
            'eyebrow' => 'What is medication management?',
            'title' => 'More than <em class="italic text-clay">a prescription.</em>',
            'paras' => [
                'At ANew, our Psychiatric Mental Health Nurse Practitioner (PMHNP) offers expert medication management to support children and adults living with a wide range of mental health conditions.',
                'Medication management is an ongoing, collaborative process: evaluating your symptoms, monitoring how you respond to treatment, adjusting medications as needed, and supporting your overall mental wellness. Our medication management team is here to guide and support you every step of the way.',
                'Your care also stays connected. Your medication provider can collaborate with your therapist, if applicable, or coordinate with your primary care provider when appropriate.',
            ],
            'points' => ['Thorough psychiatric evaluation', 'Ongoing monitoring of how you feel', 'Adjustments as your needs change', 'Coordinated with your therapist'],
            'image' => '/assets/images/office/reception.jpg',
            'image_alt' => 'The bright ANew reception area with the ANew logo on the wall',
            'image_pos' => '50% 60%',
        ],
        [
            'type' => 'list', 'id' => 'conditions', 'nav' => 'Conditions',
            'eyebrow' => 'Conditions we treat',
            'title' => 'Care for the conditions <em class="italic text-clay">that weigh on you most.</em>',
            'intro' => 'Our PMHNP manages medications for a variety of mental health conditions, including but not limited to:',
            'items' => [
                ['Depression', 'Addressing persistent sadness, loss of interest, and other depressive symptoms.', 'depression'],
                ['Anxiety disorders', 'Helping manage excessive worry, panic attacks, and social anxiety.', 'anxiety'],
                ['Bipolar disorder', 'Stabilizing mood swings, reducing episodes, and improving daily functioning.', 'bipolar'],
                ['PTSD', 'Supporting recovery from trauma with a balanced, trauma-informed approach.', 'trauma'],
                ['ADHD', 'Enhancing focus, reducing impulsivity, and improving quality of life.', 'adhd'],
                ['Perinatal & postpartum', 'Sensitive, specialized care for mental health challenges during pregnancy and after childbirth.', 'womens'],
            ],
        ],
        [
            'type' => 'steps', 'id' => 'expect', 'nav' => 'What to expect',
            'eyebrow' => 'What to expect',
            'title' => 'Respectful, judgment-free care, <em class="italic text-wheat">every visit.</em>',
            'intro' => 'When you begin medication management at ANew, here’s how it works — in a safe and supportive environment.',
            'items' => [
                ['A thorough evaluation', 'We start with your mental health history, symptoms, and what you hope will change.'],
                ['Options, explained', 'We talk through treatment options together, including potential benefits and side effects.'],
                ['Regular follow-ups', 'Ongoing appointments to monitor your progress and adjust medications as needed.'],
                ['Connected care', 'Collaboration with your therapist or primary care provider, when it applies.'],
            ],
        ],
        [
            'type' => 'callout', 'id' => 'tms-note',
            'eyebrow' => 'New at ANew · TMS Therapy',
            'title' => 'Tried medication, and depression still hasn’t lifted?',
            'text' => 'You’re not out of options. ANew now offers TMS (Transcranial Magnetic Stimulation), a non-invasive, FDA-cleared treatment for depression — coordinated with the medication care you already receive here.',
            'actions' => [['Learn about TMS', '/services/tms-therapy/'], ['Is TMS right for me?', '/services/tms-therapy/#quiz']],
        ],
        [
            'type' => 'people', 'id' => 'provider', 'nav' => 'Your provider',
            'eyebrow' => 'Why choose a PMHNP?',
            'title' => 'Medical expertise, <em class="italic text-clay">person-centered care.</em>',
            'intro' => 'A Psychiatric Mental Health Nurse Practitioner is an advanced practice nurse with specialized training in mental health diagnosis, treatment, and psychopharmacology — bringing both medical expertise and a holistic, person-centered approach.',
            'slugs' => ['ashley-ludlum', 'irene'],
        ],
    ],
    'faqs' => [
        ['What is a PMHNP?', 'A Psychiatric Mental Health Nurse Practitioner is an advanced practice nurse with specialized training in mental health diagnosis, treatment, and psychopharmacology. At ANew, our PMHNPs combine that medical expertise with a holistic, person-centered approach to care.'],
        ['Do you treat children?', 'Yes. Our medication management services support both children and adults.'],
        ['Will my medication provider talk to my therapist?', 'When it applies, yes. Collaboration with your therapist or primary care provider is part of how we work — and when your therapist is also at ANew, your care stays connected under one roof.'],
        ['Do you offer telehealth for medication management?', 'Yes. Ashley Ludlum, APRN, PMHNP-BC, offers both in-person and telehealth appointments.'],
        ['How often will I have appointments?', 'After your initial evaluation, you’ll have regular follow-up appointments to monitor your progress and adjust medications as needed. How often depends on your treatment and how you’re doing.'],
        ['What if medication hasn’t helped my depression?', 'Talk with your provider — there may be other options. ANew now offers TMS Therapy, a non-invasive treatment often considered when medication hasn’t brought enough relief.'],
        $common_faqs['insurance'],
        $common_faqs['start'],
    ],
    'related' => ['therapy', 'tms', 'adhd-assessment', 'emdr'],
];

include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/partials/service-page.php';
include __DIR__ . '/../includes/footer.php';
