@extends('layouts.app')

@section('title', 'About Us - Solutions Delivered')
@section('meta_description', 'Learn about Solutions Delivered, a UK-based consultancy specialising in tailored business solutions for process design, project management, and organisational change.')

@section('content')
<!-- Page Header -->
<section class="bg-gradient-to-r from-[#198bd9] to-[#65bd7d] text-white py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">About Solutions Delivered</h1>
        <p class="text-xl md:text-2xl max-w-3xl">
            Your trusted partner in delivering tailored business solutions
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
                <div class="inline-flex items-center justify-center w-16 h-16 bg-[#198bd9] text-white rounded-full mb-4" aria-hidden="true">
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
                <div class="inline-flex items-center justify-center w-16 h-16 bg-[#65bd7d] text-white rounded-full mb-4" aria-hidden="true">
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
                <div class="inline-flex items-center justify-center w-16 h-16 bg-[#198bd9] text-white rounded-full mb-4" aria-hidden="true">
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
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-[#198bd9] text-white" aria-labelledby="cta-heading">
    <div class="max-w-4xl mx-auto text-center">
        <h2 id="cta-heading" class="text-3xl md:text-4xl font-bold mb-6">
            Want to Learn More?
        </h2>
        <p class="text-xl mb-8">
            Discover how our solutions can help transform your organisation.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('solutions') }}" class="inline-block bg-white text-[#198bd9] hover:bg-gray-100 px-8 py-4 rounded-md text-lg font-semibold transition-colors duration-200 shadow-lg">
                Explore Solutions
            </a>
            <a href="{{ route('get-started') }}" class="inline-block bg-[#65bd7d] text-white hover:bg-[#4da768] px-8 py-4 rounded-md text-lg font-semibold transition-colors duration-200 shadow-lg">
                Get Started
            </a>
        </div>
    </div>
</section>
@endsection
