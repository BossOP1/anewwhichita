<?php
/**
 * Long-form content for /conditions/{slug}/ pages.
 *
 * Written to educate and guide toward a conversation — never to diagnose.
 * New copy (the previous site had no condition pages): have ANew's clinicians
 * review before launch.
 *
 * 'help' maps a service key to how that service helps with this condition.
 */

$condition_pages = [

    'anxiety' => [
        'title'   => 'When worry <em class="italic text-clay">won’t switch off.</em>',
        'intro'   => 'Everyone feels anxious sometimes. But when worry, fear or tension shows up most days — and starts shaping what you do and what you avoid — it may be an anxiety disorder. Anxiety is one of the most common mental health conditions, and one of the most treatable.',
        'signs'   => [
            'Constant or excessive worry that’s hard to control', 'Feeling restless, keyed up or on edge',
            'Racing thoughts that won’t quiet down', 'Trouble falling or staying asleep',
            'Muscle tension, headaches or an upset stomach', 'Panic attacks — sudden waves of intense fear',
            'Avoiding people, places or situations', 'Irritability or trouble concentrating',
        ],
        'types'   => ['Generalized anxiety', 'Panic disorder', 'Social anxiety', 'Phobias', 'Health anxiety'],
        'help'    => [
            'therapy'    => 'Learn practical tools to calm your body, untangle anxious thoughts, and gently face what you’ve been avoiding.',
            'medication' => 'For some people, medication takes the edge off so therapy and everyday life feel more manageable.',
            'emdr'       => 'When anxiety or panic is tied to past experiences, EMDR can help those memories lose their grip.',
        ],
        'faqs'    => [
            ['Is anxiety really treatable?', 'Yes. Anxiety is one of the most treatable mental health conditions. Most people improve with therapy, and some also benefit from medication. Many people notice real change within a few months.'],
            ['Do I need medication for anxiety?', 'Not necessarily. Many people do well with therapy alone. If symptoms are severe or therapy alone isn’t enough, our medication provider can talk through whether medication might help — and coordinate with your therapist.'],
            ['When should I reach out for help?', 'If worry is taking up a lot of your day, affecting your sleep, work, school or relationships, or causing you to avoid things you need or want to do, it’s a good time to talk to someone.'],
            ['Can children have anxiety?', 'Yes. In kids, anxiety often shows up as clinginess, stomachaches, meltdowns or avoiding school. We work with children and their families, including through play therapy.'],
        ],
        'related' => ['depression', 'ocd', 'stress', 'trauma'],
    ],

    'depression' => [
        'title'   => 'When the heaviness <em class="italic text-clay">won’t lift.</em>',
        'intro'   => 'Depression is more than a bad week or feeling sad. It’s a low mood or loss of interest that lingers for weeks and gets in the way of work, relationships and the things you used to enjoy. It’s common, it’s real — and it’s treatable.',
        'signs'   => [
            'Persistent sadness, emptiness or hopelessness', 'Losing interest in things you used to enjoy',
            'Sleeping much more or much less than usual', 'Changes in appetite or weight',
            'Low energy or constant fatigue', 'Trouble concentrating or making decisions',
            'Feelings of worthlessness or guilt', 'Thoughts of death or suicide',
        ],
        'types'   => ['Major depression', 'Persistent depressive disorder', 'Seasonal depression', 'Postpartum depression'],
        'help'    => [
            'therapy'    => 'A safe place to understand what’s weighing on you, challenge harsh self-talk, and rebuild the routines and connections depression wears down.',
            'medication' => 'Antidepressant care that’s carefully monitored and adjusted with you — and coordinated with your therapist.',
            'tms'        => 'If depression hasn’t improved enough with medication, TMS is a non-invasive, FDA-cleared option now offered right here at ANew.',
        ],
        'faqs'    => [
            ['What’s the difference between sadness and depression?', 'Sadness usually passes with time. Depression tends to last — most of the day, nearly every day, for two weeks or more — and makes it hard to function. If you’re not sure which it is, a conversation with one of our providers can help.'],
            ['Is depression treatable?', 'Yes. Therapy, medication, or a combination helps most people feel better. And when those haven’t been enough, there are other options — like TMS Therapy, now offered at ANew.'],
            ['What is TMS, and who is it for?', 'Transcranial Magnetic Stimulation (TMS) is a non-invasive, FDA-cleared treatment that uses gentle magnetic pulses to stimulate areas of the brain involved in mood. It’s often considered when depression hasn’t improved enough with medication.'],
            ['What if I’m having thoughts of suicide?', 'Please reach out now. Call or text 988 (Suicide & Crisis Lifeline), or call 911 if you’re in immediate danger. You deserve support today — and when you’re ready, our team is here for ongoing care.'],
        ],
        'related' => ['anxiety', 'bipolar', 'grief', 'womens'],
    ],

    'adhd' => [
        'title'   => 'Not lazy. Not careless. <em class="italic text-clay">Wired differently.</em>',
        'intro'   => 'ADHD (attention-deficit/hyperactivity disorder) affects how the brain manages attention, activity and impulses. It’s often noticed in childhood, but many adults live with it for years without knowing — just feeling like they’re always behind.',
        'signs'   => [
            'Difficulty keeping focus — or focusing too much', 'Trouble finishing tasks or projects',
            'Forgetfulness and losing things', 'Constantly feeling overwhelmed',
            'Restless and fidgety, or a “couch potato”', 'Impulsivity',
            'Excessive talking', 'Easily agitated or frustrated',
        ],
        'types'   => ['Predominantly inattentive', 'Predominantly hyperactive-impulsive', 'Combined presentation'],
        'help'    => [
            'adhd-assessment' => 'A thorough assessment, including the T.O.V.A. objective attention test, for children, teens and adults. A referral is required.',
            'medication'      => 'If ADHD is diagnosed, our medication provider can help improve focus and reduce impulsivity, with careful follow-up.',
            'therapy'         => 'Practical strategies for organization, emotions and relationships — plus support for parents and families.',
        ],
        'callout' => ['A referral is required for ADHD assessment', 'An ADHD assessment requires a referral from a doctor or therapist. Ask your provider to fax the referral to %fax% or email it to %email%.', 'About ADHD assessment', '/adhd-assessment/'],
        'faqs'    => [
            ['Can adults have ADHD?', 'Yes. Many adults were never diagnosed as children. An assessment can help you finally understand years of struggling with focus, organization or restlessness.'],
            ['How is ADHD diagnosed at ANew?', 'With a referral, you’ll start with an intake with one of our trained providers, take the T.O.V.A. — a computerized, objective test of attention — and then review your results and recommendations at a follow-up.'],
            ['Is medication the only treatment?', 'No. Medication helps many people, but therapy, coaching-style strategies, and family support are important too. We’ll talk through what fits you or your child.'],
        ],
        'related' => ['child', 'anxiety', 'stress', 'depression'],
    ],

    'trauma' => [
        'title'   => 'What happened to you <em class="italic text-clay">doesn’t have to define you.</em>',
        'intro'   => 'Trauma is the lasting impact of experiences that overwhelmed your ability to cope — abuse, assault, accidents, sudden loss, combat, or long stretches of fear and stress. Sometimes the effects fade; sometimes they stay, showing up as PTSD or in quieter ways long after.',
        'signs'   => [
            'Intrusive memories, flashbacks or nightmares', 'Avoiding reminders, places or conversations',
            'Feeling on guard, jumpy or easily startled', 'Trouble sleeping',
            'Feeling numb, detached or “not really here”', 'Guilt, shame or anger that won’t settle',
            'Difficulty trusting others', 'Trouble concentrating',
        ],
        'types'   => ['PTSD', 'Childhood trauma', 'Medical trauma', 'Grief-related trauma', 'Complex trauma'],
        'help'    => [
            'emdr'       => 'An evidence-based therapy that helps your brain reprocess painful memories so they lose their emotional charge.',
            'therapy'    => 'Trauma-informed counseling at your pace, in a space that feels safe — no pressure to share more than you’re ready to.',
            'medication' => 'Medication can ease symptoms like anxiety, sleep problems and depression that often come with PTSD.',
        ],
        'faqs'    => [
            ['Do I have to talk about every detail of what happened?', 'No. Trauma therapy moves at your pace. Approaches like EMDR focus on how a memory affects you now, so many people don’t need to describe every detail out loud.'],
            ['Can childhood experiences still affect me as an adult?', 'Yes. Experiences from long ago can shape how we feel, react and relate to others today. The good news: it’s never too late to heal.'],
            ['What is EMDR?', 'Eye Movement Desensitization and Reprocessing is a structured therapy that uses bilateral stimulation — like guided eye movements or tapping — to help reprocess distressing memories. Several of our therapists are EMDR trained.'],
        ],
        'related' => ['anxiety', 'depression', 'grief', 'addiction'],
    ],

    'grief' => [
        'title'   => 'There’s no right way <em class="italic text-clay">to grieve.</em>',
        'intro'   => 'Grief is the natural response to losing someone or something you love — a person, a pregnancy, a marriage, a job, a way of life. There’s no timeline you’re supposed to follow. But you don’t have to carry it alone.',
        'signs'   => [
            'Waves of sadness, longing or yearning', 'Numbness or disbelief',
            'Guilt or endless “what ifs”', 'Anger or irritability',
            'Trouble sleeping or eating', 'Difficulty focusing',
            'Pulling away from people and activities', 'Grief that feels stuck or isn’t easing over time',
        ],
        'types'   => ['Loss of a loved one', 'Pregnancy & infant loss', 'Divorce or separation', 'Anticipatory grief', 'Life transitions'],
        'help'    => [
            'therapy'      => 'Space to remember, to feel what you feel, and to find a way to carry your loss as life moves forward.',
            'emdr'         => 'When a loss was sudden or traumatic, EMDR can help ease painful images and memories.',
            'play-therapy' => 'Children grieve too — often through play. We help kids make sense of loss in a way that fits their age.',
        ],
        'faqs'    => [
            ['Is it normal for grief to come in waves?', 'Yes. Grief often comes and goes — triggered by dates, places, songs or seemingly nothing at all. That’s a normal part of grieving.'],
            ['When should I get help for grief?', 'Anytime you’d like support is a good time. It may be especially helpful if grief is making it hard to function day to day, isn’t easing over time, or is mixed with depression, guilt or trauma.'],
            ['Do you help children who are grieving?', 'Yes. We work with children and families, including through play therapy, which lets kids express feelings about loss they may not have words for.'],
        ],
        'related' => ['depression', 'trauma', 'womens', 'child'],
    ],

    'bipolar' => [
        'title'   => 'Steadier days <em class="italic text-clay">are possible.</em>',
        'intro'   => 'Bipolar disorder causes significant shifts in mood, energy and activity — from highs (mania or hypomania) to lows (depression). These aren’t ordinary ups and downs. With the right treatment, most people find much more stable, steady days.',
        'signs'   => [
            'Periods of unusually high energy or euphoria', 'Needing much less sleep than usual',
            'Racing thoughts or rapid speech', 'Impulsive or risky decisions',
            'Irritability or agitation', 'Periods of depression — low mood and low energy',
            'Mood shifts that disrupt work or relationships', 'Feeling unlike yourself for days or weeks at a time',
        ],
        'types'   => ['Bipolar I', 'Bipolar II', 'Cyclothymia'],
        'help'    => [
            'medication' => 'Stabilizing mood swings, reducing episodes, and improving daily functioning, with careful monitoring over time.',
            'therapy'    => 'Learn your early warning signs, build routines that protect your stability, and strengthen relationships.',
        ],
        'faqs'    => [
            ['How is bipolar disorder different from normal mood swings?', 'Everyone has ups and downs. Bipolar disorder involves distinct episodes of elevated or irritable mood and energy — and often depression — that last days or weeks and noticeably change how you function.'],
            ['Is bipolar disorder treatable?', 'Yes. It’s a long-term condition, but with consistent treatment many people live full, stable lives. Medication is usually an important part of care, alongside therapy.'],
            ['Will my therapist and medication provider work together?', 'Yes. At ANew, therapy and medication management are coordinated so your care stays connected.'],
        ],
        'related' => ['depression', 'anxiety', 'stress', 'relationships'],
    ],

    'ocd' => [
        'title'   => 'More than being <em class="italic text-clay">“a little OCD.”</em>',
        'intro'   => 'Obsessive-compulsive disorder (OCD) involves unwanted, intrusive thoughts (obsessions) and repeated behaviors or mental rituals (compulsions) done to ease the anxiety they cause. It isn’t about being tidy — it can be exhausting. And it’s very treatable.',
        'signs'   => [
            'Unwanted, distressing thoughts that keep coming back', 'Repeated checking, washing, counting or arranging',
            'Needing things to feel “just right”', 'Asking for reassurance again and again',
            'Mental rituals like praying, counting or reviewing', 'Rituals that take up a lot of time each day',
            'Avoiding situations that trigger thoughts', 'Knowing the fears don’t quite make sense, but feeling stuck anyway',
        ],
        'types'   => ['Contamination', 'Checking', 'Intrusive thoughts', 'Symmetry & order', 'Scrupulosity'],
        'help'    => [
            'therapy'    => 'Structured therapy helps you gradually face fears and resist compulsions, so the cycle loosens its hold.',
            'medication' => 'Medication can reduce the intensity of obsessions and compulsions and make therapy more effective.',
        ],
        'faqs'    => [
            ['Is OCD just being very organized?', 'No. OCD is driven by distressing thoughts and the urge to neutralize them. Many people with OCD aren’t especially neat at all — and the rituals can feel exhausting rather than satisfying.'],
            ['Is OCD treatable?', 'Yes. Therapy that helps you face fears without performing compulsions is highly effective, and medication helps many people too.'],
            ['Can children have OCD?', 'Yes. OCD often begins in childhood or adolescence. If your child seems stuck in rituals or constant reassurance-seeking, it’s worth talking to someone.'],
        ],
        'related' => ['anxiety', 'depression', 'child', 'stress'],
    ],

    'stress' => [
        'title'   => 'Running on empty? <em class="italic text-clay">Let’s refill the tank.</em>',
        'intro'   => 'Some stress is part of life. But when pressure from work, caregiving, school or big changes piles up with no relief, it can leave you exhausted, irritable and running on empty — what many people call burnout.',
        'signs'   => [
            'Feeling exhausted even after rest', 'Irritability or a short fuse',
            'Trouble sleeping', 'Headaches, tension or stomach issues',
            'Feeling detached, cynical or numb', 'Hard to concentrate or remember things',
            'Dreading the day ahead', 'Leaning on food, alcohol or screens to cope',
        ],
        'types'   => ['Work burnout', 'Caregiver stress', 'Parenting stress', 'Life transitions', 'Perfectionism & people-pleasing'],
        'help'    => [
            'therapy' => 'Stress management that sticks: boundaries, realistic expectations, and coping skills that fit your real life.',
            'emdr'    => 'EMDR can help with stress-related issues, especially when old experiences are fueling today’s pressure.',
        ],
        'faqs'    => [
            ['Is burnout the same as depression?', 'They can overlap. Burnout is usually tied to a specific source of stress, like work or caregiving, while depression tends to affect every part of life. A provider can help you sort out what’s going on.'],
            ['When is stress worth talking to someone about?', 'When it’s affecting your sleep, health, relationships or ability to function — or when the ways you’ve been coping aren’t working anymore.'],
        ],
        'related' => ['anxiety', 'depression', 'relationships', 'adhd'],
    ],

    'child' => [
        'title'   => 'Big feelings, <em class="italic text-clay">little people.</em>',
        'intro'   => 'Children and teens feel big things too — and they don’t always have the words for it. Worry, sadness, anger, school struggles or changes at home often show up as behavior. ANew gladly welcomes children and their families.',
        'signs'   => [
            'Frequent meltdowns, anger or defiance', 'Worry, clinginess or frequent stomachaches',
            'Withdrawal, sadness or loss of interest', 'School refusal or falling grades',
            'Trouble focusing or sitting still', 'Changes in sleep or eating',
            'Struggles with friends', 'Reacting to a loss, divorce, move or new sibling',
        ],
        'types'   => ['Behavior concerns', 'Childhood anxiety', 'School struggles', 'Teen depression', 'Family changes'],
        'help'    => [
            'play-therapy'    => 'For younger kids, play is how they communicate. Play therapy helps them express feelings and build coping skills.',
            'therapy'         => 'Counseling for teens and family therapy that helps everyone communicate and parent with confidence.',
            'adhd-assessment' => 'If attention or behavior concerns persist, an ADHD assessment can bring clarity.',
            'medication'      => 'Our medication provider supports children when medication may be part of the plan.',
        ],
        'faqs'    => [
            ['How do I know if my child’s behavior is “normal”?', 'Every child struggles sometimes. It may be time to reach out if problems last for weeks, show up in more than one setting (home and school), or get in the way of friendships, learning or family life.'],
            ['Will I be involved in my child’s therapy?', 'Yes. Parents are an important part of the process, with regular check-ins and practical tools to use at home.'],
            ['Do you work with teenagers?', 'Yes. Several of our therapists work with adolescents and their families.'],
        ],
        'related' => ['adhd', 'anxiety', 'grief', 'relationships'],
    ],

    'relationships' => [
        'title'   => 'Rupture can <em class="italic text-clay">become repair.</em>',
        'intro'   => 'Relationships shape so much of our wellbeing — and when they’re strained, everything feels harder. Whether it’s a marriage, a family, or patterns you keep repeating, therapy can help you reconnect and move forward.',
        'signs'   => [
            'The same arguments, over and over', 'Feeling disconnected — more like roommates',
            'Trust broken by an affair or secrets', 'Communication that shuts down or escalates',
            'Conflict over parenting', 'Blended family tension',
            'A big transition: marriage, a baby, divorce', 'Patterns that repeat across relationships',
        ],
        'types'   => ['Couples therapy', 'Family therapy', 'Premarital counseling', 'Parenting support', 'Divorce & co-parenting'],
        'help'    => [
            'therapy' => 'Individual, couples and family therapy — in joint or individual sessions — to heal hurt, rebuild trust and communicate better.',
        ],
        'faqs'    => [
            ['Do both partners need to come to couples therapy?', 'Not always. Couples therapy can happen in joint sessions or individual sessions, and each partner may also explore personal issues that affect the relationship.'],
            ['Is family therapy only for families in crisis?', 'No. Family therapy can be valuable even when there’s no specific problem — as a preventive step that keeps relationships strong.'],
            ['Can therapy help if only I want to work on things?', 'Yes. Working on your own patterns, boundaries and communication can change how your relationships feel, even if others don’t come along.'],
        ],
        'related' => ['stress', 'addiction', 'child', 'depression'],
    ],

    'addiction' => [
        'title'   => 'Met with grace, <em class="italic text-clay">not judgment.</em>',
        'intro'   => 'Addiction can involve substances like alcohol or drugs, or behaviors like pornography that have taken hold despite the harm they cause. It often grows out of pain. Recovery is possible — and you don’t have to start it alone.',
        'signs'   => [
            'Using more, or for longer, than you meant to', 'Trying to cut back without success',
            'Strong cravings or urges', 'Hiding or minimizing what’s going on',
            'Relationships, work or health suffering', 'Using to cope with stress or emotions',
            'Losing interest in things that used to matter', 'Feeling stuck in shame after using',
        ],
        'types'   => ['Alcohol', 'Substance use', 'Pornography & sexual behavior', 'Co-occurring anxiety or depression'],
        'help'    => [
            'therapy' => 'Compassionate counseling that gets to the root wounds beneath the addiction, builds new coping skills, and supports families.',
            'emdr'    => 'When addiction is tangled with trauma, EMDR can help address the painful experiences driving it.',
        ],
        'callout' => ['Need more support than outpatient therapy?', 'If you need medically supervised withdrawal or a higher level of care, talk with your doctor, or call the SAMHSA National Helpline at 1-800-662-4357 (free, confidential, 24/7). In an emergency, call 911.', 'Call SAMHSA', 'tel:18006624357'],
        'faqs'    => [
            ['Do you help with pornography addiction?', 'Yes. Several of our therapists have a particular passion for helping people — including married men — struggling with pornography and sexual behavior.'],
            ['Will I be judged?', 'No. Our therapists create safe, grace-filled, nonjudgmental spaces. Many people carry shame about addiction; we’ll meet you with compassion.'],
            ['Can my family be part of recovery?', 'Yes. Addiction affects the whole family, and family or couples therapy can be an important part of healing.'],
        ],
        'related' => ['trauma', 'depression', 'relationships', 'anxiety'],
    ],

    'womens' => [
        'title'   => 'Care for the seasons <em class="italic text-clay">that change everything.</em>',
        'intro'   => 'Infertility, pregnancy, postpartum and infant loss can bring anxiety, depression, grief and exhaustion that deserve real care. Our team includes providers with a special heart for walking women through these seasons.',
        'signs'   => [
            'Sadness, anxiety or irritability that lasts beyond two weeks after birth', 'Scary or intrusive thoughts',
            'Trouble bonding with your baby', 'Not sleeping even when your baby sleeps',
            'Grief after miscarriage, stillbirth or infant loss', 'The stress and heartache of infertility',
            'Feeling overwhelmed or not like yourself', 'Worry about medication during pregnancy or breastfeeding',
        ],
        'types'   => ['Postpartum depression', 'Perinatal anxiety', 'Infertility', 'Pregnancy & infant loss', 'Birth trauma'],
        'help'    => [
            'medication' => 'Sensitive, specialized medication care before, during and after pregnancy — including help weighing options while pregnant or breastfeeding.',
            'therapy'    => 'Support through infertility, postpartum struggles, and the complex emotions that come with these seasons.',
            'emdr'       => 'For a difficult or traumatic birth, EMDR can help ease distressing memories.',
        ],
        'faqs'    => [
            ['What’s the difference between the “baby blues” and postpartum depression?', 'The baby blues — tearfulness and mood swings in the first days after birth — usually ease within about two weeks. When symptoms are stronger or last longer, it may be postpartum depression or anxiety, and it’s worth reaching out.'],
            ['Can I take medication while pregnant or breastfeeding?', 'It depends on your situation. Our psychiatric nurse practitioner has a heart for helping women navigate medications before, during and after pregnancy, and will talk through benefits and risks with you.'],
            ['Do you support women after pregnancy or infant loss?', 'Yes. Grief after miscarriage, stillbirth or infant loss is real and deserves care. Our team offers compassionate support through that loss.'],
        ],
        'related' => ['depression', 'anxiety', 'grief', 'trauma'],
    ],
];
