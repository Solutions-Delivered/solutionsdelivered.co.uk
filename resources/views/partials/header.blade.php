<!-- Skip to main content link for keyboard navigation (WCAG 2.4.1) -->
<a href="#main-content" class="skip-link">Skip to main content</a>

<!-- Header with navigation -->
<header class="bg-white shadow-sm sticky top-0 z-50" role="banner">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" role="navigation" aria-label="Main navigation">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="flex items-center gap-3 transition-opacity duration-200 hover:opacity-80" aria-label="Solutions Delivered Home">
                    <img src="{{ asset('logo.svg') }}"
                         alt="Solutions Delivered Logo"
                         class="h-10 w-10"
                         style="max-height: 2.5rem;">
                    <span class="text-xl font-bold text-[#198fd9]">Solutions Delivered</span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex md:items-center md:space-x-6">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-[#198fd9] px-3 py-2 text-sm font-medium transition-colors duration-200 {{ request()->routeIs('home') ? 'border-b-2 border-[#198fd9]' : '' }}" {!! request()->routeIs('home') ? 'aria-current="page"' : '' !!}>
                    Home
                </a>
                <a href="{{ route('about') }}" class="text-gray-700 hover:text-[#198fd9] px-3 py-2 text-sm font-medium transition-colors duration-200 {{ request()->routeIs('about') ? 'border-b-2 border-[#198fd9]' : '' }}" {!! request()->routeIs('about') ? 'aria-current="page"' : '' !!}>
                    About
                </a>
                <a href="{{ route('solutions') }}" class="text-gray-700 hover:text-[#198fd9] px-3 py-2 text-sm font-medium transition-colors duration-200 {{ request()->routeIs('solutions') ? 'border-b-2 border-[#198fd9]' : '' }}" {!! request()->routeIs('solutions') ? 'aria-current="page"' : '' !!}>
                    Solutions
                </a>
                <a href="{{ route('how-we-work') }}" class="text-gray-700 hover:text-[#198fd9] px-3 py-2 text-sm font-medium transition-colors duration-200 {{ request()->routeIs('how-we-work') ? 'border-b-2 border-[#198fd9]' : '' }}" {!! request()->routeIs('how-we-work') ? 'aria-current="page"' : '' !!}>
                    How We Work
                </a>
                <a href="{{ route('careers') }}" class="text-gray-700 hover:text-[#198fd9] px-3 py-2 text-sm font-medium transition-colors duration-200 {{ request()->routeIs('careers') ? 'border-b-2 border-[#198fd9]' : '' }}" {!! request()->routeIs('careers') ? 'aria-current="page"' : '' !!}>
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
                                    <a href="{{ route('home') }}" class="text-base font-medium text-gray-700 hover:text-[#198fd9]" {!! request()->routeIs('home') ? 'aria-current="page"' : '' !!}>Home</a>
                                    <a href="{{ route('about') }}" class="text-base font-medium text-gray-700 hover:text-[#198fd9]" {!! request()->routeIs('about') ? 'aria-current="page"' : '' !!}>About</a>
                                    <a href="{{ route('solutions') }}" class="text-base font-medium text-gray-700 hover:text-[#198fd9]" {!! request()->routeIs('solutions') ? 'aria-current="page"' : '' !!}>Solutions</a>
                                    <a href="{{ route('how-we-work') }}" class="text-base font-medium text-gray-700 hover:text-[#198fd9]" {!! request()->routeIs('how-we-work') ? 'aria-current="page"' : '' !!}>How We Work</a>
                                    <a href="{{ route('careers') }}" class="text-base font-medium text-gray-700 hover:text-[#198fd9]" {!! request()->routeIs('careers') ? 'aria-current="page"' : '' !!}>Careers</a>
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
