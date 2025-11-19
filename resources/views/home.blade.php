@extends('layouts.app')

@section('title', 'Solutions Delivered - Delivering Solutions is in Our DNA')
@section('meta_description', 'UK-based consultancy offering tailored business solutions for process design, project management, and organizational change.')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-[#198bd9] to-[#65bd7d] text-white py-24 px-4 sm:px-6 lg:px-8" aria-labelledby="hero-heading">
    <div class="max-w-7xl mx-auto text-center">
        <h1 id="hero-heading" class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
            Delivering Solutions is in Our DNA
        </h1>
        <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">
            We focus on delivering tailored solutions to our customers' needs
        </p>
        <a href="{{ route('get-started') }}" class="inline-block bg-white text-[#198bd9] hover:bg-gray-100 px-8 py-4 rounded-md text-lg font-semibold transition-colors duration-200 shadow-lg">
            Get Started
        </a>
    </div>
</section>

<!-- Services Overview Section -->
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-white" aria-labelledby="services-heading">
    <div class="max-w-7xl mx-auto">
        <h2 id="services-heading" class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-12">
            Our Core Services
        </h2>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Service Management -->
            <article class="bg-gray-50 rounded-lg p-8 shadow-md hover:shadow-lg transition-shadow duration-200">
                <div class="text-[#198bd9] mb-4" aria-hidden="true">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Service Management</h3>
                <p class="text-gray-700 mb-4">
                    Customized internal process optimization working directly with client teams to enhance efficiency and effectiveness.
                </p>
                <a href="{{ route('solutions') }}" class="text-[#198bd9] hover:text-[#65bd7d] font-medium transition-colors duration-200">
                    Learn more <span aria-hidden="true">→</span>
                </a>
            </article>

            <!-- Project Management -->
            <article class="bg-gray-50 rounded-lg p-8 shadow-md hover:shadow-lg transition-shadow duration-200">
                <div class="text-[#65bd7d] mb-4" aria-hidden="true">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Project Management</h3>
                <p class="text-gray-700 mb-4">
                    Risk mitigation and delivery oversight for complex projects, ensuring successful outcomes on time and within budget.
                </p>
                <a href="{{ route('solutions') }}" class="text-[#198bd9] hover:text-[#65bd7d] font-medium transition-colors duration-200">
                    Learn more <span aria-hidden="true">→</span>
                </a>
            </article>

            <!-- Business Change -->
            <article class="bg-gray-50 rounded-lg p-8 shadow-md hover:shadow-lg transition-shadow duration-200">
                <div class="text-[#198bd9] mb-4" aria-hidden="true">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Business Change</h3>
                <p class="text-gray-700 mb-4">
                    Leadership support for organizational transformation initiatives, guiding teams through successful change management.
                </p>
                <a href="{{ route('solutions') }}" class="text-[#198bd9] hover:text-[#65bd7d] font-medium transition-colors duration-200">
                    Learn more <span aria-hidden="true">→</span>
                </a>
            </article>
        </div>
    </div>
</section>

<!-- Value Propositions Section -->
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-gray-50" aria-labelledby="values-heading">
    <div class="max-w-7xl mx-auto">
        <h2 id="values-heading" class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-12">
            Our Approach
        </h2>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg p-6 shadow-sm">
                <h3 class="text-xl font-bold text-gray-900 mb-2">Process Design</h3>
                <p class="text-gray-700">Streamlined workflows tailored to your business needs</p>
            </div>

            <div class="bg-white rounded-lg p-6 shadow-sm">
                <h3 class="text-xl font-bold text-gray-900 mb-2">Team Development</h3>
                <p class="text-gray-700">Empowering teams to achieve their full potential</p>
            </div>

            <div class="bg-white rounded-lg p-6 shadow-sm">
                <h3 class="text-xl font-bold text-gray-900 mb-2">Trusted Delivery</h3>
                <p class="text-gray-700">Reliable execution you can count on</p>
            </div>

            <div class="bg-white rounded-lg p-6 shadow-sm">
                <h3 class="text-xl font-bold text-gray-900 mb-2">Online Brand Presence</h3>
                <p class="text-gray-700">Building strong digital identities</p>
            </div>

            <div class="bg-white rounded-lg p-6 shadow-sm">
                <h3 class="text-xl font-bold text-gray-900 mb-2">Delivery Management</h3>
                <p class="text-gray-700">Expert oversight from start to finish</p>
            </div>

            <div class="bg-white rounded-lg p-6 shadow-sm">
                <h3 class="text-xl font-bold text-gray-900 mb-2">Quality Assurance</h3>
                <p class="text-gray-700">Excellence in every deliverable</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-[#198bd9] text-white" aria-labelledby="cta-heading">
    <div class="max-w-4xl mx-auto text-center">
        <h2 id="cta-heading" class="text-3xl md:text-4xl font-bold mb-6">
            Ready to Transform Your Business?
        </h2>
        <p class="text-xl mb-8">
            Let's discuss how we can help deliver tailored solutions for your unique challenges.
        </p>
        <a href="{{ route('get-started') }}" class="inline-block bg-white text-[#198bd9] hover:bg-gray-100 px-8 py-4 rounded-md text-lg font-semibold transition-colors duration-200 shadow-lg">
            Get Started Today
        </a>
    </div>
</section>
@endsection
