<?php
// config/projects/smart-gp-payroll.php

return [
    'slug' => 'smart-gp-payroll',
    'title' => 'Smart GP Payroll',
    'tag' => 'Healthcare FinTech',
    'year' => '2026',
    'type' => 'Multi-Tenant NHS Payroll Infrastructure & Automated Accounting Sync Engine',
    'services' => [
        'Full-Stack Website Development',
        'Automated CMS & CRM System Engineering',
        'Secure FinTech Pipeline Management',
        'High-Availability Cloud Infrastructure'
    ],
    'client' => 'Smart GP Payroll',
    'category' => 'crm',
    'img' => 'images/portfolio/smart-gp-payroll.webp',

    'desc' => 'Smart GP Payroll is an enterprise SaaS payroll platform designed specifically for NHS General Practitioner practices, providing payroll automation, pension management, compliance reporting, and accounting integrations through a secure cloud-based environment.',

    'problem' => 'Smart GP Payroll required a secure multi-tenant cloud platform capable of processing complex payroll calculations, pension contributions, HMRC compliance reporting, and real-time accounting synchronization without performance bottlenecks.',

    'metric_val' => 'Sub-Second',
    'metric_lbl' => 'Accounting Sync',

    'tags' => [
        'Angular',
        'Node.js',
        'AWS',
        'FinTech',
        'Payroll'
    ],

    'alt' => 'Smart GP Payroll Healthcare FinTech Platform',

    'metaTitle' => 'Smart GP Payroll | Healthcare FinTech Platform - Aim Infocorp',
    'metaDescription' => 'Enterprise NHS payroll platform built with Angular, Node.js, and AWS EC2 featuring payroll automation, compliance management, and accounting integrations.',

    'heroTitle' => 'Smart GP Payroll – <span class="gradient-text">Healthcare FinTech Platform</span>',

    'heroSubtitle' => 'Smart GP Payroll required a secure cloud ecosystem capable of automating NHS payroll processing, pension calculations, compliance reporting, and accounting synchronization.',

    'challengeSubtitle' => 'Healthcare payroll systems operate under strict compliance requirements and process large volumes of financial data. The challenge was building a scalable platform capable of handling concurrent payroll operations while maintaining security and reliability.',

    'challengeIssues' => [
        [
            'icon' => 'fa-solid fa-calculator icon-primary',
            'text' => 'Browser slowdowns during large payroll calculations and reporting operations'
        ],
        [
            'icon' => 'fa-solid fa-link icon-primary',
            'text' => 'Data synchronization risks when communicating with Xero and QuickBooks APIs'
        ],
        [
            'icon' => 'fa-solid fa-server icon-primary',
            'text' => 'Potential resource exhaustion during month-end payroll processing peaks'
        ],
        [
            'icon' => 'fa-solid fa-users-gear icon-primary',
            'text' => 'Disconnected onboarding workflows between inquiries and CRM systems'
        ],
    ],

    'challengeResult' => 'Healthcare payroll operations required a secure, scalable, and highly available cloud infrastructure',

    'process' => [
        [
            'id' => 'process-angular',
            'icon' => 'fa-brands fa-angular icon-primary',
            'title' => 'High-Velocity Enterprise Interfaces via Angular',
            'steps' => [
                'Built a modular Angular SPA architecture with lazy loading',
                'Developed responsive payroll dashboards and reporting modules',
                'Optimized component lifecycles for smooth real-time calculations',
            ],
        ],
        [
            'id' => 'process-nodejs',
            'icon' => 'fa-brands fa-node-js icon-primary',
            'title' => 'Scalable, Non-Blocking Backend Processing via Node.js',
            'steps' => [
                'Developed event-driven RESTful APIs using Node.js',
                'Implemented asynchronous payroll calculation queues',
                'Created secure tokenized authentication and tenant isolation systems',
            ],
        ],
        [
            'id' => 'process-aws',
            'icon' => 'fa-brands fa-aws icon-primary',
            'title' => 'High-Availability Cloud Infrastructure via AWS EC2',
            'steps' => [
                'Deployed scalable AWS EC2 cloud environments',
                'Configured auto-scaling and monitoring systems',
                'Implemented encrypted communication channels and secure integrations',
            ],
        ],
    ],

    'actions' => [
        'Built a secure NHS payroll management platform using Angular',
        'Developed high-performance Node.js API infrastructure',
        'Configured AWS EC2 cloud environments for scalability and reliability',
        'Integrated Xero and QuickBooks synchronization workflows',
        'Implemented CMS publishing and CRM onboarding systems',
    ],

    'resultsSubtitle' => 'The platform transformed payroll operations by delivering secure automation, seamless accounting synchronization, and reliable cloud performance for NHS practices.',

    'results' => [
        [
            'title' => 'Milliseconds',
            'text' => 'Payroll calculation processing through asynchronous Node.js workflows'
        ],
        [
            'title' => 'Seamless',
            'text' => 'Accounting synchronization with Xero and QuickBooks'
        ],
        [
            'title' => 'Reliable',
            'text' => 'System performance during end-of-month processing peaks'
        ],
        [
            'title' => 'Automated',
            'text' => 'Lead onboarding and CRM routing operations'
        ],
    ],

    'testimonial' => [
        'text' => 'Aim Infocorp delivered an elite, enterprise-grade financial platform that perfectly satisfies the rigid security and compliance standards of the NHS environment. Handling payroll, tax regulations, and pension tiers for thousands of medical staff demands absolute technical precision. The Angular, Node.js, and AWS EC2 infrastructure they constructed is lightning-fast, exceptionally secure, and handles heavy accounting operations without a trace of lag.',
        'name' => 'Smart GP Payroll Product Engineering Lead',
        'role' => '',
    ],

    'performance' => [
        [
            'title' => 'Multi-Tenant Practice Command Centers',
            'items' => [
                'Provided centralized payroll visibility across multiple organizations',
                'Enabled rapid assessment of payroll and employee status information',
            ],
        ],
        [
            'title' => 'Automated Ledger Sync Indicators',
            'items' => [
                'Displayed real-time accounting synchronization statuses',
                'Provided instant visibility into Xero and QuickBooks integrations',
            ],
        ],
        [
            'title' => 'Secure Healthcare Lead Funnels',
            'items' => [
                'Captured practice onboarding requests through validated workflows',
                'Integrated customer onboarding directly into CRM systems',
            ],
        ],
    ],

    'conclusion' => [
        'heading' => 'Aim Infocorp Pvt Ltd successfully delivered an elite health-tech FinTech ecosystem for Smart GP Payroll by:',
        'points' => [
            'Deploying a high-performance Angular architecture for payroll operations',
            'Engineering a scalable Node.js backend for asynchronous financial processing',
            'Building AWS EC2 infrastructure optimized for availability, security, and growth',
        ],
        'outcome' => 'Zero calculation bottlenecks → Sub-second accounting synchronization → Fluid Angular layouts → Enhanced NHS financial scaling',
    ],
];
