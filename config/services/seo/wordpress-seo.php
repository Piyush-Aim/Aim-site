<?php
// config/services/wordpress-seo.php

return [
    'menu_category' => 'seo',
    'menu_title' => 'WordPress SEO',
    'menu_desc' => 'Technical optimization specialized for the WP ecosystem.',
    'menu_icon' => 'fa-solid fa-gear',


    'pageTitle' => 'WordPress SEO Services | ' . COMPANY_NAME . ' - Rank Your Website',
    'pageDescription' => 'WordPress SEO services by ' . COMPANY_NAME . '. Optimize your WordPress website for speed, rankings, and organic traffic with expert SEO strategies.',
    'pageKey' => 'wordpress_seo',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-brands fa-wordpress"></i>&nbsp; WordPress SEO',
        'title' => 'Boost Rankings with <span class="gradient-text">WordPress SEO</span>',
        'subtitle' => 'We optimize your WordPress website for better rankings, faster performance, and higher conversions.',
        'metrics' => [
            ['val' => '300%', 'lbl' => 'Traffic Growth'],
            ['val' => '90+', 'lbl' => 'SEO Score'],
            ['val' => '200+', 'lbl' => 'Sites Optimized'],
        ],
        'form_title' => 'Optimize Your WordPress Site',
        'form_sub' => 'Get a complete SEO audit and boost your rankings.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'WordPress Optimization',
        'title' => 'Make Your <span class="gradient-text">WordPress Site SEO-Friendly</span>',
        'subtitle' => 'We improve your WordPress site structure, speed, and content to help you rank higher on Google.',
        'features' => [
            [
                'icon' => 'fa-solid fa-gauge-high',
                'title' => 'Speed Optimization',
                'desc' => 'Improve Core Web Vitals and loading performance.'
            ],
            [
                'icon' => 'fa-solid fa-magnifying-glass',
                'title' => 'On-Page SEO',
                'desc' => 'Optimize content, keywords, and meta tags.'
            ],
        ],
        'img' => 'assets/images/services/wordpress-seo-intro.webp',
        'glass_card_1' => [
            'icon' => 'fa-solid fa-chart-line',
            'label' => 'SEO Score',
            'val' => '95%',
            'width' => '95%'
        ],
        'glass_card_2' => [
            'icon' => 'fa-solid fa-bolt',
            'label' => 'Speed',
            'val' => 'Fast',
            'sub' => 'Optimized'
        ],
        'floating_badge' => [
            'icon' => 'fa-solid fa-award',
            'lbl'  => 'WP SEO Experts'
        ]
    ],

    /* ================= TYPES ================= */
    'types' => [
        'tag' => '<i class="fa-solid fa-layer-group"></i>&nbsp; WordPress SEO Services',
        'title' => 'Our <span class="gradient-text">WordPress SEO Solutions</span>',
        'subtitle' => 'Complete optimization for your WordPress website.',
        'panels' => [

            'onpage' => [
                'tab_name'  => 'On-Page SEO',
                'tab_icon'  => 'fa-solid fa-pen',
                'title'     => 'WordPress On-Page SEO',
                'tagline'   => 'Optimize Every Page',
                'desc'      => 'Improve content, headings, keywords, and internal linking structure.',
                'image'     => 'assets/images/services/wordpress-seo-onpage.webp',
                'metric'    => ['val' => 'Top', 'lbl' => 'Rankings', 'icon' => 'fa-solid fa-trophy'],
                'features'  => ['Keyword Optimization', 'Meta Tags', 'Content SEO'],
                'techStack' => ['Yoast SEO', 'Rank Math', 'All in One SEO']
            ],

            'technical' => [
                'tab_name'  => 'Technical SEO',
                'tab_icon'  => 'fa-solid fa-gears',
                'title'     => 'Technical WordPress SEO',
                'tagline'   => 'Fix Backend Issues',
                'desc'      => 'Improve crawlability, indexing, and site architecture.',
                'image'     => 'assets/images/services/wordpress-seo-technical.webp',
                'metric'    => ['val' => '100%', 'lbl' => 'Optimized', 'icon' => 'fa-solid fa-check'],
                'features'  => ['XML Sitemap', 'Robots.txt', 'Schema Markup'],
                'techStack' => ['Search Console', 'Schema.org', 'Screaming Frog']
            ],

            'speed' => [
                'tab_name'  => 'Speed Optimization',
                'tab_icon'  => 'fa-solid fa-bolt',
                'title'     => 'WordPress Speed Optimization',
                'tagline'   => 'Fast Loading Sites',
                'desc'      => 'Boost website speed to improve rankings and user experience.',
                'image'     => 'assets/images/services/wordpress-seo-speed.webp',
                'metric'    => ['val' => '90+', 'lbl' => 'PageSpeed', 'icon' => 'fa-solid fa-gauge'],
                'features'  => ['Caching Setup', 'Image Optimization', 'Core Web Vitals'],
                'techStack' => ['WP Rocket', 'LiteSpeed', 'Cloudflare']
            ],

            'plugin' => [
                'tab_name'  => 'SEO Plugins',
                'tab_icon'  => 'fa-solid fa-plug',
                'title'     => 'SEO Plugin Setup & Optimization',
                'tagline'   => 'Smart SEO Tools',
                'desc'      => 'Configure and optimize SEO plugins for maximum performance.',
                'image'     => 'assets/images/services/wordpress-seo-plugin.webp',
                'metric'    => ['val' => 'Pro', 'lbl' => 'Setup', 'icon' => 'fa-solid fa-wrench'],
                'features'  => ['Yoast Setup', 'Rank Math Config', 'Automation'],
                'techStack' => ['Yoast', 'Rank Math', 'AIOSEO']
            ],

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Process',
        'title' => 'Our <span class="gradient-text">WordPress SEO Process</span>',
        'subtitle' => 'A structured approach to improve rankings.',
        'steps' => [
            ['title' => 'SEO Audit', 'desc' => 'Analyzing your WordPress website.', 'icon' => 'fa-solid fa-magnifying-glass'],
            ['title' => 'Keyword Research', 'desc' => 'Finding target keywords.', 'icon' => 'fa-solid fa-key'],
            ['title' => 'On-Page Optimization', 'desc' => 'Improving content and structure.', 'icon' => 'fa-solid fa-pen'],
            ['title' => 'Technical Fixes', 'desc' => 'Resolving backend issues.', 'icon' => 'fa-solid fa-gears'],
            ['title' => 'Performance Boost', 'desc' => 'Improving speed and UX.', 'icon' => 'fa-solid fa-bolt'],
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Benefits',
        'title' => 'Why Choose <span class="gradient-text">' . COMPANY_NAME . '</span>',
        'subtitle' => 'We deliver performance-driven WordPress SEO.',
        'cards' => [
            ['icon' => 'fa-solid fa-chart-line', 'title' => 'Higher Rankings', 'desc' => 'Rank better on Google.'],
            ['icon' => 'fa-solid fa-users', 'title' => 'More Traffic', 'desc' => 'Increase organic visitors.'],
            ['icon' => 'fa-solid fa-bolt', 'title' => 'Fast Website', 'desc' => 'Improve speed and UX.'],
            ['icon' => 'fa-solid fa-magnifying-glass', 'title' => 'SEO Optimized', 'desc' => 'Fully optimized pages.'],
            ['icon' => 'fa-solid fa-rocket', 'title' => 'Scalable', 'desc' => 'Grow your website long-term.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'Support', 'desc' => 'Continuous optimization.'],
        ]
    ],

    /* ================= PORTFOLIO ================= */
    'portfolio' => [
        'tag' => '<i class="fa-solid fa-briefcase"></i>&nbsp; Portfolio',
        'title' => 'Our <span class="gradient-text">WordPress SEO Results</span>',
        'subtitle' => 'See how we improved WordPress rankings.',
        'filter_categories' => ['seo', 'wordpress', 'optimization']
    ],

    /* ================= TESTIMONIALS ================= */
    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'What is WordPress SEO?',
                'a' => 'WordPress SEO involves optimizing your WordPress website for better search engine rankings and performance.'
            ],
            [
                'q' => 'Which SEO plugin is best for WordPress?',
                'a' => 'Popular options include Yoast SEO and Rank Math, depending on your requirements.'
            ],
            [
                'q' => 'Can you improve my website speed?',
                'a' => 'Yes, we optimize Core Web Vitals, caching, and images for faster performance.'
            ],
            [
                'q' => 'How long does WordPress SEO take?',
                'a' => 'You can expect noticeable improvements within 2–3 months.'
            ],
            [
                'q' => 'Do you provide ongoing SEO support?',
                'a' => 'Yes, we offer continuous optimization and maintenance services.',
            ],
        ]
    ]
];
