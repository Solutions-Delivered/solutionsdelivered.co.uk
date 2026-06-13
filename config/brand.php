<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Company
    |--------------------------------------------------------------------------
    |
    | Visible copy uses the camel-case "Solutions Delivered" form. The legal
    | entity name is used in schema markup and the footer legal line.
    |
    */

    'company' => [
        'name' => 'Solutions Delivered',
        'legal_name' => 'Solutions Delivered Limited',
        'tagline' => 'Practical AI for small businesses, built by people who deliver.',
        'description' => 'We help small businesses get real, daily value from AI, and we still deliver the IT and project work behind it. Real work, not clicks.',
        'positioning' => 'We don\'t just talk about AI. We use it in our day-to-day work. Real work, not clicks.',
        'company_number' => '12063264',
        'founded' => '2019-06-21',
        'address' => [
            'street' => 'Belmont Suite, Paragon Business Park, Chorley New Road',
            'locality' => 'Horwich',
            'region' => 'Bolton',
            'postcode' => 'BL6 6HG',
            'country' => 'GB',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Contact
    |--------------------------------------------------------------------------
    |
    | Real channels only. Email addresses stay lowercase (they are the actual
    | addresses).
    |
    */

    'contact' => [
        'general' => 'sam.jenkins@solutionsdelivered.co.uk',
        'privacy' => 'privacy@solutionsdelivered.co.uk',
        'response_time' => '24 hours',
    ],

    /*
    |--------------------------------------------------------------------------
    | Social
    |--------------------------------------------------------------------------
    |
    | Only link channels that are real and in use. Leave null to omit.
    |
    */

    'social' => [
        'linkedin' => null,
    ],

    /*
    |--------------------------------------------------------------------------
    | Navigation
    |--------------------------------------------------------------------------
    |
    | Primary nav links, in order, plus the single primary CTA. One CTA only;
    | no repeated "Get Started" pills.
    |
    */

    'nav' => [
        ['route' => 'ai-foundations', 'label' => 'AI Foundations'],
        ['route' => 'foundations-os', 'label' => 'The Foundations OS'],
        ['route' => 'how-it-works', 'label' => 'How it works'],
        ['route' => 'consultancy', 'label' => 'Consultancy'],
        ['route' => 'about', 'label' => 'About'],
    ],

    'cta' => ['route' => 'contact', 'label' => 'Contact us'],

];
