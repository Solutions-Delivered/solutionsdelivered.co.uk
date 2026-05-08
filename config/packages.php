<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Productised Engagements (Packages)
    |--------------------------------------------------------------------------
    |
    | Slug-keyed list of productised offerings. Each package renders as a
    | card on /packages and the slug is carried through to the contact form
    | when a visitor selects one (?package=<slug>).
    |
    | Pricing fields:
    |   - 'price' is an integer GBP amount (excluding VAT) when the engagement
    |     has a fixed price. Set to null when the price is on request.
    |   - 'price_suffix' renders next to the price (e.g. "+ VAT", "/ month").
    |
    */

    'saas-discovery' => [
        'eyebrow' => 'Web Development',
        'name' => 'SaaS Discovery',
        'outcome' => 'A focused one-day session to pressure-test your SaaS idea (or existing product) and turn it into a costed, phased delivery plan.',
        'duration' => '1 day',
        'price' => 500,
        'price_suffix' => '+ VAT',
        'currency' => 'GBP',
        'included' => [
            'Pre-call brief and async questionnaire so we make the day count',
            'Half-day workshop covering problem, audience, and success criteria',
            'Architecture sketch and Laravel-stack recommendations',
            'Phased delivery plan with indicative build estimates',
        ],
        'deliverables' => [
            'Discovery summary document (PDF)',
            'High-level architecture diagram',
            'Phased roadmap with effort estimates',
        ],
        'best_for' => 'Founders and product teams shaping a new SaaS, or modernising an existing product, who want a clear picture of cost and complexity before committing to build.',
    ],

    'fractional-retainer' => [
        'eyebrow' => 'Cross-cutting',
        'name' => 'Fractional Retainer',
        'outcome' => 'Embedded technical leadership without a full hire. Choose half-day or full-day per week, rolling monthly.',
        'duration' => 'Monthly, rolling',
        'price' => null,
        'price_suffix' => null,
        'currency' => 'GBP',
        'included' => [
            'Half-day or full-day per week, agreed up front',
            'Direct Slack or Teams access for async input',
            'Monthly review of priorities, progress, and burn',
            'Hands-on contribution where it adds the most value',
        ],
        'deliverables' => [
            'Weekly notes and decisions log',
            'Monthly progress and priorities summary',
        ],
        'best_for' => 'Growing teams that need senior IT leadership input but cannot yet justify a full-time hire.',
    ],

    'accessibility-audit' => [
        'eyebrow' => 'Web Development',
        'name' => 'Accessibility Audit',
        'outcome' => 'A WCAG 2.2 AA compliance review of your site or product, with a prioritised remediation roadmap you can hand to any developer.',
        'duration' => 'Approx. 5 working days',
        'price' => null,
        'price_suffix' => null,
        'currency' => 'GBP',
        'included' => [
            'Automated audit across up to twenty key pages or screens',
            'Manual screen-reader and keyboard testing of critical journeys',
            'Prioritised issue list with effort estimates and severity',
            '60-minute walkthrough session with your team',
        ],
        'deliverables' => [
            'PDF audit report aligned to WCAG 2.2 AA',
            'Issue-by-issue remediation checklist (Markdown)',
        ],
        'best_for' => 'Public-sector suppliers and organisations needing GDS-aligned reporting, or commercial teams preparing for procurement scrutiny.',
    ],

];
