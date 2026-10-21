<?php
require __DIR__ . '/../includes/config.php';

$page_title       = 'Play Therapy for Children in Wichita, KS | ANew';
$page_description = 'Play therapy in Wichita, Kansas helps children work through big feelings, worries, grief and change in the way they communicate best — through play — with parents involved every step.';
$canonical_path   = '/play-therapy/';
$current_page     = 'services';
$og_image         = '/assets/images/people/play.jpg';

/* New page — the existing site has no dedicated play therapy content.
   TODO: confirm with Wes & Cari which therapists provide play therapy and the age range they see. */
$svc = [
    'name'      => 'Play Therapy',
    'faq_topic' => 'play therapy', // FAQ intro: “Have questions about …?”
    'schema_name' => 'Play therapy',
    'eyebrow'   => 'Play therapy in Wichita, KS',
    'title'     => 'Kids say with play <em class="italic text-clay">what they can’t yet say with words.</em>',
    'intro'     => 'Play therapy gives children a safe, natural way to work through big feelings, hard experiences, and everyday struggles — with a trained therapist, and their family, in their corner.',
    'image'     => '/assets/images/people/play.jpg',
    'image_alt' => 'A young boy absorbed in building with colorful toy bricks on the floor',
    'image_pos' => '60% 50%',
    'blocks'    => [
        [
            'type' => 'text', 'id' => 'what', 'nav' => 'What it is',
            'eyebrow' => 'What is play therapy?',
            'title' => 'Play is a child’s <em class="italic text-clay">first language.</em>',
            'paras' => [
                'Young children don’t usually process the world by sitting and talking about it — they play it out. In play therapy, a therapist uses toys, art, stories and games to help a child express feelings, make sense of experiences, and practice new ways of coping.',
                'To a child it simply feels like play. To a trained therapist, it’s a window into what your child is carrying — and a gentle, developmentally appropriate way to help them heal and grow.',
            ],
            'points' => ['A safe, child-friendly space', 'Toys, art, stories and games', 'Builds coping and emotional skills', 'Parents guided along the way'],
            'image' => '/assets/images/people/child.jpg',
            'image_alt' => 'A parent and child walking together along a hillside path',
        ],
        [
            'type' => 'list', 'id' => 'signs', 'nav' => 'When it helps',
            'eyebrow' => 'When play therapy can help',
            'title' => 'For the big feelings <em class="italic text-clay">little ones carry.</em>',
            'intro' => 'Play therapy may help if your child is going through any of the following:',
            'items' => [
                ['Worries & anxiety', 'Fears, clinginess, stomachaches before school, or trouble settling down.', 'anxiety'],
                ['Grief & big changes', 'A loss, a move, divorce, a new sibling — changes that shake a child’s world.', 'grief'],
                ['Hard experiences', 'Something frightening or painful that’s still showing up in behavior or sleep.', 'trauma'],
                ['Behavior & attention', 'Meltdowns, defiance, or trouble focusing at home or school.', 'adhd'],
                ['Family stress', 'Conflict or tension at home that’s affecting how your child feels and acts.', 'relationships'],
                ['Confidence & friendships', 'Shyness, low self-esteem, or difficulty getting along with other kids.'],
            ],
        ],
        [
            'type' => 'steps', 'id' => 'how', 'nav' => 'How it works',
            'eyebrow' => 'How it works for families',
            'title' => 'You’re part of <em class="italic text-wheat">the process.</em>',
            'intro' => 'Children do best when the adults who love them are involved. Here’s how play therapy usually unfolds.',
            'items' => [
                ['Parent intake', 'We start by meeting with you to hear your concerns, your child’s history, and your goals.'],
                ['Getting comfortable', 'Your child gets to know their therapist and the playroom at their own pace.'],
                ['Play sessions', 'Through guided play, your child works through feelings and practices new skills.'],
                ['Parent check-ins', 'Regular updates and practical tools you can use at home between sessions.'],
            ],
        ],
        [
            'type' => 'people', 'id' => 'therapists', 'nav' => 'Our therapists',
            'eyebrow' => 'Therapists who work with children',
            'title' => 'People your child <em class="italic text-clay">can trust.</em>',
            'intro' => 'Our team includes therapists who love working with kids, teens and their families. We’ll help match your child with the right fit.',
            'slugs' => ['barb-meyer', 'jeremiah-coon', 'christina-wankum', 'wes-smothermon'],
        ],
    ],
    'faqs' => [
        ['What ages is play therapy for?', 'Play therapy is most often used with younger children, roughly ages 3 to 12, though it can be adapted for older kids. Call us and we’ll help you decide whether play therapy or another approach is the best fit for your child.'],
        ['How can playing actually help?', 'Children naturally express themselves through play. In a therapeutic setting, play lets them show and work through feelings and experiences they don’t have words for yet — while a trained therapist guides that process toward healing and new skills.'],
        ['Will I be involved?', 'Yes. Parents are an important part of play therapy. You’ll meet with the therapist at the start and have regular check-ins, with practical ways to support your child at home.'],
        ['How long does play therapy take?', 'Every child is different. Some families see progress in a few months; others benefit from longer support. Your child’s therapist will review progress with you along the way.'],
        ['What if my child also needs other support?', 'ANew is a full-service practice, so if an ADHD assessment, family therapy or medication management could help, we can coordinate it — all in one place.'],
        $common_faqs['insurance'],
        $common_faqs['start'],
    ],
    'related' => ['therapy', 'adhd-assessment', 'medication', 'emdr'],
];

include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/partials/service-page.php';
include __DIR__ . '/../includes/footer.php';
