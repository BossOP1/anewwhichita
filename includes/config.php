<?php
/**
 * ANew Mental Health Wichita — site data.
 *
 * Everything the homepage renders lives here so copy, links and people can be
 * updated without touching markup. Bios and contact details are taken from the
 * existing anewwichita.com site.
 */

function e(?string $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

$site = [
    'name'        => 'ANew Mental Health',
    'short_name'  => 'ANew',
    'tagline'     => 'We exist because people matter',
    'url'         => 'https://anewwichita.com',
    'phone'       => '(316) 260-3777',
    'phone_href'  => 'tel:+13162603777',
    'fax'         => '(316) 260-9382',
    'street'      => '8080 E Central Ave, Suite 190',
    'city'        => 'Wichita',
    'region'      => 'KS',
    'postal'      => '67206',
    'maps_url'    => 'https://maps.app.goo.gl/MpxK3Lavx2o7wDvFA',
    // Existing SimplePractice inquiry — keep this workflow (feeds the EHR directly).
    // Swap for the updated URL once Wesley adds TMS as an inquiry option.
    'schedule_url' => 'https://anewwichita.clientsecure.me/contact-widget',
    'portal_therapy'    => 'https://anewwichita.clientsecure.me',
    'portal_medication' => 'https://pp-wfe-102.advancedmd.com/account/logon?lk=150778',
    'referral_url' => '/professional-referral-form/',
    'carecredit_url' => 'https://www.carecredit.com/go/823HFQ/?dtc=DS5X&sitecode=CCCABDS5X',
    'facebook'    => 'https://www.facebook.com/ANew.ICT',
    'instagram'   => 'https://www.instagram.com/anew.ict/',
];

/* Optional: drop in an mp4/webm of the Flint Hills (moving grass, clouds, sunset)
   and the hero switches from photo to looping video automatically. */
$hero_video = '';            // e.g. 'assets/video/flint-hills.mp4'
$hero_image = 'assets/images/scenery/flint-hills-golden-hour.jpg';

$services = [
    'therapy' => [
        'name' => 'Talk Therapy',
        'url'  => '/talk-therapy/',
        'blurb' => 'One-on-one, couples and family counseling with a therapist matched to what you’re carrying.',
    ],
    'medication' => [
        'name' => 'Medication Management',
        'url'  => '/mental-health-medication-management/',
        'blurb' => 'Psychiatric evaluation and ongoing medication care, coordinated with your therapist.',
    ],
    'adhd-assessment' => [
        'name' => 'ADHD Assessment',
        'url'  => '/adhd-assessment/',
        'blurb' => 'A thorough evaluation for children, teens and adults — and a clear plan for what comes next.',
    ],
    'emdr' => [
        'name' => 'EMDR Therapy',
        'url'  => '/emdr-therapy/',
        'blurb' => 'An evidence-based approach that helps the mind process painful memories and trauma.',
    ],
    'play-therapy' => [
        'name' => 'Play Therapy',
        'url'  => '/services/',
        'blurb' => 'Children often say with play what they can’t yet say with words. We meet them there.',
    ],
    'tms' => [
        'name' => 'TMS Therapy',
        'url'  => '/services/tms-therapy/',
        'blurb' => 'A non-invasive, medication-free treatment for depression that hasn’t lifted with other care.',
        'new'  => true,
    ],
];

/*
 * Team. `lane` drives the team filter; `focus` is drawn from each person's own
 * bio; `conditions` connects people to the condition pathways below.
 */
$team = [
    'ashley-ludlum' => [
        'name' => 'Ashley Ludlum', 'creds' => 'APRN, PMHNP-BC', 'lane' => 'medication',
        'role' => 'Psychiatric Mental Health Nurse Practitioner', 'format' => 'In-person & telehealth',
        'photo' => 'ashley-ludlum.jpg', 'pos' => '50% 25%',
        'focus' => ['Medication management', 'Women’s mental health', 'Pregnancy & postpartum', 'Infertility & infant loss'],
        'conditions' => ['depression', 'anxiety', 'bipolar', 'adhd', 'womens', 'ocd'],
        'bio' => 'I have passion for all areas of mental health, especially women’s health. I have a heart for helping women navigate and manage their medications before, during, and after pregnancy, infertility, or infant loss.',
    ],
    'wes-smothermon' => [
        'name' => 'Wes Smothermon', 'creds' => 'LCMFT', 'lane' => 'therapist',
        'role' => 'Co-founder · Licensed Clinical Marriage & Family Therapist', 'format' => 'In-person & telehealth',
        'photo' => 'wes-smothermon.jpg', 'pos' => '50% 20%',
        'focus' => ['Adolescents & families', 'Couples', 'Anxiety & trauma', 'Parenting'],
        'conditions' => ['anxiety', 'trauma', 'relationships', 'child', 'addiction'],
        'bio' => 'Today, I work with adolescents, adults, couples, and families experiencing anxiety, trauma, relationship difficulties, family conflict, parenting challenges, and struggles related to pornography. My approach is warm, practical, and grounded in an understanding of how past experiences, family relationships, and generational patterns influence our present.',
    ],
    'sierra-fair' => [
        'name' => 'Sierra Fair', 'creds' => 'LSCSW', 'lane' => 'therapist',
        'role' => 'Licensed Specialist Clinical Social Worker', 'format' => 'Telehealth only',
        'photo' => 'sierra-fair.jpg', 'pos' => '50% 20%',
        'focus' => ['Adolescents & adults', 'Trauma', 'Infertility', 'Postpartum'],
        'conditions' => ['trauma', 'womens', 'depression', 'anxiety'],
        'bio' => 'Sierra offers a compassionate, down-to-earth approach to therapy for adolescents and adults, and has a special heart for supporting women through infertility, postpartum struggles, and the complex emotions that often accompany these seasons.',
    ],
    'christina-wankum' => [
        'name' => 'Christina Wankum', 'creds' => 'LMFT', 'lane' => 'therapist',
        'role' => 'Licensed Marriage & Family Therapist', 'format' => 'In-person & telehealth',
        'photo' => 'christina-wankum.jpg', 'pos' => '50% 30%',
        'focus' => ['ADHD', 'Families', 'Person-centered care'],
        'conditions' => ['adhd', 'relationships', 'child'],
        'bio' => 'I’m Christina, a Licensed Marriage and Family Therapist, driven by a genuine love for people and a desire to help others feel seen, heard, and valued. My practice is focused on person-centered and collaborative care.',
    ],
    'sid-mead' => [
        'name' => 'Sid Mead', 'creds' => 'LCMFT', 'lane' => 'therapist',
        'role' => 'Licensed Clinical Marriage & Family Therapist', 'format' => 'In-person',
        'photo' => 'sid-mead.jpg', 'pos' => '50% 30%',
        'focus' => ['Adults & couples', 'Veterans', 'EMDR trained'],
        'conditions' => ['relationships', 'trauma'],
        'bio' => 'My primary focus is on helping adults and couples on the road of life. I’m retired from US Military, conflict tolerant, and EMDR trained. If you have slices of your life that don’t fit well, call and let’s do some work together.',
    ],
    'barb-meyer' => [
        'name' => 'Barb Meyer', 'creds' => 'LSCSW', 'lane' => 'therapist',
        'role' => 'Licensed Specialist Clinical Social Worker', 'format' => 'In-person & telehealth',
        'photo' => 'barb-meyer.jpg', 'pos' => '50% 30%',
        'focus' => ['All ages', 'Anxiety & depression', 'School & ADHD', 'Trauma-informed'],
        'conditions' => ['anxiety', 'depression', 'adhd', 'trauma', 'child'],
        'bio' => 'I have a specific interest in helping people overcome feelings of anxiety and depression. I enjoy helping young people overcome school-related issues including ADHD, and helping parents learn new skills to support their children is important to me.',
    ],
    'chuck-edwards' => [
        'name' => 'Chuck Edwards', 'creds' => 'LPC', 'lane' => 'therapist',
        'role' => 'Licensed Professional Counselor', 'format' => 'In-person & telehealth',
        'photo' => 'chuck-edwards.jpg', 'pos' => '50% 20%',
        'focus' => ['Trauma', 'Addiction', 'Couples (Gottman)', 'Emotional regulation'],
        'conditions' => ['trauma', 'addiction', 'depression', 'anxiety', 'relationships'],
        'bio' => 'I am a skilled professional counselor specializing in trauma, addiction, personality disorders, depression, and anxiety — as well as parenting issues, emotional regulation, personal and spiritual growth, conflict resolution, and broken relationships.',
    ],
    'katlynn-miller' => [
        'name' => 'Katlynn Miller', 'creds' => 'LPC', 'lane' => 'therapist',
        'role' => 'Licensed Professional Counselor', 'format' => 'In-person & telehealth',
        'photo' => 'katlynn-miller.jpg', 'pos' => '50% 30%',
        'focus' => ['Trauma & grief', 'Depression & anxiety', 'ADHD & bipolar', 'Couples'],
        'conditions' => ['trauma', 'depression', 'anxiety', 'grief', 'adhd', 'bipolar', 'relationships'],
        'bio' => 'I strive to create a warm, nonjudgmental space where clients feel seen, heard, and empowered. I work with individuals navigating trauma, depression, anxiety, grief, ADHD, and bipolar disorder, and support couples seeking to rebuild trust or deepen their connection.',
    ],
    'lucas-shryock' => [
        'name' => 'Lucas Shryock', 'creds' => 'LPC', 'lane' => 'therapist',
        'role' => 'Licensed Professional Counselor', 'format' => 'In-person & telehealth',
        'photo' => 'lucas-shryock.jpg', 'pos' => '50% 20%',
        'focus' => ['Relationships', 'Substance use', 'Men’s recovery', 'CBT & narrative therapy'],
        'conditions' => ['addiction', 'relationships'],
        'bio' => 'Relationships, rupture, repair. I believe that relationships do not have to live in brokenness; there can be healing in all of our stories. I have a strong passion for working with people who are addicted to alcohol and other substances.',
    ],
    'jeremiah-coon' => [
        'name' => 'Jeremiah Coon', 'creds' => 'LPC', 'lane' => 'therapist',
        'role' => 'Licensed Professional Counselor', 'format' => 'In-person & telehealth',
        'photo' => 'jeremiah-coon.jpg', 'pos' => '50% 30%',
        'focus' => ['Youth & adults', 'Families', 'Autism spectrum experience'],
        'conditions' => ['child', 'relationships', 'anxiety'],
        'bio' => 'I enjoy working with both youth and adults, and spent two and a half years working with children and adolescents diagnosed with ASD. I was born and raised in Wichita and love my city. My goal is to help you run your race no matter where you find yourself in life.',
    ],
    'grace-henderson' => [
        'name' => 'Grace Henderson', 'creds' => 'LPC', 'lane' => 'therapist',
        'role' => 'Licensed Professional Counselor', 'format' => 'In-person & telehealth',
        'photo' => 'grace-henderson.jpg', 'pos' => '50% 25%',
        'focus' => ['Adults', 'Anxiety & overthinking', 'Stress & burnout', 'Life transitions'],
        'conditions' => ['anxiety', 'stress', 'grief', 'relationships'],
        'bio' => 'Grace believes counseling should feel like a space where clients can be fully themselves without judgment, pressure, or the expectation that they need to have everything figured out. Her areas of interest include anxiety and overthinking, stress and burnout, self-esteem, grief, and major life transitions.',
    ],
    'katrina-amrine' => [
        'name' => 'Katrina Amrine', 'creds' => '', 'lane' => 'intern',
        'role' => 'Professional Counselor Intern', 'format' => '',
        'photo' => 'katrina-amrine.jpg', 'pos' => '50% 30%',
        'focus' => [], 'conditions' => [], 'bio' => '',
        'bio_url' => '/staff/counselor-intern-wichita-ks-katrina-amrine/',
    ],
    'honora-cummings' => [
        'name' => 'Honora Cummings', 'creds' => '', 'lane' => 'intern',
        'role' => 'Professional Counselor Intern', 'format' => '',
        'photo' => 'honora-cummings.jpg', 'pos' => '50% 30%',
        'focus' => [], 'conditions' => [], 'bio' => '',
    ],
    'cari-smothermon' => [
        'name' => 'Cari Smothermon', 'creds' => 'RN, BSN', 'lane' => 'office',
        'role' => 'Co-founder · Operations', 'format' => '',
        'photo' => 'cari-smothermon.jpg', 'pos' => '50% 20%',
        'focus' => ['Registered nurse', 'Day-to-day operations'], 'conditions' => [],
        'bio' => 'Cari oversees the day-to-day operations of the office and makes sure our team has everything they need to best serve you. She is a registered nurse with over a decade of experience in women’s health.',
    ],
    'judy-smothermon' => [
        'name' => 'Judy Smothermon', 'creds' => '', 'lane' => 'office',
        'role' => 'Office Administrator', 'format' => '',
        'photo' => 'judy-smothermon.jpg', 'pos' => '50% 20%',
        'focus' => [], 'conditions' => [],
        'bio' => 'Judy is known for her contagious smile and naturally hospitable spirit. She will happily greet you and help you get settled in for your appointment at ANew.',
    ],
    'denise-maier' => [
        'name' => 'Denise Maier', 'creds' => '', 'lane' => 'office',
        'role' => 'Biller & Office Administrator', 'format' => '',
        'photo' => 'denise-maier.jpg', 'pos' => '50% 20%',
        'focus' => [], 'conditions' => [],
        'bio' => 'Denise has experience and knowledge in customer service, billing, and medical insurance, and strives to make every encounter with clients memorable — with their best interest as a priority.',
    ],
    'laurie-pelham' => [
        'name' => 'Laurie Pelham', 'creds' => '', 'lane' => 'office',
        'role' => 'Office Administrator', 'format' => '',
        'photo' => 'laurie-pelham.jpg', 'pos' => '50% 20%',
        'focus' => [], 'conditions' => [],
        'bio' => 'Laurie brings a balance of professionalism and fun to the front office, and works hard to create a safe and inviting atmosphere within ANew.',
    ],
];

/* Shown on the homepage; everyone else lives on the dedicated team page. */
$featured_team = ['wes-smothermon', 'ashley-ludlum', 'katlynn-miller', 'chuck-edwards'];

/*
 * Conditions. Each one becomes its own page at /conditions/{slug}/ and connects
 * to services and providers. `tms` flags where TMS can be introduced naturally.
 */
$conditions = [
    'anxiety' => [
        'name' => 'Anxiety', 'tone' => 'sky',
        'blurb' => 'Constant worry, racing thoughts, a tight chest that won’t settle. Anxiety is common — and very treatable.',
        'services' => ['therapy', 'medication'],
    ],
    'depression' => [
        'name' => 'Depression & Mood', 'tone' => 'clay', 'tms' => true,
        'blurb' => 'When the color drains out of things you used to love, or the heaviness just won’t lift.',
        'services' => ['therapy', 'medication', 'tms'],
    ],
    'adhd' => [
        'name' => 'ADHD', 'tone' => 'leaf',
        'blurb' => 'Focus, follow-through and restlessness — for kids, teens and adults, starting with a real assessment.',
        'services' => ['adhd-assessment', 'medication', 'therapy'],
    ],
    'trauma' => [
        'name' => 'Trauma & PTSD', 'tone' => 'prairie',
        'blurb' => 'Painful memories don’t have to keep running the show. Healing is possible, at your pace.',
        'services' => ['emdr', 'therapy'],
    ],
    'grief' => [
        'name' => 'Grief & Loss', 'tone' => 'sand',
        'blurb' => 'Loss reshapes everything. You don’t have to carry it alone or “move on” on anyone’s timeline.',
        'services' => ['therapy'],
    ],
    'bipolar' => [
        'name' => 'Bipolar Disorder', 'tone' => 'sky',
        'blurb' => 'Steadier days through thoughtful medication care and therapy that work together.',
        'services' => ['medication', 'therapy'],
    ],
    'ocd' => [
        'name' => 'OCD', 'tone' => 'clay',
        'blurb' => 'Intrusive thoughts and rituals that take up more of your day than you want them to.',
        'services' => ['therapy', 'medication'],
    ],
    'stress' => [
        'name' => 'Stress & Burnout', 'tone' => 'leaf',
        'blurb' => 'Running on empty at work or home. Learn to manage stress before it manages you.',
        'services' => ['therapy'],
    ],
    'child' => [
        'name' => 'Children & Teens', 'tone' => 'sand',
        'blurb' => 'Behavior, school struggles, big feelings. Care for kids and the families who love them — including play therapy.',
        'services' => ['play-therapy', 'therapy', 'adhd-assessment'],
    ],
    'relationships' => [
        'name' => 'Relationships & Family', 'tone' => 'prairie',
        'blurb' => 'Couples, parenting and family conflict. Rupture can become repair.',
        'services' => ['therapy'],
    ],
    'addiction' => [
        'name' => 'Addiction & Recovery', 'tone' => 'clay',
        'blurb' => 'Substances, pornography and habits that have taken hold — met with grace, not judgment.',
        'services' => ['therapy'],
    ],
    'womens' => [
        'name' => 'Women’s & Perinatal', 'tone' => 'sky',
        'blurb' => 'Infertility, pregnancy, postpartum and infant loss — care for the seasons that change everything.',
        'services' => ['medication', 'therapy'],
    ],
];

/* "Find your next step" — plain-language starting points mapped to conditions. */
$symptoms = [
    'sleep'        => ['label' => 'Trouble sleeping',                 'conditions' => ['anxiety', 'depression', 'trauma', 'stress']],
    'interest'     => ['label' => 'Loss of interest',                 'conditions' => ['depression']],
    'low-mood'     => ['label' => 'Persistent low mood',              'conditions' => ['depression', 'grief', 'bipolar']],
    'focus'        => ['label' => 'Trouble concentrating',            'conditions' => ['adhd', 'anxiety', 'depression']],
    'appetite'     => ['label' => 'Appetite changes',                 'conditions' => ['depression', 'anxiety', 'stress']],
    'worry'        => ['label' => 'Constant worry',                   'conditions' => ['anxiety', 'ocd', 'stress']],
    'intrusive'    => ['label' => 'Unwanted, repeating thoughts',     'conditions' => ['ocd', 'trauma', 'anxiety']],
    'memories'     => ['label' => 'Painful memories or flashbacks',   'conditions' => ['trauma']],
    'swings'       => ['label' => 'Big mood swings',                  'conditions' => ['bipolar', 'depression']],
    'overwhelmed'  => ['label' => 'Overwhelmed or burned out',        'conditions' => ['stress', 'anxiety', 'depression']],
    'loss'         => ['label' => 'Grieving a loss',                  'conditions' => ['grief', 'womens']],
    'child'        => ['label' => 'My child is struggling',           'conditions' => ['child', 'adhd', 'anxiety']],
    'relationship' => ['label' => 'Strain in my relationships',       'conditions' => ['relationships']],
    'habits'       => ['label' => 'A habit or substance I can’t stop', 'conditions' => ['addiction']],
    'pregnancy'    => ['label' => 'Pregnancy or postpartum changes',  'conditions' => ['womens', 'depression', 'anxiety']],
];

$insurances = [
    'Aetna', 'Ambetter', 'Blue Cross Blue Shield', 'Cigna', 'Healthy Blue',
    'Sunflower Health Plan', 'TriWest', 'UMR', 'UnitedHealthcare',
    'United Healthcare Community Plan · KanCare',
];

/* Only add genuine, permission-cleared reviews. Section hides while empty. */
$reviews = [
    // ['quote' => '…', 'author' => 'First name or initials', 'source' => 'Google'],
];

/* YouTube IDs for future provider intros / TMS FAQs. Section hides while empty. */
$videos = [
    // ['youtube_id' => 'XXXXXXXXXXX', 'title' => 'Meet Ashley Ludlum, APRN'],
];
