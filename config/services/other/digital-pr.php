<?php
// config/services/digital-pr.php

return [
    'menu_category' => 'other',
    'menu_title' => 'Digital PR',
    'menu_desc' => 'Earning high-quality backlinks and brand mentions.',
    'menu_icon' => 'fa-solid fa-bullhorn',


    'pageTitle' => 'Digital PR Services | ' . COMPANY_NAME . ' - Build Authority & Visibility',
    'pageDescription' => 'Professional Digital PR services by ' . COMPANY_NAME . '. Build brand authority, earn high-quality backlinks, and get featured in top media outlets.',
    'pageKey' => 'digital_pr',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-solid fa-newspaper"></i>&nbsp; Digital PR',
        'title' => 'Build Authority with <span class="gradient-text">Digital PR</span>',
        'subtitle' => 'We help your brand gain visibility, earn high-quality backlinks, and get featured in top publications.',
        'metrics' => [
            ['val' => '500+', 'lbl' => 'Media Placements'],
            ['val' => '200%', 'lbl' => 'Brand Visibility'],
            ['val' => '100+', 'lbl' => 'Campaigns'],
        ],
        'form_title' => 'Boost Your Brand Authority',
        'form_sub' => 'Get featured on top media platforms.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'Online Reputation',
        'title' => 'Get Featured & <span class="gradient-text">Build Trust Online</span>',
        'subtitle' => 'Our digital PR strategies help you gain credibility, increase visibility, and improve SEO rankings.',
        'features' => [
            [
                'icon' => 'fa-solid fa-globe',
                'title' => 'Media Exposure',
                'desc' => 'Get featured on high-authority websites.'
            ],
            [
                'icon' => 'fa-solid fa-link',
                'title' => 'Quality Backlinks',
                'desc' => 'Earn backlinks that boost SEO rankings.'
            ],
        ],
        'img' => 'assets/images/services/digital-pr-intro.webp',
        'glass_card_1' => [
            'icon' => 'fa-solid fa-chart-line',
            'label' => 'Traffic',
            'val' => '+200%',
            'width' => '95%'
        ],
        'glass_card_2' => [
            'icon' => 'fa-solid fa-star',
            'label' => 'Authority',
            'val' => 'High',
            'sub' => 'Trust'
        ],
        'floating_badge' => [
            'icon' => 'fa-solid fa-award',
            'lbl'  => 'PR Experts'
        ]
    ],

    /* ================= TYPES ================= */
    'types' => [
        'tag' => '<i class="fa-solid fa-layer-group"></i>&nbsp; Digital PR Services',
        'title' => 'Our <span class="gradient-text">Digital PR Solutions</span>',
        'subtitle' => 'Comprehensive PR strategies for brand growth.',
        'panels' => [

            'outreach' => [
                'tab_name'  => 'Media Outreach',
                'tab_icon'  => 'fa-solid fa-envelope',
                'title'     => 'Media Outreach Campaigns',
                'tagline'   => 'Connect with Journalists',
                'desc'      => 'Reach journalists and influencers to promote your brand.',
                'image'     => 'assets/images/services/digital-pr-outreach.webp',
                'metric'    => ['val' => 'Wide', 'lbl' => 'Coverage', 'icon' => 'fa-solid fa-globe'],
                'features'  => ['Journalist Outreach', 'Influencer Collaboration', 'Pitching'],
                'techStack' => ['Email Tools', 'CRM']
            ],

            'press' => [
                'tab_name'  => 'Press Releases',
                'tab_icon'  => 'fa-solid fa-newspaper',
                'title'     => 'Press Release Distribution',
                'tagline'   => 'Announce Your Brand',
                'desc'      => 'Publish press releases to reach a wider audience.',
                'image'     => 'assets/images/services/digital-pr-press.webp',
                'metric'    => ['val' => 'High', 'lbl' => 'Visibility', 'icon' => 'fa-solid fa-eye'],
                'features'  => ['PR Writing', 'Distribution', 'Media Coverage'],
                'techStack' => ['PR Platforms']
            ],

            'backlinks' => [
                'tab_name'  => 'Link Building',
                'tab_icon'  => 'fa-solid fa-link',
                'title'     => 'High Authority Link Building',
                'tagline'   => 'Boost SEO',
                'desc'      => 'Earn backlinks from trusted websites.',
                'image'     => 'assets/images/services/digital-pr-backlinks.webp',
                'metric'    => ['val' => 'Strong', 'lbl' => 'SEO', 'icon' => 'fa-solid fa-chart-line'],
                'features'  => ['Guest Posting', 'Editorial Links', 'Outreach'],
                'techStack' => ['SEO Tools']
            ],

            'branding' => [
                'tab_name'  => 'Brand Mentions',
                'tab_icon'  => 'fa-solid fa-bullhorn',
                'title'     => 'Brand Mentions & Coverage',
                'tagline'   => 'Build Reputation',
                'desc'      => 'Increase brand mentions across platforms.',
                'image'     => 'assets/images/services/digital-pr-branding.webp',
                'metric'    => ['val' => 'High', 'lbl' => 'Trust', 'icon' => 'fa-solid fa-star'],
                'features'  => ['Mentions', 'Reputation Management', 'Visibility'],
                'techStack' => ['PR Tools']
            ],

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Process',
        'title' => 'Our <span class="gradient-text">Digital PR Process</span>',
        'subtitle' => 'A strategic approach to build authority.',
        'steps' => [
            ['title' => 'Research', 'desc' => 'Identify opportunities.', 'icon' => 'fa-solid fa-magnifying-glass'],
            ['title' => 'Content Creation', 'desc' => 'Create PR content.', 'icon' => 'fa-solid fa-pen'],
            ['title' => 'Outreach', 'desc' => 'Connect with media.', 'icon' => 'fa-solid fa-envelope'],
            ['title' => 'Placement', 'desc' => 'Get featured.', 'icon' => 'fa-solid fa-newspaper'],
            ['title' => 'Reporting', 'desc' => 'Track results.', 'icon' => 'fa-solid fa-chart-line'],
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Benefits',
        'title' => 'Why Choose <span class="gradient-text">' . COMPANY_NAME . '</span>',
        'subtitle' => 'We deliver authority and visibility.',
        'cards' => [
            ['icon' => 'fa-solid fa-globe', 'title' => 'Media Coverage', 'desc' => 'Get featured globally.'],
            ['icon' => 'fa-solid fa-link', 'title' => 'Quality Backlinks', 'desc' => 'Boost SEO rankings.'],
            ['icon' => 'fa-solid fa-star', 'title' => 'Brand Authority', 'desc' => 'Build trust and credibility.'],
            ['icon' => 'fa-solid fa-chart-line', 'title' => 'SEO Growth', 'desc' => 'Improve rankings.'],
            ['icon' => 'fa-solid fa-bullhorn', 'title' => 'Brand Awareness', 'desc' => 'Increase visibility.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'Support', 'desc' => 'Expert PR team.'],
        ]
    ],

    /* ================= PORTFOLIO ================= */
    'portfolio' => [
        'tag' => '<i class="fa-solid fa-briefcase"></i>&nbsp; Portfolio',
        'title' => 'Our <span class="gradient-text">PR Campaigns</span>',
        'subtitle' => 'See our successful PR campaigns.',
        'filter_categories' => ['pr', 'media', 'branding']
    ],

    /* ================= TESTIMONIALS ================= */
    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'What is Digital PR?',
                'a' => 'Digital PR involves promoting your brand online through media coverage, backlinks, and mentions.'
            ],
            [
                'q' => 'How does Digital PR help SEO?',
                'a' => 'It builds high-quality backlinks and increases domain authority, improving rankings.'
            ],
            [
                'q' => 'Can you get us featured on big websites?',
                'a' => 'Yes, we work with media platforms and journalists for placements.'
            ],
            [
                'q' => 'How long does it take to see results?',
                'a' => 'Results can be seen within weeks, depending on the campaign.'
            ],
            [
                'q' => 'Do you provide reporting?',
                'a' => 'Yes, we provide detailed reports on placements and performance.',
            ],
        ]
    ]
];
