<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('meta_description', 'Solutions Delivered - Tailored business solutions for process design, project management, and organisational change.')">

    <!-- Theme Color for Browser UI -->
    <meta name="theme-color" content="#198fd9">
    <meta name="msapplication-TileColor" content="#198fd9">

    <title>@yield('title', 'Solutions Delivered - Delivering Solutions is in Our DNA')</title>

    <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Performance Hints -->
    <link rel="preload" href="{{ asset('logo.png') }}" as="image" type="image/png">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="@yield('og_title', 'Solutions Delivered - Delivering Solutions is in Our DNA')">
    <meta property="og:description" content="@yield('og_description', 'Solutions Delivered - Tailored business solutions for process design, project management, and organisational change.')">
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('og-image.png') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Solutions Delivered - Delivering Solutions is in Our DNA">
    <meta property="og:site_name" content="Solutions Delivered">
    <meta property="og:locale" content="en_GB">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', 'Solutions Delivered - Delivering Solutions is in Our DNA')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Solutions Delivered - Tailored business solutions for process design, project management, and organisational change.')">
    <meta name="twitter:image" content="{{ asset('og-image.png') }}">
    <meta name="twitter:image:alt" content="Solutions Delivered - Delivering Solutions is in Our DNA">

    <!-- Schema.org JSON-LD Markup -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@type": "Organization",
        "name": "Solutions Delivered",
        "url": "{{ url('/') }}",
        "logo": "{{ url('/') }}/logo.png",
        "description": "Solutions Delivered provides tailored business solutions for process design, project management, and organizational change.",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "GB"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "Customer Service",
            "url": "{{ route('get-started') }}"
        },
        "sameAs": []
    }
    </script>

    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Solutions Delivered",
        "url": "{{ url('/') }}",
        "description": "Professional IT consultancy specialising in web development, service management, project management, and business change.",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "GB"
        },
        "priceRange": "££"
    }
    </script>

    @stack('schema')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="antialiased bg-white text-gray-900">
    <!-- Skip to main content link for keyboard navigation (WCAG 2.4.1) -->
    <a href="#main-content" class="skip-link">Skip to main content</a>

    <!-- Header with navigation -->
    <header class="bg-white shadow-sm sticky top-0 z-50" role="banner">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" role="navigation" aria-label="Main navigation">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}" class="block transition-opacity duration-200 hover:opacity-80" aria-label="Solutions Delivered Home">
                        <img src="{{ asset('logo.png') }}"
                             srcset="{{ asset('logo.png') }} 1x, {{ asset('logo@2x.png') }} 2x"
                             alt="Solutions Delivered Logo"
                             class="h-10 w-auto"
                             style="max-height: 2.5rem;">
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex md:items-center md:space-x-6">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-[#198fd9] px-3 py-2 text-sm font-medium transition-colors duration-200 {{ request()->routeIs('home') ? 'border-b-2 border-[#198fd9]' : '' }}">
                        Home
                    </a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-[#198fd9] px-3 py-2 text-sm font-medium transition-colors duration-200 {{ request()->routeIs('about') ? 'border-b-2 border-[#198fd9]' : '' }}">
                        About
                    </a>
                    <a href="{{ route('solutions') }}" class="text-gray-700 hover:text-[#198fd9] px-3 py-2 text-sm font-medium transition-colors duration-200 {{ request()->routeIs('solutions') ? 'border-b-2 border-[#198fd9]' : '' }}">
                        Solutions
                    </a>
                    <a href="{{ route('how-we-work') }}" class="text-gray-700 hover:text-[#198fd9] px-3 py-2 text-sm font-medium transition-colors duration-200 {{ request()->routeIs('how-we-work') ? 'border-b-2 border-[#198fd9]' : '' }}">
                        How We Work
                    </a>
                    <a href="{{ route('careers') }}" class="text-gray-700 hover:text-[#198fd9] px-3 py-2 text-sm font-medium transition-colors duration-200 {{ request()->routeIs('careers') ? 'border-b-2 border-[#198fd9]' : '' }}">
                        Careers
                    </a>
                    <a href="{{ route('get-started') }}" class="bg-[#198fd9] text-white hover:bg-[#0f6ba8] px-6 py-2 rounded-md text-sm font-medium transition-colors duration-200">
                        Get Started
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden" x-data="{ open: false }">
                    <button @click="open = !open" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-[#198fd9] hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-[#198fd9]" aria-expanded="false" :aria-expanded="open.toString()" aria-label="Toggle navigation menu">
                        <span class="sr-only">Open main menu</span>
                        <!-- Menu icon -->
                        <svg class="h-6 w-6" :class="{ 'hidden': open, 'block': !open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <!-- Close icon -->
                        <svg class="h-6 w-6" :class="{ 'block': open, 'hidden': !open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>

                    <!-- Mobile menu -->
                    <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-100 transform" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-75 transform" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute top-16 inset-x-0 p-2 transition transform origin-top-right md:hidden">
                        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
                            <div class="pt-5 pb-6 px-5">
                                <div class="mt-6">
                                    <nav class="grid gap-y-8">
                                        <a href="{{ route('home') }}" class="text-base font-medium text-gray-700 hover:text-[#198fd9]">Home</a>
                                        <a href="{{ route('about') }}" class="text-base font-medium text-gray-700 hover:text-[#198fd9]">About</a>
                                        <a href="{{ route('solutions') }}" class="text-base font-medium text-gray-700 hover:text-[#198fd9]">Solutions</a>
                                        <a href="{{ route('how-we-work') }}" class="text-base font-medium text-gray-700 hover:text-[#198fd9]">How We Work</a>
                                        <a href="{{ route('careers') }}" class="text-base font-medium text-gray-700 hover:text-[#198fd9]">Careers</a>
                                        <a href="{{ route('get-started') }}" class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-[#198fd9] hover:bg-[#0f6ba8]">Get Started</a>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main content -->
    <main id="main-content" role="main" tabindex="-1">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="relative overflow-hidden bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white mt-20" role="contentinfo">
        <!-- Decorative background elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none" aria-hidden="true">
            <div class="absolute -top-24 -right-24 w-96 h-96 bg-[#198fd9] opacity-5 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-[#0f6ba8] opacity-5 rounded-full blur-3xl"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-gradient-to-r from-[#198fd9] to-[#0f6ba8] opacity-[0.02] rounded-full blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <!-- Top border accent -->
            <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-[#198fd9] to-transparent opacity-50"></div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">
                <!-- Company Info -->
                <div>
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('logo.png') }}" alt="" class="h-8 w-auto mr-3 opacity-90" aria-hidden="true">
                        <h2 class="text-xl font-bold text-white">Solutions Delivered</h2>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed mb-4">
                        Delivering tailored business solutions for process design, project management, and organizational change.
                    </p>
                    <div class="flex items-center text-sm text-gray-500">
                        <svg class="w-4 h-4 text-green-400 mr-2" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                        </svg>
                        <span>UK-Based IT Consultancy</span>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h2 class="text-lg font-bold text-white mb-6 flex items-center">
                        <span class="w-8 h-0.5 bg-gradient-to-r from-[#198fd9] to-transparent mr-3"></span>
                        Quick Links
                    </h2>
                    <nav aria-label="Footer navigation">
                        <ul class="space-y-3">
                            <li>
                                <a href="{{ route('home') }}" class="group inline-flex items-center text-gray-400 hover:text-white text-sm transition-all duration-200">
                                    <span class="w-0 group-hover:w-2 h-0.5 bg-[#198fd9] mr-0 group-hover:mr-2 transition-all duration-200"></span>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}" class="group inline-flex items-center text-gray-400 hover:text-white text-sm transition-all duration-200">
                                    <span class="w-0 group-hover:w-2 h-0.5 bg-[#198fd9] mr-0 group-hover:mr-2 transition-all duration-200"></span>
                                    About
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('solutions') }}" class="group inline-flex items-center text-gray-400 hover:text-white text-sm transition-all duration-200">
                                    <span class="w-0 group-hover:w-2 h-0.5 bg-[#198fd9] mr-0 group-hover:mr-2 transition-all duration-200"></span>
                                    Solutions
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('how-we-work') }}" class="group inline-flex items-center text-gray-400 hover:text-white text-sm transition-all duration-200">
                                    <span class="w-0 group-hover:w-2 h-0.5 bg-[#198fd9] mr-0 group-hover:mr-2 transition-all duration-200"></span>
                                    How We Work
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('careers') }}" class="group inline-flex items-center text-gray-400 hover:text-white text-sm transition-all duration-200">
                                    <span class="w-0 group-hover:w-2 h-0.5 bg-[#198fd9] mr-0 group-hover:mr-2 transition-all duration-200"></span>
                                    Careers
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('get-started') }}" class="group inline-flex items-center text-gray-400 hover:text-white text-sm transition-all duration-200">
                                    <span class="w-0 group-hover:w-2 h-0.5 bg-[#198fd9] mr-0 group-hover:mr-2 transition-all duration-200"></span>
                                    Get Started
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Contact Info -->
                <div>
                    <h2 class="text-lg font-bold text-white mb-6 flex items-center">
                        <span class="w-8 h-0.5 bg-gradient-to-r from-[#198fd9] to-transparent mr-3"></span>
                        Get in Touch
                    </h2>
                    <p class="text-gray-400 text-sm leading-relaxed mb-6">
                        Ready to transform your business? Let's discuss how we can help you achieve your goals.
                    </p>
                    <a href="{{ route('get-started') }}" class="group relative inline-flex items-center justify-center bg-gradient-to-r from-[#198fd9] to-[#1a7fc7] text-white hover:from-[#1a7fc7] hover:to-[#0f6ba8] px-6 py-3 rounded-lg text-sm font-medium transition-all duration-200 shadow-lg hover:shadow-xl hover:-translate-y-0.5">
                        <span class="relative z-10">Contact Us</span>
                        <svg class="relative z-10 ml-2 w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                        <div class="absolute inset-0 bg-gradient-to-r from-[#198fd9] to-[#1a7fc7] rounded-lg opacity-0 group-hover:opacity-20 blur-xl transition-opacity"></div>
                    </a>
                </div>
            </div>

            <!-- Bottom section -->
            <div class="relative border-t border-gray-700/50 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                    <p class="text-gray-500 text-sm">
                        &copy; {{ date('Y') }} Solutions Delivered. All rights reserved.
                    </p>
                    <div class="flex items-center space-x-6">
                        <a href="{{ route('privacy') }}" class="text-gray-500 hover:text-white text-sm transition-colors duration-200 relative group">
                            Privacy Policy
                            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#198fd9] group-hover:w-full transition-all duration-200"></span>
                        </a>
                        <span class="text-gray-700" aria-hidden="true">|</span>
                        <a href="{{ route('terms') }}" class="text-gray-500 hover:text-white text-sm transition-colors duration-200 relative group">
                            Terms of Service
                            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#198fd9] group-hover:w-full transition-all duration-200"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    @livewireScripts
</body>
</html>
