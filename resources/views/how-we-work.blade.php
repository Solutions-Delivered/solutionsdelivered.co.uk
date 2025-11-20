@extends('layouts.app')

@section('title', 'How We Work - Solutions Delivered')
@section('meta_description', 'Direct collaboration with experienced consultants. Transparent process, no hidden costs. Free initial consultation and 24-hour response time. Discover our proven engagement approach.')

@push('schema')
<x-schema.breadcrumb :items="[
    ['name' => 'Home', 'url' => route('home')],
    ['name' => 'How We Work']
]" />

<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name' => 'What is your engagement process?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'We follow a simple four-step process: 1) Initial Discussion - We start with a conversation to understand your needs and objectives. 2) Proposal & Planning - We provide a clear proposal outlining scope, approach, timeline, and costs. 3) Collaborative Delivery - Regular check-ins and continuous feedback ensure we stay aligned with your vision. 4) Handover & Support - Comprehensive handover with documentation and ongoing support options.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'How quickly will you respond to my inquiry?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'We guarantee a response within 24 hours during working days. You\'ll have direct access to our team with no account managers or layers of bureaucracy.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'What are your pricing options?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'We offer flexible pricing options including fixed-price for defined scope projects or day-rate for flexible work. All pricing is transparent with no hidden costs, and we offer flexible payment terms for ongoing engagements. Our rates are competitive and value-focused without compromising quality.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'Do you work remotely or on-site?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'We are remote-first and UK-based, offering flexible scheduling to accommodate your availability. On-site visits are available for local clients when needed, and we work with the tools and platforms of your choice.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'What makes you different from other consultancies?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'We provide direct access to experienced consultants without account managers or bureaucracy. We focus on quality over speed with realistic timelines, offer transparent pricing with no hidden costs, and emphasize collaborative partnerships rather than transactional vendor relationships. We\'re committed to accessibility (WCAG 2.2 compliance) and building maintainable, no-bloat solutions.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'Who are you a good fit for?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'We work best with organizations that value quality, accessibility, and long-term maintainability over quick fixes. Ideal clients prefer collaborative partnerships, need bespoke solutions rather than off-the-shelf products, appreciate transparent communication and realistic expectations, and care about accessibility and inclusive digital experiences.'
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
@endpush

@section('content')
<!-- Page Header -->
<section class="relative overflow-hidden bg-gradient-to-br from-[#198fd9] via-[#1a7fc7] to-[#0f6ba8] text-white py-10 sm:py-14 md:py-16 lg:py-20 px-4 sm:px-6 lg:px-8">
    <!-- Decorative background elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none" aria-hidden="true">
        <div class="absolute top-10 right-20 w-72 h-72 bg-white opacity-10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-10 left-10 w-96 h-96 bg-white opacity-5 rounded-full blur-3xl"></div>
        <div class="absolute inset-0 bg-white opacity-5 transform -skew-y-3 origin-top-right"></div>
    </div>

    <div class="relative max-w-7xl mx-auto">
        <!-- Breadcrumb badge -->
        <x-badge.breadcrumb class="mb-6">
            <x-slot:icon>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </x-slot:icon>
            How We Work
        </x-badge.breadcrumb>

        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
            Our Collaborative
            <span class="block text-transparent bg-clip-text bg-gradient-to-r from-white via-gray-100 to-gray-200 mt-1">
                Approach to Success
            </span>
        </h1>

        <p class="text-base sm:text-lg md:text-xl lg:text-2xl max-w-3xl text-gray-100 leading-relaxed">
            A transparent, collaborative approach to delivering your solutions with clear communication every step of the way
        </p>
    </div>
</section>

<!-- Our Approach Section -->
<section class="py-8 sm:py-12 md:py-14 lg:py-16 px-4 sm:px-6 lg:px-8 bg-white" aria-labelledby="approach-heading">
    <div class="max-w-4xl mx-auto">
        <h2 id="approach-heading" class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-6">
            Our Approach
        </h2>
        <p class="text-lg text-gray-700 mb-4">
            We believe in building genuine partnerships with our clients. This means direct communication, transparent pricing, and a collaborative approach where your input shapes the solution.
        </p>
        <p class="text-lg text-gray-700 mb-4">
            Whether you need a bespoke web system, process optimization, project oversight, or change management support, we work alongside you—not just for you. You'll have direct access throughout the engagement, ensuring your vision becomes reality.
        </p>
    </div>
