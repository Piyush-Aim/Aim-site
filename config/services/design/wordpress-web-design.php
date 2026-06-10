<?php
// config/services/wordpress-design.php

return [
    'menu_category' => 'design',
    'menu_title' => 'WordPress Design',
    'menu_desc' => 'Custom themes and layouts for flexible content management.',
    'menu_icon' => 'fa-solid fa-desktop',


    'pageTitle' => 'WordPress Design Services | ' . COMPANY_NAME . ' - Custom WP Design',
    'pageDescription' => 'Professional WordPress design services by ' . COMPANY_NAME . '. Create modern, responsive, and high-converting WordPress websites tailored to your brand.',
    'pageKey' => 'wordpress_design',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-brands fa-wordpress"></i>&nbsp; WordPress Design',
        'title' => 'Create Stunning Websites with <span class="gradient-text">WordPress Design</span>',
        'subtitle' => 'We design visually appealing, user-friendly, and conversion-focused WordPress websites.',
        'metrics' => [
            ['val' => '3X', 'lbl' => 'Conversion Rate'],
            ['val' => '150+', 'lbl' => 'WP Projects'],
            ['val' => '95%', 'lbl' => 'Client Satisfaction'],
        ],
        'form_title' => 'Start Your WordPress Website',
        'form_sub' => 'Get a custom-designed WordPress website today.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'WordPress UI/UX',
        'title' => 'Design That <span class="gradient-text">Engages & Converts</span>',
        'subtitle' => 'Our WordPress design services combine creativity and functionality to deliver exceptional user experiences.',
        'features' => [
            [
                'icon' => 'fa-solid fa-palette',
                'title' => 'Modern Design',
                'desc' => 'Clean and visually appealing layouts.'
            ],
            [
                'icon' => 'fa-solid fa-mobile-screen',
                'title' => 'Responsive',
                'desc' => 'Optimized for all devices and screen sizes.'
            ],
        ],
        'img' => 'assets/images/services/wordpress-web-design-intro.webp',
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
            'lbl'  => 'WP Design Experts'
        ]
    ],

    /* ================= TYPES ================= */
    'types' => [
        'tag' => '<i class="fa-solid fa-layer-group"></i>&nbsp; WordPress Design Services',
        'title' => 'Our <span class="gradient-text">WordPress Design Solutions</span>',
        'subtitle' => 'Tailored design services for WordPress websites.',
        'panels' => [

            'theme' => [
                'tab_name'  => 'Theme Design',
                'tab_icon'  => 'fa-solid fa-paintbrush',
                'title'     => 'Custom Theme Design',
                'tagline'   => 'Unique Look & Feel',
                'desc'      => 'Design custom WordPress themes tailored to your brand identity.',
                'image'     => 'assets/images/services/wordpress-web-design-theme.webp',
                'metric'    => ['val' => 'Unique', 'lbl' => 'Design', 'icon' => 'fa-solid fa-star'],
                'features'  => ['Custom Layouts', 'Brand Integration', 'Theme Development'],
                'techStack' => ['WordPress', 'PHP', 'CSS']
            ],

            'custom' => [
                'tab_name'  => 'Custom Design',
                'tab_icon'  => 'fa-solid fa-code',
                'title'     => 'Custom WordPress Design',
                'tagline'   => 'Tailored Experience',
                'desc'      => 'Build fully customized WordPress designs to match your business needs.',
                'image'     => 'assets/images/services/wordpress-web-design-custom.webp',
                'metric'    => ['val' => '100%', 'lbl' => 'Custom', 'icon' => 'fa-solid fa-check'],
                'features'  => ['Unique UI', 'Custom Pages', 'Interactive Design'],
                'techStack' => ['HTML5', 'CSS3', 'JavaScript']
            ],

            'uiux' => [
                'tab_name'  => 'UI/UX',
                'tab_icon'  => 'fa-solid fa-pen-ruler',
                'title'     => 'WordPress UI/UX Design',
                'tagline'   => 'User-Centered Design',
                'desc'      => 'Improve usability and user experience for better engagement.',
                'image'     => 'assets/images/services/wordpress-web-design-uiux.webp',
                'metric'    => ['val' => 'High', 'lbl' => 'Usability', 'icon' => 'fa-solid fa-user'],
                'features'  => ['Wireframes', 'User Journey', 'Prototyping'],
                'techStack' => ['Figma', 'Adobe XD']
            ],

            'redesign' => [
                'tab_name'  => 'Redesign',
                'tab_icon'  => 'fa-solid fa-rotate',
                'title'     => 'WordPress Website Redesign',
                'tagline'   => 'Upgrade Your Website',
                'desc'      => 'Transform outdated websites into modern, high-performing platforms.',
                'image'     => 'assets/images/services/wordpress-web-design-redesign.webp',
                'metric'    => ['val' => 'Modern', 'lbl' => 'UI', 'icon' => 'fa-solid fa-rocket'],
                'features'  => ['UI Refresh', 'UX Optimization', 'Performance Boost'],
                'techStack' => ['WordPress', 'Elementor', 'WPBakery']
            ],

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Process',
        'title' => 'Our <span class="gradient-text">WordPress Design Process</span>',
        'subtitle' => 'A structured approach to deliver high-quality designs.',
        'steps' => [
            ['title' => 'Research', 'desc' => 'Understanding your goals.', 'icon' => 'fa-solid fa-magnifying-glass'],
            ['title' => 'Wireframing', 'desc' => 'Creating layout structure.', 'icon' => 'fa-solid fa-pen'],
            ['title' => 'Design', 'desc' => 'Crafting UI/UX.', 'icon' => 'fa-solid fa-palette'],
            ['title' => 'Development', 'desc' => 'Implementing design in WordPress.', 'icon' => 'fa-solid fa-code'],
            ['title' => 'Launch', 'desc' => 'Deploying website.', 'icon' => 'fa-solid fa-rocket'],
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Benefits',
        'title' => 'Why Choose <span class="gradient-text">' . COMPANY_NAME . '</span>',
        'subtitle' => 'We deliver high-quality WordPress design solutions.',
        'cards' => [
            ['icon' => 'fa-solid fa-palette', 'title' => 'Creative Design', 'desc' => 'Modern and engaging layouts.'],
            ['icon' => 'fa-solid fa-mobile-screen', 'title' => 'Responsive', 'desc' => 'Optimized for all devices.'],
            ['icon' => 'fa-solid fa-chart-line', 'title' => 'Higher Conversions', 'desc' => 'Designs that convert.'],
            ['icon' => 'fa-solid fa-bolt', 'title' => 'Fast Performance', 'desc' => 'Optimized speed.'],
            ['icon' => 'fa-solid fa-code', 'title' => 'Customizable', 'desc' => 'Flexible and scalable.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'Support', 'desc' => 'Ongoing support.'],
        ]
    ],

    /* ================= PORTFOLIO ================= */
    'portfolio' => [
        'tag' => '<i class="fa-solid fa-briefcase"></i>&nbsp; Portfolio',
        'title' => 'Our <span class="gradient-text">WordPress Design Work</span>',
        'subtitle' => 'Explore our recent WordPress projects.',
        'filter_categories' => ['wordpress', 'design', 'uiux']
    ],

    /* ================= TESTIMONIALS ================= */
    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'What is WordPress design?',
                'a' => 'WordPress design focuses on creating visually appealing and functional websites using WordPress.'
            ],
            [
                'q' => 'Do you create custom WordPress themes?',
                'a' => 'Yes, we design fully customized WordPress themes tailored to your needs.'
            ],
            [
                'q' => 'Is the website mobile-friendly?',
                'a' => 'Yes, all designs are responsive and optimized for all devices.'
            ],
            [
                'q' => 'Can you redesign my existing WordPress site?',
                'a' => 'Yes, we can upgrade your site with modern UI/UX design.'
            ],
            [
                'q' => 'Do you provide support after design?',
                'a' => 'Yes, we offer ongoing maintenance and support.',
            ],
        ]
    ]
];
