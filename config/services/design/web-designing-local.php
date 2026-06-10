<?php

return [
    'hide_from_menu' => true,
    'menu_category' => 'web',
    'menu_title' => 'Web Designing',

    'pageTitle' => 'Web Designing Services in {target_loc} | ' . COMPANY_NAME,
    'pageDescription' => 'Professional web designing services in {target_loc}. Get responsive, modern, and conversion-focused websites that help businesses grow across {state}.',
    'pageKey' => 'web_designing_local',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-solid fa-laptop-code"></i>&nbsp; Creative Web Solutions',
        'title' => 'Professional Web Designing in <span class="gradient-text">{target_loc}</span>',
        'subtitle' => 'We create stunning, responsive, and user-focused websites that improve credibility, engagement, and conversions.',
        'metrics' => [
            ['val' => '250+', 'lbl' => 'Websites Designed'],
            ['val' => '98%', 'lbl' => 'Client Satisfaction'],
            ['val' => '3X', 'lbl' => 'Lead Growth'],
        ],
        'form_title' => 'Get Your {target_loc} Website Quote',
        'form_sub' => 'Talk with our experts and build a website that performs.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'Creative Strategy',
        'title' => 'Why Choose <span class="gradient-text">Professional Web Design?</span>',
        'subtitle' => 'Your website is often the first impression of your business. A modern design builds trust, improves user experience, and converts visitors into customers.',
        'features' => [
            [
                'icon' => 'fa-solid fa-mobile-screen',
                'title' => 'Responsive Design',
                'desc' => 'Perfect experience across desktop, tablet, and mobile devices.'
            ],
            [
                'icon' => 'fa-solid fa-bullseye',
                'title' => 'Conversion Focused',
                'desc' => 'Layouts designed to generate more calls, leads, and sales.'
            ]
        ],
        'img' => 'assets/images/services/web-designing-local-intro.webp',
        'glass_card_1' => [
            'icon' => 'fa-solid fa-chart-line',
            'label' => 'Lead Growth',
            'val' => '300%',
            'width' => '88%'
        ],
        'glass_card_2' => [
            'icon' => 'fa-solid fa-desktop',
            'label' => 'Projects',
            'val' => '250+',
            'sub' => 'Delivered'
        ],
        'floating_badge' => [
            'icon' => 'fa-solid fa-star',
            'lbl' => 'Creative Team'
        ]
    ],

    /* ================= SERVICES GRID ================= */
    'types' => [
        'tag' => 'What We Offer',
        'title' => 'Web Design Solutions in <span class="gradient-text">{target_loc}</span>',
        'subtitle' => 'Complete website solutions for startups, businesses, and ecommerce brands.',
        'panels' => [
            'business' => [
                'tab_name' => 'Business Site',
                'tab_icon' => 'fa-solid fa-building',
                'tagline' => 'Professional Presence',
                'title' => 'Business Website Design in {target_loc}',
                'desc' => 'Build trust and authority with a premium business website.',
                'features' => [
                    'Company Profile Pages',
                    'Service Pages',
                    'Lead Forms',
                    'Mobile Responsive Design'
                ],
                'techStack' => ['HTML5', 'CSS3', 'PHP'],
                'image' => 'assets/images/services/web-designing-local-business.webp',
                'metric' => [
                    'icon' => 'fa-solid fa-star',
                    'val' => 'Premium',
                    'lbl' => 'Brand Image'
                ]
            ],

            'ecommerce' => [
                'tab_name' => 'Ecommerce',
                'tab_icon' => 'fa-solid fa-cart-shopping',
                'tagline' => 'Online Sales',
                'title' => 'Ecommerce Website Design in {state}',
                'desc' => 'Launch high-converting online stores with seamless shopping experience.',
                'features' => [
                    'Product Pages',
                    'Secure Checkout',
                    'Inventory Setup',
                    'Mobile Shopping UX'
                ],
                'techStack' => ['Shopify', 'WooCommerce', 'Laravel'],
                'image' => 'assets/images/services/web-designing-local-ecommerce.webp',
                'metric' => [
                    'icon' => 'fa-solid fa-chart-line',
                    'val' => '3X',
                    'lbl' => 'Sales Growth'
                ]
            ],

            'landing' => [
                'tab_name' => 'Landing Pages',
                'tab_icon' => 'fa-solid fa-bullseye',
                'tagline' => 'More Leads',
                'title' => 'Landing Page Design for {target_loc}',
                'desc' => 'Create focused landing pages for campaigns and lead generation.',
                'features' => [
                    'High-Converting Layouts',
                    'CTA Optimization',
                    'A/B Test Ready',
                    'Fast Loading Pages'
                ],
                'techStack' => ['React', 'HTML', 'Analytics'],
                'image' => 'assets/images/services/web-designing-local-landing.webp',
                'metric' => [
                    'icon' => 'fa-solid fa-arrow-up',
                    'val' => '+300%',
                    'lbl' => 'Lead Growth'
                ]
            ],

            'redesign' => [
                'tab_name' => 'Redesign',
                'tab_icon' => 'fa-solid fa-pen-ruler',
                'tagline' => 'Fresh Upgrade',
                'title' => 'Website Redesign Services',
                'desc' => 'Modernize outdated websites with improved speed, UX, and branding.',
                'features' => [
                    'Modern UI Upgrade',
                    'Speed Optimization',
                    'SEO Friendly Structure',
                    'Better User Flow'
                ],
                'techStack' => ['Figma', 'CSS', 'JavaScript'],
                'image' => 'assets/images/services/web-designing-local-redesign.webp',
                'metric' => [
                    'icon' => 'fa-solid fa-wand-magic-sparkles',
                    'val' => 'Modern',
                    'lbl' => 'UX Upgrade'
                ]
            ]
        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Process',
        'title' => 'Our <span class="gradient-text">Web Designing</span> Process',
        'subtitle' => 'A structured strategy focused on branding, UX, and conversions.',
        'steps' => [
            [
                'title' => 'Discovery & Planning',
                'desc' => 'We understand your business, audience, and website goals.'
            ],
            [
                'title' => 'UI/UX Design',
                'desc' => 'We create layouts that look premium and guide users clearly.'
            ],
            [
                'title' => 'Development',
                'desc' => 'We build responsive pages with speed and performance in mind.'
            ],
            [
                'title' => 'Launch & Improve',
                'desc' => 'We test, launch, and refine the site for best results.'
            ]
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Benefits',
        'title' => 'Benefits of Professional Web Designing',
        'subtitle' => 'Build trust and generate better business opportunities.',
        'cards' => [
            [
                'icon' => 'fa-solid fa-eye',
                'title' => 'Strong First Impression',
                'desc' => 'Modern design builds instant trust with visitors.'
            ],
            [
                'icon' => 'fa-solid fa-mobile-screen',
                'title' => 'Responsive Experience',
                'desc' => 'Your site works perfectly on all devices.'
            ],
            [
                'icon' => 'fa-solid fa-users',
                'title' => 'Better Engagement',
                'desc' => 'Visitors stay longer with intuitive layouts.'
            ],
            [
                'icon' => 'fa-solid fa-chart-line',
                'title' => 'Higher Conversions',
                'desc' => 'Design focused on leads and inquiries.'
            ],
            [
                'icon' => 'fa-solid fa-magnifying-glass',
                'title' => 'SEO Friendly',
                'desc' => 'Structured pages help search visibility.'
            ],
            [
                'icon' => 'fa-solid fa-shield-halved',
                'title' => 'Brand Credibility',
                'desc' => 'Professional websites improve business trust.'
            ]
        ]
    ],

    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Web Designing Questions in <span class="gradient-text">{target_loc}</span>',
        'list' => [
            [
                'q' => 'How long does a website take?',
                'a' => 'Most projects are completed in 2 to 6 weeks depending on scope.'
            ],
            [
                'q' => 'Will my website be mobile friendly?',
                'a' => 'Yes, every website we design is fully responsive.'
            ],
            [
                'q' => 'Can you redesign my old website?',
                'a' => 'Yes, we upgrade outdated websites with modern design and better UX.'
            ],
            [
                'q' => 'Do you build ecommerce websites?',
                'a' => 'Yes, we create online stores with payment and product features.'
            ],
            [
                'q' => 'Do you offer support after launch?',
                'a' => 'Yes, we provide maintenance and support after launch.'
            ]
        ]
    ]
];
