<?php

return [
    'hide_from_menu' => true,
    'menu_category' => 'web',
    'menu_title' => 'Web Development',

    'pageTitle' => 'Web Development Services in {target_loc} | ' . COMPANY_NAME,
    'pageDescription' => 'Professional web development services in {target_loc}. We build custom, responsive, fast, and SEO-friendly websites, web applications, and eCommerce solutions for businesses across {state}.',
    'pageKey' => 'web_development_local',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-solid fa-code"></i>&nbsp; Professional Web Development',
        'title' => 'Custom Web Development in <span class="gradient-text">{target_loc}</span>',
        'subtitle' => 'Build powerful, secure, and scalable websites with ' . COMPANY_NAME . '. We develop high-performance business websites, custom web applications, and eCommerce solutions that help businesses grow online.',
        'metrics' => [
            ['val' => '300+', 'lbl' => 'Projects Delivered'],
            ['val' => '99.9%', 'lbl' => 'Uptime Focus'],
            ['val' => '5+', 'lbl' => 'Years Experience'],
        ],
        'form_title' => 'Start Your {target_loc} Web Development Project',
        'form_sub' => 'Get a free consultation from our experienced web developers.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'Custom Web Solutions',
        'title' => 'Professional <span class="gradient-text">Web Development Services</span> in {target_loc}',
        'subtitle' => 'Whether you need a business website, custom web application, eCommerce platform, or enterprise portal, our experienced developers create secure, scalable, and SEO-friendly solutions tailored to your business goals. We help businesses throughout {state} establish a strong digital presence with modern web technologies.',
        'features' => [
            [
                'icon' => 'fa-solid fa-code',
                'title' => 'Custom Development',
                'desc' => 'Tailor-made websites and web applications developed to match your business requirements and future growth.'
            ],
            [
                'icon' => 'fa-solid fa-gauge-high',
                'title' => 'Performance Optimized',
                'desc' => 'Fast-loading, secure, and SEO-friendly websites optimized for better user experience and higher search rankings.'
            ]
        ],
        'img' => 'assets/images/services/web-development-local-intro.webp',

        'glass_card_1' => [
            'icon' => 'fa-solid fa-rocket',
            'label' => 'Website Performance',
            'val' => 'Optimized',
            'width' => '96%'
        ],

        'glass_card_2' => [
            'icon' => 'fa-solid fa-laptop-code',
            'label' => 'Projects',
            'val' => '300+',
            'sub' => 'Successfully Delivered'
        ],

        'floating_badge' => [
            'icon' => 'fa-solid fa-award',
            'lbl' => 'Expert Developers'
        ]
    ],

    /* ================= SERVICES GRID ================= */
    'types' => [
        'tag' => 'Our Development Services',
        'title' => 'Web Development Solutions in <span class="gradient-text">{target_loc}</span>',
        'subtitle' => 'Complete web development services for startups, businesses, enterprises, and eCommerce brands.',
        'panels' => [

            'business_website' => [
                'tab_name' => 'Business Website',
                'tab_icon' => 'fa-solid fa-building',
                'tagline' => 'Professional Business Solutions',
                'title' => 'Business Website Development in {target_loc}',
                'desc' => 'Establish a strong online presence with custom business websites designed to showcase your services, build credibility, generate qualified leads, and help your business grow across {state}.',
                'features' => [
                    'Responsive Business Website',
                    'Service & Company Pages',
                    'Lead Generation Forms',
                    'SEO-Optimized Structure'
                ],
                'techStack' => [
                    'HTML5',
                    'CSS3',
                    'PHP'
                ],
                'image' => 'assets/images/services/web-development-local-business.webp',
                'metric' => [
                    'icon' => 'fa-solid fa-briefcase',
                    'val' => 'Professional',
                    'lbl' => 'Business Website'
                ]
            ],

            'web_application' => [
                'tab_name' => 'Web Applications',
                'tab_icon' => 'fa-solid fa-laptop-code',
                'tagline' => 'Custom Business Software',
                'title' => 'Custom Web Application Development in {target_loc}',
                'desc' => 'Develop secure and scalable web applications that automate business operations, improve workflow efficiency, and provide seamless user experiences for customers and employees.',
                'features' => [
                    'Custom Admin Panels',
                    'Business Portals',
                    'CRM & ERP Solutions',
                    'Secure User Management'
                ],
                'techStack' => [
                    'Laravel',
                    'PHP',
                    'MySQL'
                ],
                'image' => 'assets/images/services/web-development-local-webapp.webp',
                'metric' => [
                    'icon' => 'fa-solid fa-layer-group',
                    'val' => 'Scalable',
                    'lbl' => 'Web Applications'
                ]
            ],

            'ecommerce' => [
                'tab_name' => 'eCommerce',
                'tab_icon' => 'fa-solid fa-cart-shopping',
                'tagline' => 'Grow Your Online Store',
                'title' => 'eCommerce Website Development in {state}',
                'desc' => 'Launch feature-rich eCommerce websites with secure payment gateways, inventory management, product catalogs, order tracking, and mobile-friendly shopping experiences.',
                'features' => [
                    'Product Management',
                    'Secure Payment Integration',
                    'Inventory Management',
                    'Order Tracking System'
                ],
                'techStack' => [
                    'WooCommerce',
                    'Shopify',
                    'Laravel'
                ],
                'image' => 'assets/images/services/web-development-local-ecommerce.webp',
                'metric' => [
                    'icon' => 'fa-solid fa-chart-line',
                    'val' => 'High',
                    'lbl' => 'Sales Performance'
                ]
            ],

            'cms_development' => [
                'tab_name' => 'CMS Development',
                'tab_icon' => 'fa-solid fa-layer-group',
                'tagline' => 'Manage Content Easily',
                'title' => 'CMS Website Development in {target_loc}',
                'desc' => 'Create powerful content management systems that make it easy to update pages, blogs, products, media, and website content without technical expertise.',
                'features' => [
                    'WordPress Development',
                    'Custom CMS Solutions',
                    'Easy Content Management',
                    'Scalable Website Architecture'
                ],
                'techStack' => [
                    'WordPress',
                    'PHP',
                    'MySQL'
                ],
                'image' => 'assets/images/services/web-development-local-cms.webp',
                'metric' => [
                    'icon' => 'fa-solid fa-pen-to-square',
                    'val' => 'Easy',
                    'lbl' => 'Content Management'
                ]
            ]

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Development Process',
        'title' => 'Our <span class="gradient-text">Web Development</span> Process',
        'subtitle' => 'We follow a proven development methodology to deliver secure, scalable, and high-performing web solutions for businesses in {target_loc} and across {state}.',
        'steps' => [
            [
                'title' => 'Discovery & Planning',
                'desc' => 'We understand your business goals, target audience, project requirements, and technical needs to create the right development strategy.'
            ],
            [
                'title' => 'UI/UX & Development',
                'desc' => 'Our developers build responsive, user-friendly, and feature-rich websites using modern web technologies and best coding practices.'
            ],
            [
                'title' => 'Testing & Optimization',
                'desc' => 'Every website undergoes rigorous testing for performance, security, responsiveness, browser compatibility, and functionality.'
            ],
            [
                'title' => 'Deployment & Support',
                'desc' => 'After successful deployment, we provide continuous maintenance, security updates, performance improvements, and technical support.'
            ]
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Why Choose Us',
        'title' => 'Why Choose Our Web Development Services?',
        'subtitle' => 'We develop websites that combine performance, security, scalability, and exceptional user experience to help your business grow online.',
        'cards' => [
            [
                'icon' => 'fa-solid fa-code',
                'title' => 'Custom Development',
                'desc' => 'Every website is custom-built to match your business goals and operational requirements.'
            ],
            [
                'icon' => 'fa-solid fa-mobile-screen',
                'title' => 'Fully Responsive',
                'desc' => 'Your website delivers a seamless experience across desktops, tablets, and smartphones.'
            ],
            [
                'icon' => 'fa-solid fa-gauge-high',
                'title' => 'High Performance',
                'desc' => 'Optimized code and modern development practices ensure fast loading speeds and better user experience.'
            ],
            [
                'icon' => 'fa-solid fa-magnifying-glass-chart',
                'title' => 'SEO-Ready Development',
                'desc' => 'Clean code, optimized URLs, structured data support, and search-engine-friendly architecture.'
            ],
            [
                'icon' => 'fa-solid fa-shield-halved',
                'title' => 'Secure & Scalable',
                'desc' => 'We build secure websites that can easily scale as your business continues to grow.'
            ],
            [
                'icon' => 'fa-solid fa-headset',
                'title' => 'Ongoing Support',
                'desc' => 'Receive continuous maintenance, technical assistance, updates, and performance monitoring after launch.'
            ]
        ]
    ],

    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Web Development Questions in <span class="gradient-text">{target_loc}</span>',
        'list' => [
            [
                'q' => 'What web development services do you offer?',
                'a' => 'We provide business website development, custom web applications, eCommerce development, CMS development, API integration, website redesign, and ongoing website maintenance.'
            ],
            [
                'q' => 'Do you build responsive websites?',
                'a' => 'Yes. Every website we develop is fully responsive and optimized for desktops, tablets, and mobile devices.'
            ],
            [
                'q' => 'Can you develop a custom web application for my business?',
                'a' => 'Absolutely. We build secure, scalable, and customized web applications tailored to your business processes and operational requirements.'
            ],
            [
                'q' => 'Will my website be SEO-friendly?',
                'a' => 'Yes. Our websites are developed using SEO best practices, including clean code, mobile responsiveness, fast loading speeds, and search-engine-friendly architecture.'
            ],
            [
                'q' => 'Do you provide support after the website is launched?',
                'a' => 'Yes. We offer website maintenance, security updates, bug fixes, performance optimization, backups, and ongoing technical support.'
            ]
        ]
    ]
];
