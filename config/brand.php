<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Brand Colors
    |--------------------------------------------------------------------------
    |
    | These are the primary brand colors used throughout the application.
    | Centralized here for easy maintenance and consistency.
    |
    */

    'colors' => [
        'primary' => '#198fd9',      // Main brand blue
        'primary-light' => '#1a7fc7', // Lighter shade
        'primary-dark' => '#0f6ba8',  // Darker shade (WCAG 2.2 AA compliant)
        'accent' => '#4ade80',        // Tailwind green-400 - trust/success indicators (matches rendered views)
        'text' => [
            'dark' => '#111827',      // gray-900
            'medium' => '#374151',    // gray-700
            'light' => '#6b7280',     // gray-500
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Company Information
    |--------------------------------------------------------------------------
    |
    | Basic company information used across the application.
    |
    */

    'company' => [
        'name' => 'Solutions Delivered',
        'tagline' => 'Delivering Solutions is in Our DNA',
        'description' => 'Solutions Delivered provides tailored business solutions for process design, project management, and organizational change.',
        'country' => 'GB',
        'country_name' => 'United Kingdom',
        'location' => 'UK-Based IT Consultancy',
    ],

    /*
    |--------------------------------------------------------------------------
    | Contact Information
    |--------------------------------------------------------------------------
    |
    | Contact details for various purposes.
    |
    */

    'contact' => [
        'general' => 'sam.jenkins@solutionsdelivered.co.uk',
        'privacy' => 'privacy@solutionsdelivered.co.uk',
        'support' => 'support@solutionsdelivered.co.uk',
    ],

    /*
    |--------------------------------------------------------------------------
    | Social Media
    |--------------------------------------------------------------------------
    |
    | Social media profiles (currently empty, but structured for future use).
    |
    */

    'social' => [
        'linkedin' => null,
        'twitter' => null,
        'github' => null,
    ],

    /*
    |--------------------------------------------------------------------------
    | SEO Defaults
    |--------------------------------------------------------------------------
    |
    | Default SEO meta information.
    |
    */

    'seo' => [
        'title' => 'Solutions Delivered - Delivering Solutions is in Our DNA',
        'description' => 'UK-based consultancy offering tailored business solutions for process design, project management, and organizational change.',
        'og_image' => 'og-image.png',
        'og_image_width' => 1200,
        'og_image_height' => 630,
    ],

    /*
    |--------------------------------------------------------------------------
    | Trust Indicators
    |--------------------------------------------------------------------------
    |
    | Key trust indicators displayed across the site.
    |
    */

    'trust_indicators' => [
        'WCAG 2.2 Compliant',
        'Direct Team Collaboration',
        'No-Bloat Philosophy',
        'UK-Based IT Consultancy',
    ],

    /*
    |--------------------------------------------------------------------------
    | Services
    |--------------------------------------------------------------------------
    |
    | Core service offerings.
    |
    */

    'services' => [
        'Web Development' => 'Bespoke Laravel applications built with precision',
        'Service Management' => 'ITIL-aligned service delivery and support',
        'Project Management' => 'Agile and traditional project methodologies',
        'Business Change' => 'Organizational transformation and change management',
    ],

    /*
    |--------------------------------------------------------------------------
    | Navigation
    |--------------------------------------------------------------------------
    |
    | Main navigation items.
    |
    */

    'navigation' => [
        ['route' => 'home', 'label' => 'Home'],
        ['route' => 'about', 'label' => 'About'],
        ['route' => 'solutions', 'label' => 'Solutions'],
        ['route' => 'how-we-work', 'label' => 'How We Work'],
        ['route' => 'careers', 'label' => 'Careers'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Design Tokens
    |--------------------------------------------------------------------------
    |
    | Reusable design tokens for consistent styling.
    |
    */

    'design' => [
        'border_radius' => [
            'sm' => 'rounded-lg',
            'md' => 'rounded-xl',
            'lg' => 'rounded-2xl',
            'full' => 'rounded-full',
        ],
        'shadows' => [
            'sm' => 'shadow-md',
            'md' => 'shadow-lg',
            'lg' => 'shadow-xl',
            'xl' => 'shadow-2xl',
        ],
        'gradients' => [
            'primary' => 'bg-gradient-to-r from-[#198fd9] to-[#1a7fc7]',
            'primary-hover' => 'hover:from-[#1a7fc7] hover:to-[#0f6ba8]',
            'hero' => 'bg-gradient-to-br from-[#198fd9] via-[#1a7fc7] to-[#0f6ba8]',
        ],
    ],

];
