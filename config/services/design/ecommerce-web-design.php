<?php
// config/services/ecommerce-design.php

return [
    'menu_category' => 'design',
    'menu_title' => 'Ecommerce Design',
    'menu_desc' => 'High-conversion store designs for Shopify and beyond.',
    'menu_icon' => 'fa-solid fa-credit-card',


    'pageTitle' => 'Ecommerce Design Services | ' . COMPANY_NAME . ' - High-Converting Stores',
    'pageDescription' => 'Professional ecommerce design services by ' . COMPANY_NAME . '. Create visually appealing and high-converting online stores that drive sales.',
    'pageKey' => 'ecommerce_design',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-solid fa-cart-shopping"></i>&nbsp; Ecommerce Design',
        'title' => 'Design Stores That <span class="gradient-text">Sell More</span>',
        'subtitle' => 'We design ecommerce websites that enhance user experience, increase conversions, and boost sales.',
        'metrics' => [
            ['val' => '3X', 'lbl' => 'Conversion Rate'],
            ['val' => '200+', 'lbl' => 'Stores Designed'],
            ['val' => '95%', 'lbl' => 'Client Satisfaction'],
        ],
        'form_title' => 'Start Your Ecommerce Store',
        'form_sub' => 'Get a design that converts visitors into buyers.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'Ecommerce UI/UX',
        'title' => 'Turn Visitors into <span class="gradient-text">Paying Customers</span>',
        'subtitle' => 'Our ecommerce design strategies focus on improving user experience and maximizing conversions.',
        'features' => [
            [
                'icon' => 'fa-solid fa-cart-plus',
                'title' => 'Conversion-Focused Design',
                'desc' => 'Design layouts that encourage users to purchase.'
            ],
            [
                'icon' => 'fa-solid fa-mobile-screen',
                'title' => 'Mobile Optimization',
                'desc' => 'Ensure seamless shopping experience across devices.'
            ],
        ],
        'img' => 'assets/images/services/ecommerce-web-design-intro.webp',
        'glass_card_1' => [
            'icon' => 'fa-solid fa-chart-line',
            'label' => 'Sales',
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
            'lbl'  => 'Ecommerce Design Experts'
        ]
    ],

    /* ================= TYPES ================= */
    'types' => [
        'tag' => '<i class="fa-solid fa-layer-group"></i>&nbsp; Ecommerce Design Services',
        'title' => 'Our <span class="gradient-text">Ecommerce Design Solutions</span>',
        'subtitle' => 'Design services tailored for online stores.',
        'panels' => [

            'uiux' => [
                'tab_name'  => 'UI/UX Design',
                'tab_icon'  => 'fa-solid fa-pen-ruler',
                'title'     => 'Ecommerce UI/UX Design',
                'tagline'   => 'User-Centered Shopping',
                'desc'      => 'Create intuitive shopping experiences that increase engagement and conversions.',
                'image'     => 'assets/images/services/ecommerce-web-design-uiux.webp',
                'metric'    => ['val' => 'High', 'lbl' => 'Usability', 'icon' => 'fa-solid fa-user'],
                'features'  => ['User Journey', 'Wireframes', 'Prototyping'],
                'techStack' => ['Figma', 'Adobe XD']
            ],

            'product' => [
                'tab_name'  => 'Product Pages',
                'tab_icon'  => 'fa-solid fa-box',
                'title'     => 'Product Page Design',
                'tagline'   => 'Convert Browsers to Buyers',
                'desc'      => 'Design product pages that highlight features and drive conversions.',
                'image'     => 'assets/images/services/ecommerce-web-design-product.webp',
                'metric'    => ['val' => 'High', 'lbl' => 'Conversion', 'icon' => 'fa-solid fa-chart-line'],
                'features'  => ['Product Layouts', 'CTA Optimization', 'Image Presentation'],
                'techStack' => ['Shopify', 'WooCommerce']
            ],

            'checkout' => [
                'tab_name'  => 'Checkout',
                'tab_icon'  => 'fa-solid fa-credit-card',
                'title'     => 'Checkout Optimization Design',
                'tagline'   => 'Reduce Cart Abandonment',
                'desc'      => 'Simplify checkout process to improve conversions and reduce drop-offs.',
                'image'     => 'assets/images/services/ecommerce-web-design-checkout.webp',
                'metric'    => ['val' => '2X', 'lbl' => 'Conversion Rate', 'icon' => 'fa-solid fa-arrow-up'],
                'features'  => ['One-Page Checkout', 'UX Optimization', 'Trust Signals'],
                'techStack' => ['Stripe', 'PayPal']
            ],

            'redesign' => [
                'tab_name'  => 'Redesign',
                'tab_icon'  => 'fa-solid fa-rotate',
                'title'     => 'Ecommerce Store Redesign',
                'tagline'   => 'Modernize Your Store',
                'desc'      => 'Upgrade your store design to improve user experience and sales.',
                'image'     => 'assets/images/services/ecommerce-web-design-redesign.webp',
                'metric'    => ['val' => 'Modern', 'lbl' => 'UI', 'icon' => 'fa-solid fa-rocket'],
                'features'  => ['UI Refresh', 'UX Improvements', 'Performance Boost'],
                'techStack' => ['Shopify', 'WooCommerce']
            ],

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Process',
        'title' => 'Our <span class="gradient-text">Ecommerce Design Process</span>',
        'subtitle' => 'A proven approach to design high-converting stores.',
        'steps' => [
            ['title' => 'Research', 'desc' => 'Understanding your audience.', 'icon' => 'fa-solid fa-magnifying-glass'],
            ['title' => 'Wireframing', 'desc' => 'Planning layout and flow.', 'icon' => 'fa-solid fa-pen'],
            ['title' => 'Design', 'desc' => 'Creating UI/UX.', 'icon' => 'fa-solid fa-palette'],
            ['title' => 'Testing', 'desc' => 'Improving usability.', 'icon' => 'fa-solid fa-flask'],
            ['title' => 'Launch', 'desc' => 'Deploying store.', 'icon' => 'fa-solid fa-rocket'],
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Benefits',
        'title' => 'Why Choose <span class="gradient-text">' . COMPANY_NAME . '</span>',
        'subtitle' => 'We design ecommerce experiences that convert.',
        'cards' => [
            ['icon' => 'fa-solid fa-cart-shopping', 'title' => 'More Sales', 'desc' => 'Increase conversions and revenue.'],
            ['icon' => 'fa-solid fa-chart-line', 'title' => 'Better UX', 'desc' => 'Improve customer experience.'],
            ['icon' => 'fa-solid fa-mobile-screen', 'title' => 'Mobile First', 'desc' => 'Optimized for mobile users.'],
            ['icon' => 'fa-solid fa-bolt', 'title' => 'Fast Performance', 'desc' => 'Speed optimized designs.'],
            ['icon' => 'fa-solid fa-bullseye', 'title' => 'Conversion Focused', 'desc' => 'Designed for results.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'Support', 'desc' => 'Ongoing assistance.'],
        ]
    ],

    /* ================= PORTFOLIO ================= */
    'portfolio' => [
        'tag' => '<i class="fa-solid fa-briefcase"></i>&nbsp; Portfolio',
        'title' => 'Our <span class="gradient-text">Ecommerce Design Work</span>',
        'subtitle' => 'Explore our store design projects.',
        'filter_categories' => ['ecommerce', 'design', 'store']
    ],

    /* ================= TESTIMONIALS ================= */
    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'What is ecommerce design?',
                'a' => 'Ecommerce design focuses on creating online store layouts that improve user experience and increase sales.'
            ],
            [
                'q' => 'Can design really increase sales?',
                'a' => 'Yes, better UX and optimized layouts significantly improve conversion rates.'
            ],
            [
                'q' => 'Do you design for Shopify and WooCommerce?',
                'a' => 'Yes, we design for all major ecommerce platforms.'
            ],
            [
                'q' => 'Will my store be mobile-friendly?',
                'a' => 'Yes, all designs are optimized for mobile users.'
            ],
            [
                'q' => 'Can you redesign my existing store?',
                'a' => 'Yes, we can upgrade your store for better performance and conversions.',
            ],
        ]
    ]
];
