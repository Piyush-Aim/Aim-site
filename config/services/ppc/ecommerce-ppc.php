<?php
// config/services/ecommerce-ppc.php

return [
    'menu_category' => 'ppc',
    'menu_title' => 'Ecommerce PPC',
    'menu_desc' => 'Strategic product-focused ads for retail growth.',
    'menu_icon' => 'fa-solid fa-bag-shopping',


    'pageTitle' => 'Ecommerce PPC Services | ' . COMPANY_NAME . ' - Boost Online Sales',
    'pageDescription' => 'Ecommerce PPC services by ' . COMPANY_NAME . '. Increase product sales with Google Shopping Ads, search ads, and high-converting paid campaigns.',
    'pageKey' => 'ecommerce_ppc',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-solid fa-cart-shopping"></i>&nbsp; Ecommerce PPC',
        'title' => 'Increase Sales with <span class="gradient-text">Ecommerce PPC</span>',
        'subtitle' => 'We run high-converting ecommerce ad campaigns that drive targeted traffic and maximize your return on ad spend (ROAS).',
        'metrics' => [
            ['val' => '4X', 'lbl' => 'ROAS'],
            ['val' => '300%', 'lbl' => 'Sales Growth'],
            ['val' => '150+', 'lbl' => 'Stores Scaled'],
        ],
        'form_title' => 'Scale Your Ecommerce Ads',
        'form_sub' => 'Get expert-managed campaigns that boost your product sales.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'Ecommerce Advertising',
        'title' => 'Turn Clicks into <span class="gradient-text">Sales & Revenue</span>',
        'subtitle' => 'Our ecommerce PPC strategies focus on attracting buyers, optimizing product ads, and increasing conversions.',
        'features' => [
            [
                'icon' => 'fa-solid fa-bullseye',
                'title' => 'High-Intent Traffic',
                'desc' => 'Target customers ready to purchase your products.'
            ],
            [
                'icon' => 'fa-solid fa-chart-line',
                'title' => 'ROAS Focused',
                'desc' => 'Maximize your return on ad spend with optimized campaigns.'
            ],
        ],
        'img' => 'assets/images/services/ecommerce-ppc-intro.png',
        'glass_card_1' => [
            'icon' => 'fa-solid fa-chart-line',
            'label' => 'Sales',
            'val' => '+300%',
            'width' => '95%'
        ],
        'glass_card_2' => [
            'icon' => 'fa-solid fa-cart-shopping',
            'label' => 'Orders',
            'val' => 'High',
            'sub' => 'Conversion'
        ],
        'floating_badge' => [
            'icon' => 'fa-solid fa-award',
            'lbl'  => 'Ecommerce Ads Experts'
        ]
    ],

    /* ================= TYPES ================= */
    'types' => [
        'tag' => '<i class="fa-solid fa-layer-group"></i>&nbsp; Ecommerce PPC Services',
        'title' => 'Our <span class="gradient-text">Ecommerce Advertising Solutions</span>',
        'subtitle' => 'Complete paid ad strategies for online stores.',
        'panels' => [

            'shopping' => [
                'tab_name'  => 'Shopping Ads',
                'tab_icon'  => 'fa-solid fa-cart-shopping',
                'title'     => 'Google Shopping Ads',
                'tagline'   => 'Show Products Directly',
                'desc'      => 'Promote your products with high-visibility shopping ads in search results.',
                'image'     => 'assets/images/services/ecommerce-ppc-shopping.png',
                'metric'    => ['val' => 'Top', 'lbl' => 'Product Visibility', 'icon' => 'fa-solid fa-eye'],
                'features'  => ['Product Listings', 'Feed Optimization', 'Smart Bidding'],
                'techStack' => ['Google Merchant Center', 'Shopify', 'WooCommerce']
            ],

            'search' => [
                'tab_name'  => 'Search Ads',
                'tab_icon'  => 'fa-solid fa-magnifying-glass',
                'title'     => 'Ecommerce Search Ads',
                'tagline'   => 'Capture Buyer Intent',
                'desc'      => 'Target high-intent keywords to drive ready-to-buy customers.',
                'image'     => 'assets/images/services/ecommerce-ppc-search.png',
                'metric'    => ['val' => 'High', 'lbl' => 'Intent Traffic', 'icon' => 'fa-solid fa-bullseye'],
                'features'  => ['Keyword Targeting', 'Ad Copy Optimization', 'Conversion Tracking'],
                'techStack' => ['Google Ads', 'Analytics', 'Keyword Planner']
            ],

            'remarketing' => [
                'tab_name'  => 'Remarketing',
                'tab_icon'  => 'fa-solid fa-rotate',
                'title'     => 'Ecommerce Remarketing',
                'tagline'   => 'Recover Lost Sales',
                'desc'      => 'Re-target visitors who didn’t purchase and bring them back to convert.',
                'image'     => 'assets/images/services/ecommerce-ppc-remarketing.png',
                'metric'    => ['val' => '2X', 'lbl' => 'Conversion Rate', 'icon' => 'fa-solid fa-repeat'],
                'features'  => ['Dynamic Ads', 'Audience Segmentation', 'Cart Recovery'],
                'techStack' => ['Google Ads', 'Facebook Pixel']
            ],

            'feed' => [
                'tab_name'  => 'Feed Optimization',
                'tab_icon'  => 'fa-solid fa-database',
                'title'     => 'Product Feed Optimization',
                'tagline'   => 'Optimize Product Data',
                'desc'      => 'Improve product feed quality to increase visibility and conversions.',
                'image'     => 'assets/images/services/ecommerce-ppc-feed.png',
                'metric'    => ['val' => 'High', 'lbl' => 'CTR', 'icon' => 'fa-solid fa-chart-line'],
                'features'  => ['Feed Structuring', 'Title Optimization', 'Image Optimization'],
                'techStack' => ['Google Merchant Center', 'Feed Tools']
            ],

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Process',
        'title' => 'Our <span class="gradient-text">Ecommerce PPC Process</span>',
        'subtitle' => 'A proven system to scale your store.',
        'steps' => [
            ['title' => 'Store Analysis', 'desc' => 'Understanding your products and audience.', 'icon' => 'fa-solid fa-magnifying-glass'],
            ['title' => 'Campaign Setup', 'desc' => 'Launching optimized ad campaigns.', 'icon' => 'fa-solid fa-pen'],
            ['title' => 'Feed Optimization', 'desc' => 'Improving product listings.', 'icon' => 'fa-solid fa-database'],
            ['title' => 'Ad Optimization', 'desc' => 'Improving CTR and conversions.', 'icon' => 'fa-solid fa-chart-line'],
            ['title' => 'Scaling', 'desc' => 'Increasing budget for profitable campaigns.', 'icon' => 'fa-solid fa-rocket'],
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Benefits',
        'title' => 'Why Choose <span class="gradient-text">' . COMPANY_NAME . '</span>',
        'subtitle' => 'We deliver results-driven ecommerce advertising.',
        'cards' => [
            ['icon' => 'fa-solid fa-cart-shopping', 'title' => 'More Sales', 'desc' => 'Increase product purchases.'],
            ['icon' => 'fa-solid fa-chart-line', 'title' => 'Higher ROAS', 'desc' => 'Maximize ad profitability.'],
            ['icon' => 'fa-solid fa-bullseye', 'title' => 'Targeted Buyers', 'desc' => 'Reach ready-to-buy customers.'],
            ['icon' => 'fa-solid fa-repeat', 'title' => 'Remarketing', 'desc' => 'Recover lost customers.'],
            ['icon' => 'fa-solid fa-rocket', 'title' => 'Scalable', 'desc' => 'Grow your store efficiently.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'Support', 'desc' => 'Continuous campaign optimization.'],
        ]
    ],

    /* ================= PORTFOLIO ================= */
    'portfolio' => [
        'tag' => '<i class="fa-solid fa-briefcase"></i>&nbsp; Portfolio',
        'title' => 'Our <span class="gradient-text">Ecommerce PPC Results</span>',
        'subtitle' => 'See how we scaled online stores.',
        'filter_categories' => ['ppc', 'ecommerce', 'ads']
    ],

    /* ================= TESTIMONIALS ================= */
    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'What is Ecommerce PPC?',
                'a' => 'Ecommerce PPC involves running paid ads to promote products and drive sales through platforms like Google Ads.'
            ],
            [
                'q' => 'Which ads work best for ecommerce?',
                'a' => 'Google Shopping Ads and remarketing campaigns are highly effective for ecommerce stores.'
            ],
            [
                'q' => 'How much budget is needed?',
                'a' => 'Budget depends on your niche and competition, but we optimize campaigns for maximum ROAS.'
            ],
            [
                'q' => 'Can PPC increase my sales quickly?',
                'a' => 'Yes, PPC can drive immediate traffic and sales when optimized properly.'
            ],
            [
                'q' => 'Do you optimize product feeds?',
                'a' => 'Yes, we optimize product titles, descriptions, and images for better performance.',
            ],
        ]
    ]
];
