<?php
// config/services/search-engine-ppc.php

return [
    'menu_category' => 'ppc',
    'menu_title' => 'Search Engine PPC',
    'menu_desc' => 'High-ROI paid search campaigns on Google and Bing.',
    'menu_icon' => 'fa-solid fa-mouse-pointer',


    'pageTitle' => 'Search Engine PPC Services | ' . COMPANY_NAME . ' - Maximize ROI',
    'pageDescription' => 'Search Engine PPC services by ' . COMPANY_NAME . '. Run high-converting Google Ads and paid campaigns to drive targeted traffic and maximize ROI.',
    'pageKey' => 'search_engine_ppc',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-solid fa-bullseye"></i>&nbsp; Search Engine PPC',
        'title' => 'Drive Instant Results with <span class="gradient-text">PPC Advertising</span>',
        'subtitle' => 'We create and manage high-performing paid search campaigns that generate leads, sales, and measurable ROI.',
        'metrics' => [
            ['val' => '5X', 'lbl' => 'ROI'],
            ['val' => '300%', 'lbl' => 'Lead Growth'],
            ['val' => '100+', 'lbl' => 'Campaigns Managed'],
        ],
        'form_title' => 'Start Your PPC Campaign',
        'form_sub' => 'Get expert-managed ads that deliver real results.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'Paid Advertising',
        'title' => 'Get High-Quality Leads with <span class="gradient-text">Search Engine Ads</span>',
        'subtitle' => 'Our PPC strategies focus on targeting the right audience, optimizing campaigns, and maximizing conversions.',
        'features' => [
            [
                'icon' => 'fa-solid fa-bullseye',
                'title' => 'Targeted Ads',
                'desc' => 'Reach users actively searching for your services.'
            ],
            [
                'icon' => 'fa-solid fa-chart-line',
                'title' => 'ROI Focused',
                'desc' => 'Optimize campaigns to maximize return on investment.'
            ],
        ],
        'img' => 'assets/images/services/search-engine-ppc-intro.png',
        'glass_card_1' => [
            'icon' => 'fa-solid fa-chart-line',
            'label' => 'Conversions',
            'val' => '+300%',
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
            'lbl'  => 'PPC Experts'
        ]
    ],

    /* ================= TYPES ================= */
    'types' => [
        'tag' => '<i class="fa-solid fa-layer-group"></i>&nbsp; PPC Services',
        'title' => 'Our <span class="gradient-text">PPC Advertising Solutions</span>',
        'subtitle' => 'Complete paid search services to grow your business.',
        'panels' => [

            'google' => [
                'tab_name'  => 'Google Ads',
                'tab_icon'  => 'fa-brands fa-google',
                'title'     => 'Google Ads Management',
                'tagline'   => 'Dominate Search Results',
                'desc'      => 'Run high-performing Google Ads campaigns to drive traffic and conversions.',
                'image'     => 'assets/images/services/search-engine-ppc-google.png',
                'metric'    => ['val' => 'Top', 'lbl' => 'Ad Position', 'icon' => 'fa-solid fa-trophy'],
                'features'  => ['Search Ads', 'Display Ads', 'YouTube Ads'],
                'techStack' => ['Google Ads', 'Keyword Planner', 'Analytics']
            ],

            'bing' => [
                'tab_name'  => 'Bing Ads',
                'tab_icon'  => 'fa-brands fa-microsoft',
                'title'     => 'Bing Ads Management',
                'tagline'   => 'Expand Reach',
                'desc'      => 'Reach additional audiences with cost-effective Bing Ads campaigns.',
                'image'     => 'assets/images/services/search-engine-ppc-bing.png',
                'metric'    => ['val' => 'Low', 'lbl' => 'CPC', 'icon' => 'fa-solid fa-dollar-sign'],
                'features'  => ['Search Ads', 'Audience Targeting', 'Cost Optimization'],
                'techStack' => ['Microsoft Ads', 'Analytics']
            ],

            'remarketing' => [
                'tab_name'  => 'Remarketing',
                'tab_icon'  => 'fa-solid fa-rotate',
                'title'     => 'Remarketing Campaigns',
                'tagline'   => 'Convert Visitors',
                'desc'      => 'Re-engage users who visited your site and turn them into customers.',
                'image'     => 'assets/images/services/search-engine-ppc-remarketing.png',
                'metric'    => ['val' => '2X', 'lbl' => 'Conversions', 'icon' => 'fa-solid fa-repeat'],
                'features'  => ['Audience Retargeting', 'Display Ads', 'Conversion Tracking'],
                'techStack' => ['Google Ads', 'Facebook Pixel']
            ],

            'shopping' => [
                'tab_name'  => 'Shopping Ads',
                'tab_icon'  => 'fa-solid fa-cart-shopping',
                'title'     => 'Google Shopping Ads',
                'tagline'   => 'Sell More Products',
                'desc'      => 'Promote your products directly in search results with shopping ads.',
                'image'     => 'assets/images/services/search-engine-ppc-shopping.png',
                'metric'    => ['val' => '3X', 'lbl' => 'Sales', 'icon' => 'fa-solid fa-chart-line'],
                'features'  => ['Product Listings', 'Feed Optimization', 'Conversion Tracking'],
                'techStack' => ['Google Merchant Center', 'Shopify', 'WooCommerce']
            ],

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Process',
        'title' => 'Our <span class="gradient-text">PPC Campaign Process</span>',
        'subtitle' => 'A data-driven approach to maximize results.',
        'steps' => [
            ['title' => 'Keyword Research', 'desc' => 'Finding high-converting keywords.', 'icon' => 'fa-solid fa-key'],
            ['title' => 'Campaign Setup', 'desc' => 'Creating optimized ad campaigns.', 'icon' => 'fa-solid fa-pen'],
            ['title' => 'Ad Optimization', 'desc' => 'Improving CTR and conversions.', 'icon' => 'fa-solid fa-chart-line'],
            ['title' => 'A/B Testing', 'desc' => 'Testing ads for best performance.', 'icon' => 'fa-solid fa-flask'],
            ['title' => 'Scaling', 'desc' => 'Maximizing ROI and growth.', 'icon' => 'fa-solid fa-rocket'],
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Benefits',
        'title' => 'Why Choose <span class="gradient-text">' . COMPANY_NAME . '</span>',
        'subtitle' => 'We deliver performance-driven PPC campaigns.',
        'cards' => [
            ['icon' => 'fa-solid fa-bolt', 'title' => 'Instant Traffic', 'desc' => 'Get immediate visibility.'],
            ['icon' => 'fa-solid fa-bullseye', 'title' => 'Targeted Leads', 'desc' => 'Reach high-intent users.'],
            ['icon' => 'fa-solid fa-chart-line', 'title' => 'Higher ROI', 'desc' => 'Maximize your ad spend.'],
            ['icon' => 'fa-solid fa-gear', 'title' => 'Optimization', 'desc' => 'Continuous campaign improvements.'],
            ['icon' => 'fa-solid fa-magnifying-glass', 'title' => 'Data Insights', 'desc' => 'Track performance metrics.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'Support', 'desc' => 'Dedicated PPC experts.'],
        ]
    ],

    /* ================= PORTFOLIO ================= */
    'portfolio' => [
        'tag' => '<i class="fa-solid fa-briefcase"></i>&nbsp; Portfolio',
        'title' => 'Our <span class="gradient-text">PPC Results</span>',
        'subtitle' => 'See how we generated leads and sales.',
        'filter_categories' => ['ppc', 'ads', 'conversion']
    ],

    /* ================= TESTIMONIALS ================= */
    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'What is PPC advertising?',
                'a' => 'PPC (Pay-Per-Click) is a paid advertising model where you pay for each click on your ads.'
            ],
            [
                'q' => 'How quickly can PPC deliver results?',
                'a' => 'PPC campaigns can generate traffic and leads almost immediately after launch.'
            ],
            [
                'q' => 'Which platform is best for PPC?',
                'a' => 'Google Ads is the most popular, but Bing Ads and other platforms can also be effective.'
            ],
            [
                'q' => 'How much budget is required for PPC?',
                'a' => 'Budget depends on your industry and competition. We help optimize for maximum ROI.'
            ],
            [
                'q' => 'Do you provide campaign optimization?',
                'a' => 'Yes, we continuously optimize campaigns to improve performance and reduce costs.',
            ],
        ]
    ]
];
