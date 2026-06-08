<?php
// config/services/reputation-management.php

return [
    'menu_category' => 'other',
    'menu_title' => 'Reputation Mgt',
    'menu_desc' => 'Monitoring and improving your online brand perception.',
    'menu_icon' => 'fa-solid fa-shield-halved',


    'pageTitle' => 'Online Reputation Management Services | ' . COMPANY_NAME . ' - Build Trust & Credibility',
    'pageDescription' => 'Professional online reputation management services by ' . COMPANY_NAME . '. Monitor, manage, and improve your brand reputation across the web.',
    'pageKey' => 'reputation_management',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-solid fa-shield-halved"></i>&nbsp; Reputation Management',
        'title' => 'Protect & Grow Your <span class="gradient-text">Online Reputation</span>',
        'subtitle' => 'We help you build trust, manage reviews, and maintain a positive brand image online.',
        'metrics' => [
            ['val' => '5★', 'lbl' => 'Ratings Improved'],
            ['val' => '200%', 'lbl' => 'Brand Trust'],
            ['val' => '100+', 'lbl' => 'Brands Managed'],
        ],
        'form_title' => 'Improve Your Reputation',
        'form_sub' => 'Build trust and credibility for your brand.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'Brand Trust',
        'title' => 'Build Trust & <span class="gradient-text">Control Your Brand Image</span>',
        'subtitle' => 'Our ORM strategies ensure your brand maintains a positive and trustworthy presence online.',
        'features' => [
            [
                'icon' => 'fa-solid fa-star',
                'title' => 'Positive Reviews',
                'desc' => 'Increase ratings and build customer trust.'
            ],
            [
                'icon' => 'fa-solid fa-eye',
                'title' => 'Real-Time Monitoring',
                'desc' => 'Track brand mentions across the web.'
            ],
        ],
        'img' => 'assets/images/services/reputation-management-intro.png',
        'glass_card_1' => [
            'icon' => 'fa-solid fa-star',
            'label' => 'Ratings',
            'val' => '5★',
            'width' => '95%'
        ],
        'glass_card_2' => [
            'icon' => 'fa-solid fa-shield',
            'label' => 'Trust',
            'val' => 'High',
            'sub' => 'Credibility'
        ],
        'floating_badge' => [
            'icon' => 'fa-solid fa-award',
            'lbl'  => 'ORM Experts'
        ]
    ],

    /* ================= TYPES ================= */
    'types' => [
        'tag' => '<i class="fa-solid fa-layer-group"></i>&nbsp; ORM Services',
        'title' => 'Our <span class="gradient-text">Reputation Management Solutions</span>',
        'subtitle' => 'Comprehensive services to protect your brand.',
        'panels' => [

            'reviews' => [
                'tab_name'  => 'Review Management',
                'tab_icon'  => 'fa-solid fa-star',
                'title'     => 'Online Review Management',
                'tagline'   => 'Boost Ratings',
                'desc'      => 'Manage and improve reviews across platforms.',
                'image'     => 'assets/images/services/reputation-management-reviews.png',
                'metric'    => ['val' => '5★', 'lbl' => 'Ratings', 'icon' => 'fa-solid fa-star'],
                'features'  => ['Review Monitoring', 'Response Management', 'Feedback Strategy'],
                'techStack' => ['Google Reviews', 'Trustpilot']
            ],

            'monitoring' => [
                'tab_name'  => 'Monitoring',
                'tab_icon'  => 'fa-solid fa-eye',
                'title'     => 'Reputation Monitoring',
                'tagline'   => 'Track Everything',
                'desc'      => 'Monitor brand mentions across platforms.',
                'image'     => 'assets/images/services/reputation-management-monitoring.png',
                'metric'    => ['val' => '24/7', 'lbl' => 'Monitoring', 'icon' => 'fa-solid fa-clock'],
                'features'  => ['Brand Tracking', 'Alerts', 'Sentiment Analysis'],
                'techStack' => ['Monitoring Tools']
            ],

            'removal' => [
                'tab_name'  => 'Negative Handling',
                'tab_icon'  => 'fa-solid fa-ban',
                'title'     => 'Negative Content Management',
                'tagline'   => 'Protect Your Image',
                'desc'      => 'Handle negative reviews and harmful content.',
                'image'     => 'assets/images/services/reputation-management-removal.png',
                'metric'    => ['val' => 'Safe', 'lbl' => 'Brand', 'icon' => 'fa-solid fa-shield'],
                'features'  => ['Content Suppression', 'Response Strategy', 'Reputation Repair'],
                'techStack' => ['ORM Tools']
            ],

            'branding' => [
                'tab_name'  => 'Brand Building',
                'tab_icon'  => 'fa-solid fa-bullhorn',
                'title'     => 'Brand Reputation Building',
                'tagline'   => 'Build Authority',
                'desc'      => 'Create a strong and positive brand image.',
                'image'     => 'assets/images/services/reputation-management-branding.png',
                'metric'    => ['val' => 'Strong', 'lbl' => 'Brand', 'icon' => 'fa-solid fa-award'],
                'features'  => ['Positive Content', 'PR Strategy', 'Brand Positioning'],
                'techStack' => ['PR Tools']
            ],

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Process',
        'title' => 'Our <span class="gradient-text">ORM Process</span>',
        'subtitle' => 'A strategic approach to protect your reputation.',
        'steps' => [
            ['title' => 'Audit', 'desc' => 'Analyze current reputation.', 'icon' => 'fa-solid fa-magnifying-glass'],
            ['title' => 'Strategy', 'desc' => 'Plan improvement actions.', 'icon' => 'fa-solid fa-chart-pie'],
            ['title' => 'Implementation', 'desc' => 'Execute ORM strategies.', 'icon' => 'fa-solid fa-gear'],
            ['title' => 'Monitoring', 'desc' => 'Track brand mentions.', 'icon' => 'fa-solid fa-eye'],
            ['title' => 'Optimization', 'desc' => 'Improve reputation.', 'icon' => 'fa-solid fa-chart-line'],
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Benefits',
        'title' => 'Why Choose <span class="gradient-text">' . COMPANY_NAME . '</span>',
        'subtitle' => 'We protect and grow your brand image.',
        'cards' => [
            ['icon' => 'fa-solid fa-star', 'title' => 'Better Ratings', 'desc' => 'Improve reviews.'],
            ['icon' => 'fa-solid fa-shield-halved', 'title' => 'Brand Protection', 'desc' => 'Safeguard your reputation.'],
            ['icon' => 'fa-solid fa-users', 'title' => 'Customer Trust', 'desc' => 'Build credibility.'],
            ['icon' => 'fa-solid fa-chart-line', 'title' => 'Growth', 'desc' => 'Increase conversions.'],
            ['icon' => 'fa-solid fa-eye', 'title' => 'Monitoring', 'desc' => 'Track mentions.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'Support', 'desc' => 'Expert ORM team.'],
        ]
    ],

    /* ================= PORTFOLIO ================= */
    'portfolio' => [
        'tag' => '<i class="fa-solid fa-briefcase"></i>&nbsp; Portfolio',
        'title' => 'Our <span class="gradient-text">Reputation Results</span>',
        'subtitle' => 'See how we improved brand image.',
        'filter_categories' => ['orm', 'reputation', 'branding']
    ],

    /* ================= TESTIMONIALS ================= */
    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'What is online reputation management?',
                'a' => 'ORM involves monitoring and improving how your brand is perceived online.'
            ],
            [
                'q' => 'Can you remove negative reviews?',
                'a' => 'We handle negative content strategically and improve your overall reputation.'
            ],
            [
                'q' => 'How long does it take to improve reputation?',
                'a' => 'It depends on the situation but improvements can be seen within weeks to months.'
            ],
            [
                'q' => 'Do you monitor brand mentions?',
                'a' => 'Yes, we track mentions across platforms in real-time.'
            ],
            [
                'q' => 'Why is ORM important?',
                'a' => 'It builds trust, improves conversions, and protects your brand image.',
            ],
        ]
    ]
];
