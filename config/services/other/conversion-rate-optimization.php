<?php
// config/services/cro-optimization.php

return [
    'menu_category' => 'other',
    'menu_title' => 'CRO Optimization',
    'menu_desc' => 'Data-driven experiments to increase website conversion rates.',
    'menu_icon' => 'fa-solid fa-percent',


    'pageTitle' => 'Conversion Rate Optimization (CRO) Services | ' . COMPANY_NAME . ' - Increase Conversions',
    'pageDescription' => 'Professional CRO services by ' . COMPANY_NAME . '. Optimize your website to increase conversions, improve user experience, and boost revenue.',
    'pageKey' => 'cro_optimization',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-solid fa-chart-line"></i>&nbsp; CRO Optimization',
        'title' => 'Turn Visitors into <span class="gradient-text">Customers</span>',
        'subtitle' => 'We optimize your website and funnels to increase conversions, leads, and revenue.',
        'metrics' => [
            ['val' => '2X', 'lbl' => 'Conversion Rate'],
            ['val' => '150%', 'lbl' => 'Revenue Growth'],
            ['val' => '100+', 'lbl' => 'Funnels Optimized'],
        ],
        'form_title' => 'Optimize Your Conversions',
        'form_sub' => 'Increase leads and sales with CRO strategies.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'Conversion Strategy',
        'title' => 'Improve UX & <span class="gradient-text">Maximize Conversions</span>',
        'subtitle' => 'Our CRO strategies focus on data, user behavior, and testing to deliver measurable results.',
        'features' => [
            [
                'icon' => 'fa-solid fa-chart-line',
                'title' => 'Data-Driven Optimization',
                'desc' => 'Use analytics to improve performance.'
            ],
            [
                'icon' => 'fa-solid fa-flask',
                'title' => 'A/B Testing',
                'desc' => 'Test variations to find what works best.'
            ],
        ],
        'img' => 'assets/images/services/conversion-rate-optimization-intro.webp',
        'glass_card_1' => [
            'icon' => 'fa-solid fa-arrow-up',
            'label' => 'Conversion',
            'val' => '+150%',
            'width' => '95%'
        ],
        'glass_card_2' => [
            'icon' => 'fa-solid fa-dollar-sign',
            'label' => 'Revenue',
            'val' => 'High',
            'sub' => 'Growth'
        ],
        'floating_badge' => [
            'icon' => 'fa-solid fa-award',
            'lbl'  => 'CRO Experts'
        ]
    ],

    /* ================= TYPES ================= */
    'types' => [
        'tag' => '<i class="fa-solid fa-layer-group"></i>&nbsp; CRO Services',
        'title' => 'Our <span class="gradient-text">CRO Solutions</span>',
        'subtitle' => 'Optimize every step of your funnel.',
        'panels' => [

            'audit' => [
                'tab_name'  => 'CRO Audit',
                'tab_icon'  => 'fa-solid fa-magnifying-glass',
                'title'     => 'Website CRO Audit',
                'tagline'   => 'Identify Issues',
                'desc'      => 'Analyze your website to find conversion bottlenecks.',
                'image'     => 'assets/images/services/conversion-rate-optimization-audit.webp',
                'metric'    => ['val' => 'Detailed', 'lbl' => 'Analysis', 'icon' => 'fa-solid fa-search'],
                'features'  => ['UX Review', 'Analytics Audit', 'Funnel Analysis'],
                'techStack' => ['Google Analytics', 'Hotjar']
            ],

            'testing' => [
                'tab_name'  => 'A/B Testing',
                'tab_icon'  => 'fa-solid fa-flask',
                'title'     => 'A/B Testing & Experimentation',
                'tagline'   => 'Test & Improve',
                'desc'      => 'Run experiments to improve conversions.',
                'image'     => 'assets/images/services/conversion-rate-optimization-testing.webp',
                'metric'    => ['val' => 'Proven', 'lbl' => 'Results', 'icon' => 'fa-solid fa-check'],
                'features'  => ['Split Testing', 'Landing Page Testing', 'CTA Optimization'],
                'techStack' => ['Google Optimize', 'VWO']
            ],

            'ux' => [
                'tab_name'  => 'UX Optimization',
                'tab_icon'  => 'fa-solid fa-user',
                'title'     => 'User Experience Optimization',
                'tagline'   => 'Better Experience',
                'desc'      => 'Improve usability to increase conversions.',
                'image'     => 'assets/images/services/conversion-rate-optimization-ux.webp',
                'metric'    => ['val' => 'High', 'lbl' => 'Usability', 'icon' => 'fa-solid fa-user'],
                'features'  => ['UI Improvements', 'Navigation Optimization', 'Mobile UX'],
                'techStack' => ['Figma', 'UX Tools']
            ],

            'funnels' => [
                'tab_name'  => 'Funnels',
                'tab_icon'  => 'fa-solid fa-filter',
                'title'     => 'Sales Funnel Optimization',
                'tagline'   => 'Increase Conversions',
                'desc'      => 'Optimize funnels to convert more visitors into customers.',
                'image'     => 'assets/images/services/conversion-rate-optimization-funnels.webp',
                'metric'    => ['val' => '2X', 'lbl' => 'Conversions', 'icon' => 'fa-solid fa-arrow-up'],
                'features'  => ['Landing Pages', 'Checkout Optimization', 'Lead Funnels'],
                'techStack' => ['Funnels Tools', 'CRM']
            ],

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Process',
        'title' => 'Our <span class="gradient-text">CRO Process</span>',
        'subtitle' => 'A scientific approach to optimization.',
        'steps' => [
            ['title' => 'Analysis', 'desc' => 'Study user behavior.', 'icon' => 'fa-solid fa-chart-line'],
            ['title' => 'Hypothesis', 'desc' => 'Identify improvements.', 'icon' => 'fa-solid fa-lightbulb'],
            ['title' => 'Testing', 'desc' => 'Run A/B tests.', 'icon' => 'fa-solid fa-flask'],
            ['title' => 'Implementation', 'desc' => 'Apply winning changes.', 'icon' => 'fa-solid fa-gear'],
            ['title' => 'Scaling', 'desc' => 'Maximize results.', 'icon' => 'fa-solid fa-arrow-up'],
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Benefits',
        'title' => 'Why Choose <span class="gradient-text">' . COMPANY_NAME . '</span>',
        'subtitle' => 'We deliver measurable conversion improvements.',
        'cards' => [
            ['icon' => 'fa-solid fa-chart-line', 'title' => 'Higher Conversions', 'desc' => 'Increase conversion rate.'],
            ['icon' => 'fa-solid fa-dollar-sign', 'title' => 'More Revenue', 'desc' => 'Boost sales.'],
            ['icon' => 'fa-solid fa-users', 'title' => 'Better UX', 'desc' => 'Improve user experience.'],
            ['icon' => 'fa-solid fa-flask', 'title' => 'Tested Results', 'desc' => 'Data-backed decisions.'],
            ['icon' => 'fa-solid fa-bullseye', 'title' => 'Targeted Optimization', 'desc' => 'Focus on key areas.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'Support', 'desc' => 'Expert CRO team.'],
        ]
    ],

    /* ================= PORTFOLIO ================= */
    'portfolio' => [
        'tag' => '<i class="fa-solid fa-briefcase"></i>&nbsp; Portfolio',
        'title' => 'Our <span class="gradient-text">CRO Results</span>',
        'subtitle' => 'See how we improved conversions.',
        'filter_categories' => ['cro', 'conversion', 'optimization']
    ],

    /* ================= TESTIMONIALS ================= */
    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'What is CRO?',
                'a' => 'Conversion Rate Optimization improves your website to convert more visitors into customers.'
            ],
            [
                'q' => 'How does CRO increase revenue?',
                'a' => 'By improving user experience and optimizing funnels, more visitors convert into paying customers.'
            ],
            [
                'q' => 'What tools do you use?',
                'a' => 'We use tools like Google Analytics, Hotjar, and A/B testing platforms.'
            ],
            [
                'q' => 'How long does CRO take?',
                'a' => 'Results can start within weeks, but continuous testing delivers long-term gains.'
            ],
            [
                'q' => 'Do you provide reports?',
                'a' => 'Yes, we provide detailed reports and insights on performance improvements.',
            ],
        ]
    ]
];
