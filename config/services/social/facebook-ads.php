<?php
// config/services/facebook-ads.php

return [
    'menu_category' => 'social',
    'menu_title' => 'Facebook Ads',
    'menu_desc' => 'Hyper-targeted social advertising for lead generation.',
    'menu_icon' => 'fa-brands fa-facebook-f',


    'pageTitle' => 'Facebook Ads Services | ' . COMPANY_NAME . ' - High-Converting Campaigns',
    'pageDescription' => 'Professional Facebook Ads services by ' . COMPANY_NAME . '. Generate leads, sales, and brand awareness with high-performing Meta ad campaigns.',
    'pageKey' => 'facebook_ads',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-brands fa-facebook"></i>&nbsp; Facebook Ads',
        'title' => 'Scale Your Business with <span class="gradient-text">Facebook Ads</span>',
        'subtitle' => 'We create and manage high-performing Facebook and Instagram ad campaigns that drive leads and sales.',
        'metrics' => [
            ['val' => '4X', 'lbl' => 'ROAS'],
            ['val' => '300%', 'lbl' => 'Lead Growth'],
            ['val' => '150+', 'lbl' => 'Campaigns Managed'],
        ],
        'form_title' => 'Start Your Facebook Ads',
        'form_sub' => 'Get expert-managed campaigns for maximum ROI.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'Meta Advertising',
        'title' => 'Reach the Right Audience with <span class="gradient-text">Facebook & Instagram Ads</span>',
        'subtitle' => 'Our strategies focus on targeting, creative ads, and optimization to maximize results.',
        'features' => [
            [
                'icon' => 'fa-solid fa-bullseye',
                'title' => 'Precise Targeting',
                'desc' => 'Reach users based on interests, behavior, and demographics.'
            ],
            [
                'icon' => 'fa-solid fa-chart-line',
                'title' => 'High ROI',
                'desc' => 'Optimize campaigns to maximize conversions and revenue.'
            ],
        ],
        'img' => 'assets/images/services/facebook-ads-intro.png',
        'glass_card_1' => [
            'icon' => 'fa-solid fa-chart-line',
            'label' => 'Leads',
            'val' => '+300%',
            'width' => '95%'
        ],
        'glass_card_2' => [
            'icon' => 'fa-solid fa-dollar-sign',
            'label' => 'ROAS',
            'val' => '4X',
            'sub' => 'Growth'
        ],
        'floating_badge' => [
            'icon' => 'fa-solid fa-award',
            'lbl'  => 'Meta Ads Experts'
        ]
    ],

    /* ================= TYPES ================= */
    'types' => [
        'tag' => '<i class="fa-solid fa-layer-group"></i>&nbsp; Facebook Ads Services',
        'title' => 'Our <span class="gradient-text">Facebook Ads Solutions</span>',
        'subtitle' => 'Complete Meta advertising services.',
        'panels' => [

            'lead' => [
                'tab_name'  => 'Lead Ads',
                'tab_icon'  => 'fa-solid fa-user-plus',
                'title'     => 'Lead Generation Ads',
                'tagline'   => 'Generate Quality Leads',
                'desc'      => 'Capture high-quality leads with optimized ad funnels.',
                'image'     => 'assets/images/services/facebook-ads-lead.png',
                'metric'    => ['val' => 'High', 'lbl' => 'Leads', 'icon' => 'fa-solid fa-users'],
                'features'  => ['Lead Forms', 'Audience Targeting', 'Conversion Tracking'],
                'techStack' => ['Meta Ads', 'CRM Integration']
            ],

            'ecommerce' => [
                'tab_name'  => 'Ecommerce Ads',
                'tab_icon'  => 'fa-solid fa-cart-shopping',
                'title'     => 'Ecommerce Facebook Ads',
                'tagline'   => 'Drive Sales',
                'desc'      => 'Promote products with high-converting ecommerce campaigns.',
                'image'     => 'assets/images/services/facebook-ads-ecommerce.png',
                'metric'    => ['val' => '4X', 'lbl' => 'ROAS', 'icon' => 'fa-solid fa-chart-line'],
                'features'  => ['Dynamic Ads', 'Catalog Ads', 'Retargeting'],
                'techStack' => ['Meta Ads', 'Shopify', 'WooCommerce']
            ],

            'remarketing' => [
                'tab_name'  => 'Remarketing',
                'tab_icon'  => 'fa-solid fa-rotate',
                'title'     => 'Facebook Remarketing Ads',
                'tagline'   => 'Convert Visitors',
                'desc'      => 'Re-target users who interacted with your brand.',
                'image'     => 'assets/images/services/facebook-ads-remarketing.png',
                'metric'    => ['val' => '2X', 'lbl' => 'Conversions', 'icon' => 'fa-solid fa-repeat'],
                'features'  => ['Custom Audiences', 'Dynamic Ads', 'Conversion Tracking'],
                'techStack' => ['Meta Pixel', 'Analytics']
            ],

            'branding' => [
                'tab_name'  => 'Brand Awareness',
                'tab_icon'  => 'fa-solid fa-bullhorn',
                'title'     => 'Brand Awareness Campaigns',
                'tagline'   => 'Build Recognition',
                'desc'      => 'Increase visibility and awareness with targeted campaigns.',
                'image'     => 'assets/images/services/facebook-ads-branding.png',
                'metric'    => ['val' => 'Wide', 'lbl' => 'Reach', 'icon' => 'fa-solid fa-globe'],
                'features'  => ['Video Ads', 'Reach Campaigns', 'Engagement Ads'],
                'techStack' => ['Meta Ads', 'Instagram Ads']
            ],

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Process',
        'title' => 'Our <span class="gradient-text">Facebook Ads Process</span>',
        'subtitle' => 'A proven strategy for ad success.',
        'steps' => [
            ['title' => 'Audience Research', 'desc' => 'Understanding target audience.', 'icon' => 'fa-solid fa-users'],
            ['title' => 'Ad Creation', 'desc' => 'Designing creative ads.', 'icon' => 'fa-solid fa-pen'],
            ['title' => 'Campaign Setup', 'desc' => 'Launching campaigns.', 'icon' => 'fa-solid fa-rocket'],
            ['title' => 'Optimization', 'desc' => 'Improving performance.', 'icon' => 'fa-solid fa-chart-line'],
            ['title' => 'Scaling', 'desc' => 'Maximizing ROI.', 'icon' => 'fa-solid fa-arrow-up'],
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Benefits',
        'title' => 'Why Choose <span class="gradient-text">' . COMPANY_NAME . '</span>',
        'subtitle' => 'We deliver performance-driven Facebook Ads.',
        'cards' => [
            ['icon' => 'fa-solid fa-bullseye', 'title' => 'Targeted Reach', 'desc' => 'Reach the right audience.'],
            ['icon' => 'fa-solid fa-chart-line', 'title' => 'High ROI', 'desc' => 'Maximize returns.'],
            ['icon' => 'fa-solid fa-users', 'title' => 'More Leads', 'desc' => 'Generate quality leads.'],
            ['icon' => 'fa-solid fa-cart-shopping', 'title' => 'More Sales', 'desc' => 'Increase revenue.'],
            ['icon' => 'fa-solid fa-gear', 'title' => 'Optimization', 'desc' => 'Continuous improvement.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'Support', 'desc' => 'Dedicated experts.'],
        ]
    ],

    /* ================= PORTFOLIO ================= */
    'portfolio' => [
        'tag' => '<i class="fa-solid fa-briefcase"></i>&nbsp; Portfolio',
        'title' => 'Our <span class="gradient-text">Facebook Ads Results</span>',
        'subtitle' => 'See how we generated leads and sales.',
        'filter_categories' => ['facebook', 'ads', 'social']
    ],

    /* ================= TESTIMONIALS ================= */
    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'What are Facebook Ads?',
                'a' => 'Facebook Ads are paid campaigns that allow businesses to promote products and services on Facebook and Instagram.'
            ],
            [
                'q' => 'How much budget is needed?',
                'a' => 'Budget depends on your goals and competition. We optimize campaigns for best ROI.'
            ],
            [
                'q' => 'Can Facebook Ads generate leads?',
                'a' => 'Yes, Facebook Ads are highly effective for lead generation and conversions.'
            ],
            [
                'q' => 'Do you manage Instagram Ads too?',
                'a' => 'Yes, we manage both Facebook and Instagram ad campaigns.'
            ],
            [
                'q' => 'How quickly can I see results?',
                'a' => 'Most campaigns start generating results within a few days.',
            ],
        ]
    ]
];
