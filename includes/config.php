<?php
/**
 * ANew Mental Health Wichita — site data.
 *
 * Everything the homepage renders lives here so copy, links and people can be
 * updated without touching markup. Bios and contact details are taken from the
 * existing anewwichita.com site.
 */

if (!function_exists('e')) {
    function e(?string $value): string
    {
        return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
    }
}

$site = [
    'name'        => 'ANew Mental Health',
    'short_name'  => 'ANew',
    'tagline'     => 'We exist because people matter',
    'url'         => 'https://anewwichita.com',
    'phone'       => '(316) 260-3777',
    'phone_href'  => 'tel:+13162603777',
    'fax'         => '(316) 260-9382',
    'email'       => 'info@anewwichita.com',
    'street'      => '8080 E Central Ave, Suite 190',
    'city'        => 'Wichita',
    'region'      => 'KS',
    'postal'      => '67206',
    'maps_url'    => 'https://maps.app.goo.gl/MpxK3Lavx2o7wDvFA',
    // Existing SimplePractice inquiry — keep this workflow (feeds the EHR directly).
    // Swap for the updated URL once Wesley adds TMS as an inquiry option.
    'schedule_url' => 'https://anewwichita.clientsecure.me/contact-widget',
    // One client portal (SimplePractice). The old AdvancedMD medication portal is no longer used.
    'portal_client' => 'https://anewwichita.clientsecure.me',
    'referral_url' => '/professional-referral-form/',
    // Where the professional referral form posts. Referrals include patient health info, so this must be
    // a HIPAA-compliant form endpoint covered by a BAA (e.g. Jotform HIPAA, Paperform, Formstack). While
    // it's empty the form renders but submission is disabled and referrers are pointed to fax/phone.
    'referral_form_action' => '',
    'carecredit_url' => 'https://www.carecredit.com/go/823HFQ/?dtc=DS5X&sitecode=CCCABDS5X',
    'facebook'    => 'https://www.facebook.com/ANew.ICT',
    'instagram'   => 'https://www.instagram.com/anew.ict/',
];

/* Optional: drop in an mp4/webm of the Flint Hills (moving grass, clouds, sunset)
   and the hero switches from photo to looping video automatically. */
