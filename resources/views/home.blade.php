@extends('layouts.app')

@section('title', 'Solutions Delivered - Delivering Solutions is in Our DNA')
@section('meta_description', 'UK-based consultancy offering tailored business solutions for process design, project management, and organizational change.')

@section('content')
<!-- Hero Section -->
<section class="relative overflow-hidden min-h-[600px]" aria-labelledby="hero-heading">
    <!-- Background with gradient and decorative elements -->
    <div class="absolute inset-0 bg-gradient-to-br from-[#198fd9] via-[#1a7fc7] to-[#0f6ba8]">
        <!-- Diagonal overlay for visual interest -->
        <div class="absolute inset-0 bg-white opacity-5 transform -skew-y-6 origin-top-left"></div>

        <!-- Decorative circles/blurs for depth -->
        <div class="absolute top-20 right-20 w-64 h-64 bg-white opacity-10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-10 left-10 w-96 h-96 bg-white opacity-10 rounded-full blur-3xl"></div>
    </div>

    <!-- Content -->
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
        <div class="lg:grid lg:grid-cols-2 lg:gap-12 items-center">
            <div class="text-white">
                <!-- Badge/tag element -->
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 text-sm font-medium mb-6">
                    <span class="w-2 h-2 bg-green-400 rounded-full mr-2 animate-pulse" aria-hidden="true"></span>
                    UK-Based IT Consultancy
                </div>

                <h1 id="hero-heading" class="text-5xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
                    Delivering Solutions
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-white to-gray-200 mt-2">
                        is in Our DNA
                    </span>
                </h1>

                <p class="text-xl md:text-2xl mb-8 text-gray-100 max-w-2xl">
                    Tailored IT solutions for service management, web development, and business transformation
                </p>

                <!-- Enhanced CTA group -->
                <div class="flex flex-col sm:flex-row gap-4 mb-12">
                    <a href="{{ route('get-started') }}" class="group inline-flex items-center justify-center px-8 py-4 bg-white text-[#198fd9] rounded-lg font-semibold shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-200">
                        Get Started
                        <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                    <a href="{{ route('solutions') }}" class="inline-flex items-center justify-center px-8 py-4 bg-white/10 backdrop-blur-sm text-white border-2 border-white/20 rounded-lg font-semibold hover:bg-white/20 transition-all duration-200">
                        View Our Solutions
                    </a>
                </div>

                <!-- Trust indicators -->
                <div class="flex flex-wrap items-center gap-6 text-sm text-gray-200">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-green-400 mr-2" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                        </svg>
                        <span>WCAG 2.2 Compliant</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-green-400 mr-2" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                        </svg>
                        <span>Direct Team Collaboration</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-green-400 mr-2" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                        </svg>
                        <span>No-Bloat Philosophy</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Decorative wave divider at bottom -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg class="w-full h-16 text-white" preserveAspectRatio="none" viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path fill="currentColor" d="M0,0 C300,80 600,80 900,40 C1050,20 1150,0 1200,0 L1200,120 L0,120 Z"/>
        </svg>
    </div>
</section>

