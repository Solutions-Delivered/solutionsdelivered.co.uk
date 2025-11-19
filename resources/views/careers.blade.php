@extends('layouts.app')

@section('title', 'Careers - Solutions Delivered')
@section('meta_description', 'Join our team of experienced consultants and help deliver tailored business solutions to organizations across the UK.')

@section('content')
<!-- Page Header -->
<section class="relative overflow-hidden bg-gradient-to-br from-[#198fd9] via-[#1a7fc7] to-[#0f6ba8] text-white py-20 px-4 sm:px-6 lg:px-8">
    <!-- Decorative background elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none" aria-hidden="true">
        <div class="absolute top-10 right-10 w-96 h-96 bg-white opacity-10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-10 left-10 w-72 h-72 bg-white opacity-5 rounded-full blur-3xl"></div>
        <div class="absolute inset-0 bg-white opacity-5 transform skew-y-3 origin-bottom-left"></div>
    </div>

    <div class="relative max-w-7xl mx-auto">
        <!-- Breadcrumb badge -->
        <x-badge.breadcrumb class="mb-6">
            <x-slot:icon>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </x-slot:icon>
            Careers
        </x-badge.breadcrumb>

        <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
            Join Our Team at
            <span class="block text-transparent bg-clip-text bg-gradient-to-r from-white via-gray-100 to-gray-200 mt-1">
                Solutions Delivered
            </span>
        </h1>

        <p class="text-xl md:text-2xl max-w-3xl text-gray-100 leading-relaxed">
            Make a real impact on businesses across the UK while growing your career in a supportive, collaborative environment
        </p>
    </div>
</section>

<!-- Why Join Us Section -->
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-white" aria-labelledby="why-join-heading">
    <div class="max-w-7xl mx-auto">
        <h2 id="why-join-heading" class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-12">
            Why Join Solutions Delivered?
        </h2>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-200">
                <div class="w-14 h-14 bg-gradient-to-br from-[#198fd9] to-[#1a7fc7] rounded-xl flex items-center justify-center mb-4 shadow-md" aria-hidden="true">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Challenging Work</h3>
                <p class="text-gray-600 leading-relaxed">
                    Work on diverse projects across multiple industries, solving complex business challenges every day.
                </p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-200">
                <div class="w-14 h-14 bg-gradient-to-br from-[#1a7fc7] to-[#0f6ba8] rounded-xl flex items-center justify-center mb-4 shadow-md" aria-hidden="true">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Continuous Learning</h3>
                <p class="text-gray-600 leading-relaxed">
                    Access to training, certifications, and professional development opportunities to grow your skills.
                </p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-200">
                <div class="w-14 h-14 bg-gradient-to-br from-[#0f6ba8] to-[#198fd9] rounded-xl flex items-center justify-center mb-4 shadow-md" aria-hidden="true">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Collaborative Culture</h3>
                <p class="text-gray-600 leading-relaxed">
                    Work with a talented team of professionals who value collaboration and knowledge sharing.
                </p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-200">
                <div class="w-14 h-14 bg-gradient-to-br from-[#198fd9] to-[#0f6ba8] rounded-xl flex items-center justify-center mb-4 shadow-md" aria-hidden="true">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Meaningful Impact</h3>
                <p class="text-gray-600 leading-relaxed">
                    See the direct impact of your work as you help organizations transform and succeed.
                </p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-200">
                <div class="w-14 h-14 bg-gradient-to-br from-[#1a7fc7] to-[#198fd9] rounded-xl flex items-center justify-center mb-4 shadow-md" aria-hidden="true">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Work-Life Balance</h3>
                <p class="text-gray-600 leading-relaxed">
                    Flexible working arrangements and a culture that respects personal time and well-being.
                </p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-200">
                <div class="w-14 h-14 bg-gradient-to-br from-[#0f6ba8] to-[#1a7fc7] rounded-xl flex items-center justify-center mb-4 shadow-md" aria-hidden="true">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Career Growth</h3>
                <p class="text-gray-600 leading-relaxed">
                    Clear career progression paths with opportunities to advance and take on leadership roles.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- What We Look For Section -->
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-gray-50" aria-labelledby="looking-for-heading">
    <div class="max-w-4xl mx-auto">
        <h2 id="looking-for-heading" class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-12">
            What We Look For
        </h2>

        <div class="space-y-6">
            <div class="bg-white rounded-lg p-6 shadow-md">
                <h3 class="text-xl font-bold text-gray-900 mb-2">Experience and Expertise</h3>
                <p class="text-gray-700">
                    We seek professionals with proven experience in service management, project management, or business change, with a track record of delivering results.
                </p>
            </div>

            <div class="bg-white rounded-lg p-6 shadow-md">
                <h3 class="text-xl font-bold text-gray-900 mb-2">Problem-Solving Skills</h3>
                <p class="text-gray-700">
                    Strong analytical and critical thinking abilities to tackle complex business challenges creatively and effectively.
                </p>
            </div>

            <div class="bg-white rounded-lg p-6 shadow-md">
                <h3 class="text-xl font-bold text-gray-900 mb-2">Communication Excellence</h3>
                <p class="text-gray-700">
                    Excellent written and verbal communication skills to engage with clients and stakeholders at all levels.
                </p>
            </div>

            <div class="bg-white rounded-lg p-6 shadow-md">
                <h3 class="text-xl font-bold text-gray-900 mb-2">Collaborative Mindset</h3>
                <p class="text-gray-700">
                    A team player who values collaboration, knowledge sharing, and building strong relationships with colleagues and clients.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Current Opportunities Section -->