// Pexels "Walking in the Field" by Marian Croitoru (free Pexels License), trimmed to 20s at 720p.
$hero_video = '/assets/video/hero-wheat-field.mp4';
$hero_image = '/assets/images/scenery/hero-wheat-field.jpg'; // first frame of the video: poster + fallback

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
        'url'  => '/play-therapy/',
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
        'insurance' => ['aetna', 'bcbs', 'tricare', 'united'], 'insurance_soon' => [],
        'name' => 'Ashley Ludlum', 'creds' => 'APRN, PMHNP-BC', 'lane' => 'medication',
        'role' => 'Psychiatric Mental Health Nurse Practitioner', 'format' => 'In-person & telehealth',
        'photo' => 'ashley-ludlum.jpg', 'pos' => '50% 25%',
        'focus' => ['Medication management', 'Women’s mental health', 'Pregnancy & postpartum', 'Infertility & infant loss'],
        'conditions' => ['depression', 'anxiety', 'bipolar', 'adhd', 'womens', 'ocd', 'child'],
        'bio' => implode("\n\n", [ // full bio from anewwichita.com
            'In 2010, I graduated from Hesston College as a Registered Nurse. I began my nursing career in High Risk OB and GYN, in a hospital setting. I have also worked in surgical services and in research. It was during my time in research that I found my passion for mental health and made the decision to pursue a career in the field. I took a position at Psychiatric Consultants of Wichita working as a nurse, scribe, and Spravato Coordinator while pursuing a bachelor’s degree and eventually a master’s degree. I graduated from Walden University in 2022 as a Psychiatric Mental Health Nurse Practitioner and I continued working at PCW in this new role.',
            'I’m very excited to grow in my career at ANew and continue to serve my community. I have passion for all areas of mental health, especially women’s health. I have a heart for helping women navigate and manage their medications before, during, and after pregnancy, infertility, or infant loss.',
            'I’m married with two children, who keep us busy with sports and school activities. In my spare time, I enjoy reading, crafting, and spending time with my family.',
        ]),
    ],
    'irene-keny' => [
        // TODO: confirm insurance panels and visit format with ANew.
        'insurance' => [], 'insurance_soon' => [],
        'name' => 'Irene Keny', 'creds' => 'APRN, PMHNP-BC', 'lane' => 'medication',
        'role' => 'Psychiatric Mental Health Nurse Practitioner', 'format' => '',
        'photo' => 'irene.jpg', 'pos' => '50% 20%',
        'focus' => ['Medication management', 'Teens & adults', 'Veterans', 'PTSD & trauma'],
        'conditions' => ['trauma', 'depression', 'anxiety'],
        'bio' => "I am a Board-Certified Psychiatric-Mental Health Nurse Practitioner (PMHNP-BC), Army veteran, and registered nurse with 14 years of experience in behavioral health, acute care, and critical care. I earned my bachelor’s degree from Mid-America Nazarene University in 2012 and proudly served seven years on active duty in the U.S. Army before transitioning to the Army Reserve in 2022. My passion for mental health care led me to earn my Master of Science in Nursing with a specialization in Psychiatric-Mental Health Nurse Practitioner from Walden University in August 2025.\n\n"
            . "I am excited to join ANew and provide compassionate, evidence-based mental health care to our community. I am especially passionate about supporting teens and adults facing mental health challenges, including veterans navigating PTSD and trauma. My approach is collaborative and trauma-informed, focusing on each person’s unique needs and goals to promote healing, well-being, and recovery.\n\n"
            . "I am married and blessed with two wonderful boys. Outside of work, I enjoy cheering our kids on in soccer, exploring nature trails, and going on family bike rides.\n\n"
            . "I look forward to building meaningful connections with my patients and partnering with individuals and families to support better mental health and an improved quality of life.",
    ],
    'wes-smothermon' => [
        'ages' => 'Works with teens & adults', // shown on provider cards so parents know who sees children
        'insurance' => ['aetna', 'bcbs', 'tricare', 'united'], 'insurance_soon' => [],
        'name' => 'Wes Smothermon', 'creds' => 'LCMFT', 'lane' => 'therapist',
        'role' => 'Co-founder · Licensed Clinical Marriage & Family Therapist', 'format' => 'In-person & telehealth',
        'photo' => 'wes-smothermon.jpg', 'pos' => '50% 20%',
        'focus' => ['Adolescents & families', 'Couples', 'Anxiety & trauma', 'Parenting'],
        'conditions' => ['anxiety', 'trauma', 'relationships', 'child', 'addiction', 'adhd', 'stress', 'bipolar', 'grief'],
        'bio' => implode("\n\n", [ // full bio from anewwichita.com
            'I believe that our life experiences, relationships, and environments profoundly shape who we are and how we respond to the world around us. The patterns we develop often begin as ways of coping, protecting ourselves, or finding connection. Although those patterns may eventually leave us feeling stuck, they do not have to define our future.',
            'Before becoming a therapist, I served in youth ministry, where I developed a passion for supporting teenagers and their families through difficult seasons. Today, I work with adolescents, adults, couples, and families experiencing anxiety, trauma, relationship difficulties, family conflict, parenting challenges, and struggles related to pornography.',
            'My approach is warm, practical, and grounded in an understanding of how past experiences, family relationships, and generational patterns influence our present thoughts, emotions, and behaviors. I use humor when appropriate and seek to create an environment where clients feel comfortable being honest about what they are experiencing. Together, we work to understand how problems developed, identify the patterns keeping them in place, and develop healthier ways of responding.',
            'My Christian faith is central to who I am and how I view people. I believe every person has inherent value, that grace creates room for change, and that healing involves caring for both our emotional and spiritual lives. For clients who desire it, I welcome the opportunity to integrate Christian faith and biblical principles into the counseling process.',
            'I am a Licensed Clinical Marriage and Family Therapist and am trained in EMDR. Whether you are working through trauma, feeling overwhelmed by anxiety, struggling in your relationships, or trying to break a pattern that has taken control of your life, my goal is to help you better understand your story and move forward with greater freedom, connection, and hope.',
        ]),
    ],
    'sierra-fair' => [
        'ages' => 'Works with teens & adults', // shown on provider cards so parents know who sees children
        'insurance' => ['aetna', 'ambetter', 'bcbs', 'healthyblue', 'sunflower', 'united', 'uhc-kancare'], 'insurance_soon' => [],
        'name' => 'Sierra Fair', 'creds' => 'LSCSW', 'lane' => 'therapist',
        'role' => 'Licensed Specialist Clinical Social Worker', 'format' => 'Telehealth only',
        'photo' => 'sierra-fair.jpg', 'pos' => '50% 20%',
        'focus' => ['Adolescents & adults', 'Trauma', 'Infertility', 'Postpartum'],
        'conditions' => ['trauma', 'womens', 'depression', 'anxiety', 'bipolar', 'grief'],
        'bio' => implode("\n\n", [ // full bio from anewwichita.com
            'Sierra Fair is a Licensed Specialist Clinical Social Worker who offers a compassionate, down-to-earth approach to therapy for adolescents and adults. She holds a Bachelor’s degree in Counseling from Southwestern Assemblies of God University (2017) and a Master’s in Social Work from Newman University (2021).',
            'Sierra has worked with clients facing some of life’s most difficult moments—including families in crisis, teens who have experienced abuse and trauma, and survivors of human trafficking. Sierra has a special heart for supporting women through infertility, postpartum struggles, and the complex emotions that often accompany these seasons.',
            'She tailors her approach to each person she works with, using a variety of therapeutic tools to meet clients where they are and help them feel seen, supported, and empowered in their healing journey.',
            'When she’s not in session, Sierra loves working on puzzles, sipping coffee while reading a good book, and enjoying the outdoors with her husband and son.',
        ]),
    ],
    'christina-orrison' => [
        'ages' => 'Works with kids & teens', // shown on provider cards so parents know who sees children
        'insurance' => ['aetna', 'ambetter', 'bcbs', 'healthyblue', 'sunflower', 'uhc-kancare'], 'insurance_soon' => [],
        'name' => 'Christina Orrison', 'creds' => 'LMFT', 'lane' => 'therapist',
        'role' => 'Licensed Marriage & Family Therapist', 'format' => 'In-person & telehealth',
        'photo' => 'christina-wankum.jpg', 'pos' => '50% 30%',
        'focus' => ['ADHD', 'Families', 'Person-centered care'],
        'conditions' => ['adhd', 'relationships', 'child', 'grief'],
        'bio' => implode("\n\n", [ // full bio from anewwichita.com
            'Welcome! I’m Christina, a Licensed Marriage and Family Therapist, driven by a genuine love for people and a desire to help others feel seen, heard, and valued. My therapy practice isfocused on person-centered and collaborative care, emphasizing the power of listening withcuriosity and creating a safe, supportive environment for my clients and their families.Through my own journey of understanding the effects and systems that set my ADHD brain upfor success, I have integrated these insights into my practice. I particularly enjoy working withchildren of all ages and their parents, helping them build systems that foster self-confidence andsuccess. My passion is working specifically with neurodivergence (ADHD/ASD) with childrenand within couple systems and addressing the trauma that often accompanies these diagnoses.Additionally, I am pursuing certification in play therapy to better support children and theirfamilies.',
            'I have experience working with individuals of all ages, telehealth with those in rural communities, families, and couples. I believe that every person possesses the tools needed tosucceed, and my goal is to foster that growth through an emotionally safe therapeuticrelationship.',
        ]),
    ],
    'sid-mead' => [
        'insurance' => ['aetna', 'bcbs', 'tricare'], 'insurance_soon' => [],
        'name' => 'Sid Mead', 'creds' => 'LCMFT', 'lane' => 'therapist',
        'role' => 'Licensed Clinical Marriage & Family Therapist', 'format' => 'In-person',
        'photo' => 'sid-mead.jpg', 'pos' => '50% 30%',
        'focus' => ['Adults & couples', 'Veterans', 'EMDR trained'],
        'conditions' => ['relationships', 'trauma'],
        'bio' => implode("\n\n", [ // full bio from anewwichita.com
            'I embarked on this second career 20 years ago, graduating from Friends University with a master’s in Marriage and Family Therapy. I’ve been licensed at the clinical level since 2007. My primary focus is on helping adults and couples on the road of life. I’m retired from US Military, conflict tolerant, EMDR trained, and cordite exposure. I am Christian, and a member of Focus on the Family network of counselors. I reside in west Wichita with my bride of 50+ years. If you have slices of your life that don’t fit well, call and let’s do some work together.',
        ]),
    ],
    'barb-meyer' => [
        'ages' => 'Works with kids & teens', // shown on provider cards so parents know who sees children
        'insurance' => ['aetna', 'ambetter', 'bcbs', 'healthyblue', 'sunflower', 'tricare', 'united', 'uhc-kancare'], 'insurance_soon' => [],
        'name' => 'Barb Meyer', 'creds' => 'LSCSW', 'lane' => 'therapist',
        'role' => 'Licensed Specialist Clinical Social Worker', 'format' => 'In-person & telehealth',
        'photo' => 'barb-meyer.jpg', 'pos' => '50% 30%',
        'focus' => ['All ages', 'Anxiety & depression', 'School & ADHD', 'Trauma-informed'],
        'conditions' => ['anxiety', 'depression', 'adhd', 'trauma', 'child', 'grief'],
        'bio' => implode("\n\n", [ // full bio from anewwichita.com
            'Barb is a master-level clinical social worker with experience in child welfare, schools, and crisis work. I enjoy working with clients of all ages to achieve their potential. I have a specific interest in helping people overcome feelings of anxiety and depression including suicide ideation. I enjoy helping young people overcome school-related issues including ADHD and various mental health issues. Helping parents learn new skills to support their children is important to me.',
            'Barb’s educational background includes a Bachelors in Social Work from Kansas State University and a Masters in Social Work from Kansas University. My training also includes trauma-informed practices.',
            'Barb is committed to helping people who experience trauma or severe life stressors. I have a passion to bring healing to people who have been through a traumatic/stressful experience. I help my clients who include children, young adults, and families to find healthy perceptions of themselves and strengthen their relationships so they can know themselves as peaceful, complete, and safe.',
        ]),
    ],
    'chuck-edwards' => [
        'ages' => 'Works with teens & adults', // shown on provider cards so parents know who sees children
        'insurance' => ['aetna', 'ambetter', 'bcbs', 'healthyblue', 'sunflower', 'uhc-kancare'], 'insurance_soon' => [],
        'name' => 'Chuck Edwards', 'creds' => 'LPC', 'lane' => 'therapist',
        'role' => 'Licensed Professional Counselor', 'format' => 'In-person & telehealth',
        'photo' => 'chuck-edwards.jpg', 'pos' => '50% 20%',
        'focus' => ['Trauma', 'Addiction', 'Couples (Gottman)', 'Emotional regulation'],
        'conditions' => ['trauma', 'addiction', 'depression', 'anxiety', 'relationships', 'adhd', 'stress', 'bipolar', 'child', 'grief', 'womens'],
        'bio' => implode("\n\n", [ // full bio from anewwichita.com
            'With a deep commitment to guiding individuals and families through life’s most difficult challenges. I am a skilled professional counselor specializing in trauma, addiction, personality disorders, depression, and anxiety. As well as parenting issues, emotional regulation issues, personal/spiritual growth, conflict resolution, work-related issues, and broken relationships.',
            'Over the past 15 years I’ve worked on my own root wounds and through those personal healing experiences I have learned to combine a compassionate, client-centered, emotionally focused approach with evidence-based methods to help clients uncover, understand, and heal the wounded parts of themselves. I draw on my expertise and experience to create a safe, relationship-based environment through exploring all of the parts that make up a person.',
            'I am a certified NeuroChange Specialist. I’m also trained in Symbis (premarital) assessments and have completed Level 1 & Level 2 training of Gottman Method Couples Therapy. No matter what skill or tool I use, my goal is to create a safe, grace-filled, and nonjudgmental space. Wherein individuals, couples, and families can move toward healing, growth, and transformation.',
            'Whether guiding someone through recovery, helping a couple rebuild trust, or supporting individuals in reclaiming their sense of self, I am dedicated to fostering lasting change and emotional well-being. For those seeking hope and restoration, I offer a path to deeper understanding, healthier relationships, and renewed purpose.',
        ]),
    ],
    'katlynn-miller' => [
        'ages' => 'Works with teens & adults', // shown on provider cards so parents know who sees children
        'insurance' => ['aetna', 'ambetter', 'bcbs', 'healthyblue', 'sunflower', 'uhc-kancare'], 'insurance_soon' => [],
        'name' => 'Katlynn Miller', 'creds' => 'LPC', 'lane' => 'therapist',
        'role' => 'Licensed Professional Counselor', 'format' => 'In-person & telehealth',
        'photo' => 'katlynn-miller.jpg', 'pos' => '50% 30%',
        'focus' => ['Trauma & grief', 'Depression & anxiety', 'ADHD & bipolar', 'Couples'],
        'conditions' => ['trauma', 'depression', 'anxiety', 'grief', 'adhd', 'bipolar', 'relationships', 'ocd', 'stress', 'child'],
        'bio' => implode("\n\n", [ // full bio from anewwichita.com
            'As a counselor, I strive to create a warm, nonjudgmental space where clients feel seen, heard, and empowered. My approach is rooted in person-centered therapy, emphasizing empathy, authenticity, and respect for each individual’s journey. While I primarily draw from person-centered modalities, I tailor each treatment plan to meet the unique needs and goals of my clients.',
            'I work with individuals navigating a wide range of concerns, including trauma, depression, anxiety, grief, ADHD, and bipolar disorder. I also support couples seeking to improve communication, rebuild trust, or deepen their connection. My goal is to walk alongside you as we explore the patterns, emotions, and experiences that shape your life, and collaboratively work toward healing and growth.',
            'I earned my master’s degree in Clinical Mental Health Counseling from Wichita State University. It is where I received training in evidence-based practices and developed a passion for supporting clients through life’s challenges.',
            'Outside of the therapy room, you can find me spending time with my family and friends or at the gym recharging both mentally and physically.',
        ]),
    ],
    'lucas-shryock' => [
        'insurance' => ['aetna', 'ambetter', 'bcbs', 'sunflower'], 'insurance_soon' => ['healthyblue'],
        'name' => 'Lucas Shryock', 'creds' => 'LPC', 'lane' => 'therapist',
        'role' => 'Licensed Professional Counselor', 'format' => 'In-person & telehealth',
        'photo' => 'lucas-shryock.jpg', 'pos' => '50% 20%',
        'focus' => ['Relationships', 'Substance use', 'Men’s recovery', 'CBT & narrative therapy'],
        'conditions' => ['addiction', 'relationships', 'stress'],
        'bio' => implode("\n\n", [ // full bio from anewwichita.com
            'Relationships, rupture, repair. A commonality that all humans have is a desire for connection in relationships. Sadly, however, everybody knows what it is like to experience rupture throughout different relationships. Though, through hard work and intentionality, I believe that relationships do not have to live in brokenness; but instead, there can be healing in all of our stories.',
            'My name is Lucas Shryock and I am a graduate of Emporia State University. As a former youth pastor, I have been able to experience the sweet joy of walking with people in their stories and seeking healing and restoration so that they could become emotionally healthy people.',
            'As an LPC, I have a strong passion for walking with married men who are struggling with pornography and sex addictions. I also have a strong passion for working with people who are addicted to alcohol and other substances. I will work hard to walk with you in your story by implementing different techniques such as CBT, narrative therapy, solutions focused therapy and other modalities. I’m excited to strive towards healing with you in our time in therapy',
        ]),
    ],
    'jeremiah-coon' => [
        'ages' => 'Works with kids & teens', // shown on provider cards so parents know who sees children
        'insurance' => ['aetna', 'ambetter', 'bcbs', 'sunflower', 'uhc-kancare'], 'insurance_soon' => ['healthyblue'],
        'name' => 'Jeremiah Coon', 'creds' => 'LPC', 'lane' => 'therapist',
        'role' => 'Licensed Professional Counselor', 'format' => 'In-person & telehealth',
        'photo' => 'jeremiah-coon.jpg', 'pos' => '50% 30%',
        'focus' => ['Youth & adults', 'Families', 'Autism spectrum experience'],
        'conditions' => ['child', 'relationships', 'anxiety', 'adhd', 'stress'],
        'bio' => implode("\n\n", [ // full bio from anewwichita.com
            'We are all running a race. Whether we are pacing ourselves too fast, too slow, or just right, we are all moving towards a goal. Over the course of my race, I have had the opportunity to work with many youths and adults in ministry and clinical settings. In 2021, I graduated with my bachelor’s from Ozark Christian College and kept my educational race going by attending Liberty University to obtain my master’s in Clinical Mental Health Counseling.',
            'I enjoy working with both youth and adults. I’ve learned my passion for helping youth in ministry settings. I’ve furthered this passion by spending two and a half years working with children and adolescents diagnosed with ASD. I currently work with families as an MST therapist. And also help parents eliminate the risk of their children being removed from their houses. My goal is to help you run your race no matter where you find yourself in life. I’d be honored to run the race alongside you.',
            'I was born and raised in Wichita and love my city. I enjoy triathlons, playing any sport on a field, and camping. I’m also finding every excuse to go to Colorado or Arkansas to rock climb, snowboard, mountain bike, or hike tall mountains. When I’m not running around for fun I love spending time with my family and friends around a fire pit if possible.',
        ]),
    ],
    'grace-henderson' => [
        'insurance' => [], 'insurance_soon' => ['aetna', 'ambetter', 'bcbs', 'healthyblue', 'sunflower', 'uhc-kancare'],
        'name' => 'Grace Henderson', 'creds' => 'LPC', 'lane' => 'therapist',
        'role' => 'Licensed Professional Counselor', 'format' => 'In-person & telehealth',
        'photo' => 'grace-henderson.jpg', 'pos' => '50% 25%',
        'focus' => ['Adults', 'Anxiety & overthinking', 'Stress & burnout', 'Life transitions'],
        'conditions' => ['anxiety', 'stress', 'grief', 'relationships', 'bipolar'],
        'bio' => implode("\n\n", [ // full bio from anewwichita.com
            'Grace believes counseling should feel like a space where clients can be fully themselves without judgment, pressure, or the expectation that they need to have everything figured out. She strives to create a warm, genuine, and collaborative relationship in which clients feel heard, supported, and empowered to make changes that are meaningful to them.',
            'Grace works with adults across all stages of life. Her areas of interest include anxiety and overthinking, stress and burnout, self-esteem, relationship concerns, grief and loss, boundary setting, perfectionism, people-pleasing, and major life transitions. She welcomes clients from a variety of backgrounds and enjoys helping individuals better understand themselves, recognize their strengths, and create meaningful change in their lives.Grace uses an integrative approach, drawing from a variety of counseling practices based on each client’s individual needs, experiences, and goals. Her work is grounded in a warm, person-centered relationship while remaining solution-focused and goal-oriented. She helps clients explore the thoughts, emotions, and patterns influencing their lives while also identifying practical and realistic steps they can take to move forward. Her counseling style is down-to-earth, compassionate, and collaborative, with space for both meaningful reflection and genuine conversation.Grace earned her Master of Education in Clinical Mental Health Counseling from Wichita State University and is a Licensed Professional Counselor in Kansas. Originally from Wyoming, Grace now calls Wichita home. Outside of counseling, she e',
        ]),
    ],
    'katrina-amrine' => [
        'name' => 'Katrina Amrine', 'creds' => '', 'lane' => 'intern',
        'role' => 'Professional Counselor Intern', 'format' => 'In-person & telehealth',
        'photo' => 'katrina-amrine.jpg', 'pos' => '50% 30%',
        'self_pay' => '$30 per session',
        'focus' => ['Anxiety', 'OCD', 'Trauma & PTSD', 'Church hurt'],
        'conditions' => ['anxiety', 'ocd', 'trauma'],
        'bio' => "There is nothing more disconcerting than feeling unsafe inside your own mind, misunderstood, and without direction. This is why I’m compelled to be here.\n\n"
            . "I’m here to work with you and for you, because I want to be here. I find joy in this space! This is my purpose. As an intern counselor I work with individuals experiencing anxiety, OCD, trauma, PTSD, and those who have been hurt by the church. I also welcome individuals with a variety of other needs.\n\n"
            . "I’m a student and intern counselor with Liberty University in the Clinical Mental Health Counseling program working toward my Master’s degree and licensure to become a Licensed Professional Counselor. This is my path.\n\n"
            . "Student memberships: American Counseling Association (ACA) and American Association of Christian Counselors (AACC).\n\n"
            . "When I’m not at work, I enjoy long walks outside, weightlifting, and oil painting. My best days are days I’ve spent time with my family.",
        'bio_url' => '/staff/counselor-intern-wichita-ks-katrina-amrine/',
    ],
    'honora-cummings' => [
        'ages' => 'Works with kids & teens', // shown on provider cards so parents know who sees children
        'name' => 'Honora Cummings', 'creds' => '', 'lane' => 'intern',
        'role' => 'Professional Counselor Intern', 'format' => 'In-person & telehealth',
        'photo' => 'honora-cummings.jpg', 'pos' => '50% 25%',
        'self_pay' => '$30 per session',
        'focus' => ['Children & families', 'Emotional regulation', 'Behavioral concerns', 'Life transitions'],
        'conditions' => ['child', 'relationships', 'anxiety'],
        'bio' => "Hello! My name is Honora Cummings, and I am currently completing my Master’s degree in Clinical Mental Health Counseling (LPC track) at Wichita State University.\n\n"
            . "After graduation, I plan to pursue my Play Therapy certification through the Wichita State University Play Therapy Center. This will allow me to provide developmentally appropriate and evidence-based therapy for children and families.\n\n"
            . "I hold a Bachelor of Arts in Education (grades K–9) as well as a Bachelor of General Studies, both from Wichita State University. I have over 12 years of experience working directly with children in educational settings. I’ve supported students across a wide range of ages, developmental levels, and emotional needs. My background as a teacher has given me a strong foundation in child development, emotional regulation, classroom behavior, and collaboration with families.\n\n"
            . "Working with children has always been my passion. Over the years, I have supported children through academic challenges, emotional stress, behavioral concerns, and major life transitions. This experience has naturally led me into the field of mental health counseling. There, I can combine my educational background with therapeutic care to help children feel safe, understood, and empowered.\n\n"
            . "I have been married for 32 years and am the proud mother of three children. These experiences continue to shape my compassionate, family-centered approach to therapy. I am grateful for the opportunity to be part of the ANew Mental Health team and look forward to supporting children and families in their healing journey.",
    ],
    'cari-smothermon' => [
        'name' => 'Cari Smothermon', 'creds' => 'RN, BSN', 'lane' => 'office',
        'role' => 'Co-founder · Operations', 'format' => '',
        'photo' => 'cari-smothermon-portrait.jpg', 'pos' => '50% 25%',
        'focus' => ['Registered nurse', 'Day-to-day operations'], 'conditions' => [],
        'bio' => "At ANew, Cari oversees the day-to-day operations of the office and makes sure our team has everything they need to best serve you. Cari is a registered nurse with over a decade of experience in women’s health, specifically labor and delivery. It has always been her passion to go above and beyond to make every patient feel well cared for.\n\n"
            . "“I pride myself in caring for my patients like family. From the moment you arrive at ANew I want you to know that your experience will be different. Our friendly reception staff will treat you with kindness and helpfulness. Our home-like environment is intentional and is meant to be relaxed in and enjoyed. We are honored to be a part of your mental health journey and are looking forward to taking care of you.”\n\n"
            . "Cari’s first passion is loving on her family. She and her husband, Wes, have 2 children and a fur baby. She also enjoys baking, traveling, and finding new adventures around Wichita.",
    ],
    'judy-smothermon' => [
        'name' => 'Judy Smothermon', 'creds' => '', 'lane' => 'office',
        'role' => 'Office Administrator', 'format' => '',
        'photo' => 'judy-smothermon.jpg', 'pos' => '50% 20%',
        'focus' => [], 'conditions' => [],
        'bio' => "Judy is known for her contagious smile and naturally hospitable spirit. She will happily greet you and help you get settled in for your appointment at ANew. In addition to providing excellent customer service to our clients, Judy maintains our office financials and provides additional support to our team wherever she may be needed.\n\n"
            . "Judy has decades of experience in hospitality and looks forward to caring for you.\n\n"
            . "Judy resides with her husband and her teenage daughter. She has 3 other adult children and 8 grand babies. She loves cooking up feasts for her family and entertaining.",
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
        'image' => '/assets/images/people/anxiety.jpg',
        'name' => 'Anxiety', 'tone' => 'sky',
        'blurb' => 'Constant worry, racing thoughts, a tight chest that won’t settle. Anxiety is common — and very treatable.',
        'services' => ['therapy', 'medication'],
    ],
    'depression' => [
        'image' => '/assets/images/people/depression.jpg',
        'name' => 'Depression & Mood', 'tone' => 'clay', 'tms' => true,
        'blurb' => 'When the color drains out of things you used to love, or the heaviness just won’t lift.',
        'services' => ['therapy', 'medication', 'tms'],
    ],
    'adhd' => [
        'image' => '/assets/images/people/adhd.jpg',
        'name' => 'ADHD', 'tone' => 'leaf',
        'blurb' => 'Focus, follow-through and restlessness — for kids, teens and adults, starting with a real assessment.',
        'services' => ['adhd-assessment', 'medication', 'therapy'],
    ],
    'trauma' => [
        'image' => '/assets/images/people/trauma.jpg',
        'name' => 'Trauma & PTSD', 'tone' => 'prairie',
        'blurb' => 'Painful memories don’t have to keep running the show. Healing is possible, at your pace.',
        'services' => ['emdr', 'therapy'],
    ],
    'grief' => [
        'image' => '/assets/images/people/grief.jpg',
        'name' => 'Grief & Loss', 'tone' => 'sand',
        'blurb' => 'Loss reshapes everything. You don’t have to carry it alone or “move on” on anyone’s timeline.',
        'services' => ['therapy'],
    ],
    'bipolar' => [
        'image' => '/assets/images/people/bipolar.jpg',
        'name' => 'Bipolar Disorder', 'tone' => 'sky',
        'blurb' => 'Steadier days through thoughtful medication care and therapy that work together.',
        'services' => ['medication', 'therapy'],
    ],
    'ocd' => [
        'image' => '/assets/images/people/ocd.jpg',
        'name' => 'OCD', 'tone' => 'clay',
        'blurb' => 'Intrusive thoughts and rituals that take up more of your day than you want them to.',
        'services' => ['therapy', 'medication'],
    ],
    'stress' => [
        'image' => '/assets/images/people/stress.jpg',
        'name' => 'Stress & Burnout', 'tone' => 'leaf',
        'blurb' => 'Running on empty at work or home. Learn to manage stress before it manages you.',
        'services' => ['therapy'],
    ],
    'child' => [
        'image' => '/assets/images/people/child.jpg',
        'name' => 'Children & Teens', 'tone' => 'sand',
        'blurb' => 'Behavior, school struggles, big feelings. Care for kids and the families who love them — including play therapy.',
        'services' => ['play-therapy', 'therapy', 'adhd-assessment'],
    ],
    'relationships' => [
        'image' => '/assets/images/people/relationships.jpg',
        'name' => 'Relationships & Family', 'tone' => 'prairie',
        'blurb' => 'Couples, parenting and family conflict. Rupture can become repair.',
        'services' => ['therapy'],
    ],
    'addiction' => [
        'image' => '/assets/images/people/addiction.jpg',
        'name' => 'Addiction & Recovery', 'tone' => 'clay',
        'blurb' => 'Substances, pornography and habits that have taken hold — met with grace, not judgment.',
        'services' => ['therapy'],
    ],
    'womens' => [
        'image' => '/assets/images/people/womens.jpg',
        'name' => 'Women & Perinatal', 'tone' => 'sky',
        'blurb' => 'Infertility, pregnancy, postpartum and infant loss — care for the seasons that change everything.',
        'services' => ['medication', 'therapy'],
    ],
];

