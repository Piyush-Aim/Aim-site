<?php
// config/services/graphics-and-logo.php

return [
    'menu_category' => 'core',
    'menu_title' => 'Graphics & Logo',
    'menu_desc' => 'Premium branding and visual identity for modern brands.',
    'menu_icon' => 'fa-solid fa-layer-group',


    'pageTitle' => 'Graphics & Logo Design Services | ' . COMPANY_NAME . ' - Creative Branding Solutions',
    'pageDescription' => 'Professional graphic design and logo design services by ' . COMPANY_NAME . '. We create impactful brand identities, logos, and visual assets that elevate your business and leave a lasting impression.',
    'pageKey' => 'graphics_logo_services',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-solid fa-pen-nib"></i>&nbsp; Graphics & Logo Design',
        'title' => 'Create a <span class="gradient-text">Powerful Brand Identity</span>',
        'subtitle' => COMPANY_NAME . ' delivers creative graphic and logo design solutions that make your brand stand out. From logos to full branding kits, we design visuals that connect and convert.',
        'metrics' => [
            ['val' => '300+', 'lbl' => 'Design Projects'],
            ['val' => '95%', 'lbl' => 'Client Satisfaction'],
            ['val' => '10+', 'lbl' => 'Years Experience'],
        ],
        'form_title' => 'Start Your Design Project',
        'form_sub' => 'Let’s build a brand that speaks for you.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'Creative Branding',
        'title' => 'Design That <span class="gradient-text">Builds Recognition</span>',
        'subtitle' => 'At ' . COMPANY_NAME . ', we create visually compelling designs that reflect your brand identity and communicate your message effectively. Our designs are not just attractive — they are strategic and result-driven.',
        'features' => [
            [
                'icon' => 'fa-solid fa-lightbulb',
                'title' => 'Creative Concepts',
                'desc' => 'Unique and innovative design ideas tailored to your brand.'
            ],
            [
                'icon' => 'fa-solid fa-bullseye',
                'title' => 'Brand Focused',
                'desc' => 'Designs aligned with your business goals and audience.'
            ],
        ],
        'img' => 'assets/images/services/graphic_design_workspace.png',
        'glass_card_1' => [
            'icon' => 'fa-solid fa-palette',
            'label' => 'Creativity',
            'val' => 'High',
            'width' => '95%'
        ],
        'glass_card_2' => [
            'icon' => 'fa-solid fa-eye',
            'label' => 'Brand Visibility',
            'val' => 'Strong',
            'sub' => 'Visual Impact'
        ],
        'floating_badge' => [
            'icon' => 'fa-solid fa-star',
            'lbl'  => 'Creative Experts'
        ]
    ],

    /* ================= TYPES ================= */
    'types' => [
        'tag' => '<i class="fa-solid fa-layer-group"></i>&nbsp; Design Services',
        'title' => 'Our <span class="gradient-text">Graphic Design Solutions</span>',
        'subtitle' => 'Complete creative services to build and grow your brand identity.',
        'panels' => [

            'logo' => [
                'tab_name'  => 'Logo',
                'tab_icon'  => 'fa-solid fa-signature',
                'title'     => 'Logo Design',
                'tagline'   => 'Your Brand Symbol',
                'desc'      => 'We design unique, memorable logos that represent your brand identity and leave a lasting impression.',
                'image'     => 'assets/images/services/logo-design.png',
                'metric'    => ['val' => '100%', 'lbl' => 'Unique Designs', 'icon' => 'fa-solid fa-star'],
                'features'  => ['Custom Logo Concepts', 'Multiple Revisions', 'All File Formats'],
                'techStack' => ['Illustrator', 'Photoshop', 'Figma']
            ],

            'branding' => [
                'tab_name'  => 'Branding',
                'tab_icon'  => 'fa-solid fa-layer-group',
                'title'     => 'Brand Identity Design',
                'tagline'   => 'Complete Branding',
                'desc'      => 'We create complete brand identities including color palettes, typography, and brand guidelines.',
                'image'     => 'assets/images/services/brand-identity.png',
                'metric'    => ['val' => 'Consistent', 'lbl' => 'Branding', 'icon' => 'fa-solid fa-palette'],
                'features'  => ['Brand Guidelines', 'Typography & Colors', 'Visual Identity'],
                'techStack' => ['Illustrator', 'Figma', 'Adobe Suite']
            ],

            'social' => [
                'tab_name'  => 'Social Media',
                'tab_icon'  => 'fa-solid fa-hashtag',
                'title'     => 'Social Media Graphics',
                'tagline'   => 'Engaging Visuals',
                'desc'      => 'We design eye-catching social media posts, banners, and ads that increase engagement and brand awareness.',
                'image'     => 'assets/images/services/social-media-graphics.png',
                'metric'    => ['val' => 'High', 'lbl' => 'Engagement', 'icon' => 'fa-solid fa-thumbs-up'],
                'features'  => ['Instagram Posts', 'Facebook Ads', 'LinkedIn Graphics'],
                'techStack' => ['Photoshop', 'Canva', 'Illustrator']
            ],

            'marketing' => [
                'tab_name'  => 'Marketing',
                'tab_icon'  => 'fa-solid fa-bullhorn',
                'title'     => 'Marketing Materials Design',
                'tagline'   => 'Promote Your Brand',
                'desc'      => 'We design brochures, flyers, banners, and other marketing materials to support your business growth.',
                'image'     => 'assets/images/services/marketing-materials.png',
                'metric'    => ['val' => 'Impactful', 'lbl' => 'Designs', 'icon' => 'fa-solid fa-bullseye'],
                'features'  => ['Brochures & Flyers', 'Business Cards', 'Print & Digital Ads'],
                'techStack' => ['Illustrator', 'InDesign', 'Photoshop']
            ],

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Design Process',
        'title' => 'Our <span class="gradient-text">Creative Process</span>',
        'subtitle' => 'A structured approach to deliver high-quality design solutions.',
        'steps' => [
            ['title' => 'Requirement Gathering', 'desc' => 'Understanding your brand and design requirements.', 'icon' => 'fa-solid fa-compass'],
            ['title' => 'Concept Creation', 'desc' => 'Creating initial design concepts and ideas.', 'icon' => 'fa-solid fa-lightbulb'],
            ['title' => 'Design Development', 'desc' => 'Refining and finalizing the best design.', 'icon' => 'fa-solid fa-pen-nib'],
            ['title' => 'Feedback & Revisions', 'desc' => 'Improving designs based on your feedback.', 'icon' => 'fa-solid fa-arrows-rotate'],
            ['title' => 'Final Delivery', 'desc' => 'Delivering all design files and assets.', 'icon' => 'fa-solid fa-box-open'],
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Why Choose Us',
        'title' => 'Why Choose <span class="gradient-text">' . COMPANY_NAME . '</span>',
        'subtitle' => 'We create designs that strengthen your brand identity.',
        'cards' => [
            ['icon' => 'fa-solid fa-lightbulb', 'title' => 'Creative Designs', 'desc' => 'Unique and innovative design solutions.'],
            ['icon' => 'fa-solid fa-bullseye', 'title' => 'Brand Focused', 'desc' => 'Designs aligned with your business goals.'],
            ['icon' => 'fa-solid fa-star', 'title' => 'High Quality', 'desc' => 'Premium design standards and attention to detail.'],
            ['icon' => 'fa-solid fa-layer-group', 'title' => 'Complete Branding', 'desc' => 'From logo to full brand identity.'],
            ['icon' => 'fa-solid fa-earth-americas', 'title' => 'Global Service', 'desc' => 'Based in ' . COMPANY_ADDRESS_SHORT . ', serving clients worldwide.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'Support', 'desc' => 'Dedicated support throughout your project.'],
        ]
    ],

    /* ================= PORTFOLIO ================= */
    'portfolio' => [
        'tag' => '<i class="fa-solid fa-briefcase"></i>&nbsp; Portfolio',
        'title' => 'Our <span class="gradient-text">Creative Work</span>',
        'subtitle' => 'Explore our latest graphic and logo design projects.',
        'filter_categories' => ['logo', 'branding', 'graphics']
    ],

    /* ================= TESTIMONIALS ================= */
    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'What is included in logo design services?',
                'a' => 'We provide custom logo concepts, revisions, and final files in all formats suitable for web and print.'
            ],
            [
                'q' => 'Do you offer complete branding services?',
                'a' => 'Yes, we offer full brand identity design including logos, color schemes, typography, and guidelines.'
            ],
            [
                'q' => 'Can you design social media graphics?',
                'a' => 'Yes, we create engaging social media posts, banners, and ads for all platforms.'
            ],
        ]
    ]
];
