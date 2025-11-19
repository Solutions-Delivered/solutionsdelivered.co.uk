@extends('layouts.app')

@section('title', 'About Us - Solutions Delivered')
@section('meta_description', 'Learn about Solutions Delivered, a UK-based consultancy specialising in tailored business solutions for process design, project management, and organisational change.')

@section('content')
<!-- Page Header -->
<section class="relative overflow-hidden bg-gradient-to-br from-[#198fd9] via-[#1a7fc7] to-[#0f6ba8] text-white py-20 px-4 sm:px-6 lg:px-8">
    <!-- Decorative background elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none" aria-hidden="true">
        <div class="absolute top-10 right-20 w-72 h-72 bg-white opacity-10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-10 left-10 w-96 h-96 bg-white opacity-5 rounded-full blur-3xl"></div>
        <div class="absolute inset-0 bg-white opacity-5 transform -skew-y-3 origin-top-right"></div>
    </div>

    <div class="relative max-w-7xl mx-auto">
        <!-- Breadcrumb/tag -->
        <x-badge.breadcrumb class="mb-6">
            <x-slot:icon>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </x-slot:icon>
            About Us
        </x-badge.breadcrumb>

        <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
            About
            <span class="block text-transparent bg-clip-text bg-gradient-to-r from-white via-gray-100 to-gray-200 mt-1">
                Solutions Delivered
            </span>
        </h1>

        <p class="text-xl md:text-2xl max-w-3xl text-gray-100 leading-relaxed">
            Your trusted partner in delivering tailored business solutions that drive real results.
        </p>
    </div>
</section>

<!-- Mission Section -->
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-white" aria-labelledby="mission-heading">
    <div class="max-w-4xl mx-auto">
        <h2 id="mission-heading" class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Our Mission</h2>
        <p class="text-lg text-gray-700 mb-4">
            At Solutions Delivered, we believe that every organisation is unique, and so are its challenges. Our mission is to provide tailored business solutions that align with your specific needs, helping you achieve sustainable growth and operational excellence.
        </p>
        <p class="text-lg text-gray-700 mb-4">
            We focus on three core areas: Service Management, Project Management, and Business Change. Through these disciplines, we help organisations optimise their processes, deliver complex projects successfully, and navigate transformational change with confidence.
        </p>
    </div>
</section>

<!-- What Sets Us Apart -->
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-gray-50" aria-labelledby="approach-heading">
    <div class="max-w-7xl mx-auto">
        <h2 id="approach-heading" class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-12">
            What Sets Us Apart
        </h2>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-lg p-8 shadow-md">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Tailored Solutions</h3>
                <p class="text-gray-700">
                    We don't believe in one-size-fits-all approaches. Every solution we deliver is customised to address your specific business context, challenges, and objectives.
                </p>
            </div>

            <div class="bg-white rounded-lg p-8 shadow-md">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Experienced Team</h3>
                <p class="text-gray-700">
                    Our consultants bring years of real-world experience across various industries, ensuring practical, implementable solutions that drive results.
                </p>
            </div>

            <div class="bg-white rounded-lg p-8 shadow-md">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Collaborative Approach</h3>
                <p class="text-gray-700">
                    We work directly with your teams, fostering knowledge transfer and building internal capabilities that last beyond our engagement.
                </p>
            </div>

            <div class="bg-white rounded-lg p-8 shadow-md">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Results-Driven</h3>
                <p class="text-gray-700">
                    Our focus is on delivering measurable outcomes that contribute to your bottom line and long-term success.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Our Values -->
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-white" aria-labelledby="values-heading">
    <div class="max-w-7xl mx-auto">
        <h2 id="values-heading" class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-12">
            Our Core Values
        </h2>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-[#198fd9] text-white rounded-full mb-4" aria-hidden="true">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Integrity</h3>
                <p class="text-gray-700">
                    We operate with transparency and honesty in all our engagements.
                </p>
            </div>

            <div class="text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-[#0f6ba8] text-white rounded-full mb-4" aria-hidden="true">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Collaboration</h3>
                <p class="text-gray-700">
                    We work as partners with our clients, not just consultants.
                </p>
            </div>

            <div class="text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-[#198fd9] text-white rounded-full mb-4" aria-hidden="true">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Excellence</h3>
                <p class="text-gray-700">
                    We strive for the highest quality in everything we deliver.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="relative overflow-hidden py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-[#198fd9] via-[#1a7fc7] to-[#0f6ba8] text-white" aria-labelledby="cta-heading">
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
            Ready to Get Started?
        </x-badge.breadcrumb>

        <h2 id="cta-heading" class="text-4xl md:text-5xl font-bold mb-6 leading-tight">
            Want to Learn More?
        </h2>
        <p class="text-xl md:text-2xl mb-12 text-gray-100 max-w-2xl mx-auto leading-relaxed">
            Discover how our solutions can help transform your organisation and drive sustainable growth.
        </p>

        <div class="flex flex-col sm:flex-row gap-6 justify-center">
            <a href="{{ route('solutions') }}" class="group relative inline-flex items-center justify-center bg-white text-[#198fd9] px-10 py-5 rounded-xl text-lg font-semibold shadow-2xl hover:shadow-3xl transform hover:-translate-y-1 transition-all duration-200 overflow-hidden">
                <!-- Shimmer effect -->
                <div class="absolute inset-0 bg-gradient-to-r from-transparent via-gray-100 to-transparent opacity-0 group-hover:opacity-100 transform -skew-x-12 group-hover:translate-x-full transition-all duration-700" aria-hidden="true"></div>
                <span class="relative z-10 flex items-center">
                    Explore Solutions
                    <svg class="ml-2 w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </span>
            </a>

            <a href="{{ route('get-started') }}" class="group relative inline-flex items-center justify-center bg-[#0f6ba8] text-white border-2 border-white/30 hover:border-white/50 px-10 py-5 rounded-xl text-lg font-semibold shadow-xl hover:shadow-2xl hover:bg-[#0d5a8f] transform hover:-translate-y-1 transition-all duration-200">
                <span class="flex items-center">
                    Get Started Today
                    <svg class="ml-2 w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </span>
            </a>
        </div>

        <!-- Trust indicator -->
        <div class="mt-12 flex items-center justify-center text-gray-200">
            <x-trust-indicator>No commitment required • Free initial consultation</x-trust-indicator>
        </div>
    </div>
</section>
@endsection
