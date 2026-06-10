<?php
// config/services/ecommerce-seo.php

return [
    'menu_category' => 'seo',
    'menu_title' => 'Ecommerce SEO',
    'menu_desc' => 'Optimizing product visibility for maximum sales conversions.',
    'menu_icon' => 'fa-solid fa-cart-shopping',


    'pageTitle' => 'Ecommerce SEO Services | ' . COMPANY_NAME . ' - Increase Online Sales',
    'pageDescription' => 'Boost your online store visibility with ecommerce SEO services by ' . COMPANY_NAME . '. Improve rankings, traffic, and conversions for your products.',
    'pageKey' => 'ecommerce_seo',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-solid fa-cart-shopping"></i>&nbsp; Ecommerce SEO',
        'title' => 'Grow Your Store with <span class="gradient-text">Ecommerce SEO</span>',
        'subtitle' => 'We help online stores rank higher, attract buyers, and increase conversions with data-driven SEO strategies.',
        'metrics' => [
            ['val' => '250%', 'lbl' => 'Traffic Growth'],
            ['val' => '3X', 'lbl' => 'Sales Increase'],
            ['val' => '100+', 'lbl' => 'Stores Optimized'],
        ],
        'form_title' => 'Boost Your Store Sales',
        'form_sub' => 'Get a free ecommerce SEO audit today.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'Ecommerce Optimization',
        'title' => 'Turn Traffic into <span class="gradient-text">Sales & Revenue</span>',
        'subtitle' => 'Our ecommerce SEO strategies focus on ranking your products and categories while improving conversion rates.',
        'features' => [
            [
                'icon' => 'fa-solid fa-magnifying-glass',
                'title' => 'Product Visibility',
                'desc' => 'Rank your products on Google and attract high-intent buyers.'
            ],
            [
                'icon' => 'fa-solid fa-cart-plus',
                'title' => 'Conversion Boost',
                'desc' => 'Optimize pages to turn visitors into customers.'
            ],
        ],
        'img' => 'assets/images/services/ecommerce-seo-intro.webp',
        'glass_card_1' => [
            'icon' => 'fa-solid fa-chart-line',
            'label' => 'Sales Growth',
            'val' => '+300%',
            'width' => '95%'
        ],
        'glass_card_2' => [
            'icon' => 'fa-solid fa-users',
            'label' => 'Customers',
            'val' => 'High',
            'sub' => 'Engagement'
        ],
        'floating_badge' => [
            'icon' => 'fa-solid fa-award',
            'lbl'  => 'SEO Experts'
        ]
    ],

    /* ================= TYPES ================= */
    'types' => [
        'tag' => '<i class="fa-solid fa-layer-group"></i>&nbsp; Ecommerce SEO Services',
        'title' => 'Our <span class="gradient-text">Ecommerce SEO Solutions</span>',
        'subtitle' => 'Complete SEO strategies to grow your online store.',
        'panels' => [

            'product' => [
                'tab_name'  => 'Product SEO',
                'tab_icon'  => 'fa-solid fa-box',
                'title'     => 'Product Page SEO',
                'tagline'   => 'Rank Your Products',
                'desc'      => 'Optimize product pages with keywords, descriptions, and structured data.',
                'image'     => 'assets/images/services/ecommerce-seo-product.webp',
                'metric'    => ['val' => 'Top', 'lbl' => 'Rankings', 'icon' => 'fa-solid fa-trophy'],
                'features'  => ['Keyword Optimization', 'Rich Snippets', 'Image SEO'],
                'techStack' => ['Schema.org', 'Ahrefs', 'SEMrush']
            ],

            'category' => [
                'tab_name'  => 'Category SEO',
                'tab_icon'  => 'fa-solid fa-layer-group',
                'title'     => 'Category Page Optimization',
                'tagline'   => 'Capture Bulk Traffic',
                'desc'      => 'Optimize category pages to rank for high-volume keywords.',
                'image' => 'assets/images/services/ecommerce-seo-category.webp',
                'metric'    => ['val' => 'High', 'lbl' => 'Traffic', 'icon' => 'fa-solid fa-chart-line'],
                'features'  => ['Category Content', 'Internal Linking', 'SEO Structure'],
                'techStack' => ['Google Search Console', 'Screaming Frog']
            ],

            'technical' => [
                'tab_name'  => 'Technical SEO',
                'tab_icon'  => 'fa-solid fa-gears',
                'title'     => 'Technical Ecommerce SEO',
                'tagline'   => 'Strong Backend',
                'desc'      => 'Fix technical issues to improve crawling, indexing, and performance.',
                'image'     => 'assets/images/services/ecommerce-seo-technical.webp',
                'metric'    => ['val' => '100%', 'lbl' => 'Optimized', 'icon' => 'fa-solid fa-check'],
                'features'  => ['Site Speed', 'Mobile Optimization', 'Schema Markup'],
                'techStack' => ['Lighthouse', 'Core Web Vitals', 'Schema']
            ],

            'conversion' => [
                'tab_name'  => 'Conversion',
                'tab_icon'  => 'fa-solid fa-bullseye',
                'title'     => 'Conversion Rate Optimization',
                'tagline'   => 'More Sales',
                'desc'      => 'Improve user experience to increase conversions and revenue.',
                'image'     => 'assets/images/services/ecommerce-seo-conversion.webp',
                'metric'    => ['val' => '3X', 'lbl' => 'Conversions', 'icon' => 'fa-solid fa-arrow-up'],
                'features'  => ['UX Optimization', 'A/B Testing', 'Checkout Optimization'],
                'techStack' => ['Hotjar', 'Google Analytics', 'Clarity']
            ],

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Process',
        'title' => 'Our <span class="gradient-text">Ecommerce SEO Process</span>',
        'subtitle' => 'A proven approach to grow your online store.',
        'steps' => [
            ['title' => 'Store Audit', 'desc' => 'Analyzing current SEO and performance.', 'icon' => 'fa-solid fa-magnifying-glass'],
            ['title' => 'Keyword Research', 'desc' => 'Finding buyer-intent keywords.', 'icon' => 'fa-solid fa-key'],
            ['title' => 'On-Page SEO', 'desc' => 'Optimizing product & category pages.', 'icon' => 'fa-solid fa-pen'],
            ['title' => 'Technical Fixes', 'desc' => 'Improving speed and indexing.', 'icon' => 'fa-solid fa-gears'],
            ['title' => 'Growth Tracking', 'desc' => 'Monitoring rankings and sales.', 'icon' => 'fa-solid fa-chart-line'],
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Benefits',
        'title' => 'Why Choose <span class="gradient-text">' . COMPANY_NAME . '</span>',
        'subtitle' => 'We help ecommerce brands scale with SEO.',
        'cards' => [
            ['icon' => 'fa-solid fa-cart-shopping', 'title' => 'More Sales', 'desc' => 'Increase conversions and revenue.'],
            ['icon' => 'fa-solid fa-chart-line', 'title' => 'Organic Growth', 'desc' => 'Get consistent traffic without ads.'],
            ['icon' => 'fa-solid fa-bullseye', 'title' => 'High Intent Traffic', 'desc' => 'Target ready-to-buy customers.'],
            ['icon' => 'fa-solid fa-rocket', 'title' => 'Scalable', 'desc' => 'Grow your store long-term.'],
            ['icon' => 'fa-solid fa-magnifying-glass', 'title' => 'Better Visibility', 'desc' => 'Rank products higher on Google.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'Support', 'desc' => 'Continuous optimization and support.'],
        ]
    ],

    /* ================= PORTFOLIO ================= */
    'portfolio' => [
        'tag' => '<i class="fa-solid fa-briefcase"></i>&nbsp; Portfolio',
        'title' => 'Our <span class="gradient-text">Ecommerce SEO Results</span>',
        'subtitle' => 'See how we helped online stores grow.',
        'filter_categories' => ['product', 'seo', 'conversion']
    ],

    /* ================= TESTIMONIALS ================= */
    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'What is Ecommerce SEO?',
                'a' => 'Ecommerce SEO focuses on optimizing product and category pages to rank higher in search engines and increase sales.'
            ],
            [
                'q' => 'How long does it take to see results?',
                'a' => 'Typically 2–4 months to see noticeable improvements depending on competition.'
            ],
            [
                'q' => 'Do you work with Shopify and WooCommerce?',
                'a' => 'Yes, we optimize all major ecommerce platforms including Shopify, WooCommerce, and Magento.'
            ],
            [
                'q' => 'Can SEO increase my sales?',
                'a' => 'Yes, by targeting high-intent keywords, SEO brings buyers who are ready to purchase.'
            ],
            [
                'q' => 'Do you optimize product pages?',
                'a' => 'Yes, we optimize titles, descriptions, images, and schema for better rankings.',
            ],
        ]
    ]
];
