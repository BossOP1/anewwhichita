<?php
require __DIR__ . '/../../includes/config.php';

/*
 * TMS Therapy. ANew's system is Magstim — named in the 'evidence' block and FAQ; the rest of the copy stays device-neutral.
 * TO CONFIRM WITH WESLEY/CARI before launch:
 *   - Which protocols ANew offers (standard rTMS, theta burst) — session-length copy assumes both.
 *   - Which conditions/ages ANew will treat with TMS (see the 'conditions' block).
 *   - Who on the team oversees TMS, so a 'people' block can be added.
 *   - The updated SimplePractice inquiry URL that includes TMS as an option.
 */

$page_title       = 'TMS Therapy in Wichita, KS | Treatment for Depression | ANew';
$page_description = 'Now offering TMS therapy in Wichita, Kansas. ANew uses FDA-cleared Magstim TMS — a non-invasive, medication-free treatment for depression that hasn’t improved enough with medication.';
$canonical_path   = '/services/tms-therapy/';
$current_page     = 'services';
$og_image         = '/assets/images/people/prairie-walk.jpg';

$svc = [
    'name'        => 'TMS Therapy',
    'faq_topic' => 'TMS therapy', // FAQ intro: “Have questions about …?”
    'schema_name' => 'Transcranial Magnetic Stimulation (TMS)',
    'eyebrow'     => 'New at ANew · TMS therapy in Wichita, KS',
    'title'       => 'When depression hasn’t lifted, there may be <em class="italic text-clay">another path forward.</em>',
    'intro'       => 'Transcranial Magnetic Stimulation (TMS) is a non-invasive, FDA-cleared treatment that uses gentle magnetic pulses to wake up areas of the brain involved in mood. No medication, no anesthesia — and it’s now offered right here in our Wichita office.',
    'image'       => '/assets/images/tms/magstim-tms-treatment.jpg',
    'image_alt'   => 'A smiling woman relaxing in a Magstim TMS chair during treatment, with the coil and head tracker in place',
    'image_pos'   => '40% 40%',
    'blocks'      => [
        [
            'type' => 'text', 'id' => 'what', 'nav' => 'What TMS is',
            'eyebrow' => 'What is TMS?',
            'title' => 'Gentle pulses, <em class="italic text-clay">focused where mood lives.</em>',
            'paras' => [
                'In depression, an area at the front of the brain that helps regulate mood is often less active than it should be. During TMS, a magnetic coil rests lightly against your head and sends focused pulses to that area — similar in strength to an MRI, but aimed at a small, precise spot.',
                'Over a series of sessions, that stimulation helps those brain networks become more active again. You’re awake the whole time, you can talk, read or watch something, and you can drive yourself home and get on with your day afterward.',
            ],
            'points' => ['Non-invasive — nothing enters the body', 'No medication or anesthesia', 'Awake and comfortable throughout', 'Back to your day right after'],
            'image' => '/assets/images/tms/magstim-horizon-inspire.jpg',
            'image_alt' => 'A smiling man seated in a Magstim TMS chair with the treatment coil above his head',
            'image_pos' => '55% 40%',
        ],
        [
            'type' => 'facts', 'id' => 'glance', 'label' => 'TMS at a glance',
            'items' => [
                ['About 3 min', 'of stimulation per theta burst session, plus time to get settled'],
                ['5 days', 'a week at our East Wichita location'],
                ['About 6 weeks', 'for a typical course — often 30 to 36 sessions'],
                ['Awake and alert', 'No anesthesia or sedation, with no recovery period needed'],
            ],
        ],
        [
            'type' => 'text', 'id' => 'evidence', 'nav' => 'Why TMS', 'flip' => true,
            'eyebrow' => 'Why TMS',
            'title' => 'Well studied, FDA-cleared, <em class="italic text-clay">delivered on Magstim.</em>',
            'paras' => [
                'TMS has been FDA-cleared to treat major depression since 2008 and has been studied in thousands of patients. It’s often recommended when someone has tried antidepressants without enough relief, or when side effects made medication hard to continue.',
                'There are a few ways TMS can be delivered, including standard TMS and theta burst stimulation — a newer protocol that can shorten a session to just a few minutes. At ANew, treatment is delivered on a Magstim TMS system — technology from a company with more than 30 years of experience in magnetic stimulation.',
                'Precision matters in TMS. Our system uses StimGuide neuronavigation: a camera tracks the position of your head and the coil in 3D, so the coil can be placed on the same target area at every session, guided by your own measurements rather than by eye alone. Your provider will recommend the approach that fits you, and our team plans and monitors your treatment at every visit.',
            ],
            'points' => ['FDA-cleared for major depressive disorder', 'Studied for more than two decades', 'Standard and shorter theta burst options', 'Magstim TMS, delivered by trained ANew staff'],
            'image' => '/assets/images/tms/magstim-horizon-3-stimguide-pro.jpg',
            'image_alt' => 'The Magstim Horizon 3.0 TMS system with StimGuide Pro neuronavigation camera, treatment chair and coil',
        ],
        [
            'type' => 'facts', 'id' => 'stats', 'label' => 'TMS by the numbers',
            'items' => [
                ['2008', 'FDA-cleared to treat major depression'],
                ['58%', 'of patients responded to TMS in a 307-patient study*'],
                ['37%', 'reached remission in that same study*'],
                ['15,000+', 'research papers published on TMS'],
            ],
            'note' => '*Carpenter et al., 2012, Depression and Anxiety: a multisite study of 307 patients with depression treated at 42 U.S. TMS practices. Individual results vary. The American Psychiatric Association has recommended TMS since 2010.',
        ],
        [
            'type' => 'list', 'id' => 'conditions', 'nav' => 'What it treats',
            'eyebrow' => 'What TMS treats',
            'title' => 'Where TMS <em class="italic text-clay">can help.</em>',
            'intro' => 'At ANew, we’re starting with TMS for depression. We’ll talk through whether TMS fits your situation at your consultation.',
            'items' => [
                ['Major depression in adults', 'The most common reason people choose TMS — especially when antidepressants haven’t helped enough or side effects made them hard to take.', 'depression'],
                // ANew is starting with depression only. To offer more later, add rows here, e.g.:
                // ['Depression in teens and young adults', 'Some TMS systems are FDA-cleared as an add-on treatment for depression in teens 15 and older.', 'child'],
                // ['Obsessive-compulsive disorder (OCD)', 'TMS is also FDA-cleared for adults with OCD. Ask us whether it’s an option for you.', 'ocd'],
                ['Not sure where you fit?', 'That’s okay. Many people come to us knowing they’re struggling, not which treatment they need. We’ll help you find your next step.'],
            ],
        ],
        [
            'type' => 'list', 'id' => 'candidates', 'nav' => 'Who it’s for',
            'eyebrow' => 'Who may be a candidate',
            'title' => 'TMS may be worth a conversation <em class="italic text-clay">if…</em>',
            'items' => [
                ['You’ve tried at least one antidepressant', 'and it didn’t bring enough relief — or you’re still struggling despite therapy and medication.'],
                ['Side effects have been hard', 'weight changes, fatigue or feeling flat made it tough to stay on medication.'],
                ['You’d like a medication-free option', 'or something that can work alongside the care you already have.'],
                ['You can come in most weekdays', 'for a few weeks — sessions are short and fit around work or school.'],
            ],
        ],
        [
            'type' => 'callout', 'id' => 'safety',
            'eyebrow' => 'Safety first',
            'title' => 'When TMS may not be the right fit.',
            'text' => 'TMS isn’t recommended for people with metal implants or objects in or near the head (such as aneurysm clips, cochlear implants or deep brain stimulators — braces and dental fillings are usually fine) or with a history of seizures. The most common side effects are mild scalp discomfort or a headache during or after early sessions, which usually fade as treatment goes on. Your provider will review your full history before treatment begins.',
        ],
        [
            'type' => 'steps', 'id' => 'journey', 'nav' => 'What to expect',
            'eyebrow' => 'Your TMS journey',
            'title' => 'From first call <em class="italic text-wheat">to feeling like yourself.</em>',
            'intro' => 'You won’t have to figure this out alone. Here’s how TMS works at ANew, start to finish.',
            'items' => [
                ['Reach out', 'Send a quick inquiry or call ' . e($site['phone']) . '. Let us know you’re interested in TMS.'],
                ['Consultation', 'A provider reviews your history, past treatments and goals to see whether TMS is a good fit — and what else might help.'],
                ['Insurance check', 'Our team helps verify your coverage. Many plans cover TMS for depression when certain criteria are met.'],
                ['Mapping session', 'At your first treatment we find the exact spot and the right strength for you. This visit takes a little longer.'],
                ['Daily sessions', 'Short, comfortable sessions five days a week for about six weeks. Our team will help you feel at ease throughout treatment.'],
                ['Ongoing care', 'We track how you’re feeling throughout and coordinate with your therapist and medication provider.'],
            ],
        ],
        [
            'type' => 'quiz', 'id' => 'quiz', 'nav' => 'Is TMS right for me?',
            'eyebrow' => 'TMS self-check',
            'title' => 'Is TMS right for me?',
            'intro' => 'Six quick questions to help you decide whether TMS is worth a conversation with our team. It takes about a minute.',
            'disclaimer' => 'This self-check is for education only. It isn’t a diagnosis and doesn’t replace an evaluation by a licensed provider. Nothing you enter is saved or sent anywhere. If you’re in crisis, call or text 988 or call 911.',
            'questions' => [
                ['key' => 'depression', 'q' => 'Have you been diagnosed with depression, or do you think you may be living with it?'],
                ['key' => 'tried_meds', 'q' => 'Have you tried at least one antidepressant without enough relief?'],
                ['key' => 'side_effects', 'q' => 'Have side effects made it hard to stay on medication?'],
                ['key' => 'age', 'q' => 'Are you 15 or older?'],
                ['key' => 'visits', 'q' => 'Could you visit our East Wichita office most weekdays for about six weeks?', 'hint' => 'Sessions are short — many people come before work, at lunch or after school.'],
                ['key' => 'safety', 'q' => 'Do you have metal implants in or near your head, or a history of seizures?', 'hint' => 'Braces and dental fillings don’t count.'],
            ],
            'results' => [
                'good' => [
                    'eyebrow' => 'Your next step',
                    'title' => 'TMS may be worth exploring with our team.',
                    'text' => 'Your answers line up with the people TMS most often helps. The next step is a consultation, where a provider reviews your history and talks through whether TMS — on its own or alongside therapy and medication — makes sense for you.',
                ],
                'explore' => [
                    'eyebrow' => 'Your next step',
                    'title' => 'Let’s talk about what fits you best.',
                    'text' => 'TMS is usually considered after other treatments haven’t brought enough relief, but every story is different. Whether it’s therapy, medication management, TMS or a mix, our team will help you find the right starting point.',
                ],
                'safety' => [
                    'eyebrow' => 'Your next step',
                    'title' => 'Let’s talk with a provider first.',
                    'text' => 'Metal near the head or a history of seizures doesn’t always rule TMS out, but it does mean a provider needs to review your history carefully. Reach out and we’ll talk through your options, including other treatments we offer.',
                ],
            ],
        ],
        [
            'type' => 'people', 'id' => 'tms-team', 'nav' => 'Your TMS team',
            'eyebrow' => 'Your TMS team',
            'title' => 'The people <em class="italic text-clay">behind your treatment.</em>',
            'intro' => 'Our psychiatric nurse practitioners oversee TMS at ANew, alongside our trained TMS technician.',
            // TODO: add Hannah (TMS technician) once her photo and bio are in $team.
            'slugs' => ['ashley-ludlum', 'irene-keny'],
        ],
        [
            'type' => 'videos', 'id' => 'videos', 'topic' => 'tms',
            'eyebrow' => 'Watch & learn',
            'title' => 'TMS, explained by our team.',
        ],
        [
            'type' => 'callout', 'id' => 'connected', 'nav' => 'Connected care',
            'eyebrow' => 'ANew first, TMS second',
            'title' => 'Part of your whole care plan.',
            'text' => 'TMS works best as part of a bigger picture. Because it happens here at ANew, your TMS treatment can be coordinated with your therapist and medication provider under one roof — so everyone helping you is on the same page.',
            'actions' => [
                ['Explore talk therapy', $services['therapy']['url']],
                ['Medication management', $services['medication']['url']],
            ],
        ],
    ],
    'faqs' => [
        ['What does TMS feel like?', 'Most people feel a tapping sensation on the scalp and hear a clicking sound while the coil is pulsing. You’re awake and comfortable, and many people read, listen to music or watch TV during sessions.'],
        ['Is TMS the same as ECT (shock therapy)?', 'No. TMS uses focused magnetic pulses, not electrical current through the body. There’s no anesthesia, no seizure is induced, and there’s no memory loss. You can drive yourself to and from appointments.'],
        ['How long does each session take?', 'For depression, ANew plans to use theta burst stimulation, where the stimulation itself takes about 3 minutes. Plan on a little extra time to get settled in the chair. Your provider will confirm the protocol that’s right for you.'],
        ['How many sessions will I need?', 'A typical course is five sessions a week for about six weeks, and many people need 30 to 36 sessions to feel relief. Your provider will tailor the plan to you.'],
        ['When will I start to feel better?', 'Everyone is different. Some people notice changes in sleep, energy or mood within the first few weeks, while others see more improvement toward the end of their course.'],
        ['What are the side effects?', 'The most common are mild scalp discomfort or a headache during treatment, which usually ease after the first week. Serious side effects are rare. Your provider will go over safety with you before you begin.'],
        ['Can I keep taking my medication?', 'Usually, yes. TMS is often used alongside antidepressants and therapy. Don’t stop or change any medication without talking to your provider first.'],
        ['Does insurance cover TMS?', 'Many insurance plans cover TMS for depression when certain criteria are met — often after trying antidepressants that didn’t help enough. Our team will help check your coverage before treatment begins. We also accept CareCredit, HSA and FSA.'],
        ['What kind of TMS system does ANew use?', 'We use TMS technology from Magstim, a company with more than 30 years of experience in magnetic stimulation. Magstim systems are FDA-cleared to treat major depressive disorder.'],
        ['Is TMS safe?', 'Yes. TMS has been FDA-cleared since 2008 and is generally very well tolerated. Serious side effects such as seizures are rare, and your provider will screen for anything that could raise your risk before you begin.'],
        $common_faqs['start'],
    ],
    'related' => ['medication', 'therapy', 'emdr', 'adhd-assessment'],
];

include __DIR__ . '/../../includes/header.php';
include __DIR__ . '/../../includes/partials/service-page.php';
include __DIR__ . '/../../includes/footer.php';
