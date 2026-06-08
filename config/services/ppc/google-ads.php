<?php
// config/services/google-ads.php

return [
    'menu_category' => 'ppc',
    'menu_title' => 'Google Ads',
    'menu_desc' => 'Expert management of the world\'s largest ad network.',
    'menu_icon' => 'fa-solid fa-bullseye',


    'pageTitle' => 'Google Ads Services | ' . COMPANY_NAME . ' - Maximize ROI',
    'pageDescription' => 'Professional Google Ads services by ' . COMPANY_NAME . '. Generate leads and sales with high-converting search, display, and YouTube ad campaigns.',
    'pageKey' => 'google_ads',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-brands fa-google"></i>&nbsp; Google Ads',
        'title' => 'Get Instant Results with <span class="gradient-text">Google Ads</span>',
        'subtitle' => 'We create and manage high-performance Google Ads campaigns that drive targeted traffic, leads, and sales.',
        'metrics' => [
            ['val' => '5X', 'lbl' => 'ROI'],
            ['val' => '250%', 'lbl' => 'Lead Growth'],
            ['val' => '200+', 'lbl' => 'Campaigns Managed'],
        ],
        'form_title' => 'Launch Your Google Ads',
        'form_sub' => 'Get expert-managed campaigns for maximum results.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'Google Advertising',
        'title' => 'Drive Leads with <span class="gradient-text">High-Converting Ads</span>',
        'subtitle' => 'Our Google Ads strategies focus on targeting the right audience, optimizing campaigns, and maximizing ROI.',
        'features' => [
            [
                'icon' => 'fa-solid fa-bullseye',
                'title' => 'Precise Targeting',
                'desc' => 'Reach users actively searching for your services.'
            ],
            [
                'icon' => 'fa-solid fa-chart-line',
                'title' => 'Performance Driven',
                'desc' => 'Optimize campaigns to maximize conversions and ROI.'
            ],
        ],
        'img' => 'assets/images/services/google-ads-intro.png',
        'glass_card_1' => [
            'icon' => 'fa-solid fa-chart-line',
            'label' => 'Conversions',
            'val' => '+250%',
            'width' => '95%'
        ],
        'glass_card_2' => [
            'icon' => 'fa-solid fa-dollar-sign',
            'label' => 'ROI',
            'val' => '5X',
            'sub' => 'Growth'
        ],
        'floating_badge' => [
            'icon' => 'fa-solid fa-award',
            'lbl'  => 'Google Ads Experts'
        ]
    ],

    /* ================= TYPES ================= */
    'types' => [
        'tag' => '<i class="fa-solid fa-layer-group"></i>&nbsp; Google Ads Services',
        'title' => 'Our <span class="gradient-text">Google Ads Solutions</span>',
        'subtitle' => 'Complete advertising strategies for your business.',
        'panels' => [

            'search' => [
                'tab_name'  => 'Search Ads',
                'tab_icon'  => 'fa-solid fa-magnifying-glass',
                'title'     => 'Google Search Ads',
                'tagline'   => 'Capture Buyer Intent',
                'desc'      => 'Appear at the top of Google search results for high-intent keywords.',
                'image'     => 'assets/images/services/google-ads-search.png',
                'metric'    => ['val' => 'Top', 'lbl' => 'Position', 'icon' => 'fa-solid fa-trophy'],
                'features'  => ['Keyword Targeting', 'Ad Copy Optimization', 'Conversion Tracking'],
                'techStack' => ['Google Ads', 'Keyword Planner', 'Analytics']
            ],

            'display' => [
                'tab_name'  => 'Display Ads',
                'tab_icon'  => 'fa-solid fa-image',
                'title'     => 'Google Display Ads',
                'tagline'   => 'Expand Brand Reach',
                'desc'      => 'Reach your audience across millions of websites and apps.',
                'image'     => 'assets/images/services/google-ads-display.png',
                'metric'    => ['val' => 'Wide', 'lbl' => 'Reach', 'icon' => 'fa-solid fa-globe'],
                'features'  => ['Banner Ads', 'Audience Targeting', 'Brand Awareness'],
                'techStack' => ['Google Display Network', 'Analytics']
            ],

            'youtube' => [
                'tab_name'  => 'YouTube Ads',
                'tab_icon'  => 'fa-brands fa-youtube',
                'title'     => 'YouTube Advertising',
                'tagline'   => 'Engage with Video',
                'desc'      => 'Promote your brand with engaging video ads on YouTube.',
                'image'     => 'assets/images/services/google-ads-youtube.png',
                'metric'    => ['val' => 'High', 'lbl' => 'Engagement', 'icon' => 'fa-solid fa-play'],
                'features'  => ['Video Ads', 'Skippable Ads', 'Audience Targeting'],
                'techStack' => ['YouTube Ads', 'Google Ads']
            ],

            'remarketing' => [
                'tab_name'  => 'Remarketing',
                'tab_icon'  => 'fa-solid fa-rotate',
                'title'     => 'Google Remarketing Ads',
                'tagline'   => 'Re-engage Visitors',
                'desc'      => 'Bring back users who visited your site and convert them into customers.',
                'image'     => 'assets/images/services/google-ads-remarketing.png',
                'metric'    => ['val' => '2X', 'lbl' => 'Conversions', 'icon' => 'fa-solid fa-repeat'],
                'features'  => ['Audience Retargeting', 'Dynamic Ads', 'Conversion Tracking'],
                'techStack' => ['Google Ads', 'Tag Manager']
            ],

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Process',
        'title' => 'Our <span class="gradient-text">Google Ads Process</span>',
        'subtitle' => 'A proven system for ad success.',
        'steps' => [
            ['title' => 'Keyword Research', 'desc' => 'Finding high-converting keywords.', 'icon' => 'fa-solid fa-key'],
            ['title' => 'Campaign Setup', 'desc' => 'Creating optimized ad campaigns.', 'icon' => 'fa-solid fa-pen'],
            ['title' => 'Ad Optimization', 'desc' => 'Improving CTR and conversions.', 'icon' => 'fa-solid fa-chart-line'],
            ['title' => 'A/B Testing', 'desc' => 'Testing ad variations.', 'icon' => 'fa-solid fa-flask'],
            ['title' => 'Scaling', 'desc' => 'Maximizing ROI.', 'icon' => 'fa-solid fa-rocket'],
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Benefits',
        'title' => 'Why Choose <span class="gradient-text">' . COMPANY_NAME . '</span>',
        'subtitle' => 'We deliver performance-focused Google Ads campaigns.',
        'cards' => [
            ['icon' => 'fa-solid fa-bolt', 'title' => 'Instant Traffic', 'desc' => 'Get immediate visibility.'],
            ['icon' => 'fa-solid fa-bullseye', 'title' => 'Targeted Leads', 'desc' => 'Reach high-intent users.'],
            ['icon' => 'fa-solid fa-chart-line', 'title' => 'Higher ROI', 'desc' => 'Maximize ad performance.'],
            ['icon' => 'fa-solid fa-gear', 'title' => 'Optimization', 'desc' => 'Continuous improvements.'],
            ['icon' => 'fa-solid fa-magnifying-glass', 'title' => 'Data Insights', 'desc' => 'Track campaign performance.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'Support', 'desc' => 'Dedicated ad specialists.'],
        ]
    ],

    /* ================= PORTFOLIO ================= */
    'portfolio' => [
        'tag' => '<i class="fa-solid fa-briefcase"></i>&nbsp; Portfolio',
        'title' => 'Our <span class="gradient-text">Google Ads Results</span>',
        'subtitle' => 'See how we generated leads and sales.',
        'filter_categories' => ['ads', 'ppc', 'google']
    ],

    /* ================= TESTIMONIALS ================= */
    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'What are Google Ads?',
                'a' => 'Google Ads is a paid advertising platform where businesses can display ads on Google search and partner sites.'
            ],
            [
                'q' => 'How quickly can I see results?',
                'a' => 'You can start seeing traffic and leads immediately after launching campaigns.'
            ],
            [
                'q' => 'What budget is required?',
                'a' => 'Budget depends on your industry and competition. We optimize for best ROI.'
            ],
            [
                'q' => 'Do you manage campaigns fully?',
                'a' => 'Yes, we handle everything from setup to optimization and reporting.'
            ],
            [
                'q' => 'Can you reduce my cost per lead?',
                'a' => 'Yes, we continuously optimize campaigns to lower costs and improve conversions.',
            ],
        ]
    ]
];
