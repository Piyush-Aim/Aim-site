<?php
// config/services/web-development.php

return [
    'menu_category' => 'core',
    'menu_title' => 'Web Development',
    'menu_desc' => 'Custom websites and web applications built for speed, security, and business growth.',
    'menu_icon' => 'fa-solid fa-code',

    'pageTitle' => 'Professional Web Development Services | ' . COMPANY_NAME . ' - Custom Website Development',
    'pageDescription' => 'Build fast, secure, responsive, and SEO-friendly websites with ' . COMPANY_NAME . '. We develop custom business websites, corporate portals, eCommerce stores, web applications, and scalable digital solutions.',
    'pageKey' => 'web_development',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-solid fa-code"></i>&nbsp; Web Development Company',
        'title' => 'Build Powerful <span class="gradient-text">Web Solutions</span> That Drive Results',
        'subtitle' => COMPANY_NAME . ' develops high-performance websites and custom web applications that combine modern technology, responsive design, SEO best practices, and exceptional user experience to help businesses grow online.',
        'metrics' => [
            ['val' => '300+', 'lbl' => 'Projects Delivered'],
            ['val' => '99.9%', 'lbl' => 'Uptime Focus'],
            ['val' => '5+', 'lbl' => 'Years Experience'],
        ],
        'form_title' => 'Start Your Web Development Project',
        'form_sub' => 'Discuss your project with our web development specialists today.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'Custom Website Development',
        'title' => 'Professional <span class="gradient-text">Web Development Services</span> for Modern Businesses',
        'subtitle' => 'At ' . COMPANY_NAME . ', we build scalable, secure, and high-performing websites tailored to your business goals. From corporate websites and custom portals to eCommerce platforms and web applications, we deliver solutions designed for long-term growth and better online visibility.',
        'features' => [
            [
                'icon' => 'fa-solid fa-laptop-code',
                'title' => 'Custom Development',
                'desc' => 'Every website is designed and developed according to your business requirements without relying on generic templates.'
            ],
            [
                'icon' => 'fa-solid fa-gauge-high',
                'title' => 'Performance Optimized',
                'desc' => 'We build lightweight, fast-loading websites optimized for Core Web Vitals, search engines, and user experience.'
            ],
        ],
        'img' => 'assets/images/services/web-development-intro.webp',

        'glass_card_1' => [
            'icon' => 'fa-solid fa-shield-halved',
            'label' => 'Website Security',
            'val' => 'Enterprise Grade',
            'width' => '98%'
        ],

        'glass_card_2' => [
            'icon' => 'fa-solid fa-rocket',
            'label' => 'Performance',
            'val' => 'High Speed',
            'sub' => 'SEO Optimized'
        ],

        'floating_badge' => [
            'icon' => 'fa-solid fa-award',
            'lbl' => 'Trusted Developers'
        ]
    ],

    /* ================= TYPES ================= */
    'types' => [
        'tag' => '<i class="fa-solid fa-code"></i>&nbsp; Web Development Services',
        'title' => 'Our <span class="gradient-text">Web Development Solutions</span>',
        'subtitle' => 'Comprehensive web development services tailored for startups, SMEs, enterprises, and growing brands.',

        'panels' => [

            'business_website' => [
                'tab_name'  => 'Business Website',
                'tab_icon'  => 'fa-solid fa-globe',
                'title'     => 'Business Website Development',
                'tagline'   => 'Professional Business Websites',
                'desc'      => 'We build responsive, SEO-friendly business websites that strengthen your online presence, generate leads, and establish credibility with modern design and high performance.',
                'image'     => 'assets/images/services/business-website-development.webp',
                'metric'    => [
                    'val' => '100%',
                    'lbl' => 'Responsive',
                    'icon' => 'fa-solid fa-mobile-screen'
                ],
                'features'  => [
                    'Responsive Design',
                    'SEO-Friendly Structure',
                    'Lead Generation'
                ],
                'techStack' => [
                    'HTML5',
                    'CSS3',
                    'JavaScript'
                ]
            ],

            'custom_web_app' => [
                'tab_name'  => 'Web Applications',
                'tab_icon'  => 'fa-solid fa-laptop-code',
                'title'     => 'Custom Web Application Development',
                'tagline'   => 'Scalable Business Solutions',
                'desc'      => 'Develop secure and scalable web applications that automate business processes, improve productivity, and deliver exceptional user experiences.',
                'image'     => 'assets/images/services/custom-web-application.webp',
                'metric'    => [
                    'val' => 'Scalable',
                    'lbl' => 'Architecture',
                    'icon' => 'fa-solid fa-layer-group'
                ],
                'features'  => [
                    'Admin Dashboards',
                    'Business Portals',
                    'Custom Software'
                ],
                'techStack' => [
                    'Laravel',
                    'PHP',
                    'MySQL'
                ]
            ],

            'ecommerce' => [
                'tab_name'  => 'eCommerce',
                'tab_icon'  => 'fa-solid fa-cart-shopping',
                'title'     => 'eCommerce Website Development',
                'tagline'   => 'Sell Products Online',
                'desc'      => 'Launch feature-rich eCommerce websites with secure payment gateways, inventory management, product catalogs, and seamless online shopping experiences.',
                'image'     => 'assets/images/services/ecommerce-development.webp',
                'metric'    => [
                    'val' => 'Secure',
                    'lbl' => 'Online Store',
                    'icon' => 'fa-solid fa-lock'
                ],
                'features'  => [
                    'Shopping Cart',
                    'Payment Gateway',
                    'Order Management'
                ],
                'techStack' => [
                    'WooCommerce',
                    'Shopify',
                    'Laravel'
                ]
            ],

            'cms_development' => [
                'tab_name'  => 'CMS Development',
                'tab_icon'  => 'fa-solid fa-layer-group',
                'title'     => 'CMS Website Development',
                'tagline'   => 'Easy Website Management',
                'desc'      => 'Build content management systems that allow you to easily manage pages, blogs, products, media, and website content without technical expertise.',
                'image'     => 'assets/images/services/cms-development.webp',
                'metric'    => [
                    'val' => 'Easy',
                    'lbl' => 'Management',
                    'icon' => 'fa-solid fa-pen-to-square'
                ],
                'features'  => [
                    'WordPress Development',
                    'Custom CMS',
                    'Content Management'
                ],
                'techStack' => [
                    'WordPress',
                    'PHP',
                    'MySQL'
                ]
            ],

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-diagram-project"></i>&nbsp; Development Process',
        'title' => 'Our <span class="gradient-text">Web Development Process</span>',
        'subtitle' => 'A structured development workflow that ensures quality, performance, security, and timely project delivery.',
        'steps' => [
            [
                'title' => 'Requirement Analysis',
                'desc' => 'We understand your business objectives, target audience, and technical requirements.',
                'icon' => 'fa-solid fa-comments'
            ],
            [
                'title' => 'Planning & Architecture',
                'desc' => 'Our team prepares project architecture, technology stack, database structure, and development roadmap.',
                'icon' => 'fa-solid fa-sitemap'
            ],
            [
                'title' => 'UI & Development',
                'desc' => 'We design responsive interfaces and build scalable, secure, and feature-rich web solutions.',
                'icon' => 'fa-solid fa-code'
            ],
            [
                'title' => 'Testing & Optimization',
                'desc' => 'Every website is tested for functionality, security, responsiveness, speed, and browser compatibility.',
                'icon' => 'fa-solid fa-vial-circle-check'
            ],
            [
                'title' => 'Launch & Support',
                'desc' => 'After successful deployment, we provide continuous maintenance, updates, and technical support.',
                'icon' => 'fa-solid fa-rocket'
            ],
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-award"></i>&nbsp; Why Choose Us',
        'title' => 'Why Businesses Choose <span class="gradient-text">' . COMPANY_NAME . '</span>',
        'subtitle' => 'We build websites that combine modern technology, exceptional performance, and long-term scalability.',
        'cards' => [
            [
                'icon' => 'fa-solid fa-code',
                'title' => 'Custom Development',
                'desc' => 'Tailor-made websites developed specifically for your business goals.'
            ],
            [
                'icon' => 'fa-solid fa-gauge-high',
                'title' => 'High Performance',
                'desc' => 'Fast-loading websites optimized for Core Web Vitals and user experience.'
            ],
            [
                'icon' => 'fa-solid fa-mobile-screen',
                'title' => 'Responsive Design',
                'desc' => 'Seamless browsing experience across desktop, tablet, and mobile devices.'
            ],
            [
                'icon' => 'fa-solid fa-shield-halved',
                'title' => 'Secure Solutions',
                'desc' => 'Built with modern security standards to protect your business and customer data.'
            ],
            [
                'icon' => 'fa-solid fa-magnifying-glass-chart',
                'title' => 'SEO-Friendly Development',
                'desc' => 'Clean code, optimized structure, and search-engine-friendly development practices.'
            ],
            [
                'icon' => 'fa-solid fa-headset',
                'title' => 'Reliable Support',
                'desc' => 'Ongoing maintenance, updates, troubleshooting, and technical assistance whenever needed.'
            ],
        ]
    ],

    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'What web development services do you provide?',
                'a' => 'We develop business websites, corporate websites, custom web applications, eCommerce stores, CMS websites, landing pages, and enterprise web solutions.'
            ],
            [
                'q' => 'Do you develop responsive websites?',
                'a' => 'Yes. Every website we build is fully responsive and optimized for desktops, tablets, and smartphones.'
            ],
            [
                'q' => 'Can you redesign my existing website?',
                'a' => 'Yes. We can modernize your existing website with improved design, performance, SEO structure, and enhanced functionality.'
            ],
            [
                'q' => 'Which technologies do you use?',
                'a' => 'We work with HTML5, CSS3, JavaScript, PHP, Laravel, WordPress, MySQL, WooCommerce, REST APIs, and other modern web technologies.'
            ],
            [
                'q' => 'Will my website be SEO-friendly?',
                'a' => 'Absolutely. We follow SEO best practices, including clean code, optimized URLs, schema-ready structure, mobile responsiveness, and fast page loading.'
            ],
            [
                'q' => 'Do you provide website maintenance after launch?',
                'a' => 'Yes. We offer website maintenance, security updates, performance optimization, backups, bug fixes, and ongoing technical support.'
            ],
        ]
    ]
];
