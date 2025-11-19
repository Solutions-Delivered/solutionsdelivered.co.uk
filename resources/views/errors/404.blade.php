@extends('layouts.app')

@section('title', 'Page Not Found - Solutions Delivered')
@section('meta_description', 'The page you are looking for could not be found.')

@section('content')
<!-- 404 Header -->
<section class="bg-gradient-to-r from-[#198bd9] to-[#65bd7d] text-white py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto text-center">
        <h1 class="text-6xl md:text-8xl font-bold mb-4">404</h1>
        <p class="text-2xl md:text-3xl">
            Page Not Found
        </p>
    </div>
</section>

<!-- 404 Content -->
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-white" aria-labelledby="error-heading">
    <div class="max-w-3xl mx-auto text-center">
        <h2 id="error-heading" class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
            Oops! We can't find that page
        </h2>

        <p class="text-lg text-gray-700 mb-8">
            The page you're looking for might have been moved, deleted, or never existed in the first place.
        </p>

        <div class="bg-gray-50 rounded-lg p-8 mb-8">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Here are some helpful links instead:</h3>
            <nav aria-label="Error page navigation">
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('home') }}" class="text-[#198bd9] hover:text-[#65bd7d] font-medium transition-colors duration-200 underline">
                            Return to Home Page
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('solutions') }}" class="text-[#198bd9] hover:text-[#65bd7d] font-medium transition-colors duration-200 underline">
                            View Our Solutions
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="text-[#198bd9] hover:text-[#65bd7d] font-medium transition-colors duration-200 underline">
                            Learn About Us
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('get-started') }}" class="text-[#198bd9] hover:text-[#65bd7d] font-medium transition-colors duration-200 underline">
                            Get in Touch
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('home') }}" class="inline-block bg-[#198bd9] text-white hover:bg-[#65bd7d] px-8 py-3 rounded-md text-lg font-medium transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#198bd9]">
                Go to Home Page
            </a>
            <button onclick="window.history.back()" class="inline-block bg-gray-200 text-gray-800 hover:bg-gray-300 px-8 py-3 rounded-md text-lg font-medium transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400">
                Go Back
            </button>
        </div>
    </div>
</section>

<!-- Help Section -->
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-gray-50">
    <div class="max-w-3xl mx-auto text-center">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">Need Help?</h2>
        <p class="text-lg text-gray-700 mb-6">
            If you believe this is an error or you can't find what you're looking for, please contact us and we'll be happy to help.
        </p>
        <a href="{{ route('get-started') }}" class="inline-block bg-[#198bd9] text-white hover:bg-[#65bd7d] px-6 py-2 rounded-md font-medium transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#198bd9]">
            Contact Us
        </a>
    </div>
</section>
@endsection
