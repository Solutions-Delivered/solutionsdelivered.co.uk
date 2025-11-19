@extends('layouts.app')

@section('title', 'How We Work - Solutions Delivered')
@section('meta_description', 'Learn about our collaborative approach, engagement process, and what to expect when working with Solutions Delivered.')

@section('content')
<!-- Page Header -->
<section class="bg-gradient-to-r from-[#198fd9] to-[#D65FCB] text-white py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">How We Work</h1>
        <p class="text-xl md:text-2xl max-w-3xl">
            A transparent, collaborative approach to delivering your solutions
        </p>
    </div>
</section>

<!-- Our Approach Section -->
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-white" aria-labelledby="approach-heading">
    <div class="max-w-4xl mx-auto">
        <h2 id="approach-heading" class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
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
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-gray-50" aria-labelledby="process-heading">
    <div class="max-w-7xl mx-auto">
        <h2 id="process-heading" class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-12">
            Our Process
        </h2>

        <div class="grid md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-[#198fd9] text-white rounded-full mb-4 text-2xl font-bold" aria-hidden="true">
                    1
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Initial Discussion</h3>
                <p class="text-gray-700">
                    We start with a conversation to understand your needs, challenges, and objectives. No sales pitch—just genuine discovery.
                </p>
            </div>

            <div class="text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-[#D65FCB] text-white rounded-full mb-4 text-2xl font-bold" aria-hidden="true">
                    2
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Proposal & Planning</h3>
                <p class="text-gray-700">
                    We provide a clear proposal outlining scope, approach, timeline, and costs. No hidden surprises.
                </p>
            </div>

            <div class="text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-[#198fd9] text-white rounded-full mb-4 text-2xl font-bold" aria-hidden="true">
                    3
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Collaborative Delivery</h3>
                <p class="text-gray-700">
                    Regular check-ins, continuous feedback, and iterative development ensure we stay aligned with your vision.
                </p>
            </div>

            <div class="text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-[#D65FCB] text-white rounded-full mb-4 text-2xl font-bold" aria-hidden="true">
                    4
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Handover & Support</h3>
                <p class="text-gray-700">
                    Comprehensive handover with documentation and ongoing support options to ensure long-term success.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- What to Expect Section -->
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-white" aria-labelledby="expect-heading">
    <div class="max-w-7xl mx-auto">
        <h2 id="expect-heading" class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-12">
            What to Expect
        </h2>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-gray-50 rounded-lg p-8">
                <h3 class="text-xl font-bold text-gray-900 mb-4">Communication</h3>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#D65FCB] mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Direct access—no account managers or layers of bureaucracy</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#D65FCB] mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Response within 24 hours during working days</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#D65FCB] mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Regular progress updates and check-ins</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#D65FCB] mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Clear, jargon-free explanations</span>
                    </li>
                </ul>
            </div>

            <div class="bg-gray-50 rounded-lg p-8">
                <h3 class="text-xl font-bold text-gray-900 mb-4">Delivery</h3>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#D65FCB] mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Quality over speed—we won't rush to meet arbitrary deadlines</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#D65FCB] mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Realistic timelines set upfront</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#D65FCB] mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Iterative delivery with opportunities for feedback</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#D65FCB] mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Comprehensive documentation and handover</span>
                    </li>
                </ul>
            </div>

            <div class="bg-gray-50 rounded-lg p-8">
                <h3 class="text-xl font-bold text-gray-900 mb-4">Pricing</h3>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#D65FCB] mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Fixed-price for defined scope or day-rate for flexible work</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#D65FCB] mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Transparent pricing with no hidden costs</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#D65FCB] mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Flexible payment terms for ongoing engagements</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#D65FCB] mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Value-focused—competitive rates without compromising quality</span>
                    </li>
                </ul>
            </div>

            <div class="bg-gray-50 rounded-lg p-8">
                <h3 class="text-xl font-bold text-gray-900 mb-4">Working Arrangements</h3>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#D65FCB] mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Remote-first, UK-based</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#D65FCB] mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Flexible scheduling to accommodate your availability</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#D65FCB] mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>On-site visits available for local clients when needed</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#D65FCB] mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
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
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-gray-50" aria-labelledby="fit-heading">
    <div class="max-w-4xl mx-auto">
        <h2 id="fit-heading" class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
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
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-[#198fd9] text-white" aria-labelledby="cta-heading">
    <div class="max-w-4xl mx-auto text-center">
        <h2 id="cta-heading" class="text-3xl md:text-4xl font-bold mb-6">
            Ready to Get Started?
        </h2>
        <p class="text-xl mb-8">
            Let's have an initial conversation about your needs—no obligation, no pressure.
        </p>
        <a href="{{ route('get-started') }}" class="inline-block bg-white text-[#198fd9] hover:bg-gray-100 px-8 py-4 rounded-md text-lg font-semibold transition-colors duration-200 shadow-lg">
            Get in Touch
        </a>
    </div>
</section>
@endsection
