@extends('layouts.app')

@section('title', 'Get Started - Solutions Delivered')
@section('meta_description', 'Contact Solutions Delivered to discuss how we can help transform your business with our tailored consulting services.')

@push('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
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
<section class="bg-gradient-to-r from-[#198bd9] to-[#65bd7d] text-white py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Get Started</h1>
        <p class="text-xl md:text-2xl max-w-3xl">
            Let's discuss how we can help deliver solutions for your business
        </p>
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
            <div class="bg-[#65bd7d] text-white px-6 py-4 rounded-lg mb-8 shadow-md" role="alert" aria-live="polite">
                <div class="flex items-center">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
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

        <form method="POST" action="{{ route('contact') }}" class="bg-gray-50 rounded-lg p-8 shadow-md" novalidate>
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
                    class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#198bd9] focus:border-[#198bd9] text-gray-900 @error('name') border-red-500 @enderror"
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
                    class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#198bd9] focus:border-[#198bd9] text-gray-900 @error('email') border-red-500 @enderror"
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
                    class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#198bd9] focus:border-[#198bd9] text-gray-900 @error('company') border-red-500 @enderror"
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
                    class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#198bd9] focus:border-[#198bd9] text-gray-900 @error('message') border-red-500 @enderror"
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
                    class="w-full bg-[#198bd9] text-white hover:bg-[#65bd7d] px-8 py-4 rounded-md text-lg font-semibold transition-colors duration-200 shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#198bd9]"
                >
                    Send Message
                </button>
            </div>

            <p class="mt-4 text-sm text-gray-600 text-center">
                <span class="text-red-600" aria-label="required">*</span> Required fields
            </p>
        </form>
    </div>
</section>

<!-- Additional Info Section -->
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-gray-50" aria-labelledby="info-heading">
    <div class="max-w-7xl mx-auto">
        <h2 id="info-heading" class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-12">
            What Happens Next?
        </h2>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-[#198bd9] text-white rounded-full mb-4 text-2xl font-bold" aria-hidden="true">
                    1
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">We Review Your Request</h3>
                <p class="text-gray-700">
                    Our team will carefully review your message and requirements within 24 hours.
                </p>
            </div>

            <div class="text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-[#65bd7d] text-white rounded-full mb-4 text-2xl font-bold" aria-hidden="true">
                    2
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Initial Consultation</h3>
                <p class="text-gray-700">
                    We'll schedule a call to discuss your needs in detail and explore potential solutions.
                </p>
            </div>

            <div class="text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-[#198bd9] text-white rounded-full mb-4 text-2xl font-bold" aria-hidden="true">
                    3
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Tailored Proposal</h3>
                <p class="text-gray-700">
                    We'll create a customized proposal outlining how we can help achieve your goals.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
