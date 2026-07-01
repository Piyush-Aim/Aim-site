<?php
// config/services/ui-ux-design.php

return [
    'menu_category' => 'core',
    'menu_title' => 'UI/UX Design',
    'menu_desc' => 'Crafting user-centric interfaces that drive engagement.',
    'menu_icon' => 'fa-solid fa-palette',


    'pageTitle' => 'UI/UX Design Services | ' . COMPANY_NAME . ' - User-Centered & Conversion-Focused Design',
    'pageDescription' => 'Professional UI/UX design services by ' . COMPANY_NAME . '. We create intuitive, user-friendly, and high-converting digital experiences for websites, apps, and SaaS products.',
    'pageKey' => 'ui_ux_design',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-solid fa-palette"></i>&nbsp; UI/UX Design Agency',
        'title' => 'Design <span class="gradient-text">Experiences</span> Users Love',
        'subtitle' => COMPANY_NAME . ' creates intuitive, visually stunning, and conversion-focused user interfaces. We combine user psychology, design strategy, and modern tools to deliver exceptional digital experiences.',
        'metrics' => [
            ['val' => '150+', 'lbl' => 'Design Projects'],
            ['val' => '40%', 'lbl' => 'Avg. Conversion Boost'],
            ['val' => '5+', 'lbl' => 'Years Experience'],
        ],
        'form_title' => 'Start Your Design Project',
        'form_sub' => 'Our design experts will get back to you within 24 hours.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'User-Centered Design',
        'title' => 'The Power of <span class="gradient-text">Great User Experience</span>',
        'subtitle' => 'At ' . COMPANY_NAME . ', we design products that are easy to use, visually engaging, and optimized for user behavior. Our UI/UX design approach ensures better engagement, retention, and conversions.',
        'features' => [
            [
                'icon' => 'fa-solid fa-magnifying-glass-chart',
                'title' => 'User Research',
                'desc' => 'We analyze user behavior and business goals to create data-driven design strategies.'
            ],
            [
                'icon' => 'fa-solid fa-vial',
                'title' => 'Usability Testing',
                'desc' => 'We test and optimize designs to ensure seamless user experience and performance.'
            ],
        ],
        'img' => 'assets/images/services/uiux-intro.webp',
        'glass_card_1' => [
            'icon' => 'fa-solid fa-users',
            'label' => 'User Experience',
            'val' => 'Optimized',
            'width' => '95%'
        ],
        'glass_card_2' => [
            'icon' => 'fa-solid fa-wand-magic-sparkles',
            'label' => 'Design Quality',
            'val' => 'Premium',
            'sub' => 'High-End UI'
        ],
        'floating_badge' => [
            'icon' => 'fa-solid fa-star',
            'lbl'  => 'Top Designers'
        ]
    ],

    /* ================= TYPES ================= */
    'types' => [
        'tag' => '<i class="fa-solid fa-swatchbook"></i>&nbsp; UI/UX Services',
        'title' => 'Our <span class="gradient-text">UI/UX Design Solutions</span>',
        'subtitle' => 'End-to-end UI/UX services tailored for web, mobile, and SaaS products.',
        'panels' => [

            'research' => [
                'tab_name'  => 'UX Research',
                'tab_icon'  => 'fa-solid fa-brain',
                'title'     => 'UX Research & Strategy',
                'tagline'   => 'Data-Driven Insights',
                'desc'      => 'We conduct user research, competitor analysis, and journey mapping to build a strong design foundation.',
                'image'     => 'assets/images/services/uiux-research.webp',
                'metric'    => ['val' => '100%', 'lbl' => 'User-Focused', 'icon' => 'fa-solid fa-users'],
                'features'  => ['User Personas', 'Journey Mapping', 'Information Architecture'],
                'techStack' => ['Hotjar', 'Google Analytics', 'Miro']
            ],

            'ui_design' => [
                'tab_name'  => 'UI Design',
                'tab_icon'  => 'fa-solid fa-palette',
                'title'     => 'Modern UI Design',
                'tagline'   => 'Visually Engaging',
                'desc'      => 'We design clean, modern, and responsive interfaces that align with your brand identity.',
                'image'     => 'assets/images/services/uiux-modern-ui.webp',
                'metric'    => ['val' => 'Pixel Perfect', 'lbl' => 'Design', 'icon' => 'fa-solid fa-crop'],
                'features'  => ['Responsive Layouts', 'Custom UI Elements', 'Brand Consistency'],
                'techStack' => ['Figma', 'Adobe XD', 'Sketch']
            ],

            'prototype' => [
                'tab_name'  => 'Prototype',
                'tab_icon'  => 'fa-solid fa-play',
                'title'     => 'Wireframing & Prototyping',
                'tagline'   => 'Interactive Experience',
                'desc'      => 'We create wireframes and interactive prototypes to visualize your product before development.',
                'image'     => 'assets/images/services/uiux-wireframing.webp',
                'metric'    => ['val' => 'Interactive', 'lbl' => 'Prototype', 'icon' => 'fa-solid fa-play'],
                'features'  => ['Low-Fidelity Wireframes', 'High-Fidelity Prototypes', 'User Flow Mapping'],
                'techStack' => ['Figma', 'InVision', 'Adobe XD']
            ],

            'design_system' => [
                'tab_name'  => 'Design System',
                'tab_icon'  => 'fa-solid fa-layer-group',
                'title'     => 'Design Systems',
                'tagline'   => 'Scalable Design',
                'desc'      => 'We build scalable design systems for consistency across products and faster development cycles.',
                'image'     => 'assets/images/services/uiux-design-systems.webp',
                'metric'    => ['val' => 'Scalable', 'lbl' => 'System', 'icon' => 'fa-solid fa-layer-group'],
                'features'  => ['Component Libraries', 'Design Tokens', 'Reusable UI Elements'],
                'techStack' => ['Figma', 'Storybook', 'Zeroheight']
            ],

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Design Process',
        'title' => 'Our <span class="gradient-text">UI/UX Design Process</span>',
        'subtitle' => 'A structured approach to deliver user-friendly and high-converting designs.',
        'steps' => [
            ['title' => 'Discovery', 'desc' => 'Understanding your users, business, and goals.', 'icon' => 'fa-solid fa-headset'],
            ['title' => 'Research', 'desc' => 'Analyzing competitors and user behavior.', 'icon' => 'fa-solid fa-magnifying-glass-chart'],
            ['title' => 'Wireframing', 'desc' => 'Creating layouts and user flows.', 'icon' => 'fa-solid fa-border-all'],
            ['title' => 'UI Design', 'desc' => 'Designing high-quality visual interfaces.', 'icon' => 'fa-solid fa-palette'],
            ['title' => 'Testing & Handoff', 'desc' => 'Usability testing and developer handoff.', 'icon' => 'fa-solid fa-box-open'],
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Why Choose Us',
        'title' => 'Why Choose <span class="gradient-text">' . COMPANY_NAME . '</span>',
        'subtitle' => 'We create designs that not only look good but also perform.',
        'cards' => [
            ['icon' => 'fa-solid fa-users', 'title' => 'User-Centered Design', 'desc' => 'Focused on real user needs and behavior.'],
            ['icon' => 'fa-solid fa-chart-line', 'title' => 'Conversion Driven', 'desc' => 'Optimized to increase leads and sales.'],
            ['icon' => 'fa-solid fa-mobile-screen', 'title' => 'Responsive Design', 'desc' => 'Perfect experience across all devices.'],
            ['icon' => 'fa-solid fa-palette', 'title' => 'Modern UI', 'desc' => 'Clean and visually appealing interfaces.'],
            ['icon' => 'fa-solid fa-earth-americas', 'title' => 'Global Service', 'desc' => 'Based in ' . COMPANY_ADDRESS_SHORT . ', serving clients worldwide.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'Support', 'desc' => 'Dedicated support throughout the project.'],
        ]
    ],

    /* ================= PORTFOLIO ================= */
    'portfolio' => [
        'tag' => '<i class="fa-solid fa-briefcase"></i>&nbsp; Portfolio',
        'title' => 'Our <span class="gradient-text">Design Work</span>',
        'subtitle' => 'Explore our latest UI/UX design projects.',
        'filter_categories' => ['uiux', 'design', 'product']
    ],

    /* ================= TESTIMONIALS ================= */
    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'What is UI/UX design?',
                'a' => 'UI/UX design focuses on improving user experience and interface design to make products easy to use and visually appealing.'
            ],
            [
                'q' => 'Why is UI/UX important?',
                'a' => 'Good UI/UX improves user satisfaction, increases conversions, and helps retain customers.'
            ],
            [
                'q' => 'Do you provide prototypes?',
                'a' => 'Yes, we create interactive prototypes before development for better clarity.'
            ],
        ]
    ]
];
