<?php
// config/services/mobile-app-development.php

return [
    'menu_category' => 'core',
    'menu_title' => 'Mobile App Dev',
    'menu_desc' => 'Native and cross-platform apps for iOS and Android.',
    'menu_icon' => 'fa-solid fa-mobile-screen',


    'pageTitle' => 'Mobile App Development Services | ' . COMPANY_NAME . ' - Build Scalable Apps',
    'pageDescription' => 'Professional mobile app development services by ' . COMPANY_NAME . '. We create high-performance Android, iOS, and cross-platform apps with modern UI/UX and scalable architecture.',
    'pageKey' => 'mobile_app_development',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-solid fa-mobile-screen-button"></i>&nbsp; Mobile App Development',
        'title' => 'Build <span class="gradient-text">Smart Mobile Apps</span> That Users Love',
        'subtitle' => 'We design and develop high-performance mobile applications for Android, iOS, and cross-platform environments that deliver seamless user experiences and business growth.',
        'metrics' => [
            ['val' => '150+', 'lbl' => 'Apps Delivered'],
            ['val' => '4.8★', 'lbl' => 'Avg App Rating'],
            ['val' => '10+', 'lbl' => 'Years Experience'],
        ],
        'form_title' => 'Start Your App Project',
        'form_sub' => 'Discuss your idea with our experts and get a free consultation.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'Custom App Development',
        'title' => 'Where <span class="gradient-text">Innovation Meets Mobility</span>',
        'subtitle' => 'We build intuitive, scalable, and feature-rich mobile apps that enhance user engagement and drive business success.',
        'features' => [
            [
                'icon' => 'fa-solid fa-layer-group',
                'title' => 'Modern Frameworks',
                'desc' => 'Using Flutter, React Native, and native technologies for high performance.'
            ],
            [
                'icon' => 'fa-solid fa-bolt-lightning',
                'title' => 'High Performance',
                'desc' => 'Optimized apps with smooth performance and fast load times.'
            ],
        ],
        'img' => 'assets/images/services/mobile-intro.png',
        'glass_card_1' => [
            'icon' => 'fa-solid fa-star',
            'label' => 'User Rating',
            'val' => '4.8★',
            'width' => '96%'
        ],
        'glass_card_2' => [
            'icon' => 'fa-solid fa-shield-halved',
            'label' => 'Security',
            'val' => 'Advanced',
            'sub' => 'Protected'
        ],
        'floating_badge' => [
            'icon' => 'fa-solid fa-award',
            'lbl'  => 'Top App Agency'
        ]
    ],

    /* ================= TYPES ================= */
    'types' => [
        'tag' => '<i class="fa-solid fa-layer-group"></i>&nbsp; Services',
        'title' => 'Our <span class="gradient-text">Mobile App Services</span>',
        'subtitle' => 'Complete mobile app development solutions tailored to your business needs.',
        'panels' => [

            'android' => [
                'tab_name'  => 'Android',
                'tab_icon'  => 'fa-brands fa-android',
                'title'     => 'Android App Development',
                'tagline'   => 'Reach Millions of Users',
                'desc'      => 'We develop scalable and user-friendly Android applications tailored to your business requirements.',
                'image'     => 'assets/images/services/mobile-android.png', // TODO: generate proper image
                'metric'    => ['val' => '100%', 'lbl' => 'Play Store Ready', 'icon' => 'fa-solid fa-check'],
                'features'  => ['Custom Android Apps', 'Material UI Design', 'Play Store Deployment'],
                'techStack' => ['Kotlin', 'Java', 'Firebase']
            ],

            'ios' => [
                'tab_name'  => 'iOS',
                'tab_icon'  => 'fa-brands fa-apple',
                'title'     => 'iOS App Development',
                'tagline'   => 'Premium Experience',
                'desc'      => 'Build high-quality iOS apps with seamless performance and elegant user interfaces.',
                'image'     => 'assets/images/services/mobile-ios.png', // TODO: generate proper image
                'metric'    => ['val' => 'Top', 'lbl' => 'Performance', 'icon' => 'fa-solid fa-gauge-high'],
                'features'  => ['Swift Development', 'App Store Optimization', 'Secure Architecture'],
                'techStack' => ['Swift', 'Objective-C', 'Xcode']
            ],

            'cross' => [
                'tab_name'  => 'Cross Platform',
                'tab_icon'  => 'fa-solid fa-code',
                'title'     => 'Cross-Platform App Development',
                'tagline'   => 'One App, Multiple Platforms',
                'desc'      => 'Save time and cost with apps that work seamlessly on both Android and iOS.',
                'image'     => 'assets/images/services/mobile-cross.png', // TODO: generate proper image
                'metric'    => ['val' => '2X', 'lbl' => 'Faster Delivery', 'icon' => 'fa-solid fa-rocket'],
                'features'  => ['Single Codebase', 'Fast Development', 'Cost Effective'],
                'techStack' => ['Flutter', 'React Native', 'Dart']
            ],

            'uiux' => [
                'tab_name'  => 'UI/UX',
                'tab_icon'  => 'fa-solid fa-pen-ruler',
                'title'     => 'Mobile App UI/UX Design',
                'tagline'   => 'Designed for Engagement',
                'desc'      => 'We create intuitive and visually appealing app designs that enhance user experience.',
                'image'     => 'assets/images/services/mobile-uiux.png', // TODO: generate proper image
                'metric'    => ['val' => 'UX', 'lbl' => 'Focused', 'icon' => 'fa-solid fa-user'],
                'features'  => ['Wireframing', 'Prototyping', 'User Testing'],
                'techStack' => ['Figma', 'Adobe XD', 'Sketch']
            ]

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Process',
        'title' => 'Our <span class="gradient-text">App Development Process</span>',
        'subtitle' => 'A streamlined process to build high-quality mobile applications.',
        'steps' => [
            ['title' => 'Requirement Analysis', 'desc' => 'Understanding your app idea and business goals.', 'icon' => 'fa-solid fa-compass'],
            ['title' => 'UI/UX Design', 'desc' => 'Designing intuitive and engaging user interfaces.', 'icon' => 'fa-solid fa-pen-nib'],
            ['title' => 'Development', 'desc' => 'Building the app using modern technologies.', 'icon' => 'fa-solid fa-code'],
            ['title' => 'Testing', 'desc' => 'Ensuring bug-free and smooth performance.', 'icon' => 'fa-solid fa-bug-slash'],
            ['title' => 'Launch & Support', 'desc' => 'Deploying and maintaining your app.', 'icon' => 'fa-solid fa-rocket'],
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Benefits',
        'title' => 'Why Choose <span class="gradient-text">' . COMPANY_NAME . '</span>',
        'subtitle' => 'We deliver user-centric and scalable mobile apps.',
        'cards' => [
            ['icon' => 'fa-solid fa-mobile', 'title' => 'User-Friendly Apps', 'desc' => 'Intuitive interfaces for better engagement.'],
            ['icon' => 'fa-solid fa-gauge-high', 'title' => 'High Performance', 'desc' => 'Fast and responsive apps for all devices.'],
            ['icon' => 'fa-solid fa-shield-halved', 'title' => 'Secure', 'desc' => 'Advanced security for user data protection.'],
            ['icon' => 'fa-solid fa-layer-group', 'title' => 'Scalable', 'desc' => 'Apps that grow with your business.'],
            ['icon' => 'fa-solid fa-cloud', 'title' => 'Cloud Integration', 'desc' => 'Seamless backend and cloud connectivity.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'Support', 'desc' => 'Ongoing maintenance and updates.'],
        ]
    ],

    /* ================= PORTFOLIO ================= */
    'portfolio' => [
        'tag' => '<i class="fa-solid fa-briefcase"></i>&nbsp; Portfolio',
        'title' => 'Our <span class="gradient-text">App Projects</span>',
        'subtitle' => 'Explore some of our recent mobile applications.',
        'filter_categories' => ['android', 'ios', 'cross']
    ],

    /* ================= TESTIMONIALS ================= */
    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'How long does it take to complete a project?',
                'a' => 'Project timelines vary based on complexity, but most projects are completed within 4–12 weeks.'
            ],
            [
                'q' => 'Do you provide custom solutions?',
                'a' => 'Yes, all our services are fully customized based on your business requirements and goals.'
            ],
            [
                'q' => 'Will my solution be SEO-friendly and optimized?',
                'a' => 'Absolutely. We follow best practices for performance, SEO, and user experience in every project.'
            ],
            [
                'q' => 'Do you offer post-launch support?',
                'a' => 'Yes, we provide ongoing maintenance, updates, and technical support after project delivery.'
            ],
            [
                'q' => 'How much does it cost?',
                'a' => 'Pricing depends on project scope and features. Contact us for a custom quote tailored to your needs.'
            ],
        ]
    ],
];
