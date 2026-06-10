<?php
// config/services/ai-seo.php

return [
    'menu_category' => 'seo',
    'menu_title' => 'AI SEO',
    'menu_desc' => 'Optimizing for generative search engines and AI assistants.',
    'menu_icon' => 'fa-solid fa-bolt',



    'pageTitle' => 'AI SEO Services | ' . COMPANY_NAME . ' - Smarter Rankings & Organic Growth',
    'pageDescription' => 'Professional AI SEO services by ' . COMPANY_NAME . '. Use AI-powered keyword research, content optimization, technical SEO and automation to grow rankings, traffic and leads.',
    'pageKey' => 'ai_seo',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-solid fa-robot"></i>&nbsp; AI SEO',
        'title' => 'Scale Rankings with <span class="gradient-text">AI SEO Services</span>',
        'subtitle' => 'Combine human strategy with AI-powered SEO systems to improve rankings, increase organic traffic and generate qualified leads faster.',
        'metrics' => [
            ['val' => '3X', 'lbl' => 'Traffic Growth'],
            ['val' => '200%', 'lbl' => 'Keyword Wins'],
            ['val' => '100+', 'lbl' => 'SEO Campaigns'],
        ],
        'form_title' => 'Start Your AI SEO Campaign',
        'form_sub' => 'Get a smart SEO strategy powered by data, automation and expert execution.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'Smart Organic Growth',
        'title' => 'Use AI to Win <span class="gradient-text">Search Visibility</span>',
        'subtitle' => 'We use advanced AI workflows with expert SEO strategy to uncover opportunities, optimize content and outperform competitors.',
        'features' => [
            [
                'icon' => 'fa-solid fa-magnifying-glass-chart',
                'title' => 'Smarter Research',
                'desc' => 'Find keywords, trends and intent gaps faster.'
            ],
            [
                'icon' => 'fa-solid fa-bolt',
                'title' => 'Faster Execution',
                'desc' => 'Automate repetitive SEO tasks and scale campaigns.'
            ],
        ],
        'img' => 'assets/images/services/ai-seo-intro.webp',
        'glass_card_1' => [
            'icon' => 'fa-solid fa-chart-line',
            'label' => 'Traffic',
            'val' => '+300%',
            'width' => '94%'
        ],
        'glass_card_2' => [
            'icon' => 'fa-solid fa-ranking-star',
            'label' => 'Rankings',
            'val' => 'Top',
            'sub' => 'Growth'
        ],
        'floating_badge' => [
            'icon' => 'fa-solid fa-award',
            'lbl'  => 'AI SEO Experts'
        ]
    ],

    /* ================= TYPES ================= */
    'types' => [
        'tag' => '<i class="fa-solid fa-layer-group"></i>&nbsp; AI SEO Services',
        'title' => 'Our <span class="gradient-text">AI SEO Solutions</span>',
        'subtitle' => 'Advanced SEO powered by automation and expert strategy.',

        'panels' => [

            'content' => [
                'tab_name'  => 'Content SEO',
                'tab_icon'  => 'fa-solid fa-file-lines',
                'title'     => 'AI Content Optimization',
                'tagline'   => 'Rank Better Content',
                'desc'      => 'Improve pages with AI-assisted briefs, topic coverage and on-page optimization.',
                'image'     => 'assets/images/services/ai-seo-content.webp',
                'metric'    => ['val' => 'Top', 'lbl' => 'Content', 'icon' => 'fa-solid fa-pen'],
                'features'  => ['Content Briefs', 'Entity SEO', 'On-Page Optimization'],
                'techStack' => ['ChatGPT', 'Surfer', 'SEO Tools']
            ],

            'technical' => [
                'tab_name'  => 'Technical SEO',
                'tab_icon'  => 'fa-solid fa-gears',
                'title'     => 'Technical SEO Automation',
                'tagline'   => 'Fix Performance Issues',
                'desc'      => 'Resolve crawl errors, indexing issues, speed bottlenecks and technical blockers.',
                'image'     => 'assets/images/services/ai-seo-technical.webp',
                'metric'    => ['val' => 'Fast', 'lbl' => 'Performance', 'icon' => 'fa-solid fa-bolt'],
                'features'  => ['Crawl Fixes', 'Schema', 'Core Web Vitals'],
                'techStack' => ['GSC', 'Screaming Frog', 'PageSpeed']
            ],

            'local' => [
                'tab_name'  => 'Local SEO',
                'tab_icon'  => 'fa-solid fa-location-dot',
                'title'     => 'AI Local SEO Growth',
                'tagline'   => 'Dominate Nearby Searches',
                'desc'      => 'Optimize local presence, maps rankings and city-based search visibility.',
                'image'     => 'assets/images/services/ai-seo-local.webp',
                'metric'    => ['val' => 'Top', 'lbl' => 'Maps', 'icon' => 'fa-solid fa-map'],
                'features'  => ['GBP Optimization', 'Citations', 'Local Pages'],
                'techStack' => ['GBP', 'Local SEO Tools']
            ],

            'audit' => [
                'tab_name'  => 'SEO Audit',
                'tab_icon'  => 'fa-solid fa-magnifying-glass',
                'title'     => 'AI SEO Audit & Strategy',
                'tagline'   => 'Find Hidden Opportunities',
                'desc'      => 'Deep audits to uncover ranking issues, content gaps and growth opportunities.',
                'image'     => 'assets/images/services/ai-seo-audit.webp',
                'metric'    => ['val' => 'Deep', 'lbl' => 'Insights', 'icon' => 'fa-solid fa-chart-line'],
                'features'  => ['Site Audit', 'Keyword Gaps', 'Roadmap'],
                'techStack' => ['Ahrefs', 'SEMrush', 'Analytics']
            ],

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Process',
        'title' => 'Our <span class="gradient-text">AI SEO Process</span>',
        'subtitle' => 'A structured system for long-term organic growth.',
        'steps' => [
            ['title' => 'Research', 'desc' => 'Keywords, intent and competitor analysis.', 'icon' => 'fa-solid fa-magnifying-glass'],
            ['title' => 'Strategy', 'desc' => 'Build topical authority and growth roadmap.', 'icon' => 'fa-solid fa-lightbulb'],
            ['title' => 'Execution', 'desc' => 'Content, technical fixes and optimization.', 'icon' => 'fa-solid fa-rocket'],
            ['title' => 'Automation', 'desc' => 'Scale workflows using AI systems.', 'icon' => 'fa-solid fa-robot'],
            ['title' => 'Reporting', 'desc' => 'Track rankings, traffic and leads.', 'icon' => 'fa-solid fa-chart-line'],
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Benefits',
        'title' => 'Why Choose <span class="gradient-text">' . COMPANY_NAME . '</span>',
        'subtitle' => 'SEO growth powered by AI plus expert human oversight.',
        'cards' => [
            ['icon' => 'fa-solid fa-ranking-star', 'title' => 'Higher Rankings', 'desc' => 'Improve visibility for valuable keywords.'],
            ['icon' => 'fa-solid fa-users', 'title' => 'More Organic Traffic', 'desc' => 'Attract targeted search visitors.'],
            ['icon' => 'fa-solid fa-bolt', 'title' => 'Faster Execution', 'desc' => 'Scale SEO tasks efficiently.'],
            ['icon' => 'fa-solid fa-chart-line', 'title' => 'Better ROI', 'desc' => 'Focus on profitable traffic growth.'],
            ['icon' => 'fa-solid fa-brain', 'title' => 'Smarter Decisions', 'desc' => 'Use data-backed SEO insights.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'Expert Support', 'desc' => 'Dedicated SEO specialists manage growth.'],
        ]
    ],

    /* ================= PORTFOLIO ================= */
    'portfolio' => [
        'tag' => '<i class="fa-solid fa-briefcase"></i>&nbsp; Results',
        'title' => 'Our <span class="gradient-text">SEO Success Stories</span>',
        'subtitle' => 'See how we helped businesses grow through organic search.',
        'filter_categories' => ['seo', 'ai', 'growth']
    ],

    /* ================= TESTIMONIALS ================= */
    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'What is AI SEO?',
                'a' => 'AI SEO uses automation and machine-assisted workflows to improve research, content and optimization.'
            ],
            [
                'q' => 'Is AI SEO better than traditional SEO?',
                'a' => 'Best results come from combining AI speed with expert human strategy and oversight.'
            ],
            [
                'q' => 'How long does SEO take?',
                'a' => 'SEO timelines vary, but many businesses see progress within a few months.'
            ],
            [
                'q' => 'Do you write AI content?',
                'a' => 'We use AI-assisted workflows with human editing, strategy and quality control.'
            ],
            [
                'q' => 'Do you provide reports?',
                'a' => 'Yes, we provide clear reports on rankings, traffic and growth opportunities.'
            ],
        ]
    ]
];
