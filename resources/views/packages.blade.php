@extends('layouts.app')

@section('title', 'Packages - Solutions Delivered')
@section('meta_description', 'Productised consulting engagements with fixed scope and clear deliverables. SaaS Discovery, Fractional Retainer, and Accessibility Audit packages.')
@section('robots', 'noindex, nofollow')

@section('content')
<!-- Page Header -->
<section class="relative overflow-hidden bg-gradient-to-br from-[#198fd9] via-[#1a7fc7] to-[#0f6ba8] text-white py-10 sm:py-14 md:py-16 lg:py-20 px-4 sm:px-6 lg:px-8">
    <!-- Decorative background elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none" aria-hidden="true">
        <div class="absolute top-10 right-10 w-96 h-96 bg-white opacity-10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-10 left-10 w-72 h-72 bg-white opacity-5 rounded-full blur-3xl"></div>
        <div class="absolute inset-0 bg-white opacity-5 transform -skew-y-2 origin-top-left"></div>
    </div>

    <div class="relative max-w-7xl mx-auto">
        <x-badge.breadcrumb class="mb-6">
            <x-slot:icon>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
            </x-slot:icon>
            Productised Engagements
        </x-badge.breadcrumb>

        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
            Packaged
            <span class="block text-transparent bg-clip-text bg-gradient-to-r from-white via-gray-100 to-gray-200 mt-1">
                Engagements
            </span>
        </h1>

        <p class="text-base sm:text-lg md:text-xl lg:text-2xl max-w-3xl text-gray-100 leading-relaxed">
            Sharply-scoped pieces of work with clear deliverables, fixed timelines, and no surprises.
        </p>

        <!-- Trust indicators -->
        <div class="flex flex-wrap gap-6 mt-8">
            <x-trust-indicator>Fixed scope</x-trust-indicator>
            <x-trust-indicator>Transparent pricing</x-trust-indicator>
            <x-trust-indicator>Defined deliverables</x-trust-indicator>
        </div>
    </div>
</section>

<!-- How this works -->
<section class="py-8 sm:py-12 md:py-14 lg:py-16 px-4 sm:px-6 lg:px-8 bg-white" aria-labelledby="how-it-works-heading">
    <div class="max-w-7xl mx-auto">
        <x-section-heading eyebrow="How It Works" id="how-it-works-heading">
            Three steps from interest to delivery
        </x-section-heading>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Step 1 -->
            <div class="relative bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-200">
                <div class="absolute -top-6 left-8">
                    <div class="inline-flex items-center justify-center w-12 h-12 bg-gradient-to-br from-[#198fd9] to-[#1a7fc7] text-white rounded-xl shadow-lg text-xl font-bold" aria-hidden="true">
                        1
                    </div>
                </div>
                <div class="mt-8">
                    <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-3">Pick a package</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Choose the engagement that fits, or get in touch if your need sits between two of them.
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
                    <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-3">Brief us asynchronously</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Tell us your context via the form. We come back within 24 hours to confirm scope, dates, and any clarifying questions.
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
                    <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-3">Deliver and hand off</h3>
                    <p class="text-gray-600 leading-relaxed">
                        We complete the agreed work, walk you through the deliverables, and leave you with everything you need to act on them.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Packages grid -->
