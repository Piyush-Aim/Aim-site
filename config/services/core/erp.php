<?php
// config/services/erp-development.php

return [
    'menu_category' => 'core',
    'menu_title' => 'ERP Solutions',
    'menu_desc' => 'Optimizing business processes with custom enterprise software.',
    'menu_icon' => 'fa-solid fa-briefcase',


    'pageTitle' => 'ERP Development Services | ' . COMPANY_NAME . ' - Smart Business Automation',
    'pageDescription' => 'Custom ERP development services by ' . COMPANY_NAME . '. Streamline operations, automate workflows, and manage your entire business with scalable ERP solutions.',
    'pageKey' => 'erp_development',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-solid fa-diagram-project"></i>&nbsp; ERP Development',
        'title' => 'Streamline Your Business with <span class="gradient-text">Smart ERP Solutions</span>',
        'subtitle' => 'We develop powerful ERP systems that integrate all your business processes into one centralized platform for better efficiency, control, and growth.',
        'metrics' => [
            ['val' => '120+', 'lbl' => 'ERP Projects'],
            ['val' => '40%', 'lbl' => 'Efficiency Boost'],
            ['val' => '10+', 'lbl' => 'Industries Served'],
        ],
        'form_title' => 'Build Your ERP System',
        'form_sub' => 'Discuss your ERP requirements with our experts today.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'ERP Solutions',
        'title' => 'Transform Operations with <span class="gradient-text">Centralized Management</span>',
        'subtitle' => 'Our ERP solutions unify your business processes including finance, HR, inventory, and operations into a single powerful system.',
        'features' => [
            [
                'icon' => 'fa-solid fa-database',
                'title' => 'Centralized Data',
                'desc' => 'Manage all your business data from one unified platform.'
            ],
            [
                'icon' => 'fa-solid fa-gears',
                'title' => 'Process Automation',
                'desc' => 'Automate repetitive tasks to improve productivity and reduce errors.'
            ],
        ],
        'img' => 'assets/images/services/erp-intro.png',
        'glass_card_1' => [
            'icon' => 'fa-solid fa-chart-line',
            'label' => 'Productivity',
            'val' => '+40%',
            'width' => '90%'
        ],
        'glass_card_2' => [
            'icon' => 'fa-solid fa-shield-halved',
            'label' => 'Security',
            'val' => 'Enterprise',
            'sub' => 'Grade'
        ],
        'floating_badge' => [
            'icon' => 'fa-solid fa-award',
            'lbl'  => 'ERP Experts'
        ]
    ],

    /* ================= TYPES ================= */
    'types' => [
        'tag' => '<i class="fa-solid fa-layer-group"></i>&nbsp; ERP Modules',
        'title' => 'Our <span class="gradient-text">ERP Development Services</span>',
        'subtitle' => 'Comprehensive ERP solutions tailored for your business operations.',
        'panels' => [

            'custom' => [
                'tab_name'  => 'Custom ERP',
                'tab_icon'  => 'fa-solid fa-code',
                'title'     => 'Custom ERP Development',
                'tagline'   => 'Built for Your Business',
                'desc'      => 'We create fully customized ERP systems aligned with your unique business workflows.',
                'image'     => 'assets/images/services/erp-custom.png',
                'metric'    => ['val' => '100%', 'lbl' => 'Custom Fit', 'icon' => 'fa-solid fa-puzzle-piece'],
                'features'  => ['Tailored Modules', 'Scalable Architecture', 'Business-Specific Logic'],
                'techStack' => ['Laravel', 'Node.js', 'React', 'MySQL']
            ],

            'cloud' => [
                'tab_name'  => 'Cloud ERP',
                'tab_icon'  => 'fa-solid fa-cloud',
                'title'     => 'Cloud-Based ERP Solutions',
                'tagline'   => 'Access Anywhere',
                'desc'      => 'Manage your business from anywhere with secure cloud-based ERP systems.',
                'image'     => 'assets/images/services/erp-cloud.png',
                'metric'    => ['val' => '99.9%', 'lbl' => 'Uptime', 'icon' => 'fa-solid fa-server'],
                'features'  => ['Remote Access', 'Cloud Hosting', 'Real-Time Data'],
                'techStack' => ['AWS', 'Azure', 'Firebase']
            ],

            'integration' => [
                'tab_name'  => 'Integration',
                'tab_icon'  => 'fa-solid fa-link',
                'title'     => 'ERP Integration Services',
                'tagline'   => 'Seamless Connectivity',
                'desc'      => 'Integrate ERP with your existing tools like CRM, accounting, and inventory systems.',
                'image'     => 'assets/images/services/erp-integration.png',
                'metric'    => ['val' => 'Seamless', 'lbl' => 'Integration', 'icon' => 'fa-solid fa-plug'],
                'features'  => ['API Integration', 'Third-party Sync', 'Data Migration'],
                'techStack' => ['REST API', 'Zapier', 'Webhooks']
            ],

            'analytics' => [
                'tab_name'  => 'Analytics',
                'tab_icon'  => 'fa-solid fa-chart-pie',
                'title'     => 'ERP Analytics & Reporting',
                'tagline'   => 'Data-Driven Decisions',
                'desc'      => 'Get real-time insights and reports to make informed business decisions.',
                'image'     => 'assets/images/services/erp-analytics.png', // TODO: replace with proper analytics image
                'metric'    => ['val' => 'Real-time', 'lbl' => 'Insights', 'icon' => 'fa-solid fa-chart-line'],
                'features'  => ['Dashboard Reports', 'Custom Analytics', 'KPI Tracking'],
                'techStack' => ['Power BI', 'Tableau', 'Custom Dashboards']
            ],

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Process',
        'title' => 'Our <span class="gradient-text">ERP Development Process</span>',
        'subtitle' => 'A strategic approach to build scalable ERP systems.',
        'steps' => [
            ['title' => 'Business Analysis', 'desc' => 'Understanding workflows and requirements.', 'icon' => 'fa-solid fa-compass'],
            ['title' => 'System Design', 'desc' => 'Designing ERP architecture and modules.', 'icon' => 'fa-solid fa-pen-nib'],
            ['title' => 'Development', 'desc' => 'Building ERP with modern technologies.', 'icon' => 'fa-solid fa-code'],
            ['title' => 'Testing', 'desc' => 'Ensuring accuracy and performance.', 'icon' => 'fa-solid fa-bug-slash'],
            ['title' => 'Deployment', 'desc' => 'Launching and optimizing ERP system.', 'icon' => 'fa-solid fa-rocket'],
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Benefits',
        'title' => 'Why Choose <span class="gradient-text">' . COMPANY_NAME . '</span>',
        'subtitle' => 'We build ERP systems that improve efficiency and scalability.',
        'cards' => [
            ['icon' => 'fa-solid fa-database', 'title' => 'Centralized System', 'desc' => 'All business operations in one place.'],
            ['icon' => 'fa-solid fa-gears', 'title' => 'Automation', 'desc' => 'Reduce manual work and errors.'],
            ['icon' => 'fa-solid fa-chart-line', 'title' => 'Better Insights', 'desc' => 'Real-time analytics for decisions.'],
            ['icon' => 'fa-solid fa-lock', 'title' => 'High Security', 'desc' => 'Enterprise-grade data protection.'],
            ['icon' => 'fa-solid fa-expand', 'title' => 'Scalable', 'desc' => 'Grow your system as business expands.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'Support', 'desc' => 'Dedicated ERP support team.'],
        ]
    ],

    /* ================= PORTFOLIO ================= */
    'portfolio' => [
        'tag' => '<i class="fa-solid fa-briefcase"></i>&nbsp; Portfolio',
        'title' => 'Our <span class="gradient-text">ERP Projects</span>',
        'subtitle' => 'Explore our custom ERP solutions across industries.',
        'filter_categories' => ['manufacturing', 'retail', 'logistics']
    ],

    /* ================= TESTIMONIALS ================= */
    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'What is an ERP system?',
                'a' => 'ERP (Enterprise Resource Planning) is software that integrates all business processes like finance, HR, inventory, and operations into one system.'
            ],
            [
                'q' => 'Is ERP suitable for small businesses?',
                'a' => 'Yes, we build scalable ERP solutions tailored for startups, SMEs, and large enterprises.'
            ],
            [
                'q' => 'Can ERP be customized for my business?',
                'a' => 'Absolutely. Our ERP systems are fully customized based on your workflows and requirements.'
            ],
            [
                'q' => 'Do you provide ERP integration with existing systems?',
                'a' => 'Yes, we integrate ERP with CRM, accounting tools, and other third-party systems.'
            ],
            [
                'q' => 'Is cloud ERP secure?',
                'a' => 'Yes, we implement enterprise-grade security measures including encryption and secure cloud hosting.'
            ],
        ]
    ]
];
