@extends('layouts.app')

@section('title', 'Our Solutions - Solutions Delivered')
@section('meta_description', 'Bespoke Laravel web development, ITIL service management, project management, and business change consulting. WCAG 2.2 compliant, no-bloat solutions tailored to your needs.')

@push('schema')
<x-schema.breadcrumb :items="[
    ['name' => 'Home', 'url' => route('home')],
    ['name' => 'Solutions']
]" />

<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'WebPage',
    'name' => 'Our Solutions',
    'description' => 'Comprehensive business solutions including web development, service management, project management, and business change consulting.',
    'url' => url()->current()
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'ItemList',
    'itemListElement' => [
        [
            '@type' => 'Service',
            'name' => 'Web Development',
            'description' => 'Bespoke Laravel-based web systems built for accessibility, efficiency, and value. WCAG 2.2 compliant with no-bloat philosophy.',
            'provider' => [
                '@type' => 'Organization',
                'name' => 'Solutions Delivered'
            ],
            'areaServed' => 'GB',
            'serviceType' => 'Web Development'
        ],
        [
            '@type' => 'Service',
            'name' => 'Service Management',
            'description' => 'Expert guidance in implementing and optimizing ITIL-aligned service management frameworks.',
            'provider' => [
                '@type' => 'Organization',
                'name' => 'Solutions Delivered'
            ],
            'areaServed' => 'GB',
            'serviceType' => 'IT Service Management'
        ],
        [
            '@type' => 'Service',
            'name' => 'Project Management',
            'description' => 'Professional project management services to ensure successful delivery of your initiatives.',
            'provider' => [
                '@type' => 'Organization',
                'name' => 'Solutions Delivered'
            ],
            'areaServed' => 'GB',
            'serviceType' => 'Project Management'
        ],
        [
            '@type' => 'Service',
            'name' => 'Business Change',
            'description' => 'Strategic guidance through organizational transformation and business process improvement.',
            'provider' => [
                '@type' => 'Organization',
                'name' => 'Solutions Delivered'
            ],
            'areaServed' => 'GB',
            'serviceType' => 'Business Consulting'
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
        <div class="absolute top-10 right-10 w-96 h-96 bg-white opacity-10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-10 left-10 w-72 h-72 bg-white opacity-5 rounded-full blur-3xl"></div>
        <div class="absolute inset-0 bg-white opacity-5 transform -skew-y-2 origin-top-left"></div>
    </div>

    <div class="relative max-w-7xl mx-auto">
        <!-- Breadcrumb/tag -->
        <x-badge.breadcrumb class="mb-6">
            <x-slot:icon>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
            </x-slot:icon>
            Our Services
        </x-badge.breadcrumb>

        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
            Our
            <span class="block text-transparent bg-clip-text bg-gradient-to-r from-white via-gray-100 to-gray-200 mt-1">
                Solutions
            </span>
        </h1>

        <p class="text-base sm:text-lg md:text-xl lg:text-2xl max-w-3xl text-gray-100 leading-relaxed">
            Comprehensive business solutions tailored to your unique needs and challenges.
        </p>
    </div>
</section>

<!-- Web Development Section -->
<section id="web-development" class="py-8 sm:py-12 md:py-14 lg:py-16 px-4 sm:px-6 lg:px-8 bg-white" aria-labelledby="web-development-heading">
    <div class="max-w-7xl mx-auto">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-[#198fd9] to-[#1a7fc7] rounded-2xl text-white mb-6 shadow-lg" aria-hidden="true">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                </div>
                <h2 id="web-development-heading" class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    Web Development
                </h2>
                <p class="text-lg text-gray-700 mb-4">
                    We build bespoke web systems using Laravel that are tailored precisely to your business needs. Unlike off-the-shelf solutions laden with unnecessary features, we create streamlined, efficient systems that do exactly what you need—nothing more, nothing less.
                </p>
                <p class="text-lg text-gray-700 mb-4">
                    Every system we develop is built with WCAG 2.2 compliance at its core, ensuring your digital presence is accessible to all users. We believe accessibility isn't optional—it's essential for modern web applications.
                </p>
                <p class="text-lg text-gray-700 mb-6">
                    Our focus on clean code and minimal bloat means your systems run faster, cost less to maintain, and are easier for your team to use. We deliver professional solutions without the enterprise price tag.
                </p>
            </div>
            <div class="bg-gray-50 rounded-lg p-6 sm:p-7 md:p-8">
                <h3 class="text-xl font-bold text-gray-900 mb-4">What You Get</h3>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700"><strong>Laravel-based systems</strong> – Modern, secure, and maintainable</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700"><strong>WCAG 2.2 compliance</strong> – Accessible to all users by default</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700"><strong>No-bloat philosophy</strong> – Only the features you actually need</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700"><strong>Cost-effective solutions</strong> – Professional quality without excessive costs</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700"><strong>Direct collaboration</strong> – Work directly with the developer</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Service Management Section -->
<section id="service-management" class="py-8 sm:py-12 md:py-14 lg:py-16 px-4 sm:px-6 lg:px-8 bg-gray-50" aria-labelledby="service-management-heading">
    <div class="max-w-7xl mx-auto">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-[#198fd9] to-[#1a7fc7] rounded-2xl text-white mb-6 shadow-lg" aria-hidden="true">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                    </svg>
                </div>
                <h2 id="service-management-heading" class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    Service Management
                </h2>
                <p class="text-lg text-gray-700 mb-4">
                    Our Service Management solutions focus on optimizing your internal processes to maximize efficiency and effectiveness. We work directly with your teams to understand current workflows and identify opportunities for improvement.
                </p>
                <p class="text-lg text-gray-700 mb-6">
                    Through a collaborative approach, we help you design and implement streamlined processes that reduce waste, improve quality, and enhance customer satisfaction.
                </p>
            </div>
            <div class="bg-gray-50 rounded-lg p-6 sm:p-7 md:p-8">
                <h3 class="text-xl font-bold text-gray-900 mb-4">Key Benefits</h3>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Process optimization and standardization</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Improved operational efficiency</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Enhanced service quality and consistency</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Cost reduction through waste elimination</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Project Management Section -->
<section id="project-management" class="py-8 sm:py-12 md:py-14 lg:py-16 px-4 sm:px-6 lg:px-8 bg-white" aria-labelledby="project-management-heading">
    <div class="max-w-7xl mx-auto">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="order-2 md:order-1 bg-white rounded-lg p-6 sm:p-7 md:p-8">
                <h3 class="text-xl font-bold text-gray-900 mb-4">What We Deliver</h3>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Comprehensive risk assessment and mitigation</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Detailed project planning and scheduling</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Stakeholder management and communication</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Budget control and resource optimization</span>
                    </li>
                </ul>
            </div>
            <div class="order-1 md:order-2">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-[#0f6ba8] to-[#1a7fc7] rounded-2xl text-white mb-6 shadow-lg" aria-hidden="true">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <h2 id="project-management-heading" class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    Project Management
                </h2>
                <p class="text-lg text-gray-700 mb-4">
                    Complex projects require experienced oversight to ensure successful delivery. Our project management services provide the expertise and structure needed to keep your initiatives on track.
                </p>
                <p class="text-lg text-gray-700 mb-6">
                    We specialise in risk mitigation, ensuring potential issues are identified early and addressed proactively, helping you deliver on time and within budget.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Business Change Section -->
<section id="business-change" class="py-16 px-4 sm:px-6 lg:px-8 bg-gray-50" aria-labelledby="business-change-heading">
    <div class="max-w-7xl mx-auto">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-[#198fd9] to-[#1a7fc7] rounded-2xl text-white mb-6 shadow-lg" aria-hidden="true">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                    </svg>
                </div>
                <h2 id="business-change-heading" class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    Business Change
                </h2>
                <p class="text-lg text-gray-700 mb-4">
                    Organizational transformation can be challenging, but with the right support, it can also be incredibly rewarding. Our Business Change services provide leadership and guidance throughout your transformation journey.
                </p>
                <p class="text-lg text-gray-700 mb-6">
                    We help you navigate change management challenges, engage stakeholders, and build the organizational capabilities needed for long-term success.
                </p>
            </div>
            <div class="bg-gray-50 rounded-lg p-6 sm:p-7 md:p-8">
                <h3 class="text-xl font-bold text-gray-900 mb-4">Our Approach Includes</h3>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Change impact assessment and planning</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Stakeholder engagement strategies</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Communication and training programs</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700">Leadership coaching and support</span>
                    </li>
                </ul>
            </div>
        </div>
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
        <x-badge.breadcrumb class="mb-6 text-green-400">
            <svg class="w-4 h-4 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
            </svg>
            Let's Work Together
        </x-badge.breadcrumb>

        <h2 id="cta-heading" class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-6 leading-tight">
            Ready to Get Started?
        </h2>
        <p class="text-base sm:text-lg md:text-xl lg:text-2xl mb-12 text-gray-100 max-w-2xl mx-auto leading-relaxed">
            Let's discuss which solution is right for your organisation and how we can help you achieve your goals.
        </p>

        <a href="{{ route('get-started') }}" class="group relative inline-flex items-center justify-center bg-white text-[#198fd9] px-10 py-5 rounded-xl text-lg font-semibold shadow-2xl hover:shadow-3xl transform hover:-translate-y-1 transition-all duration-200 overflow-hidden">
            <!-- Shimmer effect -->
            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-gray-100 to-transparent opacity-0 group-hover:opacity-100 transform -skew-x-12 group-hover:translate-x-full transition-all duration-700" aria-hidden="true"></div>
            <span class="relative z-10 flex items-center">
                Contact Us Today
                <svg class="ml-2 w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </span>
        </a>

        <!-- Trust indicator -->
        <div class="mt-12 flex items-center justify-center text-gray-200">
            <x-trust-indicator>No commitment required • Free initial consultation</x-trust-indicator>
        </div>
    </div>
</section>
@endsection