/* "Find your next step" — plain-language starting points mapped to conditions. */
/*
 * "Find your next step" experiences. `conditions` drives "This may be connected to";
 * `people` (team slugs, from ANew's own list) drives "People on our team who do this work" —
 * when omitted, people are matched through the conditions. `services` are shown first.
 */
$therapists  = array_keys(array_filter($team, fn ($p) => $p['lane'] === 'therapist'));
$broad_care  = array_merge($therapists, ['ashley-ludlum', 'irene-keny']);
$symptoms = [
    'sleep'        => ['label' => 'Trouble sleeping',                 'conditions' => ['anxiety', 'depression', 'trauma', 'stress'], 'people' => $broad_care],
    'interest'     => ['label' => 'Loss of interest',                 'conditions' => ['depression', 'adhd'], 'people' => $broad_care],
    'low-mood'     => ['label' => 'Persistent low mood',              'conditions' => ['depression', 'grief', 'bipolar'], 'people' => $broad_care],
    'focus'        => ['label' => 'Trouble concentrating',            'conditions' => ['adhd', 'anxiety', 'depression'], 'people' => ['lucas-shryock', 'wes-smothermon', 'jeremiah-coon', 'katlynn-miller', 'christina-orrison', 'ashley-ludlum', 'irene-keny']],
    'appetite'     => ['label' => 'Appetite changes',                 'conditions' => ['depression', 'anxiety', 'stress'], 'people' => $broad_care],
    'worry'        => ['label' => 'Constant worry',                   'conditions' => ['anxiety', 'ocd', 'stress'], 'people' => $broad_care],
    'intrusive'    => ['label' => 'Unwanted, repeating thoughts',     'conditions' => ['ocd', 'trauma', 'anxiety'], 'people' => ['katlynn-miller', 'wes-smothermon', 'ashley-ludlum', 'irene-keny']],
    'memories'     => ['label' => 'Painful memories or flashbacks',   'conditions' => ['trauma']],
    'swings'       => ['label' => 'Big mood swings',                  'conditions' => ['bipolar', 'depression'], 'people' => $broad_care],
    'overwhelmed'  => ['label' => 'Overwhelmed or burned out',        'conditions' => ['stress', 'anxiety', 'depression'], 'people' => $broad_care],
    'loss'         => ['label' => 'Grieving a loss',                  'conditions' => ['grief', 'womens'], 'people' => ['wes-smothermon', 'grace-henderson', 'sierra-fair', 'sid-mead', 'barb-meyer', 'chuck-edwards']],
    'child'        => ['label' => 'My child is struggling',           'conditions' => ['child', 'adhd', 'anxiety'], 'people' => ['jeremiah-coon', 'christina-orrison', 'barb-meyer', 'ashley-ludlum']],
    'relationship' => ['label' => 'Strain in my relationships',       'conditions' => ['relationships'], 'people' => ['chuck-edwards', 'sid-mead', 'grace-henderson', 'lucas-shryock']],
    'habits'       => ['label' => 'A habit or substance I can’t stop', 'conditions' => ['addiction']],
    'pregnancy'    => ['label' => 'Pregnancy or postpartum changes',  'conditions' => ['womens', 'depression', 'anxiety'], 'people' => ['ashley-ludlum', 'sierra-fair']],
    'medication'   => ['label' => 'Medication struggles',             'conditions' => ['depression', 'anxiety', 'adhd'], 'services' => ['medication', 'tms'], 'people' => ['ashley-ludlum', 'irene-keny']],
    'military'     => ['label' => 'Military transitions',             'conditions' => ['trauma', 'stress'], 'services' => ['therapy', 'emdr'], 'people' => ['wes-smothermon', 'sid-mead', 'irene-keny']],
];

