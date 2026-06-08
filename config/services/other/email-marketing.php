<?php
// config/services/email-marketing.php

return [
    'menu_category' => 'other',
    'menu_title' => 'Email Marketing',
    'menu_desc' => 'Automated workflows and personalized drip campaigns.',
    'menu_icon' => 'fa-solid fa-envelope',


    'pageTitle' => 'Email Marketing Services | ' . COMPANY_NAME . ' - Drive Conversions',
    'pageDescription' => 'Professional email marketing services by ' . COMPANY_NAME . '. Increase conversions, nurture leads, and boost customer retention with targeted campaigns.',
    'pageKey' => 'email_marketing',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-solid fa-envelope"></i>&nbsp; Email Marketing',
        'title' => 'Convert Leads with <span class="gradient-text">Email Marketing</span>',
        'subtitle' => 'We create high-performing email campaigns that drive engagement, sales, and customer loyalty.',
        'metrics' => [
            ['val' => '5X', 'lbl' => 'ROI'],
            ['val' => '300%', 'lbl' => 'Conversion Boost'],
            ['val' => '1M+', 'lbl' => 'Emails Sent'],
        ],
        'form_title' => 'Start Email Marketing',
        'form_sub' => 'Turn subscribers into loyal customers.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'Email Strategy',
        'title' => 'Engage, Nurture & <span class="gradient-text">Convert Customers</span>',
        'subtitle' => 'Our email marketing strategies focus on personalization, automation, and performance optimization.',
        'features' => [
            [
                'icon' => 'fa-solid fa-envelope-open-text',
                'title' => 'Personalized Campaigns',
                'desc' => 'Send targeted emails tailored to your audience.'
            ],
            [
                'icon' => 'fa-solid fa-robot',
                'title' => 'Automation',
                'desc' => 'Automate email sequences for better engagement.'
            ],
        ],
        'img' => 'assets/images/services/email-marketing-intro.png',
        'glass_card_1' => [
            'icon' => 'fa-solid fa-chart-line',
            'label' => 'Open Rate',
            'val' => '+50%',
            'width' => '90%'
        ],
        'glass_card_2' => [
            'icon' => 'fa-solid fa-cart-shopping',
            'label' => 'Sales',
            'val' => 'High',
            'sub' => 'Conversion'
        ],
        'floating_badge' => [
            'icon' => 'fa-solid fa-award',
            'lbl'  => 'Email Experts'
        ]
    ],

    /* ================= TYPES ================= */
    'types' => [
        'tag' => '<i class="fa-solid fa-layer-group"></i>&nbsp; Email Marketing Services',
        'title' => 'Our <span class="gradient-text">Email Marketing Solutions</span>',
        'subtitle' => 'Complete email marketing services for growth.',
        'panels' => [

            'campaigns' => [
                'tab_name'  => 'Campaigns',
                'tab_icon'  => 'fa-solid fa-paper-plane',
                'title'     => 'Email Campaign Management',
                'tagline'   => 'Drive Engagement',
                'desc'      => 'Create and manage high-performing email campaigns.',
                'image'     => 'assets/images/services/email-marketing-campaigns.png',
                'metric'    => ['val' => 'High', 'lbl' => 'Engagement', 'icon' => 'fa-solid fa-chart-line'],
                'features'  => ['Campaign Setup', 'A/B Testing', 'Performance Tracking'],
                'techStack' => ['Mailchimp', 'Klaviyo']
            ],

            'automation' => [
                'tab_name'  => 'Automation',
                'tab_icon'  => 'fa-solid fa-robot',
                'title'     => 'Email Automation',
                'tagline'   => 'Smart Marketing',
                'desc'      => 'Automate email workflows for better conversions.',
                'image'     => 'assets/images/services/email-marketing-automation.png',
                'metric'    => ['val' => '24/7', 'lbl' => 'Automation', 'icon' => 'fa-solid fa-clock'],
                'features'  => ['Welcome Series', 'Cart Abandonment', 'Follow-Ups'],
                'techStack' => ['Klaviyo', 'HubSpot']
            ],

            'newsletter' => [
                'tab_name'  => 'Newsletters',
                'tab_icon'  => 'fa-solid fa-newspaper',
                'title'     => 'Newsletter Campaigns',
                'tagline'   => 'Stay Connected',
                'desc'      => 'Send regular newsletters to engage your audience.',
                'image'     => 'assets/images/services/email-marketing-newsletter.png',
                'metric'    => ['val' => 'Consistent', 'lbl' => 'Engagement', 'icon' => 'fa-solid fa-envelope'],
                'features'  => ['Content Emails', 'Promotional Emails', 'Updates'],
                'techStack' => ['Mailchimp']
            ],

            'drip' => [
                'tab_name'  => 'Drip Campaigns',
                'tab_icon'  => 'fa-solid fa-droplet',
                'title'     => 'Drip Email Campaigns',
                'tagline'   => 'Nurture Leads',
                'desc'      => 'Send automated sequences to convert leads.',
                'image'     => 'assets/images/services/email-marketing-drip.png',
                'metric'    => ['val' => 'High', 'lbl' => 'Conversion', 'icon' => 'fa-solid fa-bullseye'],
                'features'  => ['Lead Nurturing', 'Email Sequences', 'Conversion Funnels'],
                'techStack' => ['ActiveCampaign']
            ],

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Process',
        'title' => 'Our <span class="gradient-text">Email Marketing Process</span>',
        'subtitle' => 'A structured approach for maximum ROI.',
        'steps' => [
            ['title' => 'Audience Segmentation', 'desc' => 'Identify target audience.', 'icon' => 'fa-solid fa-users'],
            ['title' => 'Content Creation', 'desc' => 'Write engaging emails.', 'icon' => 'fa-solid fa-pen'],
            ['title' => 'Campaign Setup', 'desc' => 'Launch campaigns.', 'icon' => 'fa-solid fa-paper-plane'],
            ['title' => 'Automation', 'desc' => 'Set workflows.', 'icon' => 'fa-solid fa-robot'],
            ['title' => 'Optimization', 'desc' => 'Improve performance.', 'icon' => 'fa-solid fa-chart-line'],
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Benefits',
        'title' => 'Why Choose <span class="gradient-text">' . COMPANY_NAME . '</span>',
        'subtitle' => 'We deliver high-performing email campaigns.',
        'cards' => [
            ['icon' => 'fa-solid fa-chart-line', 'title' => 'Higher ROI', 'desc' => 'Maximize returns.'],
            ['icon' => 'fa-solid fa-envelope-open', 'title' => 'Better Engagement', 'desc' => 'Increase open rates.'],
            ['icon' => 'fa-solid fa-users', 'title' => 'Lead Nurturing', 'desc' => 'Convert leads.'],
            ['icon' => 'fa-solid fa-cart-shopping', 'title' => 'More Sales', 'desc' => 'Boost revenue.'],
            ['icon' => 'fa-solid fa-robot', 'title' => 'Automation', 'desc' => 'Save time and scale.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'Support', 'desc' => 'Expert team support.'],
        ]
    ],

    /* ================= PORTFOLIO ================= */
    'portfolio' => [
        'tag' => '<i class="fa-solid fa-briefcase"></i>&nbsp; Portfolio',
        'title' => 'Our <span class="gradient-text">Email Campaign Results</span>',
        'subtitle' => 'See our successful campaigns.',
        'filter_categories' => ['email', 'marketing', 'automation']
    ],

    /* ================= TESTIMONIALS ================= */
    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'What is email marketing?',
                'a' => 'Email marketing involves sending targeted emails to promote products, nurture leads, and build customer relationships.'
            ],
            [
                'q' => 'How effective is email marketing?',
                'a' => 'It is one of the highest ROI marketing channels when done correctly.'
            ],
            [
                'q' => 'Do you provide automation?',
                'a' => 'Yes, we create automated email workflows for better engagement and conversions.'
            ],
            [
                'q' => 'Which tools do you use?',
                'a' => 'We use tools like Mailchimp, Klaviyo, HubSpot, and more.'
            ],
            [
                'q' => 'How quickly can I see results?',
                'a' => 'You can start seeing engagement and conversions within days of launching campaigns.',
            ],
        ]
    ]
];
