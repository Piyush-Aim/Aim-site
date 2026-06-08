<?php
// config/services/bing-ads.php

return [
    'menu_category' => 'ppc',
    'menu_title' => 'Bing Ads',
    'menu_desc' => 'Capturing market share through Microsoft advertising.',
    'menu_icon' => 'fa-solid fa-window-maximize',


    'pageTitle' => 'Bing Ads Services | ' . COMPANY_NAME . ' - Cost-Effective PPC',
    'pageDescription' => 'Bing Ads (Microsoft Ads) services by ' . COMPANY_NAME . '. Reach untapped audiences with lower CPC and high-converting paid campaigns.',
    'pageKey' => 'bing_ads',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-brands fa-microsoft"></i>&nbsp; Bing Ads',
        'title' => 'Reach More Customers with <span class="gradient-text">Bing Ads</span>',
        'subtitle' => 'We create and manage high-performing Microsoft Ads campaigns that deliver targeted traffic at lower costs.',
        'metrics' => [
            ['val' => '40%', 'lbl' => 'Lower CPC'],
            ['val' => '3X', 'lbl' => 'ROI'],
            ['val' => '100+', 'lbl' => 'Campaigns Managed'],
        ],
        'form_title' => 'Start Your Bing Ads Campaign',
        'form_sub' => 'Tap into a less competitive audience with high ROI.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'Microsoft Advertising',
        'title' => 'Get Cost-Effective Leads with <span class="gradient-text">Bing Ads</span>',
        'subtitle' => 'Our Bing Ads strategies help you reach a unique audience with lower competition and better conversion rates.',
        'features' => [
            [
                'icon' => 'fa-solid fa-dollar-sign',
                'title' => 'Lower Cost Per Click',
                'desc' => 'Save money with less competitive ad auctions.'
            ],
            [
                'icon' => 'fa-solid fa-users',
                'title' => 'Untapped Audience',
                'desc' => 'Reach users not heavily targeted on Google.'
            ],
        ],
        'img' => 'assets/images/services/bing-ads-intro.png',
        'glass_card_1' => [
            'icon' => 'fa-solid fa-chart-line',
            'label' => 'Conversions',
            'val' => '+200%',
            'width' => '90%'
        ],
        'glass_card_2' => [
            'icon' => 'fa-solid fa-dollar-sign',
            'label' => 'CPC',
            'val' => 'Low',
            'sub' => 'Cost'
        ],
        'floating_badge' => [
            'icon' => 'fa-solid fa-award',
            'lbl'  => 'Microsoft Ads Experts'
        ]
    ],

    /* ================= TYPES ================= */
    'types' => [
        'tag' => '<i class="fa-solid fa-layer-group"></i>&nbsp; Bing Ads Services',
        'title' => 'Our <span class="gradient-text">Bing Ads Solutions</span>',
        'subtitle' => 'Maximize performance with Microsoft Advertising.',
        'panels' => [

            'search' => [
                'tab_name'  => 'Search Ads',
                'tab_icon'  => 'fa-solid fa-magnifying-glass',
                'title'     => 'Bing Search Ads',
                'tagline'   => 'Capture Search Traffic',
                'desc'      => 'Show your ads on Bing search results for targeted keywords.',
                'image'     => 'assets/images/services/bing-ads-search.png',
                'metric'    => ['val' => 'Top', 'lbl' => 'Position', 'icon' => 'fa-solid fa-trophy'],
                'features'  => ['Keyword Targeting', 'Ad Copy Optimization', 'Conversion Tracking'],
                'techStack' => ['Microsoft Ads', 'Keyword Planner', 'Analytics']
            ],

            'audience' => [
                'tab_name'  => 'Audience Targeting',
                'tab_icon'  => 'fa-solid fa-users',
                'title'     => 'Advanced Audience Targeting',
                'tagline'   => 'Reach the Right Users',
                'desc'      => 'Target users based on demographics, interests, and behavior.',
                'image'     => 'assets/images/services/bing-ads-audience.png',
                'metric'    => ['val' => 'Precise', 'lbl' => 'Targeting', 'icon' => 'fa-solid fa-bullseye'],
                'features'  => ['Demographic Targeting', 'Device Targeting', 'Location Targeting'],
                'techStack' => ['Microsoft Ads', 'Audience Insights']
            ],

            'remarketing' => [
                'tab_name'  => 'Remarketing',
                'tab_icon'  => 'fa-solid fa-rotate',
                'title'     => 'Bing Remarketing Ads',
                'tagline'   => 'Re-engage Visitors',
                'desc'      => 'Reconnect with users who visited your site and convert them.',
                'image'     => 'assets/images/services/bing-ads-remarketing.png',
                'metric'    => ['val' => '2X', 'lbl' => 'Conversions', 'icon' => 'fa-solid fa-repeat'],
                'features'  => ['Audience Lists', 'Dynamic Ads', 'Conversion Tracking'],
                'techStack' => ['Microsoft Ads', 'Tracking Tools']
            ],

            'optimization' => [
                'tab_name'  => 'Optimization',
                'tab_icon'  => 'fa-solid fa-gears',
                'title'     => 'Campaign Optimization',
                'tagline'   => 'Maximize ROI',
                'desc'      => 'Continuously optimize campaigns to improve performance and reduce costs.',
                'image'     => 'assets/images/services/bing-ads-optimization.png',
                'metric'    => ['val' => 'High', 'lbl' => 'ROI', 'icon' => 'fa-solid fa-chart-line'],
                'features'  => ['Bid Optimization', 'A/B Testing', 'Performance Tracking'],
                'techStack' => ['Analytics', 'Microsoft Ads']
            ],

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Process',
        'title' => 'Our <span class="gradient-text">Bing Ads Process</span>',
        'subtitle' => 'A structured approach to maximize ad performance.',
        'steps' => [
            ['title' => 'Keyword Research', 'desc' => 'Finding cost-effective keywords.', 'icon' => 'fa-solid fa-key'],
            ['title' => 'Campaign Setup', 'desc' => 'Launching optimized campaigns.', 'icon' => 'fa-solid fa-pen'],
            ['title' => 'Ad Optimization', 'desc' => 'Improving CTR and conversions.', 'icon' => 'fa-solid fa-chart-line'],
            ['title' => 'Testing', 'desc' => 'Running A/B tests for best results.', 'icon' => 'fa-solid fa-flask'],
            ['title' => 'Scaling', 'desc' => 'Maximizing ROI and growth.', 'icon' => 'fa-solid fa-rocket'],
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Benefits',
        'title' => 'Why Choose <span class="gradient-text">' . COMPANY_NAME . '</span>',
        'subtitle' => 'We deliver cost-effective Bing Ads campaigns.',
        'cards' => [
            ['icon' => 'fa-solid fa-dollar-sign', 'title' => 'Lower CPC', 'desc' => 'Save on ad spend.'],
            ['icon' => 'fa-solid fa-users', 'title' => 'New Audience', 'desc' => 'Reach untapped users.'],
            ['icon' => 'fa-solid fa-chart-line', 'title' => 'Higher ROI', 'desc' => 'Maximize returns.'],
            ['icon' => 'fa-solid fa-bullseye', 'title' => 'Targeted Ads', 'desc' => 'Reach the right audience.'],
            ['icon' => 'fa-solid fa-gear', 'title' => 'Optimization', 'desc' => 'Continuous improvements.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'Support', 'desc' => 'Dedicated experts.'],
        ]
    ],

    /* ================= PORTFOLIO ================= */
    'portfolio' => [
        'tag' => '<i class="fa-solid fa-briefcase"></i>&nbsp; Portfolio',
        'title' => 'Our <span class="gradient-text">Bing Ads Results</span>',
        'subtitle' => 'See how we generated cost-effective leads.',
        'filter_categories' => ['bing', 'ads', 'ppc']
    ],

    /* ================= TESTIMONIALS ================= */
    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'What are Bing Ads?',
                'a' => 'Bing Ads (Microsoft Ads) allow you to display ads on Bing and partner search engines.'
            ],
            [
                'q' => 'Is Bing Ads better than Google Ads?',
                'a' => 'Bing Ads often have lower competition and cost per click, making them highly cost-effective.'
            ],
            [
                'q' => 'Who should use Bing Ads?',
                'a' => 'Businesses looking to expand reach and reduce ad costs should use Bing Ads.'
            ],
            [
                'q' => 'How quickly can I see results?',
                'a' => 'You can start getting traffic and leads immediately after campaign launch.'
            ],
            [
                'q' => 'Do you optimize campaigns regularly?',
                'a' => 'Yes, we continuously optimize campaigns to improve performance and ROI.',
            ],
        ]
    ]
];
