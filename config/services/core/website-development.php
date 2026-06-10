<?php
// config/services/website-development.php

return [
    'menu_category' => 'core',
    'menu_title' => 'Website Development',
    'menu_desc' => 'Custom high-performance web applications built for scale.',
    'menu_icon' => 'fa-solid fa-globe',


    'pageTitle' => 'Website Development Services | ' . COMPANY_NAME . ' - Custom Websites That Convert',
    'pageDescription' => 'Professional website development services by ' . COMPANY_NAME . '. We build custom, SEO-friendly, fast, and scalable websites including ecommerce, CMS, and web applications.',
    'pageKey' => 'website_development',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-solid fa-code"></i>&nbsp; Website Development',
        'title' => 'Build <span class="gradient-text">Powerful Websites</span> That Drive Results',
        'subtitle' => 'We design and develop high-performance, SEO-optimized, and conversion-focused websites tailored to your business goals. From startups to enterprises, we deliver scalable digital solutions.',
        'metrics' => [
            ['val' => '250+', 'lbl' => 'Projects Delivered'],
            ['val' => '99/100', 'lbl' => 'Performance Score'],
            ['val' => '10+', 'lbl' => 'Years Experience'],
        ],
        'form_title' => 'Start Your Project',
        'form_sub' => 'Talk to our experts and get a free consultation today.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'Custom Web Development',
        'title' => 'Where <span class="gradient-text">Strategy Meets Technology</span>',
        'subtitle' => 'We build modern websites that are not only visually stunning but also optimized for speed, SEO, and user experience. Our goal is simple — help your business grow online.',
        'features' => [
            [
                'icon' => 'fa-solid fa-microchip',
                'title' => 'Modern Technology',
                'desc' => 'Using React, Next.js, and modern frameworks for scalable development.'
            ],
            [
                'icon' => 'fa-solid fa-bolt-lightning',
                'title' => 'Fast Performance',
                'desc' => 'Optimized for speed, Core Web Vitals, and better Google rankings.'
            ],
        ],
        'img' => 'assets/images/services/webdev-intro.webp',
        'glass_card_1' => [
            'icon' => 'fa-solid fa-gauge-high',
            'label' => 'Speed',
            'val' => '99/100',
            'width' => '99%'
        ],
        'glass_card_2' => [
            'icon' => 'fa-solid fa-shield-halved',
            'label' => 'Security',
            'val' => 'Advanced',
            'sub' => 'Protected'
        ],
        'floating_badge' => [
            'icon' => 'fa-solid fa-award',
            'lbl'  => 'Top Agency'
        ]
    ],

    /* ================= TYPES ================= */
    'types' => [
        'tag' => '<i class="fa-solid fa-layer-group"></i>&nbsp; Services',
        'title' => 'Our <span class="gradient-text">Website Development Services</span>',
        'subtitle' => 'We offer complete web development solutions tailored to your needs.',
        'panels' => [

            'ecommerce' => [
                'tab_name'  => 'Ecommerce',
                'tab_icon'  => 'fa-solid fa-cart-shopping',
                'title'     => 'Ecommerce Website Development',
                'tagline'   => 'Designed for Sales',
                'desc'      => 'We build ecommerce websites that maximize conversions with seamless checkout, mobile optimization, and secure payment integrations.',
                'image'     => 'assets/images/services/webdev-ecommerce.webp',
                'metric'    => ['val' => '250%', 'lbl' => 'Conversion Growth', 'icon' => 'fa-solid fa-arrow-up-right-dots'],
                'features'  => ['Shopify & WooCommerce', 'Secure Payment Gateway', 'Mobile Optimization'],
                'techStack' => ['Shopify', 'WooCommerce', 'Stripe', 'Next.js']
            ],

            'cms' => [
                'tab_name'  => 'CMS',
                'tab_icon'  => 'fa-brands fa-wordpress',
                'title'     => 'CMS Website Development',
                'tagline'   => 'Easy Content Management',
                'desc'      => 'Manage your website easily with our CMS solutions. We build flexible and scalable CMS websites for businesses of all sizes.',
                'image'     => 'assets/images/services/webdev-wordpress.webp',
                'metric'    => ['val' => 'Easy', 'lbl' => 'Content Control', 'icon' => 'fa-solid fa-wand-magic-sparkles'],
                'features'  => ['WordPress Development', 'Custom CMS', 'SEO Optimization'],
                'techStack' => ['WordPress', 'PHP', 'MySQL', 'Strapi']
            ],

            'webapp' => [
                'tab_name'  => 'Web App',
                'tab_icon'  => 'fa-solid fa-code',
                'title'     => 'Custom Web Application Development',
                'tagline'   => 'Scalable & Secure',
                'desc'      => 'We develop custom web applications and SaaS platforms with powerful features, scalability, and high performance.',
                'image'     => 'assets/images/services/webdev-custom.webp',
                'metric'    => ['val' => '99.9%', 'lbl' => 'Uptime', 'icon' => 'fa-solid fa-server'],
                'features'  => ['Custom Dashboards', 'API Integration', 'Cloud Deployment'],
                'techStack' => ['React', 'Node.js', 'Laravel', 'AWS']
            ],

            'corporate' => [
                'tab_name'  => 'Corporate',
                'tab_icon'  => 'fa-solid fa-building',
                'title'     => 'Corporate Website Development',
                'tagline'   => 'Professional Presence',
                'desc'      => 'Build a strong online presence with professional corporate websites designed for branding, trust, and lead generation.',
                'image'     => 'assets/images/services/webdev-corporate.webp',
                'metric'    => ['val' => 'High', 'lbl' => 'Trust', 'icon' => 'fa-solid fa-user-shield'],
                'features'  => ['Responsive Design', 'SEO Friendly', 'Fast Loading'],
                'techStack' => ['HTML', 'CSS', 'Next.js', 'PHP']
            ],

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Process',
        'title' => 'Our <span class="gradient-text">Development Process</span>',
        'subtitle' => 'A proven workflow to deliver high-quality websites.',
        'steps' => [
            ['title' => 'Requirement Analysis', 'desc' => 'Understanding your business needs and project goals.', 'icon' => 'fa-solid fa-compass'],
            ['title' => 'Design & Prototype', 'desc' => 'Creating UI/UX designs for better user experience.', 'icon' => 'fa-solid fa-pen-nib'],
            ['title' => 'Development', 'desc' => 'Building your website using modern technologies.', 'icon' => 'fa-solid fa-code'],
            ['title' => 'Testing', 'desc' => 'Ensuring performance, speed, and bug-free experience.', 'icon' => 'fa-solid fa-bug-slash'],
            ['title' => 'Launch', 'desc' => 'Deploying your website with ongoing support.', 'icon' => 'fa-solid fa-rocket'],
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Benefits',
        'title' => 'Why Choose <span class="gradient-text">' . COMPANY_NAME . '</span>',
        'subtitle' => 'We deliver results-driven web development services.',
        'cards' => [
            ['icon' => 'fa-solid fa-gauge-high', 'title' => 'Fast Websites', 'desc' => 'High-speed performance optimized for users and search engines.'],
            ['icon' => 'fa-solid fa-shield-halved', 'title' => 'Secure Development', 'desc' => 'Advanced security measures to protect your website.'],
            ['icon' => 'fa-solid fa-magnifying-glass-chart', 'title' => 'SEO Optimized', 'desc' => 'Built with SEO best practices for better rankings.'],
            ['icon' => 'fa-solid fa-mobile-screen-button', 'title' => 'Responsive Design', 'desc' => 'Perfect experience on mobile, tablet, and desktop.'],
            ['icon' => 'fa-solid fa-arrows-up-to-line', 'title' => 'Scalable', 'desc' => 'Grow your website as your business expands.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'Support', 'desc' => 'Dedicated support team available anytime.'],
        ]
    ],

    /* ================= PORTFOLIO ================= */
    'portfolio' => [
        'tag' => '<i class="fa-solid fa-briefcase"></i>&nbsp; Portfolio',
        'title' => 'Our <span class="gradient-text">Recent Work</span>',
        'subtitle' => 'Explore some of our latest website development projects.',
        'filter_categories' => ['ecommerce', 'corporate', 'webapp']
    ],

    /* ================= TESTIMONIALS ================= */
    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'How long does website development take?',
                'a' => 'A standard website takes 4–6 weeks, while complex projects may take longer depending on requirements.'
            ],
            [
                'q' => 'Do you provide SEO-friendly websites?',
                'a' => 'Yes, all our websites are built with SEO best practices including fast loading speed and clean code.'
            ],
            [
                'q' => 'Do you offer maintenance support?',
                'a' => 'Yes, we provide ongoing support and maintenance for all websites.'
            ],
        ]
    ]
];
