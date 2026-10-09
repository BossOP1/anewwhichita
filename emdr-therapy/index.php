<?php
require __DIR__ . '/../includes/config.php';

$page_title       = 'EMDR Therapy in Wichita, KS | Trauma Therapy | ANew';
$page_description = 'EMDR therapy in Wichita, Kansas with trained ANew therapists — an evidence-based treatment for trauma, PTSD, anxiety, grief and more.';
$canonical_path   = '/emdr-therapy/';
$current_page     = 'services';
$og_image         = '/assets/images/office/therapy-room.jpg';

$svc = [
    'name'      => 'EMDR Therapy',
    'schema_name' => 'Eye Movement Desensitization and Reprocessing (EMDR)',
    'eyebrow'   => 'EMDR therapy in Wichita, KS',
    'title'     => 'The past doesn’t have to <em class="italic text-clay">keep hurting.</em>',
    'intro'     => 'Eye Movement Desensitization and Reprocessing (EMDR) is a powerful, evidence-based treatment that helps people heal from trauma and emotional distress — recognized worldwide as an effective approach.',
    'image'     => '/assets/images/office/therapy-room.jpg',
    'image_alt' => 'A calm, sunlit ANew therapy room with a sofa and armchair',
    'blocks'    => [
        [
            'type' => 'text', 'id' => 'how', 'nav' => 'How it works',
            'eyebrow' => 'How EMDR works',
            'title' => 'Helping the brain <em class="italic text-clay">file memories differently.</em>',
            'paras' => [
                'During EMDR sessions, a trained therapist guides you through a structured process: calling to mind distressing memories while engaging in bilateral stimulation, such as guided eye movements, handheld pulsation devices, or tapping.',
                'This helps reprocess traumatic memories, reducing their emotional charge and allowing the brain to store them in a healthier, more adaptive way. Over time, clients often experience reduced anxiety, improved emotional regulation, and a greater sense of peace.',
            ],
            'points' => ['A structured, guided process', 'Eye movements, tapping or handheld pulsers', 'Memories lose their emotional charge', 'Greater calm and emotional regulation'],
            'image' => '/assets/images/people/trauma.jpg',
            'image_alt' => 'A young man in warm golden light, looking down thoughtfully',
        ],
        [
            'type' => 'text', 'id' => 'beyond', 'flip' => true,
            'eyebrow' => 'Not only for trauma',
            'title' => 'A gentle path <em class="italic text-clay">forward.</em>',
            'paras' => [
                'EMDR therapy isn’t only for trauma survivors. It can also help people facing a range of life challenges, including phobias, grief, and stress-related issues.',
                'It’s a gentle yet highly effective technique that helps people move forward in their lives, free from the burdens of past experiences. If you’re seeking to overcome past trauma or emotional struggles, EMDR may be a transformative path toward healing and personal growth.',
            ],
            'image' => '/assets/images/people/grief.jpg',
            'image_alt' => 'An older woman sitting quietly in a softly lit room',
        ],
        [
            'type' => 'list', 'id' => 'who', 'nav' => 'Who it helps',
            'eyebrow' => 'Who can benefit from EMDR?',
            'title' => 'EMDR can help with <em class="italic text-clay">more than you might think.</em>',
            'intro' => 'Anyone struggling with the following may benefit from EMDR therapy:',
            'items' => [
                ['Anxiety', null, 'anxiety'], ['Depression', null, 'depression'], ['Grief or loss of a loved one', null, 'grief'],
                ['Past abuse', null, 'trauma'], ['Sexual or physical assault', null, 'trauma'], ['Panic attacks', null, 'anxiety'],
                ['Substance abuse and addiction', null, 'addiction'], ['Distressing medical issues or medical trauma'], ['Dissociative disorders'],
                ['Emotional pain'], ['Performance anxiety'], ['Personality disorders'], ['Phobias'], ['Psychosis'], ['Sleep disturbances'],
            ],
        ],
        [
            'type' => 'steps', 'id' => 'sessions', 'nav' => 'What sessions are like',
            'eyebrow' => 'What to expect',
            'title' => 'Structured, safe, <em class="italic text-wheat">and at your pace.</em>',
            'intro' => 'EMDR follows a structured approach. Your therapist will make sure you feel prepared and steady before any reprocessing begins.',
            'items' => [
                ['Getting to know you', 'Your therapist learns your history and goals, and together you decide what to work on.'],
                ['Building calm', 'You’ll practice grounding and coping skills so you have tools to feel safe throughout.'],
                ['Reprocessing', 'With bilateral stimulation, you briefly focus on a memory as its emotional charge eases.'],
                ['Closing & checking in', 'Each session ends steady, and progress is reviewed at the start of the next.'],
            ],
        ],
        [
            'type' => 'people', 'id' => 'therapists', 'nav' => 'Our EMDR therapists',
            'eyebrow' => 'Meet our EMDR-trained therapists',
            'title' => 'Trained, experienced, <em class="italic text-clay">and kind.</em>',
            'intro' => 'Tap a therapist to learn more about who they work with and how they help.',
            'slugs' => ['barb-meyer', 'sid-mead', 'wes-smothermon'],
        ],
    ],
    'faqs' => [
        ['What does EMDR stand for?', 'Eye Movement Desensitization and Reprocessing. It’s an evidence-based therapy that helps the brain reprocess distressing memories so they lose their emotional charge.'],
        ['Is EMDR only for PTSD?', 'No. EMDR is widely used for trauma and PTSD, but it can also help with anxiety, depression, grief, phobias, panic attacks, stress-related issues and more.'],
        ['Do I have to talk through every detail of what happened?', 'Not necessarily. EMDR focuses on how a memory is stored and how it affects you now, so many people find they don’t have to describe every detail out loud. Your therapist will go at a pace that feels safe.'],
        ['How many sessions will I need?', 'It varies from person to person, depending on what you’re working on and your history. Your therapist will talk through a plan with you after getting to know you.'],
        ['Can EMDR be combined with other care?', 'Yes. EMDR can be part of a broader plan that includes talk therapy and, when helpful, medication management — all coordinated by the ANew team.'],
        $common_faqs['insurance'],
        $common_faqs['start'],
    ],
    'related' => ['therapy', 'medication', 'tms', 'adhd-assessment'],
];

include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/partials/service-page.php';
include __DIR__ . '/../includes/footer.php';
