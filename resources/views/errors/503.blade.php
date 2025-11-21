@extends('layouts.app')

@section('title', 'Service Unavailable - Solutions Delivered')
@section('meta_description', 'The service is temporarily unavailable. We will be back shortly.')

@section('content')
<!-- 503 Header -->
<section class="relative overflow-hidden bg-gradient-to-br from-gray-700 via-gray-600 to-gray-800 text-white py-20 px-4 sm:px-6 lg:px-8">
    <!-- Decorative background elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none" aria-hidden="true">
        <div class="absolute top-10 right-10 w-96 h-96 bg-white opacity-10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-10 left-10 w-72 h-72 bg-white opacity-5 rounded-full blur-3xl"></div>
        <div class="absolute inset-0 bg-white opacity-5 transform skew-y-3 origin-bottom-left"></div>
    </div>

    <div class="relative max-w-7xl mx-auto text-center">
        <!-- 503 number with gradient -->
        <div class="mb-6">
            <h1 class="text-8xl md:text-9xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-white via-gray-100 to-white drop-shadow-2xl">
                503
            </h1>
        </div>

        <div class="inline-flex items-center px-6 py-3 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 text-lg md:text-xl font-medium mb-4">
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
            Service Unavailable
        </div>
    </div>
</section>

<!-- 503 Content -->
<section class="py-20 px-4 sm:px-6 lg:px-8 bg-white" aria-labelledby="error-heading">
    <div class="max-w-3xl mx-auto text-center">
        <h2 id="error-heading" class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">
            We'll Be Right Back
        </h2>

        <p class="text-xl text-gray-600 mb-12 leading-relaxed">
            We're temporarily offline for maintenance. We'll be back online shortly.
        </p>

        <!-- Action buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-16">
            <button onclick="window.location.reload()" class="group relative inline-flex items-center justify-center bg-gradient-to-r from-[#198fd9] to-[#1a7fc7] text-white hover:from-[#1a7fc7] hover:to-[#0f6ba8] px-10 py-4 rounded-xl text-lg font-semibold shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#198fd9]">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                </svg>
                Try Again
            </button>
            <a href="{{ route('home') }}" class="group inline-flex items-center justify-center bg-white text-gray-800 border-2 border-gray-300 hover:border-gray-400 hover:bg-gray-50 px-10 py-4 rounded-xl text-lg font-semibold shadow-md hover:shadow-lg transform hover:-translate-y-1 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400">
                <svg class="w-5 h-5 mr-2 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
                Go to Home Page
            </a>
        </div>

        <!-- Information box -->
        <div class="relative bg-gradient-to-br from-gray-50 to-white rounded-2xl shadow-lg border border-gray-100 p-10">
            <!-- Decorative corner accent -->
            <div class="absolute top-0 left-0 w-20 h-20 bg-gradient-to-br from-[#198fd9] to-transparent opacity-10 rounded-tl-2xl" aria-hidden="true"></div>
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-[#0f6ba8] to-transparent opacity-10 rounded-br-2xl" aria-hidden="true"></div>

            <div class="relative">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Why is this happening?</h3>
                <ul class="text-left space-y-3 max-w-md mx-auto">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span class="text-gray-700">We're performing scheduled maintenance</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span class="text-gray-700">We're upgrading our systems to serve you better</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span class="text-gray-700">We'll be back online very soon</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Help Section -->
<section class="py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-50 to-gray-100">
    <div class="max-w-3xl mx-auto">
        <div class="bg-white rounded-2xl shadow-xl p-10 text-center border border-gray-200">
            <!-- Icon -->
            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-[#198fd9] to-[#1a7fc7] rounded-2xl text-white mb-6 shadow-lg">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>

            <h2 class="text-3xl font-bold text-gray-900 mb-4">Thank You for Your Patience</h2>
            <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                We appreciate your understanding while we improve our services.
            </p>

            <button onclick="window.location.reload()" class="group relative inline-flex items-center justify-center bg-gradient-to-r from-[#198fd9] to-[#1a7fc7] text-white hover:from-[#1a7fc7] hover:to-[#0f6ba8] px-8 py-4 rounded-xl font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#198fd9]">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                </svg>
                Check If We're Back
                <svg class="ml-2 w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </button>
        </div>
    </div>
</section>
@endsection
