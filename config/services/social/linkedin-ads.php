<?php
// config/services/linkedin-ads.php

return [
    'menu_category' => 'social',
    'menu_title' => 'LinkedIn Ads',
    'menu_desc' => 'B2B advertising targeting decision-makers.',
    'menu_icon' => 'fa-brands fa-linkedin-in',


    'pageTitle' => 'LinkedIn Ads Services | ' . COMPANY_NAME . ' - B2B Lead Generation',
    'pageDescription' => 'Professional LinkedIn Ads services by ' . COMPANY_NAME . '. Generate high-quality B2B leads and reach decision-makers with targeted campaigns.',
    'pageKey' => 'linkedin_ads',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-brands fa-linkedin"></i>&nbsp; LinkedIn Ads',
        'title' => 'Generate High-Quality Leads with <span class="gradient-text">LinkedIn Ads</span>',
        'subtitle' => 'We create targeted LinkedIn ad campaigns to connect you with professionals, decision-makers, and B2B clients.',
        'metrics' => [
            ['val' => '3X', 'lbl' => 'Lead Quality'],
            ['val' => '200%', 'lbl' => 'B2B Growth'],
            ['val' => '100+', 'lbl' => 'Campaigns Managed'],
        ],
        'form_title' => 'Start Your LinkedIn Ads',
        'form_sub' => 'Reach decision-makers and grow your business.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'B2B Advertising',
        'title' => 'Reach Professionals & <span class="gradient-text">Decision Makers</span>',
        'subtitle' => 'Our LinkedIn Ads strategies focus on precise targeting, professional audiences, and high-quality lead generation.',
        'features' => [
            [
                'icon' => 'fa-solid fa-users',
                'title' => 'Targeted Professionals',
                'desc' => 'Reach CEOs, managers, and industry experts.'
            ],
            [
                'icon' => 'fa-solid fa-briefcase',
                'title' => 'B2B Focused',
                'desc' => 'Perfect for high-ticket and service-based businesses.'
            ],
        ],
        'img' => 'assets/images/services/linkedin-ads-intro.webp',
        'glass_card_1' => [
            'icon' => 'fa-solid fa-chart-line',
            'label' => 'Leads',
            'val' => '+200%',
            'width' => '95%'
        ],
        'glass_card_2' => [
            'icon' => 'fa-solid fa-user-tie',
            'label' => 'Quality',
            'val' => 'High',
            'sub' => 'Leads'
        ],
        'floating_badge' => [
            'icon' => 'fa-solid fa-award',
            'lbl'  => 'LinkedIn Ads Experts'
        ]
    ],

    /* ================= TYPES ================= */
    'types' => [
        'tag' => '<i class="fa-solid fa-layer-group"></i>&nbsp; LinkedIn Ads Services',
        'title' => 'Our <span class="gradient-text">LinkedIn Advertising Solutions</span>',
        'subtitle' => 'Comprehensive B2B advertising services.',
        'panels' => [

            'lead' => [
                'tab_name'  => 'Lead Gen Ads',
                'tab_icon'  => 'fa-solid fa-user-plus',
                'title'     => 'LinkedIn Lead Generation Ads',
                'tagline'   => 'Capture Quality Leads',
                'desc'      => 'Generate high-quality B2B leads with optimized forms.',
                'image'     => 'assets/images/services/linkedin-ads-inmail.webp',
                'metric'    => ['val' => 'High', 'lbl' => 'Leads', 'icon' => 'fa-solid fa-users'],
                'features'  => ['Lead Forms', 'Audience Targeting', 'CRM Integration'],
                'techStack' => ['LinkedIn Ads', 'CRM Tools']
            ],

            'sponsored' => [
                'tab_name'  => 'Sponsored Content',
                'tab_icon'  => 'fa-solid fa-newspaper',
                'title'     => 'Sponsored Content Ads',
                'tagline'   => 'Promote Content',
                'desc'      => 'Promote posts directly in user feeds to increase visibility.',
                'image'     => 'assets/images/services/linkedin-ads-lead.webp',
                'metric'    => ['val' => 'Wide', 'lbl' => 'Reach', 'icon' => 'fa-solid fa-globe'],
                'features'  => ['Feed Ads', 'Engagement Campaigns', 'Targeting'],
                'techStack' => ['LinkedIn Ads']
            ],

            'message' => [
                'tab_name'  => 'Message Ads',
                'tab_icon'  => 'fa-solid fa-envelope',
                'title'     => 'LinkedIn Message Ads',
                'tagline'   => 'Direct Outreach',
                'desc'      => 'Send personalized messages directly to your target audience.',
                'image'     => 'assets/images/services/linkedin-ads-sponsored.webp',
                'metric'    => ['val' => 'Direct', 'lbl' => 'Engagement', 'icon' => 'fa-solid fa-envelope-open'],
                'features'  => ['Personalized Messaging', 'Targeted Outreach', 'Lead Conversion'],
                'techStack' => ['LinkedIn Ads']
            ],

            'branding' => [
                'tab_name'  => 'Brand Awareness',
                'tab_icon'  => 'fa-solid fa-bullhorn',
                'title'     => 'Brand Awareness Campaigns',
                'tagline'   => 'Build Authority',
                'desc'      => 'Increase brand visibility among professionals.',
                'image'     => 'assets/images/services/linkedin-ads-dynamic.webp',
                'metric'    => ['val' => 'Strong', 'lbl' => 'Brand', 'icon' => 'fa-solid fa-award'],
                'features'  => ['Video Ads', 'Awareness Campaigns', 'Engagement'],
                'techStack' => ['LinkedIn Ads']
            ],

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Process',
        'title' => 'Our <span class="gradient-text">LinkedIn Ads Process</span>',
        'subtitle' => 'A proven B2B advertising strategy.',
        'steps' => [
            ['title' => 'Audience Targeting', 'desc' => 'Identify decision-makers.', 'icon' => 'fa-solid fa-user-tie'],
            ['title' => 'Ad Creation', 'desc' => 'Create professional ads.', 'icon' => 'fa-solid fa-pen'],
            ['title' => 'Campaign Setup', 'desc' => 'Launch campaigns.', 'icon' => 'fa-solid fa-rocket'],
            ['title' => 'Optimization', 'desc' => 'Improve performance.', 'icon' => 'fa-solid fa-chart-line'],
            ['title' => 'Scaling', 'desc' => 'Maximize ROI.', 'icon' => 'fa-solid fa-arrow-up'],
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Benefits',
        'title' => 'Why Choose <span class="gradient-text">' . COMPANY_NAME . '</span>',
        'subtitle' => 'We deliver high-quality B2B leads.',
        'cards' => [
            ['icon' => 'fa-solid fa-user-tie', 'title' => 'Decision Makers', 'desc' => 'Target key professionals.'],
            ['icon' => 'fa-solid fa-chart-line', 'title' => 'High ROI', 'desc' => 'Maximize returns.'],
            ['icon' => 'fa-solid fa-users', 'title' => 'Quality Leads', 'desc' => 'Better lead quality.'],
            ['icon' => 'fa-solid fa-briefcase', 'title' => 'B2B Focus', 'desc' => 'Perfect for businesses.'],
            ['icon' => 'fa-solid fa-gear', 'title' => 'Optimization', 'desc' => 'Continuous improvements.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'Support', 'desc' => 'Expert team support.'],
        ]
    ],

    /* ================= PORTFOLIO ================= */
    'portfolio' => [
        'tag' => '<i class="fa-solid fa-briefcase"></i>&nbsp; Portfolio',
        'title' => 'Our <span class="gradient-text">LinkedIn Ads Results</span>',
        'subtitle' => 'See how we generated B2B leads.',
        'filter_categories' => ['linkedin', 'ads', 'b2b']
    ],

    /* ================= TESTIMONIALS ================= */
    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'What are LinkedIn Ads?',
                'a' => 'LinkedIn Ads are paid campaigns designed to reach professionals and businesses.'
            ],
            [
                'q' => 'Are LinkedIn Ads good for B2B?',
                'a' => 'Yes, LinkedIn Ads are highly effective for B2B lead generation.'
            ],
            [
                'q' => 'What budget is required?',
                'a' => 'LinkedIn Ads typically require a higher budget but deliver high-quality leads.'
            ],
            [
                'q' => 'Can you target specific industries?',
                'a' => 'Yes, we can target by industry, job title, company size, and more.'
            ],
            [
                'q' => 'How quickly can I see results?',
                'a' => 'Campaigns usually start generating leads within a few days to weeks.',
            ],
        ]
    ]
];