</section>

<!-- Engagement Process Section -->
<section class="relative overflow-hidden py-10 sm:py-14 md:py-16 lg:py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-50 to-white" aria-labelledby="process-heading">
    <!-- Decorative background -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none" aria-hidden="true">
        <div class="absolute top-1/2 left-1/4 w-96 h-96 bg-[#198fd9] opacity-5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-[#0f6ba8] opacity-5 rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <x-badge.breadcrumb class="mb-4">
                <x-slot:icon>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </x-slot:icon>
                Our Process
            </x-badge.breadcrumb>
            <h2 id="process-heading" class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                How We Engage
            </h2>
            <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-2xl mx-auto">
                A simple, transparent four-step process to turn your vision into reality
            </p>
        </div>

        <div class="grid md:grid-cols-4 gap-6">
            <div class="relative bg-white rounded-2xl p-6 sm:p-7 md:p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-200">
                <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
                    <div class="inline-flex items-center justify-center w-12 h-12 bg-gradient-to-br from-[#198fd9] to-[#1a7fc7] text-white rounded-xl shadow-lg text-xl font-bold" aria-hidden="true">
                        1
                    </div>
                </div>
                <div class="mt-8 text-center">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Initial Discussion</h3>
                    <p class="text-gray-600 leading-relaxed">
                        We start with a conversation to understand your needs, challenges, and objectives. No sales pitch—just genuine discovery.
                    </p>
                </div>
            </div>

            <div class="relative bg-white rounded-2xl p-6 sm:p-7 md:p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-200">
                <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
                    <div class="inline-flex items-center justify-center w-12 h-12 bg-gradient-to-br from-[#1a7fc7] to-[#0f6ba8] text-white rounded-xl shadow-lg text-xl font-bold" aria-hidden="true">
                        2
                    </div>
                </div>
                <div class="mt-8 text-center">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Proposal & Planning</h3>
                    <p class="text-gray-600 leading-relaxed">
                        We provide a clear proposal outlining scope, approach, timeline, and costs. No hidden surprises.
                    </p>
                </div>
            </div>

            <div class="relative bg-white rounded-2xl p-6 sm:p-7 md:p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-200">
                <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
                    <div class="inline-flex items-center justify-center w-12 h-12 bg-gradient-to-br from-[#0f6ba8] to-[#198fd9] text-white rounded-xl shadow-lg text-xl font-bold" aria-hidden="true">
                        3
                    </div>
                </div>
                <div class="mt-8 text-center">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Collaborative Delivery</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Regular check-ins, continuous feedback, and iterative development ensure we stay aligned with your vision.
                    </p>
                </div>
            </div>

            <div class="relative bg-white rounded-2xl p-6 sm:p-7 md:p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-200">
                <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
                    <div class="inline-flex items-center justify-center w-12 h-12 bg-gradient-to-br from-[#198fd9] to-[#0f6ba8] text-white rounded-xl shadow-lg text-xl font-bold" aria-hidden="true">
                        4
                    </div>
                </div>
                <div class="mt-8 text-center">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Handover & Support</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Comprehensive handover with documentation and ongoing support options to ensure long-term success.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What to Expect Section -->
