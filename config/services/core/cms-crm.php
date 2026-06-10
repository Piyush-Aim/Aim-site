<?php
// config/services/cms-crm.php

return [
    'menu_category' => 'core',
    'menu_title' => 'CMS & CRM',
    'menu_desc' => 'Tailored content and relationship management systems.',
    'menu_icon' => 'fa-solid fa-users',


    'pageTitle' => 'CMS & CRM Development Services | ' . COMPANY_NAME . ' - Scalable Business Solutions',
    'pageDescription' => 'Expert CMS and CRM development services by ' . COMPANY_NAME . '. We build custom content management systems and CRM solutions to streamline operations, improve customer relationships, and drive business growth.',
    'pageKey' => 'cms_crm',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-solid fa-database"></i>&nbsp; CMS & CRM Development',
        'title' => 'Smart <span class="gradient-text">CMS & CRM Solutions</span> for Business Growth',
        'subtitle' => COMPANY_NAME . ' delivers powerful CMS and CRM systems that help you manage content, automate workflows, and build strong customer relationships — all in one place.',
        'metrics' => [
            ['val' => '200+', 'lbl' => 'Systems Delivered'],
            ['val' => '95%', 'lbl' => 'Client Retention'],
            ['val' => '10+', 'lbl' => 'Years Experience'],
        ],
        'form_title' => 'Get a Free Consultation',
        'form_sub' => 'Let’s build a system tailored to your business needs.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'Business Automation',
        'title' => 'Manage <span class="gradient-text">Content & Customers</span> Seamlessly',
        'subtitle' => 'At ' . COMPANY_NAME . ', we build CMS and CRM platforms that simplify business operations, improve productivity, and enhance customer engagement. Our solutions are scalable, secure, and tailored to your workflow.',
        'features' => [
            [
                'icon' => 'fa-solid fa-layer-group',
                'title' => 'Centralized Management',
                'desc' => 'Manage your content and customer data from a single unified system.'
            ],
            [
                'icon' => 'fa-solid fa-gears',
                'title' => 'Automation Ready',
                'desc' => 'Automate repetitive tasks and workflows to save time and increase efficiency.'
            ],
        ],
        'img' => 'assets/images/services/cms-crm-intro.webp',
        'glass_card_1' => [
            'icon' => 'fa-solid fa-database',
            'label' => 'Data Management',
            'val' => 'Advanced',
            'width' => '95%'
        ],
        'glass_card_2' => [
            'icon' => 'fa-solid fa-user-group',
            'label' => 'Customer Tracking',
            'val' => 'Smart',
            'sub' => 'Real-Time Insights'
        ],
        'floating_badge' => [
            'icon' => 'fa-solid fa-chart-line',
            'lbl'  => 'Growth Driven'
        ]
    ],

    /* ================= TYPES ================= */
    'types' => [
        'tag' => '<i class="fa-solid fa-layer-group"></i>&nbsp; Our Solutions',
        'title' => 'Complete <span class="gradient-text">CMS & CRM Services</span>',
        'subtitle' => 'Tailored solutions for managing content, customers, and operations.',
        'panels' => [

            'cms' => [
                'tab_name'  => 'CMS',
                'tab_icon'  => 'fa-brands fa-wordpress',
                'title'     => 'Custom CMS Development',
                'tagline'   => 'Easy Content Control',
                'desc'      => 'We develop user-friendly CMS platforms that allow you to manage website content effortlessly without technical knowledge.',
                'image'     => 'assets/images/services/cms-custom.webp',
                'metric'    => ['val' => 'No-Code', 'lbl' => 'Management', 'icon' => 'fa-solid fa-pen'],
                'features'  => ['WordPress & Headless CMS', 'Custom Dashboards', 'SEO-Friendly Structure'],
                'techStack' => ['WordPress', 'Strapi', 'Contentful', 'PHP']
            ],

            'crm' => [
                'tab_name'  => 'CRM',
                'tab_icon'  => 'fa-solid fa-users',
                'title'     => 'CRM Development',
                'tagline'   => 'Customer Relationship Management',
                'desc'      => 'Build powerful CRM systems to track leads, manage customers, and improve sales performance with real-time data insights.',
                'image'     => 'assets/images/services/crm-pipeline.webp',
                'metric'    => ['val' => '100%', 'lbl' => 'Lead Tracking', 'icon' => 'fa-solid fa-user-check'],
                'features'  => ['Lead Management', 'Sales Pipeline', 'Customer Insights'],
                'techStack' => ['Laravel', 'Node.js', 'React', 'MySQL']
            ],

            'integration' => [
                'tab_name'  => 'Integration',
                'tab_icon'  => 'fa-solid fa-link',
                'title'     => 'CMS & CRM Integration',
                'tagline'   => 'Connected Systems',
                'desc'      => 'We integrate CMS and CRM systems to ensure seamless data flow between your website and customer management tools.',
                'image'     => 'assets/images/services/cms-crm-integration.webp',
                'metric'    => ['val' => 'Seamless', 'lbl' => 'Integration', 'icon' => 'fa-solid fa-link'],
                'features'  => ['API Integration', 'Data Sync', 'Third-Party Tools'],
                'techStack' => ['REST API', 'Zapier', 'Node.js']
            ],

            'automation' => [
                'tab_name'  => 'Automation',
                'tab_icon'  => 'fa-solid fa-robot',
                'title'     => 'Workflow Automation',
                'tagline'   => 'Save Time & Effort',
                'desc'      => 'Automate business processes like lead nurturing, email marketing, and reporting to improve efficiency.',
                'image'     => 'assets/images/services/crm-workflow.webp',
                'metric'    => ['val' => '80%', 'lbl' => 'Time Saved', 'icon' => 'fa-solid fa-clock'],
                'features'  => ['Email Automation', 'Task Automation', 'Reporting Systems'],
                'techStack' => ['Zapier', 'Make', 'Custom APIs']
            ],

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Our Process',
        'title' => 'Our <span class="gradient-text">Development Process</span>',
        'subtitle' => 'We follow a structured process to deliver efficient CMS & CRM systems.',
        'steps' => [
            ['title' => 'Requirement Analysis', 'desc' => 'Understanding your business workflow and system needs.', 'icon' => 'fa-solid fa-compass'],
            ['title' => 'System Design', 'desc' => 'Designing architecture and user flow for efficiency.', 'icon' => 'fa-solid fa-sitemap'],
            ['title' => 'Development', 'desc' => 'Building custom CMS/CRM with modern technologies.', 'icon' => 'fa-solid fa-code'],
            ['title' => 'Testing', 'desc' => 'Ensuring performance, security, and usability.', 'icon' => 'fa-solid fa-bug-slash'],
            ['title' => 'Deployment & Support', 'desc' => 'Launching system with ongoing support and updates.', 'icon' => 'fa-solid fa-rocket'],
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Why Choose Us',
        'title' => 'Why Choose <span class="gradient-text">' . COMPANY_NAME . '</span>',
        'subtitle' => 'We deliver smart business solutions that improve efficiency and growth.',
        'cards' => [
            ['icon' => 'fa-solid fa-database', 'title' => 'Centralized Data', 'desc' => 'Manage all your business data in one place.'],
            ['icon' => 'fa-solid fa-chart-line', 'title' => 'Better Decision Making', 'desc' => 'Access real-time insights and analytics.'],
            ['icon' => 'fa-solid fa-gears', 'title' => 'Automation', 'desc' => 'Reduce manual work with smart automation tools.'],
            ['icon' => 'fa-solid fa-shield-halved', 'title' => 'Secure Systems', 'desc' => 'Advanced security to protect your data.'],
            ['icon' => 'fa-solid fa-earth-americas', 'title' => 'Global Service', 'desc' => 'Based in ' . COMPANY_ADDRESS_SHORT . ', serving businesses worldwide.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'Support', 'desc' => 'Dedicated support team for ongoing assistance.'],
        ]
    ],

    /* ================= PORTFOLIO ================= */
    'portfolio' => [
        'tag' => '<i class="fa-solid fa-briefcase"></i>&nbsp; Portfolio',
        'title' => 'Our <span class="gradient-text">Recent Projects</span>',
        'subtitle' => 'Explore our CMS and CRM development work.',
        'filter_categories' => ['cms', 'crm', 'automation']
    ],

    /* ================= TESTIMONIALS ================= */
    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'What is CMS and CRM?',
                'a' => 'CMS helps manage website content, while CRM helps manage customer relationships and sales processes.'
            ],
            [
                'q' => 'Can you customize CRM systems?',
                'a' => 'Yes, we build fully customized CRM solutions tailored to your business needs.'
            ],
            [
                'q' => 'Do you provide integration services?',
                'a' => 'Yes, we integrate CMS, CRM, and third-party tools for seamless business operations.'
            ],
        ]
    ]
];