<section class="py-20 px-4 sm:px-6 lg:px-8 bg-white" aria-labelledby="opportunities-heading">
    <div class="max-w-4xl mx-auto text-center">
        <x-badge.breadcrumb class="mb-6">
            <x-slot:icon>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </x-slot:icon>
            Open Positions
        </x-badge.breadcrumb>
        <h2 id="opportunities-heading" class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
            Current Opportunities
        </h2>
        <p class="text-xl text-gray-600 mb-12 leading-relaxed max-w-2xl mx-auto">
            We're always looking for talented individuals to join our team. Even if we don't have an open position that matches your skills right now, we'd love to hear from you.
        </p>
        <a href="{{ route('get-started') }}" class="group relative inline-flex items-center justify-center bg-gradient-to-r from-[#198fd9] to-[#1a7fc7] text-white hover:from-[#1a7fc7] hover:to-[#0f6ba8] px-10 py-4 rounded-xl text-lg font-semibold shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-200">
            <span class="flex items-center">
                Get in Touch
                <svg class="ml-2 w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
            </span>
        </a>
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
        <x-badge.breadcrumb class="mb-6">
            <x-slot:icon>
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
            </x-slot:icon>
            Join Our Team
        </x-badge.breadcrumb>

        <h2 id="cta-heading" class="text-4xl md:text-5xl font-bold mb-6 leading-tight">
            Ready to Make a Difference?
        </h2>
        <p class="text-xl md:text-2xl mb-12 text-gray-100 max-w-2xl mx-auto leading-relaxed">
            Start your journey with Solutions Delivered today and help transform businesses across the UK
        </p>

        <div class="flex flex-col sm:flex-row gap-6 justify-center">
            <a href="{{ route('get-started') }}" class="group relative inline-flex items-center justify-center bg-white text-[#198fd9] px-10 py-5 rounded-xl text-lg font-semibold shadow-2xl hover:shadow-3xl transform hover:-translate-y-1 transition-all duration-200 overflow-hidden">
                <!-- Shimmer effect -->
                <div class="absolute inset-0 bg-gradient-to-r from-transparent via-gray-100 to-transparent opacity-0 group-hover:opacity-100 transform -skew-x-12 group-hover:translate-x-full transition-all duration-700" aria-hidden="true"></div>
                <span class="relative z-10 flex items-center">
                    Contact Us
                    <svg class="ml-2 w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </span>
            </a>
        </div>

        <!-- Trust indicator -->
        <div class="mt-12 flex items-center justify-center">
            <x-trust-indicator>We'd love to hear from you • Flexible working • Career growth opportunities</x-trust-indicator>
        </div>
    </div>
</section>
@endsection