<section class="py-8 sm:py-12 md:py-14 lg:py-16 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-50 to-white" aria-labelledby="packages-heading">
    <div class="max-w-7xl mx-auto">
        <x-section-heading eyebrow="Our Packages" id="packages-heading">
            Choose your engagement
        </x-section-heading>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($packages as $slug => $package)
                <article class="flex flex-col bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-200">
                    <div class="mb-4">
                        <span class="inline-block px-3 py-1 rounded-full bg-[#198fd9]/10 text-xs font-semibold uppercase tracking-wider text-[#198fd9]">
                            {{ $package['eyebrow'] }}
                        </span>
                    </div>

                    <h3 class="text-2xl font-bold text-gray-900 mb-3">{{ $package['name'] }}</h3>

                    <p class="text-gray-700 mb-6 leading-relaxed">{{ $package['outcome'] }}</p>

                    <div class="flex items-baseline gap-2 mb-2 pb-4 border-b border-gray-100">
                        @if($package['price'] !== null)
                            <span class="text-3xl font-bold text-gray-900">£{{ number_format($package['price']) }}</span>
                            @if($package['price_suffix'])
                                <span class="text-sm text-gray-600">{{ $package['price_suffix'] }}</span>
                            @endif
                        @else
                            <span class="text-xl font-semibold text-gray-900">Price on request</span>
                        @endif
                    </div>
                    <p class="text-sm text-gray-600 mb-6">
                        <span class="font-medium text-gray-900">Duration:</span> {{ $package['duration'] }}
                    </p>

                    <div class="mb-6">
                        <p class="text-sm font-semibold text-gray-900 uppercase tracking-wider mb-3">What's included</p>
                        <ul class="space-y-2">
                            @foreach($package['included'] as $item)
                                <li class="flex items-start text-sm text-gray-700">
                                    <x-icon.check size="5" color="green-500" class="mr-2 mt-0.5 flex-shrink-0" />
                                    <span>{{ $item }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="mb-6">
                        <p class="text-sm font-semibold text-gray-900 uppercase tracking-wider mb-3">You'll receive</p>
                        <ul class="space-y-2">
                            @foreach($package['deliverables'] as $deliverable)
                                <li class="flex items-start text-sm text-gray-700">
                                    <x-icon.check size="5" color="[#198fd9]" class="mr-2 mt-0.5 flex-shrink-0" />
                                    <span>{{ $deliverable }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <p class="text-sm text-gray-600 italic mb-6 leading-relaxed">
                        <span class="font-semibold text-gray-900 not-italic">Best for:</span>
                        {{ $package['best_for'] }}
                    </p>

                    <div class="mt-auto pt-6 border-t border-gray-100">
                        <a
                            href="{{ route('get-started', ['package' => $slug]) }}"
                            class="group relative inline-flex items-center justify-center w-full bg-gradient-to-r from-[#198fd9] to-[#1a7fc7] text-white hover:from-[#1a7fc7] hover:to-[#0f6ba8] px-6 py-3 rounded-xl text-base font-semibold transition-all duration-200 shadow-md hover:shadow-lg hover:-translate-y-0.5 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#198fd9] active:scale-95"
                            aria-label="Enquire about the {{ $package['name'] }} package"
                        >
                            Enquire about this package
                            <svg class="ml-2 w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

<!-- Custom engagement -->
<section class="py-8 sm:py-12 md:py-14 lg:py-16 px-4 sm:px-6 lg:px-8 bg-white" aria-labelledby="custom-engagement-heading">
    <div class="max-w-4xl mx-auto">
        <div class="relative overflow-hidden bg-gradient-to-br from-gray-50 to-white rounded-2xl p-8 sm:p-12 shadow-lg border border-gray-100">
            <div class="absolute top-0 right-0 w-32 h-32 bg-[#198fd9] opacity-5 rounded-full blur-3xl" aria-hidden="true"></div>

            <div class="relative">
                <h2 id="custom-engagement-heading" class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">
                    Doesn't quite fit?
                </h2>
                <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                    These packages cover the engagements we're asked for most often, but plenty of work doesn't fit a fixed shape. If your need sits between packages, spans more than one, or needs something built from scratch, get in touch and we'll scope a custom engagement.
                </p>
                <x-button.gradient href="{{ route('get-started') }}">
                    Discuss a custom engagement
                </x-button.gradient>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="py-8 sm:py-12 md:py-14 lg:py-16 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-50 to-white" aria-labelledby="faq-heading">
    <div class="max-w-3xl mx-auto">
        <x-section-heading eyebrow="FAQ" id="faq-heading">
            Common questions
        </x-section-heading>

        <div class="space-y-6">
            <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100">
                <h3 class="text-lg font-bold text-gray-900 mb-2">How does payment work?</h3>
                <p class="text-gray-700 leading-relaxed">
                    Fixed-price packages are invoiced 50% on engagement, 50% on delivery. Retainers are invoiced monthly in advance. We invoice from a UK Ltd company and accept BACS transfer. Payment terms are 14 days from invoice date.
                </p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100">
                <h3 class="text-lg font-bold text-gray-900 mb-2">What happens if scope changes mid-engagement?</h3>
                <p class="text-gray-700 leading-relaxed">
                    Small adjustments are absorbed without fuss. Anything that meaningfully expands the scope gets a written change note with revised cost and timeline before any extra work begins, so there are no surprises on the final invoice.
                </p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100">
                <h3 class="text-lg font-bold text-gray-900 mb-2">Are these delivered remotely or on-site?</h3>
                <p class="text-gray-700 leading-relaxed">
                    Default is remote, which keeps costs down and lets us start sooner. We're UK-based and happy to work on-site for kick-off workshops or sensitive sessions; on-site time is quoted separately.
                </p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100">
                <h3 class="text-lg font-bold text-gray-900 mb-2">When can you start?</h3>
                <p class="text-gray-700 leading-relaxed">
                    For one-day discovery work, typically within a week of agreeing scope. Larger pieces depend on current commitments — we'll be straight with you about availability when we send the proposal.
                </p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100">
                <h3 class="text-lg font-bold text-gray-900 mb-2">What if a package leads into a bigger piece of work?</h3>
                <p class="text-gray-700 leading-relaxed">
                    That's exactly the point of the discovery and audit packages. If you decide to take the work forward with us, the package fee is credited against the larger engagement so you're never paying twice for the same conversation.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
