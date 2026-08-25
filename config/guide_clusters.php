<?php

/*
|--------------------------------------------------------------------------
| Guide clusters
|--------------------------------------------------------------------------
|
| Single source of truth for the Guides clusters named in
| docs/TRAFFIC-PLAN.md section 3 (the wave table). Slugs are stable — they
| are baked into guide front matter — only the label may change. Order here
| is the display order on /guides.
|
| Content is added wave by wave; a cluster with no guides yet is simply
| omitted from the index (see GuideRepository::groupedByCluster()).
|
*/

return [
    'commercial-core' => [
        'label' => 'Outsourced IT director and fractional CTO',
        'description' => 'What the roles mean, what they cost, and which one fits a small business.',
    ],
    'continuity' => [
        'label' => 'IT continuity and succession',
        'description' => 'What to do when the one person who understands your systems is gone.',
    ],
    'cyber-essentials' => [
        'label' => 'Cyber Essentials',
        'description' => 'Getting ready, passing, and what to do if you fail.',
    ],
    'end-of-life-and-spend' => [
        'label' => 'Vendor end-of-life and IT budget',
        'description' => 'Unsupported software, ageing systems, and what a sensible IT budget looks like.',
    ],
    'iso-27001' => [
        'label' => 'ISO 27001 readiness',
        'description' => 'Whether it is worth it, and how to get ready without an enterprise-shaped ISMS.',
    ],
    'ai-adoption' => [
        'label' => 'AI adoption and safety',
        'description' => 'A sceptical, practical look at where AI pays off for a small business and where it does not.',
    ],
];
