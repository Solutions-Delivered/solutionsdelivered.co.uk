@extends('layouts.app')

@section('title', 'Server Error - Solutions Delivered')
@section('meta_description', 'An unexpected error has occurred.')

@section('content')
<!-- 500 Header -->
<section class="relative overflow-hidden bg-gradient-to-br from-red-600 via-red-500 to-red-700 text-white py-20 px-4 sm:px-6 lg:px-8">
    <!-- Decorative background elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none" aria-hidden="true">
        <div class="absolute top-10 right-10 w-96 h-96 bg-white opacity-10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-10 left-10 w-72 h-72 bg-white opacity-5 rounded-full blur-3xl"></div>
        <div class="absolute inset-0 bg-white opacity-5 transform skew-y-3 origin-bottom-left"></div>
    </div>

    <div class="relative max-w-7xl mx-auto text-center">
        <!-- 500 number with gradient -->
        <div class="mb-6">
            <h1 class="text-8xl md:text-9xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-white via-gray-100 to-white drop-shadow-2xl">
                500
            </h1>
        </div>

        <div class="inline-flex items-center px-6 py-3 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 text-lg md:text-xl font-medium mb-4">
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
            </svg>
            Internal Server Error
        </div>
    </div>
</section>

<!-- 500 Content -->
<section class="py-20 px-4 sm:px-6 lg:px-8 bg-white" aria-labelledby="error-heading">
    <div class="max-w-3xl mx-auto text-center">
        <h2 id="error-heading" class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">
            Something Went Wrong
        </h2>

        <p class="text-xl text-gray-600 mb-12 leading-relaxed">
            We're experiencing technical difficulties and our team has been notified. Please try again in a few moments.
        </p>

        <!-- Action buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-16">
            <a href="{{ route('home') }}" class="group relative inline-flex items-center justify-center bg-gradient-to-r from-[#198fd9] to-[#1a7fc7] text-white hover:from-[#1a7fc7] hover:to-[#0f6ba8] px-10 py-4 rounded-xl text-lg font-semibold shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#198fd9]">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
                Go to Home Page
            </a>
            <button onclick="window.location.reload()" class="group inline-flex items-center justify-center bg-white text-gray-800 border-2 border-gray-300 hover:border-gray-400 hover:bg-gray-50 px-10 py-4 rounded-xl text-lg font-semibold shadow-md hover:shadow-lg transform hover:-translate-y-1 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400">
                <svg class="w-5 h-5 mr-2 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                </svg>
                Try Again
            </button>
        </div>

        <!-- Information box -->
        <div class="relative bg-gradient-to-br from-gray-50 to-white rounded-2xl shadow-lg border border-gray-100 p-10">
            <!-- Decorative corner accent -->
            <div class="absolute top-0 left-0 w-20 h-20 bg-gradient-to-br from-[#198fd9] to-transparent opacity-10 rounded-tl-2xl" aria-hidden="true"></div>
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-[#0f6ba8] to-transparent opacity-10 rounded-br-2xl" aria-hidden="true"></div>

            <div class="relative">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">What can you do?</h3>
                <ul class="text-left space-y-3 max-w-md mx-auto">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span class="text-gray-700">Wait a few moments and try again</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span class="text-gray-700">Return to the home page</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-[#198fd9] mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span class="text-gray-700">If the problem persists, please contact us</span>
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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                </svg>
            </div>

            <h2 class="text-3xl font-bold text-gray-900 mb-4">Still Having Issues?</h2>
            <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                If the error persists, please get in touch with us and we'll help resolve the issue.
            </p>

            <a href="{{ route('get-started') }}" class="group relative inline-flex items-center justify-center bg-gradient-to-r from-[#198fd9] to-[#1a7fc7] text-white hover:from-[#1a7fc7] hover:to-[#0f6ba8] px-8 py-4 rounded-xl font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#198fd9]">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                Contact Support
                <svg class="ml-2 w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>
@endsection
