@extends('layouts.app')

@section('title', 'Get Started - Solutions Delivered')
@section('meta_description', 'Contact Solutions Delivered to discuss how we can help transform your business with our tailored consulting services.')

@push('schema')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ContactPage",
    "name": "Get Started",
    "description": "Contact Solutions Delivered to discuss how we can help transform your business with our tailored consulting services.",
    "url": "{{ url()->current() }}",
    "mainEntity": {
        "@type": "Organization",
        "name": "Solutions Delivered",
        "url": "{{ url('/') }}"
    }
}
</script>
@endpush

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
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </x-slot:icon>
            Get Started
        </x-badge.breadcrumb>

        <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
            Let's Start Your
            <span class="block text-transparent bg-clip-text bg-gradient-to-r from-white via-gray-100 to-gray-200 mt-1">
                Transformation Journey
            </span>
        </h1>

        <p class="text-xl md:text-2xl max-w-3xl text-gray-100 leading-relaxed">
            Tell us about your challenges and we'll show you how we can help deliver solutions for your business
        </p>

        <!-- Trust indicators -->
        <div class="flex flex-wrap gap-6 mt-8">
            <x-trust-indicator>24 hour response time</x-trust-indicator>
            <x-trust-indicator>Free initial consultation</x-trust-indicator>
            <x-trust-indicator>No obligation proposal</x-trust-indicator>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-white" aria-labelledby="contact-heading">
    <div class="max-w-3xl mx-auto">
        <h2 id="contact-heading" class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-4">
            Contact Us
        </h2>
        <p class="text-lg text-gray-700 text-center mb-12">
            Fill out the form below and we'll get back to you within 24 hours.
        </p>

        @if(session('success'))
            <div class="relative overflow-hidden bg-gradient-to-r from-green-500 to-green-600 text-white px-6 py-4 rounded-xl mb-8 shadow-lg" role="alert" aria-live="polite">
                <!-- Decorative background -->
                <div class="absolute inset-0 bg-white opacity-10" aria-hidden="true"></div>
                <div class="relative flex items-center">
                    <div class="flex-shrink-0 w-10 h-10 bg-white/20 rounded-full flex items-center justify-center mr-3">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <p class="font-medium">{{ session('success') }}</p>
                </div>
            </div>
        @endif

        @if($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-6 py-4 rounded-lg mb-8" role="alert" aria-live="polite">
                <div class="flex items-start">
                    <svg class="w-6 h-6 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <div>
                        <p class="font-medium mb-2">Please correct the following errors:</p>
                        <ul class="list-disc list-inside space-y-1">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif

        <form method="POST" action="{{ route('contact') }}" class="relative bg-white rounded-2xl p-8 shadow-xl border border-gray-100" novalidate>
            <!-- Decorative corner accents -->
            <div class="absolute top-0 left-0 w-20 h-20 bg-gradient-to-br from-[#198fd9] to-transparent opacity-10 rounded-tl-2xl" aria-hidden="true"></div>
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-[#0f6ba8] to-transparent opacity-10 rounded-br-2xl" aria-hidden="true"></div>

            <div class="relative">
            @csrf

            <!-- Name Field -->
            <div class="mb-6">
                <label for="name" class="block text-sm font-medium text-gray-900 mb-2">
                    Full Name <span class="text-red-600" aria-label="required">*</span>
                </label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name') }}"
                    required
                    aria-required="true"
                    aria-describedby="name-error"
                    class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#198fd9] focus:border-[#198fd9] text-gray-900 @error('name') border-red-500 @enderror"
                    placeholder="John Smith"
                >
                @error('name')
                    <p class="mt-2 text-sm text-red-600" id="name-error" role="alert">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email Field -->
            <div class="mb-6">
                <label for="email" class="block text-sm font-medium text-gray-900 mb-2">
                    Email Address <span class="text-red-600" aria-label="required">*</span>
                </label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    aria-required="true"
                    aria-describedby="email-error email-help"
                    class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#198fd9] focus:border-[#198fd9] text-gray-900 @error('email') border-red-500 @enderror"
                    placeholder="john.smith@example.com"
                    autocomplete="email"
                >
                <p class="mt-1 text-sm text-gray-600" id="email-help">We'll never share your email with anyone else.</p>
                @error('email')
                    <p class="mt-2 text-sm text-red-600" id="email-error" role="alert">{{ $message }}</p>
                @enderror
            </div>

            <!-- Company Field -->
            <div class="mb-6">
                <label for="company" class="block text-sm font-medium text-gray-900 mb-2">
                    Company Name <span class="text-gray-600 text-xs">(optional)</span>
                </label>
                <input
                    type="text"
                    id="company"
                    name="company"
                    value="{{ old('company') }}"
                    aria-describedby="company-error"
                    class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#198fd9] focus:border-[#198fd9] text-gray-900 @error('company') border-red-500 @enderror"
                    placeholder="Your Company Ltd"
                    autocomplete="organization"
                >
                @error('company')
                    <p class="mt-2 text-sm text-red-600" id="company-error" role="alert">{{ $message }}</p>
                @enderror
            </div>

            <!-- Message Field -->
            <div class="mb-6">
                <label for="message" class="block text-sm font-medium text-gray-900 mb-2">
                    Message <span class="text-red-600" aria-label="required">*</span>
                </label>
                <textarea
                    id="message"
                    name="message"
                    rows="6"
                    required
                    aria-required="true"
                    aria-describedby="message-error message-help"
                    class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#198fd9] focus:border-[#198fd9] text-gray-900 @error('message') border-red-500 @enderror"
                    placeholder="Tell us about your needs and how we can help..."
                >{{ old('message') }}</textarea>
                <p class="mt-1 text-sm text-gray-600" id="message-help">Maximum 2000 characters</p>
                @error('message')
                    <p class="mt-2 text-sm text-red-600" id="message-error" role="alert">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <div>
                <button
                    type="submit"
                    class="group relative w-full bg-gradient-to-r from-[#198fd9] to-[#1a7fc7] text-white hover:from-[#1a7fc7] hover:to-[#0f6ba8] px-8 py-4 rounded-xl text-lg font-semibold transition-all duration-200 shadow-xl hover:shadow-2xl hover:-translate-y-0.5 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#198fd9]"
                >
                    <span class="flex items-center justify-center">
                        Send Message
                        <svg class="ml-2 w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </span>
                </button>
            </div>

            <p class="mt-4 text-sm text-gray-600 text-center">
                <span class="text-red-600" aria-label="required">*</span> Required fields
            </p>
            </div>
        </form>
    </div>
</section>

<!-- Additional Info Section -->
<section class="relative overflow-hidden py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-50 to-white" aria-labelledby="info-heading">
    <!-- Decorative background -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none" aria-hidden="true">
        <div class="absolute top-1/2 left-1/4 w-96 h-96 bg-[#198fd9] opacity-5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-[#0f6ba8] opacity-5 rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto">
        <!-- Section header -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center px-4 py-2 rounded-full bg-[#198fd9]/10 border border-[#198fd9]/20 text-sm font-medium text-[#198fd9] mb-4">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                Our Process
            </div>
            <h2 id="info-heading" class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                What Happens Next?
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Here's our simple, transparent process for getting started
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Step 1 -->
            <div class="relative bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-200">
                <div class="absolute -top-6 left-8">
                    <div class="inline-flex items-center justify-center w-12 h-12 bg-gradient-to-br from-[#198fd9] to-[#1a7fc7] text-white rounded-xl shadow-lg text-xl font-bold" aria-hidden="true">
                        1
                    </div>
                </div>
                <div class="mt-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 flex items-center">
                        We Review Your Request
                        <svg class="w-6 h-6 text-[#198fd9] ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        Our team will carefully review your message and requirements within 24 hours to understand your needs.
                    </p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="relative bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-200">
                <div class="absolute -top-6 left-8">
                    <div class="inline-flex items-center justify-center w-12 h-12 bg-gradient-to-br from-[#1a7fc7] to-[#0f6ba8] text-white rounded-xl shadow-lg text-xl font-bold" aria-hidden="true">
                        2
                    </div>
                </div>
                <div class="mt-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 flex items-center">
                        Initial Consultation
                        <svg class="w-6 h-6 text-[#198fd9] ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        We'll schedule a call to discuss your needs in detail and explore potential solutions together.
                    </p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="relative bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-200">
                <div class="absolute -top-6 left-8">
                    <div class="inline-flex items-center justify-center w-12 h-12 bg-gradient-to-br from-[#0f6ba8] to-[#198fd9] text-white rounded-xl shadow-lg text-xl font-bold" aria-hidden="true">
                        3
                    </div>
                </div>
                <div class="mt-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 flex items-center">
                        Tailored Proposal
                        <svg class="w-6 h-6 text-[#198fd9] ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        We'll create a customized proposal outlining how we can help you achieve your goals.
                    </p>
                </div>
            </div>
        </div>

        <!-- Additional trust indicator -->
        <div class="mt-12 text-center">
            <div class="inline-flex items-center px-6 py-3 bg-white rounded-full shadow-md border border-gray-200">
                <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                    <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                </svg>
                <span class="text-sm font-medium text-gray-700">Your information is secure and will never be shared</span>
            </div>
        </div>
    </div>
</section>
@endsection