$insurances = [
    'Aetna', 'Ambetter', 'Blue Cross Blue Shield', 'Cigna', 'Healthy Blue · KanCare',
    'Sunflower Health Plan · KanCare', 'TriWest', 'UMR', 'UnitedHealthcare',
    'United Healthcare Community Plan · KanCare',
];

/* Homepage logo wall: same plans as $insurances. Sources in assets/images/insurance/CREDITS.md. */
$insurance_logos = [ // [name, file, note, logo height class — tuned so they read at a similar size]
    ['Aetna',                           'aetna.svg',                  '',                          'h-7'],
    ['Ambetter Health',                 'ambetter.png',               '',                          'h-10'],
    ['Blue Cross Blue Shield',          'blue-cross-blue-shield.svg', '',                          'h-8'],
    ['Cigna Healthcare',                'cigna-healthcare.svg',       '',                          'h-12'],
    ['UnitedHealthcare',                'unitedhealthcare.svg',       '',                          'h-10'],
    ['UMR',                             'umr.svg',                    '',                          'h-11'],
    ['TriWest Healthcare Alliance',     'triwest.png',                '',                          'h-8'],
    ['Healthy Blue',                    'healthy-blue.svg',           'KanCare',                   'h-7'],
    ['Sunflower Health Plan',           'sunflower-health-plan.png',  'KanCare',                   'h-11'],
    ['UnitedHealthcare Community Plan', 'unitedhealthcare.svg',       'Community Plan · KanCare',  'h-8'],
];

