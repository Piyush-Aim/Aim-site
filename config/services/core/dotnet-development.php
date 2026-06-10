<?php
// config/services/dotnet-development.php

return [
    'menu_category' => 'core',
    'menu_title' => '.NET Development',
    'menu_desc' => 'Enterprise-grade backend solutions using the Microsoft stack.',
    'menu_icon' => 'fa-solid fa-code',


    'pageTitle' => '.NET Development Services | ' . COMPANY_NAME . ' - Scalable & Secure Applications',
    'pageDescription' => 'Professional .NET development services by ' . COMPANY_NAME . '. We build secure, scalable, and high-performance web, desktop, and enterprise applications using Microsoft .NET technologies.',
    'pageKey' => 'dotnet_development',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-brands fa-microsoft"></i>&nbsp; .NET Development',
        'title' => 'Build <span class="gradient-text">Robust .NET Applications</span>',
        'subtitle' => COMPANY_NAME . ' delivers enterprise-grade .NET solutions designed for performance, security, and scalability. From web apps to complex enterprise systems, we build solutions that grow with your business.',
        'metrics' => [
            ['val' => '180+', 'lbl' => '.NET Projects'],
            ['val' => '99.9%', 'lbl' => 'Uptime'],
            ['val' => '10+', 'lbl' => 'Years Experience'],
        ],
        'form_title' => 'Start Your Project',
        'form_sub' => 'Connect with our .NET experts today.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'Microsoft Technology',
        'title' => 'Powerful <span class="gradient-text">.NET Solutions</span> for Modern Businesses',
        'subtitle' => 'At ' . COMPANY_NAME . ', we leverage Microsoft .NET technologies to develop scalable, secure, and high-performing applications tailored to your business requirements.',
        'features' => [
            [
                'icon' => 'fa-solid fa-shield-halved',
                'title' => 'Secure Architecture',
                'desc' => 'Enterprise-level security standards to protect your application and data.'
            ],
            [
                'icon' => 'fa-solid fa-arrows-up-to-line',
                'title' => 'High Scalability',
                'desc' => 'Applications designed to scale with your growing business needs.'
            ],
        ],
        'img' => 'assets/images/services/dotnet-intro.webp',
        'glass_card_1' => [
            'icon' => 'fa-solid fa-server',
            'label' => 'Performance',
            'val' => 'High',
            'width' => '95%'
        ],
        'glass_card_2' => [
            'icon' => 'fa-solid fa-lock',
            'label' => 'Security',
            'val' => 'Enterprise',
            'sub' => 'Protected'
        ],
        'floating_badge' => [
            'icon' => 'fa-solid fa-code',
            'lbl'  => '.NET Experts'
        ]
    ],

    /* ================= TYPES ================= */
    'types' => [
        'tag' => '<i class="fa-solid fa-layer-group"></i>&nbsp; .NET Services',
        'title' => 'Our <span class="gradient-text">.NET Development Solutions</span>',
        'subtitle' => 'End-to-end .NET development tailored for businesses of all sizes.',
        'panels' => [

            'web' => [
                'tab_name'  => 'Web Apps',
                'tab_icon'  => 'fa-solid fa-globe',
                'title'     => '.NET Web Development',
                'tagline'   => 'High-Performance Websites',
                'desc'      => 'We build fast, secure, and scalable web applications using ASP.NET and modern frameworks.',
                'image'     => 'assets/images/services/dotnet-webdev.webp',
                'metric'    => ['val' => 'Fast', 'lbl' => 'Performance', 'icon' => 'fa-solid fa-bolt'],
                'features'  => ['ASP.NET Core', 'MVC Architecture', 'Responsive UI'],
                'techStack' => ['ASP.NET', 'C#', 'SQL Server', 'Azure']
            ],

            'enterprise' => [
                'tab_name'  => 'Enterprise',
                'tab_icon'  => 'fa-solid fa-building',
                'title'     => 'Enterprise Application Development',
                'tagline'   => 'Business Solutions',
                'desc'      => 'We develop large-scale enterprise applications to streamline business processes and improve efficiency.',
                'image'     => 'assets/images/services/dotnet-enterprise.webp',
                'metric'    => ['val' => 'Enterprise', 'lbl' => 'Grade', 'icon' => 'fa-solid fa-building'],
                'features'  => ['ERP Systems', 'CRM Systems', 'Custom Dashboards'],
                'techStack' => ['.NET Core', 'Azure', 'SQL Server']
            ],

            'api' => [
                'tab_name'  => 'API',
                'tab_icon'  => 'fa-solid fa-code',
                'title'     => 'API Development & Integration',
                'tagline'   => 'Connected Systems',
                'desc'      => 'We create secure APIs for seamless integration with third-party services and applications.',
                'image'     => 'assets/images/services/dotnet-api.webp',
                'metric'    => ['val' => 'Secure', 'lbl' => 'API', 'icon' => 'fa-solid fa-lock'],
                'features'  => ['REST APIs', 'Third-party Integration', 'Microservices'],
                'techStack' => ['ASP.NET Web API', 'JSON', 'OAuth']
            ],

            'migration' => [
                'tab_name'  => 'Migration',
                'tab_icon'  => 'fa-solid fa-arrows-rotate',
                'title'     => '.NET Migration & Upgrade',
                'tagline'   => 'Modernize Systems',
                'desc'      => 'Upgrade legacy applications to modern .NET platforms for better performance and security.',
                'image'     => 'assets/images/services/dotnet-migration.webp',
                'metric'    => ['val' => 'Modern', 'lbl' => 'Upgrade', 'icon' => 'fa-solid fa-rocket'],
                'features'  => ['Legacy Migration', 'Cloud Migration', 'Performance Optimization'],
                'techStack' => ['.NET Core', 'Azure', 'Docker']
            ],

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Development Process',
        'title' => 'Our <span class="gradient-text">.NET Development Process</span>',
        'subtitle' => 'A structured workflow to deliver high-quality .NET applications.',
        'steps' => [
            ['title' => 'Requirement Analysis', 'desc' => 'Understanding project requirements and business goals.', 'icon' => 'fa-solid fa-compass'],
            ['title' => 'Architecture Design', 'desc' => 'Designing scalable and secure system architecture.', 'icon' => 'fa-solid fa-sitemap'],
            ['title' => 'Development', 'desc' => 'Building applications using .NET technologies.', 'icon' => 'fa-solid fa-code'],
            ['title' => 'Testing', 'desc' => 'Ensuring quality, performance, and security.', 'icon' => 'fa-solid fa-bug-slash'],
            ['title' => 'Deployment & Support', 'desc' => 'Launching and maintaining applications.', 'icon' => 'fa-solid fa-rocket'],
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Why Choose Us',
        'title' => 'Why Choose <span class="gradient-text">' . COMPANY_NAME . '</span>',
        'subtitle' => 'We deliver reliable and scalable .NET solutions.',
        'cards' => [
            ['icon' => 'fa-solid fa-shield-halved', 'title' => 'Secure Applications', 'desc' => 'Built with enterprise-level security.'],
            ['icon' => 'fa-solid fa-arrows-up-to-line', 'title' => 'Scalable Solutions', 'desc' => 'Grow your application as your business grows.'],
            ['icon' => 'fa-solid fa-bolt', 'title' => 'High Performance', 'desc' => 'Fast and optimized applications.'],
            ['icon' => 'fa-solid fa-cloud', 'title' => 'Cloud Ready', 'desc' => 'Deploy on Azure and cloud platforms.'],
            ['icon' => 'fa-solid fa-earth-americas', 'title' => 'Global Service', 'desc' => 'Based in ' . COMPANY_ADDRESS_SHORT . ', serving clients worldwide.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'Support', 'desc' => 'Dedicated support and maintenance.'],
        ]
    ],

    /* ================= PORTFOLIO ================= */
    'portfolio' => [
        'tag' => '<i class="fa-solid fa-briefcase"></i>&nbsp; Portfolio',
        'title' => 'Our <span class="gradient-text">.NET Projects</span>',
        'subtitle' => 'Explore our recent .NET development work.',
        'filter_categories' => ['dotnet', 'enterprise', 'webapp']
    ],

    /* ================= TESTIMONIALS ================= */
    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'What is .NET development?',
                'a' => '.NET development is a framework by Microsoft used to build web, desktop, and enterprise applications.'
            ],
            [
                'q' => 'Is .NET suitable for enterprise applications?',
                'a' => 'Yes, .NET is widely used for enterprise applications due to its scalability and security.'
            ],
            [
                'q' => 'Do you provide migration services?',
                'a' => 'Yes, we migrate legacy systems to modern .NET platforms.'
            ],
            [
                'q' => 'Can you build custom APIs in .NET?',
                'a' => 'Yes, we develop secure and scalable APIs using ASP.NET.'
            ],
            [
                'q' => 'Do you provide maintenance support?',
                'a' => 'Yes, we offer ongoing support and maintenance services.'
            ],
        ]
    ]
];