<section class="py-8 sm:py-12 md:py-14 lg:py-16 px-4 sm:px-6 lg:px-8 bg-white" aria-labelledby="expect-heading">
    <div class="max-w-7xl mx-auto">
        <h2 id="expect-heading" class="text-2xl sm:text-3xl md:text-4xl font-bold text-center text-gray-900 mb-12">
            What to Expect
        </h2>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-2xl p-6 sm:p-7 md:p-8 shadow-lg border border-gray-100">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-gradient-to-br from-[#198fd9] to-[#1a7fc7] rounded-xl flex items-center justify-center mr-4 shadow-md" aria-hidden="true">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900">Communication</h3>
                </div>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Direct access—no account managers or layers of bureaucracy</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Response within 24 hours during working days</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Regular progress updates and check-ins</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Clear, jargon-free explanations</span>
                    </li>
                </ul>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-gradient-to-br from-[#1a7fc7] to-[#0f6ba8] rounded-xl flex items-center justify-center mr-4 shadow-md" aria-hidden="true">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900">Delivery</h3>
                </div>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Quality over speed—we won't rush to meet arbitrary deadlines</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Realistic timelines set upfront</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Iterative delivery with opportunities for feedback</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Comprehensive documentation and handover</span>
                    </li>
                </ul>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-gradient-to-br from-[#0f6ba8] to-[#198fd9] rounded-xl flex items-center justify-center mr-4 shadow-md" aria-hidden="true">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900">Pricing</h3>
                </div>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Fixed-price for defined scope or day-rate for flexible work</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Transparent pricing with no hidden costs</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Flexible payment terms for ongoing engagements</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Value-focused—competitive rates without compromising quality</span>
                    </li>
                </ul>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-gradient-to-br from-[#198fd9] to-[#0f6ba8] rounded-xl flex items-center justify-center mr-4 shadow-md" aria-hidden="true">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900">Working Arrangements</h3>
                </div>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Remote-first, UK-based</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Flexible scheduling to accommodate your availability</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>On-site visits available for local clients when needed</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Tools and platforms of your choice</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- When We're a Good Fit Section -->
<section class="py-8 sm:py-12 md:py-14 lg:py-16 px-4 sm:px-6 lg:px-8 bg-gray-50" aria-labelledby="fit-heading">
    <div class="max-w-4xl mx-auto">
        <h2 id="fit-heading" class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-6">
            When We're a Good Fit
        </h2>
        <p class="text-lg text-gray-700 mb-6">
            We work best with organizations that:
        </p>
        <ul class="space-y-3 text-lg text-gray-700">
            <li class="flex items-start">
                <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>Value quality, accessibility, and long-term maintainability over quick fixes</span>
            </li>
            <li class="flex items-start">
                <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>Prefer collaborative partnerships over transactional vendor relationships</span>
            </li>
            <li class="flex items-start">
                <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>Need bespoke solutions, not off-the-shelf products</span>
            </li>
            <li class="flex items-start">
                <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>Appreciate transparent communication and realistic expectations</span>
            </li>
            <li class="flex items-start">
                <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>Care about accessibility and inclusive digital experiences</span>
            </li>
        </ul>
    </div>
</section>

<!-- Call to Action -->
<section class="relative overflow-hidden py-10 sm:py-14 md:py-16 lg:py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-[#198fd9] via-[#1a7fc7] to-[#0f6ba8] text-white" aria-labelledby="cta-heading">
    <!-- Decorative background elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none" aria-hidden="true">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-white opacity-10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 -left-24 w-[500px] h-[500px] bg-white opacity-5 rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-4xl mx-auto text-center">
        <!-- Eyebrow -->
        <div class="inline-flex items-center px-4 py-2 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 text-sm font-medium mb-6">
            <svg class="w-4 h-4 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
            </svg>
            Ready to Get Started?
        </div>

        <h2 id="cta-heading" class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-6 leading-tight">
            Let's Start a Conversation
        </h2>
        <p class="text-base sm:text-lg md:text-xl lg:text-2xl mb-12 text-gray-100 max-w-2xl mx-auto leading-relaxed">
            No obligation, no pressure—just an honest discussion about your needs and how we can help
        </p>

        <div class="flex flex-col sm:flex-row gap-6 justify-center">
            <a href="{{ route('get-started') }}" class="group relative inline-flex items-center justify-center bg-white text-[#198fd9] px-10 py-5 rounded-xl text-lg font-semibold shadow-2xl hover:shadow-3xl transform hover:-translate-y-1 transition-all duration-200 overflow-hidden">
                <!-- Shimmer effect -->
                <div class="absolute inset-0 bg-gradient-to-r from-transparent via-gray-100 to-transparent opacity-0 group-hover:opacity-100 transform -skew-x-12 group-hover:translate-x-full transition-all duration-700" aria-hidden="true"></div>
                <span class="relative z-10 flex items-center">
                    Get in Touch
                    <svg class="ml-2 w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </span>
            </a>
        </div>

        <!-- Trust indicator -->
        <div class="mt-12 flex items-center justify-center">
            <x-trust-indicator>Free consultation • 24 hour response time • No commitment required</x-trust-indicator>
        </div>
    </div>
</section>
@endsection