/*
 * Plans each provider accepts, from their staff bios on anewwichita.com.
 * Practice-level contracts ($insurances above) also list Cigna, TriWest and UMR,
 * which no individual bio mentions — confirm with the office before publishing.
 */
$plans = [
    'aetna'       => ['name' => 'Aetna', 'note' => 'Commercial'],
    'ambetter'    => ['name' => 'Ambetter', 'note' => ''],
    'bcbs'        => ['name' => 'Blue Cross Blue Shield', 'note' => ''],
    'united'      => ['name' => 'UnitedHealthcare', 'note' => 'Commercial'],
    'tricare'     => ['name' => 'TRICARE', 'note' => ''],
    'healthyblue' => ['name' => 'Healthy Blue', 'note' => 'KanCare'],
    'sunflower'   => ['name' => 'Sunflower Health Plan', 'note' => 'KanCare'],
    'uhc-kancare' => ['name' => 'United Community Plan', 'note' => 'KanCare'],
];

/*
 * Google reviews on the homepage. Copy the real rating and review count from
 * ANew's Google Business Profile — never estimate them. Add the Place ID
 * (Google Business Profile → "Ask for reviews") to enable the "Leave a review" link.
 */
$google_reviews = [
    'url'      => $site['maps_url'],
    'place_id' => '',      // e.g. 'ChIJ…'
    'rating'   => null,    // e.g. 4.9
    'count'    => null,    // e.g. 87
];

