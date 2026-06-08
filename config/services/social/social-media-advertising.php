<?php
// config/services/social-media-advertising.php

return [
    'menu_category' => 'social',
    'menu_title' => 'Social Media Advertising',
    'menu_desc' => 'Targeted ad placements bringing immediate, measurable traffic.',
    'menu_icon' => 'fa-solid fa-rectangle-ad',



    'pageTitle' => 'Social Media Advertising Services | ' . COMPANY_NAME . ' - Generate Leads & Sales',
    'pageDescription' => 'Professional social media advertising services by ' . COMPANY_NAME . '. Run high-converting Facebook, Instagram, LinkedIn and paid social campaigns to generate leads, sales and brand growth.',
    'pageKey' => 'social_media_advertising',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-solid fa-bullhorn"></i>&nbsp; Social Media Advertising',
        'title' => 'Grow Faster with <span class="gradient-text">Social Media Advertising</span>',
        'subtitle' => 'Launch high-performing ad campaigns across top social platforms to increase traffic, leads, conversions and brand awareness.',
        'metrics' => [
            ['val' => '5X', 'lbl' => 'ROAS'],
            ['val' => '300%', 'lbl' => 'Lead Growth'],
            ['val' => '100+', 'lbl' => 'Campaigns Managed'],
        ],
        'form_title' => 'Launch Your Ad Campaign',
        'form_sub' => 'Get expert strategy, targeting and conversion-focused campaign management.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'Paid Social Growth',
        'title' => 'Reach Your Ideal Audience & <span class="gradient-text">Drive Conversions</span>',
        'subtitle' => 'We create data-driven paid social campaigns that connect your brand with the right people at the right time.',
        'features' => [
            [
                'icon' => 'fa-solid fa-users',
                'title' => 'Precise Targeting',
                'desc' => 'Reach ideal customers based on interests, behavior and demographics.'
            ],
            [
                'icon' => 'fa-solid fa-chart-line',
                'title' => 'Higher ROI',
                'desc' => 'Optimized campaigns focused on conversions and revenue.'
            ],
        ],
        'img' => 'assets/images/services/social-media-advertising-intro.png',
        'glass_card_1' => [
            'icon' => 'fa-solid fa-bullseye',
            'label' => 'CTR',
            'val' => '+220%',
            'width' => '92%'
        ],
        'glass_card_2' => [
            'icon' => 'fa-solid fa-dollar-sign',
            'label' => 'ROAS',
            'val' => '5X',
            'sub' => 'Average'
        ],
        'floating_badge' => [
            'icon' => 'fa-solid fa-award',
            'lbl'  => 'Ads Experts'
        ]
    ],

    /* ================= TYPES ================= */
    'types' => [
        'tag' => '<i class="fa-solid fa-layer-group"></i>&nbsp; Ad Platforms',
        'title' => 'Our <span class="gradient-text">Social Advertising Services</span>',
        'subtitle' => 'Full-funnel paid campaigns across leading social platforms.',

        'panels' => [

            'facebook' => [
                'tab_name'  => 'Facebook Ads',
                'tab_icon'  => 'fa-brands fa-facebook',
                'title'     => 'Facebook Advertising Campaigns',
                'tagline'   => 'Scale Leads & Sales',
                'desc'      => 'Run highly targeted Facebook campaigns for traffic, leads and conversions.',
                'image'     => 'assets/images/services/social-media-advertising-facebook.png',
                'metric'    => ['val' => '5X', 'lbl' => 'ROAS', 'icon' => 'fa-solid fa-chart-line'],
                'features'  => ['Lead Ads', 'Retargeting', 'Conversion Campaigns'],
                'techStack' => ['Meta Ads Manager', 'Pixel', 'Analytics']
            ],

            'instagram' => [
                'tab_name'  => 'Instagram Ads',
                'tab_icon'  => 'fa-brands fa-instagram',
                'title'     => 'Instagram Growth Advertising',
                'tagline'   => 'Visual Brand Growth',
                'desc'      => 'Promote products and services with creative Instagram ad campaigns.',
                'image'     => 'assets/images/services/social-media-advertising-instagram.png',
                'metric'    => ['val' => 'High', 'lbl' => 'Engagement', 'icon' => 'fa-solid fa-heart'],
                'features'  => ['Story Ads', 'Reels Ads', 'Product Promotions'],
                'techStack' => ['Meta Ads', 'Creative Testing']
            ],

            'linkedin' => [
                'tab_name'  => 'LinkedIn Ads',
                'tab_icon'  => 'fa-brands fa-linkedin',
                'title'     => 'LinkedIn B2B Advertising',
                'tagline'   => 'Professional Lead Generation',
                'desc'      => 'Generate B2B leads and decision-maker reach with LinkedIn campaigns.',
                'image'     => 'assets/images/services/social-media-advertising-linkedin.png',
                'metric'    => ['val' => 'B2B', 'lbl' => 'Leads', 'icon' => 'fa-solid fa-briefcase'],
                'features'  => ['Lead Forms', 'Sponsored Content', 'Audience Targeting'],
                'techStack' => ['LinkedIn Campaign Manager']
            ],

            'retargeting' => [
                'tab_name'  => 'Retargeting',
                'tab_icon'  => 'fa-solid fa-rotate',
                'title'     => 'Retargeting Ad Campaigns',
                'tagline'   => 'Recover Lost Visitors',
                'desc'      => 'Bring back previous visitors and turn them into paying customers.',
                'image'     => 'assets/images/services/social-media-advertising-retargeting.png',
                'metric'    => ['val' => 'High', 'lbl' => 'Conversions', 'icon' => 'fa-solid fa-bullseye'],
                'features'  => ['Cart Recovery', 'Remarketing', 'Dynamic Ads'],
                'techStack' => ['Meta Pixel', 'Audience Sync']
            ],

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Process',
        'title' => 'Our <span class="gradient-text">Advertising Process</span>',
        'subtitle' => 'A proven framework for profitable paid social growth.',
        'steps' => [
            ['title' => 'Research', 'desc' => 'Audience, competitors and offer analysis.', 'icon' => 'fa-solid fa-magnifying-glass'],
            ['title' => 'Creative Setup', 'desc' => 'Build ad copy, visuals and landing flows.', 'icon' => 'fa-solid fa-pen-ruler'],
            ['title' => 'Campaign Launch', 'desc' => 'Deploy campaigns with precise targeting.', 'icon' => 'fa-solid fa-rocket'],
            ['title' => 'Optimization', 'desc' => 'Improve CTR, CPC and conversions.', 'icon' => 'fa-solid fa-chart-line'],
            ['title' => 'Reporting', 'desc' => 'Transparent monthly growth reporting.', 'icon' => 'fa-solid fa-file-lines'],
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Benefits',
        'title' => 'Why Choose <span class="gradient-text">' . COMPANY_NAME . '</span>',
        'subtitle' => 'Results-driven campaigns managed by growth specialists.',
        'cards' => [
            ['icon' => 'fa-solid fa-users', 'title' => 'Qualified Leads', 'desc' => 'Reach users ready to buy.'],
            ['icon' => 'fa-solid fa-chart-line', 'title' => 'Higher ROI', 'desc' => 'Data-led optimization for profitability.'],
            ['icon' => 'fa-solid fa-bullseye', 'title' => 'Precise Targeting', 'desc' => 'Target by behavior, interest and intent.'],
            ['icon' => 'fa-solid fa-rocket', 'title' => 'Fast Growth', 'desc' => 'Scale traffic and sales quickly.'],
            ['icon' => 'fa-solid fa-repeat', 'title' => 'Retargeting Power', 'desc' => 'Recover lost visitors effectively.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'Dedicated Support', 'desc' => 'Expert campaign managers assigned.'],
        ]
    ],

    /* ================= PORTFOLIO ================= */
    'portfolio' => [
        'tag' => '<i class="fa-solid fa-briefcase"></i>&nbsp; Results',
        'title' => 'Our <span class="gradient-text">Advertising Success Stories</span>',
        'subtitle' => 'See campaigns that delivered measurable growth.',
        'filter_categories' => ['social', 'ads', 'growth']
    ],

    /* ================= TESTIMONIALS ================= */
    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'What platforms do you advertise on?',
                'a' => 'We run campaigns on Facebook, Instagram, LinkedIn and other paid social platforms.'
            ],
            [
                'q' => 'How much budget do I need?',
                'a' => 'Budgets vary by industry, goals and competition. We recommend based on your objectives.'
            ],
            [
                'q' => 'How soon can I see results?',
                'a' => 'Many campaigns show early signals within days, with optimization gains over time.'
            ],
            [
                'q' => 'Do you create ad creatives too?',
                'a' => 'Yes, we handle copywriting, visuals, testing and landing page guidance.'
            ],
            [
                'q' => 'Do you provide reports?',
                'a' => 'Yes, we provide clear performance reports with actionable insights.'
            ],
        ]
    ]
];