<!-- Services Overview Section -->
<section class="py-20 px-4 sm:px-6 lg:px-8 bg-white" aria-labelledby="services-heading">
    <div class="max-w-7xl mx-auto">
        <!-- Eyebrow label + heading -->
        <div class="text-center mb-16">
            <p class="text-sm font-semibold text-[#198fd9] tracking-wider uppercase mb-3">What We Offer</p>
            <h2 id="services-heading" class="text-4xl md:text-5xl font-bold text-gray-900">
                Our Core Services
            </h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Web Development -->
            <article class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-l-4 border-[#198fd9] hover:border-[#0f6ba8] hover:-translate-y-2">
                <!-- Gradient icon background -->
                <div class="relative inline-flex items-center justify-center w-14 h-14 rounded-xl bg-gradient-to-br from-[#198fd9] to-[#1a7fc7] text-white mb-6 shadow-lg group-hover:scale-110 transition-transform" aria-hidden="true">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                    </svg>
                    <!-- Decorative glow -->
                    <div class="absolute -inset-1 bg-gradient-to-br from-[#198fd9] to-[#1a7fc7] rounded-xl opacity-20 blur-sm group-hover:opacity-40 transition-opacity"></div>
                </div>

                <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-[#198fd9] transition-colors">
                    Web Development
                </h3>

                <p class="text-gray-600 mb-6 leading-relaxed">
                    Bespoke Laravel-based web systems built for accessibility, efficiency, and value. No bloat, just solutions.
                </p>

                <!-- Animated link -->
                <a href="{{ route('solutions') }}#web-development" class="inline-flex items-center text-[#198fd9] font-semibold group/link">
                    Learn more
                    <svg class="ml-2 w-5 h-5 transform group-hover/link:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>

                <!-- Decorative corner element -->
                <div class="absolute top-0 right-0 w-20 h-20 opacity-5 group-hover:opacity-10 transition-opacity" aria-hidden="true">
                    <svg viewBox="0 0 100 100">
                        <path d="M0,0 L100,0 L100,100 Z" fill="currentColor" class="text-[#198fd9]"/>
                    </svg>
                </div>
            </article>

            <!-- Service Management -->
            <article class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-l-4 border-[#0f6ba8] hover:border-[#198fd9] hover:-translate-y-2">
                <div class="relative inline-flex items-center justify-center w-14 h-14 rounded-xl bg-gradient-to-br from-[#0f6ba8] to-[#198fd9] text-white mb-6 shadow-lg group-hover:scale-110 transition-transform" aria-hidden="true">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                    </svg>
                    <div class="absolute -inset-1 bg-gradient-to-br from-[#0f6ba8] to-[#198fd9] rounded-xl opacity-20 blur-sm group-hover:opacity-40 transition-opacity"></div>
                </div>

                <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-[#198fd9] transition-colors">
                    Service Management
                </h3>

                <p class="text-gray-600 mb-6 leading-relaxed">
                    Customised internal process optimisation working directly with client teams to enhance efficiency and effectiveness.
                </p>

                <a href="{{ route('solutions') }}#service-management" class="inline-flex items-center text-[#198fd9] font-semibold group/link">
                    Learn more
                    <svg class="ml-2 w-5 h-5 transform group-hover/link:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>

                <div class="absolute top-0 right-0 w-20 h-20 opacity-5 group-hover:opacity-10 transition-opacity" aria-hidden="true">
                    <svg viewBox="0 0 100 100">
                        <path d="M0,0 L100,0 L100,100 Z" fill="currentColor" class="text-[#0f6ba8]"/>
                    </svg>
                </div>
            </article>

            <!-- Project Management -->
            <article class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-l-4 border-[#198fd9] hover:border-[#0f6ba8] hover:-translate-y-2">
                <div class="relative inline-flex items-center justify-center w-14 h-14 rounded-xl bg-gradient-to-br from-[#198fd9] to-[#1a7fc7] text-white mb-6 shadow-lg group-hover:scale-110 transition-transform" aria-hidden="true">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                    <div class="absolute -inset-1 bg-gradient-to-br from-[#198fd9] to-[#1a7fc7] rounded-xl opacity-20 blur-sm group-hover:opacity-40 transition-opacity"></div>
                </div>

                <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-[#198fd9] transition-colors">
                    Project Management
                </h3>

                <p class="text-gray-600 mb-6 leading-relaxed">
                    Risk mitigation and delivery oversight for complex projects, ensuring successful outcomes on time and within budget.
                </p>

                <a href="{{ route('solutions') }}#project-management" class="inline-flex items-center text-[#198fd9] font-semibold group/link">
                    Learn more
                    <svg class="ml-2 w-5 h-5 transform group-hover/link:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>

                <div class="absolute top-0 right-0 w-20 h-20 opacity-5 group-hover:opacity-10 transition-opacity" aria-hidden="true">
                    <svg viewBox="0 0 100 100">
                        <path d="M0,0 L100,0 L100,100 Z" fill="currentColor" class="text-[#198fd9]"/>
                    </svg>
                </div>
            </article>

            <!-- Business Change -->
            <article class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-l-4 border-[#0f6ba8] hover:border-[#198fd9] hover:-translate-y-2">
                <div class="relative inline-flex items-center justify-center w-14 h-14 rounded-xl bg-gradient-to-br from-[#0f6ba8] to-[#198fd9] text-white mb-6 shadow-lg group-hover:scale-110 transition-transform" aria-hidden="true">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                    </svg>
                    <div class="absolute -inset-1 bg-gradient-to-br from-[#0f6ba8] to-[#198fd9] rounded-xl opacity-20 blur-sm group-hover:opacity-40 transition-opacity"></div>
                </div>

                <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-[#198fd9] transition-colors">
                    Business Change
                </h3>

                <p class="text-gray-600 mb-6 leading-relaxed">
                    Leadership support for organisational transformation initiatives, guiding teams through successful change management.
                </p>

                <a href="{{ route('solutions') }}#business-change" class="inline-flex items-center text-[#198fd9] font-semibold group/link">
                    Learn more
                    <svg class="ml-2 w-5 h-5 transform group-hover/link:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>

                <div class="absolute top-0 right-0 w-20 h-20 opacity-5 group-hover:opacity-10 transition-opacity" aria-hidden="true">
                    <svg viewBox="0 0 100 100">
                        <path d="M0,0 L100,0 L100,100 Z" fill="currentColor" class="text-[#0f6ba8]"/>
                    </svg>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- Value Propositions Section -->
<section class="py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-50 via-white to-gray-50" aria-labelledby="values-heading">
    <div class="max-w-7xl mx-auto">
        <!-- Section heading with eyebrow -->
        <div class="text-center mb-16">
            <p class="text-sm font-semibold text-[#198fd9] tracking-wider uppercase mb-3">How We Work</p>
            <h2 id="values-heading" class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Our Approach
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                We combine technical expertise with practical delivery to create lasting value
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Process Design -->
            <div class="group text-center">
                <div class="relative inline-block mb-6">
                    <div class="w-24 h-24 bg-gradient-to-br from-[#198fd9] to-[#1a7fc7] rounded-2xl flex items-center justify-center shadow-xl group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                    </div>
                    <div class="absolute -inset-2 border-2 border-[#198fd9] opacity-0 group-hover:opacity-20 rounded-2xl transition-opacity" aria-hidden="true"></div>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Process Design</h3>
                <p class="text-gray-600 leading-relaxed">
                    Streamlined workflows tailored to your business needs, eliminating bottlenecks and improving efficiency
                </p>
            </div>

            <!-- Team Development -->
            <div class="group text-center">
                <div class="relative inline-block mb-6">
                    <div class="w-24 h-24 bg-gradient-to-br from-[#0f6ba8] to-[#198fd9] rounded-2xl flex items-center justify-center shadow-xl group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <div class="absolute -inset-2 border-2 border-[#0f6ba8] opacity-0 group-hover:opacity-20 rounded-2xl transition-opacity" aria-hidden="true"></div>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Team Development</h3>
                <p class="text-gray-600 leading-relaxed">
                    Empowering teams to achieve their full potential through direct collaboration and knowledge transfer
                </p>
            </div>

            <!-- Trusted Delivery -->
            <div class="group text-center">
                <div class="relative inline-block mb-6">
                    <div class="w-24 h-24 bg-gradient-to-br from-[#198fd9] to-[#1a7fc7] rounded-2xl flex items-center justify-center shadow-xl group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div class="absolute -inset-2 border-2 border-[#198fd9] opacity-0 group-hover:opacity-20 rounded-2xl transition-opacity" aria-hidden="true"></div>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Trusted Delivery</h3>
                <p class="text-gray-600 leading-relaxed">
                    Reliable execution you can count on, with transparent communication and realistic expectations
                </p>
            </div>

            <!-- Online Brand Presence -->
            <div class="group text-center">
                <div class="relative inline-block mb-6">
                    <div class="w-24 h-24 bg-gradient-to-br from-[#0f6ba8] to-[#198fd9] rounded-2xl flex items-center justify-center shadow-xl group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                        </svg>
                    </div>
                    <div class="absolute -inset-2 border-2 border-[#0f6ba8] opacity-0 group-hover:opacity-20 rounded-2xl transition-opacity" aria-hidden="true"></div>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Digital Presence</h3>
                <p class="text-gray-600 leading-relaxed">
                    Building strong, accessible online identities that work for everyone
                </p>
            </div>

            <!-- Delivery Management -->
            <div class="group text-center">
                <div class="relative inline-block mb-6">
                    <div class="w-24 h-24 bg-gradient-to-br from-[#198fd9] to-[#1a7fc7] rounded-2xl flex items-center justify-center shadow-xl group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                        </svg>
                    </div>
                    <div class="absolute -inset-2 border-2 border-[#198fd9] opacity-0 group-hover:opacity-20 rounded-2xl transition-opacity" aria-hidden="true"></div>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Delivery Management</h3>
                <p class="text-gray-600 leading-relaxed">
                    Expert oversight from start to finish, keeping projects on track and within budget
                </p>
            </div>

            <!-- Quality Assurance -->
            <div class="group text-center">
                <div class="relative inline-block mb-6">
                    <div class="w-24 h-24 bg-gradient-to-br from-[#0f6ba8] to-[#198fd9] rounded-2xl flex items-center justify-center shadow-xl group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                        </svg>
                    </div>
                    <div class="absolute -inset-2 border-2 border-[#0f6ba8] opacity-0 group-hover:opacity-20 rounded-2xl transition-opacity" aria-hidden="true"></div>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Quality Assurance</h3>
                <p class="text-gray-600 leading-relaxed">
                    Excellence in every deliverable, with rigorous testing and attention to detail
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="relative py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-[#198fd9] via-[#1a7fc7] to-[#0f6ba8] text-white overflow-hidden" aria-labelledby="cta-heading">
    <!-- Decorative elements -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-white opacity-5 rounded-full blur-3xl" aria-hidden="true"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 bg-white opacity-5 rounded-full blur-3xl" aria-hidden="true"></div>

    <div class="relative max-w-4xl mx-auto text-center">
        <h2 id="cta-heading" class="text-4xl md:text-5xl font-bold mb-6">
            Ready to Transform Your Business?
        </h2>
        <p class="text-xl md:text-2xl mb-12 text-gray-100">
            Let's discuss how we can help deliver tailored solutions for your unique challenges
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <!-- Primary CTA with shimmer effect -->
            <a href="{{ route('get-started') }}" class="group relative inline-flex items-center justify-center px-10 py-5 bg-white text-[#198fd9] rounded-xl font-semibold text-lg shadow-2xl hover:shadow-3xl transform hover:-translate-y-1 transition-all duration-200 overflow-hidden">
                <!-- Shimmer effect -->
                <div class="absolute inset-0 bg-gradient-to-r from-transparent via-gray-100 to-transparent opacity-0 group-hover:opacity-100 transform -skew-x-12 group-hover:translate-x-full transition-all duration-700" aria-hidden="true"></div>

                <span class="relative z-10">Get Started Today</span>

                <svg class="relative z-10 ml-3 w-5 h-5 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
            </a>

            <!-- Secondary CTA -->
            <a href="{{ route('solutions') }}" class="inline-flex items-center justify-center px-10 py-5 bg-white/10 backdrop-blur-sm text-white border-2 border-white/30 rounded-xl font-semibold text-lg hover:bg-white/20 transition-all duration-200">
                View Our Solutions
            </a>
        </div>
    </div>
</section>
@endsection