/* Only add genuine, permission-cleared reviews, copied word for word from Google. */
$reviews = [
    // ['quote' => '…', 'author' => 'First name or initials', 'rating' => 5, 'when' => 'March 2026'],

    // PLACEHOLDERS for layout review only — 'sample' => true shows a visible "Sample review" tag
    // instead of Google attribution. Replace with real Google reviews before launch.
    ['quote' => 'The front desk made me feel welcome from the first phone call, and my therapist really took the time to listen.', 'author' => 'Sample reviewer', 'rating' => 5, 'sample' => true],
    ['quote' => 'Having my therapist and medication provider work together under one roof made everything so much easier.', 'author' => 'Sample reviewer', 'rating' => 5, 'sample' => true],
    ['quote' => 'Our son looks forward to his play therapy sessions. We’ve seen real progress at home and at school.', 'author' => 'Sample reviewer', 'rating' => 5, 'sample' => true],
    ['quote' => 'Warm, calm office and a team that genuinely cares. It never felt like a clinic.', 'author' => 'Sample reviewer', 'rating' => 5, 'sample' => true],
];

/* YouTube IDs for future provider intros / TMS FAQs. Section hides while empty. */
$videos = [
    // ['youtube_id' => 'XXXXXXXXXXX', 'title' => 'Meet Ashley Ludlum, APRN'],
];

