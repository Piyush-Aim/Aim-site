<?php
// config/services/web-design.php

return [
    'menu_category' => 'design',
    'menu_title' => 'Premium Web Design',
    'menu_desc' => 'Aesthetic-first designs that focus on brand storytelling.',
    'menu_icon' => 'fa-solid fa-pen-ruler',


    'pageTitle' => 'Premium Web Design Services | ' . COMPANY_NAME . ' - High-End Websites',
    'pageDescription' => 'Premium web design services by ' . COMPANY_NAME . '. Create visually stunning, high-converting, and user-focused websites for your brand.',
    'pageKey' => 'premium_web_design',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-solid fa-gem"></i>&nbsp; Premium Web Design',
        'title' => 'Create Stunning Websites with <span class="gradient-text">Premium Design</span>',
        'subtitle' => 'We craft visually impressive, high-performance websites that elevate your brand and drive conversions.',
        'metrics' => [
            ['val' => '3X', 'lbl' => 'Conversion Rate'],
            ['val' => '100+', 'lbl' => 'Projects Delivered'],
            ['val' => '95%', 'lbl' => 'Client Satisfaction'],
        ],
        'form_title' => 'Start Your Premium Website',
        'form_sub' => 'Let’s design a website that stands out and converts.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'High-End Design',
        'title' => 'Design That <span class="gradient-text">Captures Attention & Converts</span>',
        'subtitle' => 'Our premium web design services focus on aesthetics, usability, and performance to deliver exceptional user experiences.',
        'features' => [
            [
                'icon' => 'fa-solid fa-palette',
                'title' => 'Modern UI Design',
                'desc' => 'Clean, elegant, and visually engaging interfaces.'
            ],
            [
                'icon' => 'fa-solid fa-mobile-screen',
                'title' => 'Responsive Layout',
                'desc' => 'Optimized for all devices and screen sizes.'
            ],
        ],
        'img' => 'assets/images/services/web-designing-intro.webp',
        'glass_card_1' => [
            'icon' => 'fa-solid fa-chart-line',
            'label' => 'Engagement',
            'val' => '+200%',
            'width' => '90%'
        ],
        'glass_card_2' => [
            'icon' => 'fa-solid fa-bolt',
            'label' => 'Performance',
            'val' => 'Fast',
            'sub' => 'Optimized'
        ],
        'floating_badge' => [
            'icon' => 'fa-solid fa-award',
            'lbl'  => 'Design Experts'
        ]
    ],

    /* ================= TYPES ================= */
    'types' => [
        'tag' => '<i class="fa-solid fa-layer-group"></i>&nbsp; Design Services',
        'title' => 'Our <span class="gradient-text">Premium Web Design Solutions</span>',
        'subtitle' => 'Tailored designs for modern businesses.',
        'panels' => [

            'uiux' => [
                'tab_name'  => 'UI/UX Design',
                'tab_icon'  => 'fa-solid fa-pen-ruler',
                'title'     => 'UI/UX Design Services',
                'tagline'   => 'User-Centered Design',
                'desc'      => 'Design intuitive interfaces focused on user experience and engagement.',
                'image'     => 'assets/images/services/web-designing-uiux.webp',
                'metric'    => ['val' => 'High', 'lbl' => 'Usability', 'icon' => 'fa-solid fa-user'],
                'features'  => ['Wireframing', 'Prototyping', 'User Research'],
                'techStack' => ['Figma', 'Adobe XD', 'Sketch']
            ],

            'custom' => [
                'tab_name'  => 'Custom Design',
                'tab_icon'  => 'fa-solid fa-code',
                'title'     => 'Custom Website Design',
                'tagline'   => 'Unique Brand Identity',
                'desc'      => 'Create a fully customized website tailored to your brand.',
                'image'     => 'assets/images/services/web-designing-custom.webp',
                'metric'    => ['val' => '100%', 'lbl' => 'Custom', 'icon' => 'fa-solid fa-check'],
                'features'  => ['Custom Layouts', 'Brand Integration', 'Unique Design'],
                'techStack' => ['HTML5', 'CSS3', 'JavaScript']
            ],

            'responsive' => [
                'tab_name'  => 'Responsive',
                'tab_icon'  => 'fa-solid fa-mobile-screen',
                'title'     => 'Responsive Web Design',
                'tagline'   => 'Perfect on All Devices',
                'desc'      => 'Ensure your website looks and performs perfectly on all devices.',
                'image'     => 'assets/images/services/web-designing-responsive.webp',
                'metric'    => ['val' => 'All', 'lbl' => 'Devices', 'icon' => 'fa-solid fa-mobile'],
                'features'  => ['Mobile Optimization', 'Cross-Browser Support', 'Adaptive Layouts'],
                'techStack' => ['Bootstrap', 'Tailwind', 'CSS Grid']
            ],

            'redesign' => [
                'tab_name'  => 'Redesign',
                'tab_icon'  => 'fa-solid fa-rotate',
                'title'     => 'Website Redesign Services',
                'tagline'   => 'Upgrade Your Website',
                'desc'      => 'Transform outdated websites into modern, high-performing platforms.',
                'image'     => 'assets/images/services/web-designing-redesign.webp',
                'metric'    => ['val' => 'Modern', 'lbl' => 'UI', 'icon' => 'fa-solid fa-rocket'],
                'features'  => ['UI Refresh', 'UX Improvements', 'Performance Boost'],
                'techStack' => ['Figma', 'React', 'WordPress']
            ],

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Process',
        'title' => 'Our <span class="gradient-text">Design Process</span>',
        'subtitle' => 'A structured approach to deliver premium websites.',
        'steps' => [
            ['title' => 'Research', 'desc' => 'Understanding your brand and audience.', 'icon' => 'fa-solid fa-magnifying-glass'],
            ['title' => 'Wireframing', 'desc' => 'Creating design structure.', 'icon' => 'fa-solid fa-pen'],
            ['title' => 'UI Design', 'desc' => 'Crafting visual layouts.', 'icon' => 'fa-solid fa-palette'],
            ['title' => 'Development', 'desc' => 'Building responsive websites.', 'icon' => 'fa-solid fa-code'],
            ['title' => 'Launch', 'desc' => 'Deploying and optimizing.', 'icon' => 'fa-solid fa-rocket'],
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Benefits',
        'title' => 'Why Choose <span class="gradient-text">' . COMPANY_NAME . '</span>',
        'subtitle' => 'We deliver premium-quality web design.',
        'cards' => [
            ['icon' => 'fa-solid fa-gem', 'title' => 'Premium Quality', 'desc' => 'High-end design standards.'],
            ['icon' => 'fa-solid fa-chart-line', 'title' => 'Higher Conversions', 'desc' => 'Designs that convert visitors.'],
            ['icon' => 'fa-solid fa-mobile-screen', 'title' => 'Responsive', 'desc' => 'Optimized for all devices.'],
            ['icon' => 'fa-solid fa-bolt', 'title' => 'Fast Performance', 'desc' => 'Speed optimized websites.'],
            ['icon' => 'fa-solid fa-palette', 'title' => 'Modern UI', 'desc' => 'Clean and elegant design.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'Support', 'desc' => 'Ongoing support and updates.'],
        ]
    ],

    /* ================= PORTFOLIO ================= */
    'portfolio' => [
        'tag' => '<i class="fa-solid fa-briefcase"></i>&nbsp; Portfolio',
        'title' => 'Our <span class="gradient-text">Design Work</span>',
        'subtitle' => 'See our premium web design projects.',
        'filter_categories' => ['design', 'uiux', 'website']
    ],

    /* ================= TESTIMONIALS ================= */
    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'What is premium web design?',
                'a' => 'Premium web design focuses on high-quality visuals, user experience, and performance to create standout websites.'
            ],
            [
                'q' => 'How long does it take to design a website?',
                'a' => 'Typically 2–6 weeks depending on project complexity.'
            ],
            [
                'q' => 'Will my website be mobile-friendly?',
                'a' => 'Yes, all our designs are fully responsive and optimized for all devices.'
            ],
            [
                'q' => 'Do you offer custom designs?',
                'a' => 'Yes, we create fully customized designs tailored to your brand.'
            ],
            [
                'q' => 'Can you redesign my existing website?',
                'a' => 'Yes, we can upgrade your current website to a modern, high-performing design.',
            ],
        ]
    ]
];
