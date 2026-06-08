<?php
// config/services/product-listing-ads.php

return [
    'menu_category' => 'ppc',
    'menu_title' => 'Product Listing Ads',
    'menu_desc' => 'Visual shopping ads that drive immediate revenue.',
    'menu_icon' => 'fa-solid fa-tag',


    'pageTitle' => 'Product Listing Ads Services | ' . COMPANY_NAME . ' - Boost Product Sales',
    'pageDescription' => 'Product Listing Ads (PLA) services by ' . COMPANY_NAME . '. Increase ecommerce sales with optimized Google Shopping campaigns and product feed management.',
    'pageKey' => 'product_listing_ads',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-solid fa-cart-shopping"></i>&nbsp; Product Listing Ads',
        'title' => 'Increase Sales with <span class="gradient-text">Product Listing Ads</span>',
        'subtitle' => 'Showcase your products directly in search results with high-converting Google Shopping campaigns.',
        'metrics' => [
            ['val' => '4X', 'lbl' => 'ROAS'],
            ['val' => '300%', 'lbl' => 'Sales Growth'],
            ['val' => '100+', 'lbl' => 'Stores Scaled'],
        ],
        'form_title' => 'Start Your Shopping Ads',
        'form_sub' => 'Boost your product visibility and sales today.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'Shopping Ads',
        'title' => 'Show Products Where <span class="gradient-text">Customers Are Searching</span>',
        'subtitle' => 'Our PLA strategies ensure your products appear at the top of search results with images, prices, and details.',
        'features' => [
            [
                'icon' => 'fa-solid fa-eye',
                'title' => 'High Visibility',
                'desc' => 'Display products directly in Google search results.'
            ],
            [
                'icon' => 'fa-solid fa-cart-plus',
                'title' => 'Higher Conversions',
                'desc' => 'Attract ready-to-buy customers with product-focused ads.'
            ],
        ],
        'img' => 'assets/images/services/product-listing-ads-intro.png',
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
            'lbl'  => 'Shopping Ads Experts'
        ]
    ],

    /* ================= TYPES ================= */
    'types' => [
        'tag' => '<i class="fa-solid fa-layer-group"></i>&nbsp; PLA Services',
        'title' => 'Our <span class="gradient-text">Product Listing Ads Solutions</span>',
        'subtitle' => 'Complete Google Shopping and PLA management services.',
        'panels' => [

            'shopping' => [
                'tab_name'  => 'Shopping Ads',
                'tab_icon'  => 'fa-solid fa-cart-shopping',
                'title'     => 'Google Shopping Campaigns',
                'tagline'   => 'Showcase Products',
                'desc'      => 'Run optimized shopping campaigns to drive product sales.',
                'image'     => 'assets/images/services/product-listing-ads-shopping.png',
                'metric'    => ['val' => 'Top', 'lbl' => 'Placement', 'icon' => 'fa-solid fa-trophy'],
                'features'  => ['Product Ads', 'Smart Campaigns', 'Bid Optimization'],
                'techStack' => ['Google Ads', 'Merchant Center']
            ],

            'feed' => [
                'tab_name'  => 'Feed Setup',
                'tab_icon'  => 'fa-solid fa-database',
                'title'     => 'Product Feed Setup',
                'tagline'   => 'Strong Foundation',
                'desc'      => 'Set up and structure product feeds for better performance.',
                'image'     => 'assets/images/services/product-listing-ads-feed.png',
                'metric'    => ['val' => 'Accurate', 'lbl' => 'Data', 'icon' => 'fa-solid fa-check'],
                'features'  => ['Feed Creation', 'Attribute Mapping', 'Error Fixing'],
                'techStack' => ['Google Merchant Center', 'Feed Tools']
            ],

            'optimization' => [
                'tab_name'  => 'Feed Optimization',
                'tab_icon'  => 'fa-solid fa-gears',
                'title'     => 'Product Feed Optimization',
                'tagline'   => 'Improve Performance',
                'desc'      => 'Optimize product titles, descriptions, and images for better CTR.',
                'image'     => 'assets/images/services/product-listing-ads-optimization.png',
                'metric'    => ['val' => 'High', 'lbl' => 'CTR', 'icon' => 'fa-solid fa-chart-line'],
                'features'  => ['Title Optimization', 'Image Enhancement', 'Keyword Mapping'],
                'techStack' => ['Analytics', 'Merchant Tools']
            ],

            'remarketing' => [
                'tab_name'  => 'Remarketing',
                'tab_icon'  => 'fa-solid fa-rotate',
                'title'     => 'Dynamic Remarketing Ads',
                'tagline'   => 'Recover Lost Sales',
                'desc'      => 'Show personalized product ads to users who visited your store.',
                'image'     => 'assets/images/services/product-listing-ads-remarketing.png',
                'metric'    => ['val' => '2X', 'lbl' => 'Conversions', 'icon' => 'fa-solid fa-repeat'],
                'features'  => ['Dynamic Ads', 'Audience Targeting', 'Cart Recovery'],
                'techStack' => ['Google Ads', 'Tag Manager']
            ],

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Process',
        'title' => 'Our <span class="gradient-text">PLA Campaign Process</span>',
        'subtitle' => 'A structured approach to maximize product sales.',
        'steps' => [
            ['title' => 'Product Analysis', 'desc' => 'Understanding your catalog.', 'icon' => 'fa-solid fa-magnifying-glass'],
            ['title' => 'Feed Setup', 'desc' => 'Creating optimized product feeds.', 'icon' => 'fa-solid fa-database'],
            ['title' => 'Campaign Launch', 'desc' => 'Running shopping campaigns.', 'icon' => 'fa-solid fa-rocket'],
            ['title' => 'Optimization', 'desc' => 'Improving CTR and conversions.', 'icon' => 'fa-solid fa-chart-line'],
            ['title' => 'Scaling', 'desc' => 'Maximizing ROAS.', 'icon' => 'fa-solid fa-arrow-up'],
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Benefits',
        'title' => 'Why Choose <span class="gradient-text">' . COMPANY_NAME . '</span>',
        'subtitle' => 'We deliver high-performance product advertising.',
        'cards' => [
            ['icon' => 'fa-solid fa-eye', 'title' => 'Better Visibility', 'desc' => 'Show products in search results.'],
            ['icon' => 'fa-solid fa-cart-shopping', 'title' => 'More Sales', 'desc' => 'Increase conversions.'],
            ['icon' => 'fa-solid fa-chart-line', 'title' => 'Higher ROAS', 'desc' => 'Maximize ad returns.'],
            ['icon' => 'fa-solid fa-bullseye', 'title' => 'Targeted Buyers', 'desc' => 'Reach ready customers.'],
            ['icon' => 'fa-solid fa-repeat', 'title' => 'Remarketing', 'desc' => 'Recover lost sales.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'Support', 'desc' => 'Continuous optimization.'],
        ]
    ],

    /* ================= PORTFOLIO ================= */
    'portfolio' => [
        'tag' => '<i class="fa-solid fa-briefcase"></i>&nbsp; Portfolio',
        'title' => 'Our <span class="gradient-text">PLA Results</span>',
        'subtitle' => 'See how we increased product sales.',
        'filter_categories' => ['shopping', 'ads', 'ecommerce']
    ],

    /* ================= TESTIMONIALS ================= */
    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'What are Product Listing Ads (PLA)?',
                'a' => 'PLA are ads that display your product image, price, and details directly in search results.'
            ],
            [
                'q' => 'Do I need Google Merchant Center?',
                'a' => 'Yes, Merchant Center is required to upload and manage product data for shopping ads.'
            ],
            [
                'q' => 'How do PLA improve sales?',
                'a' => 'They attract high-intent buyers by showing product details upfront, increasing conversions.'
            ],
            [
                'q' => 'Can you optimize my product feed?',
                'a' => 'Yes, we optimize titles, descriptions, and images for better performance.'
            ],
            [
                'q' => 'How quickly can I see results?',
                'a' => 'Most campaigns start generating traffic and sales within a few days of launch.',
            ],
        ]
    ]
];