/* FAQ answers shared across service pages. */
$common_faqs = [
    'insurance' => ['Do you accept insurance?', 'ANew is contracted with many major plans, including Aetna, Ambetter, Blue Cross Blue Shield, Cigna, Healthy Blue, Sunflower Health Plan, TriWest, UMR and UnitedHealthcare (including KanCare). Accepted plans vary by provider, so give us a call and we’ll gladly check yours. We also accept cash, major credit cards, CareCredit, HSA and FSA.'],
    'start'     => ['How do I get started?', 'Send a quick inquiry through our secure scheduling form or call us at ' . $site['phone'] . '. Once it’s submitted, our team will reach out to you shortly.'],
];

/*
 * Legal pages. Effective date and privacy contact appear on every policy.
 * These policies are starting drafts — have ANew’s attorney/compliance
 * officer review them (and swap in ANew’s own HIPAA Notice if one exists).
 */
$legal = [
    'effective'       => 'October 9, 2026',
    'privacy_officer' => 'Cari Smothermon, Privacy Officer',
    'contact_email'   => $site['email'],
];

$legal_pages = [
    '/privacy-policy/'              => 'Privacy Policy',
    '/notice-of-privacy-practices/' => 'Notice of Privacy Practices (HIPAA)',
    '/terms-of-use/'                => 'Terms of Use',
    '/good-faith-estimate/'         => 'Good Faith Estimate',
    '/nondiscrimination/'           => 'Nondiscrimination Notice',
    '/accessibility/'               => 'Accessibility',
];
