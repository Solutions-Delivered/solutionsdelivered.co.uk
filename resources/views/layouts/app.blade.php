<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('meta_description', 'Solutions Delivered - Tailored business solutions for process design, project management, and organizational change.')">

    <title>@yield('title', 'Solutions Delivered - Delivering Solutions is in Our DNA')</title>

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
                    <a href="{{ route('home') }}" class="text-2xl font-bold text-[#198bd9] hover:text-[#65bd7d] transition-colors duration-200" aria-label="Solutions Delivered Home">
                        Solutions Delivered
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex md:items-center md:space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-[#198bd9] px-3 py-2 text-sm font-medium transition-colors duration-200 {{ request()->routeIs('home') ? 'border-b-2 border-[#198bd9]' : '' }}" {{ request()->routeIs('home') ? 'aria-current=page' : '' }}>
                        Home
                    </a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-[#198bd9] px-3 py-2 text-sm font-medium transition-colors duration-200 {{ request()->routeIs('about') ? 'border-b-2 border-[#198bd9]' : '' }}" {{ request()->routeIs('about') ? 'aria-current=page' : '' }}>
                        About
                    </a>
                    <a href="{{ route('solutions') }}" class="text-gray-700 hover:text-[#198bd9] px-3 py-2 text-sm font-medium transition-colors duration-200 {{ request()->routeIs('solutions') ? 'border-b-2 border-[#198bd9]' : '' }}" {{ request()->routeIs('solutions') ? 'aria-current=page' : '' }}>
                        Solutions
                    </a>
                    <a href="{{ route('careers') }}" class="text-gray-700 hover:text-[#198bd9] px-3 py-2 text-sm font-medium transition-colors duration-200 {{ request()->routeIs('careers') ? 'border-b-2 border-[#198bd9]' : '' }}" {{ request()->routeIs('careers') ? 'aria-current=page' : '' }}>
                        Careers
                    </a>
                    <a href="{{ route('get-started') }}" class="bg-[#198bd9] text-white hover:bg-[#65bd7d] px-6 py-2 rounded-md text-sm font-medium transition-colors duration-200">
                        Get Started
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden" x-data="{ open: false }">
                    <button @click="open = !open" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-[#198bd9] hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-[#198bd9]" aria-expanded="false" :aria-expanded="open.toString()" aria-label="Toggle navigation menu">
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
                                        <a href="{{ route('home') }}" class="text-base font-medium text-gray-700 hover:text-[#198bd9]" {{ request()->routeIs('home') ? 'aria-current=page' : '' }}>Home</a>
                                        <a href="{{ route('about') }}" class="text-base font-medium text-gray-700 hover:text-[#198bd9]" {{ request()->routeIs('about') ? 'aria-current=page' : '' }}>About</a>
                                        <a href="{{ route('solutions') }}" class="text-base font-medium text-gray-700 hover:text-[#198bd9]" {{ request()->routeIs('solutions') ? 'aria-current=page' : '' }}>Solutions</a>
                                        <a href="{{ route('careers') }}" class="text-base font-medium text-gray-700 hover:text-[#198bd9]" {{ request()->routeIs('careers') ? 'aria-current=page' : '' }}>Careers</a>
                                        <a href="{{ route('get-started') }}" class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-[#198bd9] hover:bg-[#65bd7d]">Get Started</a>
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
    <footer class="bg-gray-900 text-white mt-20" role="contentinfo">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Company Info -->
                <div>
                    <h2 class="text-xl font-bold text-white mb-4">Solutions Delivered</h2>
                    <p class="text-gray-300 text-sm">
                        Delivering tailored business solutions for process design, project management, and organizational change.
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h2 class="text-xl font-bold text-white mb-4">Quick Links</h2>
                    <nav aria-label="Footer navigation">
                        <ul class="space-y-2">
                            <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-[#65bd7d] text-sm transition-colors duration-200">Home</a></li>
                            <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-[#65bd7d] text-sm transition-colors duration-200">About</a></li>
                            <li><a href="{{ route('solutions') }}" class="text-gray-300 hover:text-[#65bd7d] text-sm transition-colors duration-200">Solutions</a></li>
                            <li><a href="{{ route('careers') }}" class="text-gray-300 hover:text-[#65bd7d] text-sm transition-colors duration-200">Careers</a></li>
                            <li><a href="{{ route('get-started') }}" class="text-gray-300 hover:text-[#65bd7d] text-sm transition-colors duration-200">Get Started</a></li>
                        </ul>
                    </nav>
                </div>

                <!-- Contact Info -->
                <div>
                    <h2 class="text-xl font-bold text-white mb-4">Get in Touch</h2>
                    <p class="text-gray-300 text-sm mb-2">
                        Ready to transform your business?
                    </p>
                    <a href="{{ route('get-started') }}" class="inline-block bg-[#198bd9] text-white hover:bg-[#65bd7d] px-6 py-2 rounded-md text-sm font-medium transition-colors duration-200">
                        Contact Us
                    </a>
                </div>
            </div>

            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p class="text-gray-400 text-sm">
                    &copy; {{ date('Y') }} Solutions Delivered. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    @livewireScripts
</body>
</html>
