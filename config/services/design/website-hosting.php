<?php
// config/services/website-hosting.php

return [
    'menu_category' => 'design',
    'menu_title' => 'Website Hosting',
    'menu_desc' => 'Ultra-fast, secure, and managed cloud hosting.',
    'menu_icon' => 'fa-solid fa-hard-drive',


    'pageTitle' => 'Website Hosting Services | ' . COMPANY_NAME . ' - Fast & Secure Hosting',
    'pageDescription' => 'Reliable website hosting services by ' . COMPANY_NAME . '. Get fast, secure, and scalable hosting with 99.9% uptime and expert support.',
    'pageKey' => 'website_hosting',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-solid fa-server"></i>&nbsp; Website Hosting',
        'title' => 'Fast, Secure & Reliable <span class="gradient-text">Website Hosting</span>',
        'subtitle' => 'We provide high-performance hosting solutions that ensure speed, security, and uptime for your website.',
        'metrics' => [
            ['val' => '99.9%', 'lbl' => 'Uptime'],
            ['val' => '2X', 'lbl' => 'Faster Load'],
            ['val' => '500+', 'lbl' => 'Websites Hosted'],
        ],
        'form_title' => 'Get Reliable Hosting',
        'form_sub' => 'Launch your website with secure and scalable hosting.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'Hosting Solutions',
        'title' => 'Power Your Website with <span class="gradient-text">High-Speed Hosting</span>',
        'subtitle' => 'Our hosting services ensure your website loads fast, stays secure, and remains online without interruptions.',
        'features' => [
            [
                'icon' => 'fa-solid fa-bolt',
                'title' => 'Fast Performance',
                'desc' => 'Optimized servers for lightning-fast loading speeds.'
            ],
            [
                'icon' => 'fa-solid fa-shield-halved',
                'title' => 'Advanced Security',
                'desc' => 'Protect your website with SSL, firewalls, and backups.'
            ],
        ],
        'img' => 'assets/images/services/website-hosting-intro.png',
        'glass_card_1' => [
            'icon' => 'fa-solid fa-chart-line',
            'label' => 'Speed',
            'val' => 'Fast',
            'width' => '95%'
        ],
        'glass_card_2' => [
            'icon' => 'fa-solid fa-server',
            'label' => 'Uptime',
            'val' => '99.9%',
            'sub' => 'Reliable'
        ],
        'floating_badge' => [
            'icon' => 'fa-solid fa-award',
            'lbl'  => 'Hosting Experts'
        ]
    ],

    /* ================= TYPES ================= */
    'types' => [
        'tag' => '<i class="fa-solid fa-layer-group"></i>&nbsp; Hosting Services',
        'title' => 'Our <span class="gradient-text">Hosting Solutions</span>',
        'subtitle' => 'Flexible hosting plans for every business.',
        'panels' => [

            'shared' => [
                'tab_name'  => 'Shared Hosting',
                'tab_icon'  => 'fa-solid fa-users',
                'title'     => 'Shared Hosting',
                'tagline'   => 'Affordable Hosting',
                'desc'      => 'Cost-effective hosting for small websites and startups.',
                'image'     => 'assets/images/services/website-hosting-shared.png',
                'metric'    => ['val' => 'Low', 'lbl' => 'Cost', 'icon' => 'fa-solid fa-dollar-sign'],
                'features'  => ['Affordable Plans', 'Easy Setup', 'Basic Resources'],
                'techStack' => ['cPanel', 'LiteSpeed']
            ],

            'vps' => [
                'tab_name'  => 'VPS Hosting',
                'tab_icon'  => 'fa-solid fa-server',
                'title'     => 'VPS Hosting',
                'tagline'   => 'More Power & Control',
                'desc'      => 'Dedicated resources with better performance and scalability.',
                'image'     => 'assets/images/services/website-hosting-vps.png',
                'metric'    => ['val' => 'High', 'lbl' => 'Performance', 'icon' => 'fa-solid fa-bolt'],
                'features'  => ['Dedicated Resources', 'Root Access', 'Scalability'],
                'techStack' => ['Linux', 'Docker']
            ],

            'cloud' => [
                'tab_name'  => 'Cloud Hosting',
                'tab_icon'  => 'fa-solid fa-cloud',
                'title'     => 'Cloud Hosting',
                'tagline'   => 'Scalable Infrastructure',
                'desc'      => 'Highly scalable hosting with distributed servers.',
                'image'     => 'assets/images/services/website-hosting-cloud.png',
                'metric'    => ['val' => 'Scalable', 'lbl' => 'Resources', 'icon' => 'fa-solid fa-cloud'],
                'features'  => ['Auto Scaling', 'High Availability', 'Load Balancing'],
                'techStack' => ['AWS', 'Google Cloud', 'Azure']
            ],

            'managed' => [
                'tab_name'  => 'Managed Hosting',
                'tab_icon'  => 'fa-solid fa-gears',
                'title'     => 'Managed Hosting',
                'tagline'   => 'Hassle-Free Hosting',
                'desc'      => 'We manage your hosting so you can focus on your business.',
                'image'     => 'assets/images/services/website-hosting-managed.png',
                'metric'    => ['val' => 'Easy', 'lbl' => 'Management', 'icon' => 'fa-solid fa-check'],
                'features'  => ['Automatic Updates', 'Security Monitoring', 'Backup Management'],
                'techStack' => ['cPanel', 'Cloudflare']
            ],

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Process',
        'title' => 'Our <span class="gradient-text">Hosting Setup Process</span>',
        'subtitle' => 'A seamless process to get your website live.',
        'steps' => [
            ['title' => 'Requirement Analysis', 'desc' => 'Understanding your hosting needs.', 'icon' => 'fa-solid fa-magnifying-glass'],
            ['title' => 'Server Setup', 'desc' => 'Configuring hosting environment.', 'icon' => 'fa-solid fa-server'],
            ['title' => 'Deployment', 'desc' => 'Launching your website.', 'icon' => 'fa-solid fa-rocket'],
            ['title' => 'Optimization', 'desc' => 'Improving speed and performance.', 'icon' => 'fa-solid fa-bolt'],
            ['title' => 'Monitoring', 'desc' => 'Ensuring uptime and security.', 'icon' => 'fa-solid fa-shield-halved'],
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Benefits',
        'title' => 'Why Choose <span class="gradient-text">' . COMPANY_NAME . '</span>',
        'subtitle' => 'We deliver reliable hosting solutions.',
        'cards' => [
            ['icon' => 'fa-solid fa-bolt', 'title' => 'Fast Speed', 'desc' => 'Optimized performance.'],
            ['icon' => 'fa-solid fa-shield-halved', 'title' => 'Secure', 'desc' => 'Advanced security features.'],
            ['icon' => 'fa-solid fa-server', 'title' => 'Reliable', 'desc' => '99.9% uptime guarantee.'],
            ['icon' => 'fa-solid fa-cloud', 'title' => 'Scalable', 'desc' => 'Grow your resources easily.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'Support', 'desc' => '24/7 technical support.'],
            ['icon' => 'fa-solid fa-database', 'title' => 'Backup', 'desc' => 'Regular data backups.'],
        ]
    ],

    /* ================= PORTFOLIO ================= */
    'portfolio' => [
        'tag' => '<i class="fa-solid fa-briefcase"></i>&nbsp; Portfolio',
        'title' => 'Our <span class="gradient-text">Hosting Clients</span>',
        'subtitle' => 'Websites powered by our hosting solutions.',
        'filter_categories' => ['hosting', 'server', 'cloud']
    ],

    /* ================= TESTIMONIALS ================= */
    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'What is website hosting?',
                'a' => 'Website hosting is a service that stores your website files and makes them accessible on the internet.'
            ],
            [
                'q' => 'Which hosting is best for my website?',
                'a' => 'It depends on your needs. We help you choose between shared, VPS, or cloud hosting.'
            ],
            [
                'q' => 'Do you provide SSL certificates?',
                'a' => 'Yes, we provide SSL for secure connections.'
            ],
            [
                'q' => 'Can you migrate my website?',
                'a' => 'Yes, we provide seamless website migration services.'
            ],
            [
                'q' => 'Do you offer support?',
                'a' => 'Yes, we offer ongoing support and monitoring.',
            ],
        ]
    ]
];
