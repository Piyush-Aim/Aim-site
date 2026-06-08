<?php
// config/services/social-media-management.php

return [
    'menu_category' => 'social',
    'menu_title' => 'Social Management',
    'menu_desc' => 'Building communities and brand presence across social platforms.',
    'menu_icon' => 'fa-solid fa-share-nodes',

    'pageTitle' => 'Social Media Management Services | ' . COMPANY_NAME . ' - Grow Your Brand',
    'pageDescription' => 'Professional social media management services by ' . COMPANY_NAME . '. Build your brand, increase engagement, and grow followers with expert strategies.',
    'pageKey' => 'social_media_marketing',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-solid fa-hashtag"></i>&nbsp; Social Media Management',
        'title' => 'Grow Your Brand with <span class="gradient-text">Social Media Management</span>',
        'subtitle' => 'We manage your social media platforms to increase engagement, followers, and brand awareness.',
        'metrics' => [
            ['val' => '5X', 'lbl' => 'Engagement'],
            ['val' => '300%', 'lbl' => 'Follower Growth'],
            ['val' => '100+', 'lbl' => 'Brands Managed'],
        ],
        'form_title' => 'Boost Your Social Presence',
        'form_sub' => 'Let us manage and grow your social media accounts.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'Social Media Growth',
        'title' => 'Build Engagement & <span class="gradient-text">Brand Authority</span>',
        'subtitle' => 'Our social media strategies focus on content, consistency, and audience engagement to grow your brand online.',
        'features' => [
            [
                'icon' => 'fa-solid fa-users',
                'title' => 'Audience Growth',
                'desc' => 'Increase followers and build a strong community.'
            ],
            [
                'icon' => 'fa-solid fa-heart',
                'title' => 'Higher Engagement',
                'desc' => 'Boost likes, shares, and interactions.'
            ],
        ],
        'img' => 'assets/images/services/social-media-marketing-intro.png',
        'glass_card_1' => [
            'icon' => 'fa-solid fa-chart-line',
            'label' => 'Engagement',
            'val' => '+300%',
            'width' => '95%'
        ],
        'glass_card_2' => [
            'icon' => 'fa-solid fa-users',
            'label' => 'Followers',
            'val' => 'High',
            'sub' => 'Growth'
        ],
        'floating_badge' => [
            'icon' => 'fa-solid fa-award',
            'lbl'  => 'Social Experts'
        ]
    ],

    /* ================= TYPES ================= */
    'types' => [
        'tag' => '<i class="fa-solid fa-layer-group"></i>&nbsp; Social Media Services',
        'title' => 'Our <span class="gradient-text">Social Media Solutions</span>',
        'subtitle' => 'Complete management for your social platforms.',
        'panels' => [

            'content' => [
                'tab_name'  => 'Content Creation',
                'tab_icon'  => 'fa-solid fa-pen',
                'title'     => 'Social Media Content Creation',
                'tagline'   => 'Creative Content',
                'desc'      => 'Design engaging posts, graphics, and videos for your audience.',
                'image'     => 'assets/images/services/social-media-marketing-content.png',
                'metric'    => ['val' => 'High', 'lbl' => 'Engagement', 'icon' => 'fa-solid fa-heart'],
                'features'  => ['Post Design', 'Captions', 'Hashtag Strategy'],
                'techStack' => ['Canva', 'Adobe', 'Figma']
            ],

            'posting' => [
                'tab_name'  => 'Scheduling',
                'tab_icon'  => 'fa-solid fa-calendar',
                'title'     => 'Post Scheduling & Management',
                'tagline'   => 'Consistent Posting',
                'desc'      => 'Plan and schedule posts to maintain consistency.',
                'image'     => 'assets/images/services/social-media-marketing-posting.png',
                'metric'    => ['val' => 'Daily', 'lbl' => 'Posting', 'icon' => 'fa-solid fa-clock'],
                'features'  => ['Content Calendar', 'Automation', 'Consistency'],
                'techStack' => ['Hootsuite', 'Buffer']
            ],

            'ads' => [
                'tab_name'  => 'Social Ads',
                'tab_icon'  => 'fa-solid fa-bullseye',
                'title'     => 'Social Media Advertising',
                'tagline'   => 'Reach More People',
                'desc'      => 'Run targeted ad campaigns on social platforms.',
                'image'     => 'assets/images/services/social-media-marketing-ads.png',
                'metric'    => ['val' => 'Wide', 'lbl' => 'Reach', 'icon' => 'fa-solid fa-globe'],
                'features'  => ['Targeted Ads', 'Campaign Optimization', 'A/B Testing'],
                'techStack' => ['Meta Ads', 'Instagram Ads']
            ],

            'analytics' => [
                'tab_name'  => 'Analytics',
                'tab_icon'  => 'fa-solid fa-chart-line',
                'title'     => 'Social Media Analytics & Reporting',
                'tagline'   => 'Data-Driven Growth',
                'desc'      => 'Track performance and improve strategies with insights.',
                'image'     => 'assets/images/services/social-media-marketing-analytics.png',
                'metric'    => ['val' => 'Insights', 'lbl' => 'Data', 'icon' => 'fa-solid fa-chart-line'],
                'features'  => ['Performance Reports', 'Insights', 'Growth Tracking'],
                'techStack' => ['Analytics Tools', 'Meta Insights']
            ],

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Process',
        'title' => 'Our <span class="gradient-text">Social Media Process</span>',
        'subtitle' => 'A structured approach to grow your brand.',
        'steps' => [
            ['title' => 'Strategy Planning', 'desc' => 'Understanding your goals.', 'icon' => 'fa-solid fa-magnifying-glass'],
            ['title' => 'Content Creation', 'desc' => 'Designing engaging posts.', 'icon' => 'fa-solid fa-pen'],
            ['title' => 'Scheduling', 'desc' => 'Posting consistently.', 'icon' => 'fa-solid fa-calendar'],
            ['title' => 'Engagement', 'desc' => 'Interacting with audience.', 'icon' => 'fa-solid fa-users'],
            ['title' => 'Optimization', 'desc' => 'Improving performance.', 'icon' => 'fa-solid fa-chart-line'],
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Benefits',
        'title' => 'Why Choose <span class="gradient-text">' . COMPANY_NAME . '</span>',
        'subtitle' => 'We deliver growth-driven social media management.',
        'cards' => [
            ['icon' => 'fa-solid fa-users', 'title' => 'More Followers', 'desc' => 'Grow your audience.'],
            ['icon' => 'fa-solid fa-heart', 'title' => 'Higher Engagement', 'desc' => 'Increase interactions.'],
            ['icon' => 'fa-solid fa-bullseye', 'title' => 'Targeted Reach', 'desc' => 'Reach the right audience.'],
            ['icon' => 'fa-solid fa-chart-line', 'title' => 'Data Driven', 'desc' => 'Optimize with insights.'],
            ['icon' => 'fa-solid fa-rocket', 'title' => 'Brand Growth', 'desc' => 'Build strong presence.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'Support', 'desc' => 'Dedicated management team.'],
        ]
    ],

    /* ================= PORTFOLIO ================= */
    'portfolio' => [
        'tag' => '<i class="fa-solid fa-briefcase"></i>&nbsp; Portfolio',
        'title' => 'Our <span class="gradient-text">Social Media Work</span>',
        'subtitle' => 'See how we helped brands grow.',
        'filter_categories' => ['social', 'media', 'growth']
    ],

    /* ================= TESTIMONIALS ================= */
    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'What is social media management?',
                'a' => 'It involves managing your social media accounts, creating content, and engaging with your audience.'
            ],
            [
                'q' => 'Which platforms do you manage?',
                'a' => 'We manage Instagram, Facebook, LinkedIn, Twitter, and more.'
            ],
            [
                'q' => 'How often do you post?',
                'a' => 'Posting frequency depends on your strategy, usually 3–7 times per week.'
            ],
            [
                'q' => 'Can you run ads as well?',
                'a' => 'Yes, we manage both organic content and paid social media campaigns.'
            ],
            [
                'q' => 'Do you provide reports?',
                'a' => 'Yes, we provide detailed performance reports and insights.',
            ],
        ]
    ]
];
