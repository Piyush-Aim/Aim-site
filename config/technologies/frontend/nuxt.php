<?php

return [
    'menu_category' => 'frontend',
    'menu_title' => 'Nuxt',
    'menu_desc' => 'The intuitive Vue.js framework for server-side rendering.',
    'menu_icon' => 'fa-solid fa-n',
    'menu_slug' => 'nuxt',
    'tech_expertise' => 'Advanced',
    'tech_best_for' => ['Vue SEO', 'Universal Apps', 'Fast Prototyping'],



    'pageTitle' => 'Nuxt Development Services | ' . COMPANY_NAME,
    'pageDescription' => COMPANY_NAME . ' delivers premium Nuxt development services for high-performance websites, SSR applications, SaaS platforms, ecommerce stores and scalable Vue-based digital solutions.',
    'pageKey' => 'nuxt-development',

    'hero' => [
        'tag' => 'NUXT DEVELOPMENT',
        'tag_icon' => 'fa-brands fa-vuejs',
        'title' => '<span class="gradient-text">Modern Nuxt</span> Development Services',
        'subtitle' => 'At ' . COMPANY_NAME . ', we build lightning-fast, SEO-focused and scalable Nuxt applications that help brands grow online and deliver seamless user experiences.',
        'form_title' => 'Start Your Nuxt Project',
        'form_subtitle' => 'Contact ' . COMPANY_NAME . ' for a free consultation and tailored development roadmap.',
    ],

    'why_tech' => [
        'tag' => 'Technology',
        'title' => 'Why Choose <span class="gradient-text">Nuxt?</span>',
        'subtitle' => 'Nuxt is a powerful Vue framework designed for server-side rendering, static generation and exceptional front-end performance.',

        'main_feature' => [
            'icon' => 'fa-solid fa-layer-group',
            'title' => 'SEO & Performance Driven Architecture',
            'desc' => 'Nuxt combines Vue simplicity with SSR and static generation to create fast, scalable and search-engine-friendly applications.',
            'code_snippet' => "<script setup>\n  const { data: posts } = await useFetch('/api/posts')\n</script>\n\n<template>\n  <div>\n    <h1>Latest Posts</h1>\n    <ul>\n      <li v-for=\"post in posts\" :key=\"post.id\">\n        {{ post.title }}\n      </li>\n    </ul>\n  </div>\n</template>"
        ],

        'features' => [

            [
                'icon' => 'fa-solid fa-magnifying-glass-chart',
                'title' => 'SEO Optimized',
                'desc' => 'SSR architecture improves crawlability and search visibility.'
            ],
            [
                'icon' => 'fa-solid fa-bolt',
                'title' => 'High Performance',
                'desc' => 'Fast page loads and smooth experiences across devices.'
            ],
            [
                'icon' => 'fa-solid fa-code',
                'title' => 'Scalable Development',
                'desc' => 'Structured ecosystem for growing business platforms.'
            ],
        ]
    ],

    /* BENEFITS */
    'benefits' => [
        'tag' => 'Benefits',
        'title' => 'Benefits of <span class="gradient-text">Nuxt Development</span>',

        'cards' => [
            [
                'icon' => 'fa-solid fa-rocket',
                'title' => 'Fast Loading Speed',
                'desc' => 'Optimized rendering for excellent user experience.'
            ],
            [
                'icon' => 'fa-solid fa-magnifying-glass',
                'title' => 'Better SEO',
                'desc' => 'Ideal for ranking content-rich and business websites.'
            ],
            [
                'icon' => 'fa-solid fa-mobile-screen',
                'title' => 'Responsive UI',
                'desc' => 'Smooth experiences on desktop, tablet and mobile.'
            ],
            [
                'icon' => 'fa-solid fa-globe',
                'title' => 'SSR & Static Ready',
                'desc' => 'Choose rendering mode based on business needs.'
            ],
            [
                'icon' => 'fa-solid fa-diagram-project',
                'title' => 'Scalable Architecture',
                'desc' => 'Supports growing platforms and complex workflows.'
            ],
            [
                'icon' => 'fa-solid fa-screwdriver-wrench',
                'title' => 'Easy Maintenance',
                'desc' => 'Modern code structure for long-term growth.'
            ],
        ]
    ],

    /* SERVICES */
    'services' => [
        'tag' => 'Services',
        'title' => 'Our <span class="gradient-text">Nuxt Services</span>',

        'cards' => [
            [
                'icon' => 'fa-solid fa-laptop-code',
                'title' => 'Custom Nuxt App Development',
                'desc' => COMPANY_NAME . ' builds custom Nuxt applications aligned with your goals and workflows.'
            ],
            [
                'icon' => 'fa-solid fa-globe',
                'title' => 'Nuxt Website Development',
                'desc' => 'Fast, premium and SEO-ready websites built with Nuxt.'
            ],
            [
                'icon' => 'fa-solid fa-cart-shopping',
                'title' => 'Nuxt Ecommerce Development',
                'desc' => 'High-converting online stores with smooth shopping experiences.'
            ],
            [
                'icon' => 'fa-solid fa-repeat',
                'title' => 'Migration to Nuxt',
                'desc' => 'Upgrade legacy front-end systems into modern Nuxt platforms.'
            ],
            [
                'icon' => 'fa-solid fa-plug',
                'title' => 'API Integration',
                'desc' => 'Connect CRMs, ERPs, payment gateways and third-party systems.'
            ],
            [
                'icon' => 'fa-solid fa-headset',
                'title' => 'Support & Maintenance',
                'desc' => 'Continuous updates, optimization and technical support.'
            ],
        ]
    ],

    /* PROCESS */
    'process' => [
        'tag' => 'Workflow',
        'title' => 'Our <span class="gradient-text">Nuxt Development Process</span>',

        'steps' => [
            [
                'title' => 'Discovery & Planning',
                'desc' => 'Understand business goals, users and project requirements.'
            ],
            [
                'title' => 'UI / UX Strategy',
                'desc' => 'Plan intuitive journeys and conversion-focused layouts.'
            ],
            [
                'title' => 'Nuxt Development',
                'desc' => 'Build fast, scalable and SEO-friendly digital platforms.'
            ],
            [
                'title' => 'Testing & Launch',
                'desc' => 'Performance testing, deployment and post-launch support.'
            ]
        ]
    ],

    /* WHY CHOOSE US */
    'why_choose_us' => [
        'title' => 'Why Choose <span class="gradient-text">' . COMPANY_NAME . '</span> For Nuxt?',
        'description' => COMPANY_NAME . ' combines modern engineering, growth strategy and UI excellence to deliver Nuxt platforms that outperform expectations.',

        'items' => [
            [
                'icon' => 'fa-solid fa-user-tie',
                'title' => 'Nuxt Experts',
                'desc' => 'Skilled developers experienced in Vue and modern front-end ecosystems.'
            ],
            [
                'icon' => 'fa-solid fa-comments',
                'title' => 'Transparent Delivery',
                'desc' => 'Clear communication, timelines and milestone-based execution.'
            ],
        ],

        'stats' => [
            [
                'icon' => 'fa-solid fa-code',
                'num' => '100+',
                'label' => 'Projects Delivered',
                'class' => 'vc'
            ],
            [
                'icon' => 'fa-solid fa-star',
                'num' => '98%',
                'label' => 'Client Satisfaction',
                'class' => 'cc'
            ],
            [
                'icon' => 'fa-solid fa-rocket',
                'num' => '5+',
                'label' => 'Years Experience',
                'class' => 'ec'
            ],
            [
                'icon' => 'fa-brands fa-vuejs',
                'num' => '24/7',
                'label' => 'Support',
                'class' => 'ac'
            ],
        ]
    ],

    /* TESTIMONIALS */
    'testimonials' => [
        [
            'rating' => 5,
            'body' => COMPANY_NAME . ' delivered a blazing-fast Nuxt website that improved our rankings and conversions.',
            'name' => 'Oliver Bennett',
            'role' => 'Marketing Director',
            'avatar' => 'https://ui-avatars.com/api/?name=Oliver+Bennett&background=00DC82&color=fff'
        ],
        [
            'rating' => 5,
            'body' => 'Professional execution, strong technical knowledge and premium user experience.',
            'name' => 'Emma Roberts',
            'role' => 'Startup Founder',
            'avatar' => 'https://ui-avatars.com/api/?name=Emma+Roberts&background=0f172a&color=fff'
        ],
        [
            'rating' => 5,
            'body' => 'Our old platform was transformed into a modern Nuxt solution with excellent performance.',
            'name' => 'Noah Carter',
            'role' => 'CEO',
            'avatar' => 'https://ui-avatars.com/api/?name=Noah+Carter&background=334155&color=fff'
        ],
    ],

    /* FAQ */
    'faq' => [
        [
            'q' => 'Why choose Nuxt for web development?',
            'a' => 'Nuxt offers SEO advantages, fast performance and scalable Vue-based architecture.'
        ],
        [
            'q' => 'Is Nuxt good for business websites?',
            'a' => 'Yes, Nuxt is ideal for SaaS platforms, ecommerce stores, corporate websites and content-driven businesses.'
        ],
        [
            'q' => 'How much does Nuxt development cost?',
            'a' => 'Pricing depends on project scope, features, integrations and development timeline.'
        ],
        [
            'q' => 'Can ' . COMPANY_NAME . ' migrate our old website to Nuxt?',
            'a' => 'Yes, we modernize outdated systems into high-performance Nuxt platforms.'
        ],
        [
            'q' => 'Do you provide Nuxt maintenance support?',
            'a' => 'Yes, we provide upgrades, optimization, bug fixes and ongoing support.'
        ],
        [
            'q' => 'How can I contact your team?',
            'a' => 'Call us on ' . COMPANY_PHONE . ' or email ' . COMPANY_EMAIL . '.'
        ],
    ],
];

