@extends('layouts.app')

@section('title', 'Contact | Solutions Delivered')
@section('meta_description', 'Tell us what you are trying to do with AI, or about the IT and project work you need. One honest conversation, a reply within 24 hours, no obligation.')

@php
    $packageSlug = request('package');
    $selectedPackage = $packageSlug ? config("packages.{$packageSlug}") : null;

    $topic = request('topic');
    $topicLabels = ['ai-foundations' => 'AI Foundations', 'foundations-os' => 'The Foundations OS'];
    $topicLabel = $topic && isset($topicLabels[$topic]) ? $topicLabels[$topic] : null;

    $prefillMessage = '';
    if ($selectedPackage) {
        $prefillMessage = "I'm interested in your {$selectedPackage['name']} engagement. Please get in touch to discuss.";
    } elseif ($topicLabel) {
        $prefillMessage = "I'd like to register my interest in {$topicLabel}. Please let me know more.";
    }

    $packageSlugForForm = $selectedPackage ? $packageSlug : null;
@endphp

@push('schema')
<x-schema.breadcrumb :items="[
    ['name' => 'Home', 'url' => route('home')],
    ['name' => 'Contact'],
]" />
@endpush

@section('content')
<x-page-header
    eyebrow="Contact"
    title="Tell us what you're trying to do"
    lead="Whether it's getting real value from AI or the IT and project work behind it, start with a straight conversation. We reply within 24 hours, and we'll tell you plainly whether we can help." />

<section class="mx-auto max-w-2xl px-4 py-14 sm:px-6 sm:py-16 lg:px-8">
    @if (session('success'))
        <div class="mb-8 flex items-start gap-3 rounded-md border border-blue/30 bg-blue-tint px-4 py-3" role="status" aria-live="polite">
            <svg class="mt-0.5 h-5 w-5 shrink-0 text-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <p class="text-sm text-ink">{{ session('success') }}</p>
        </div>
    @endif

    @if ($errors->any())
        <div class="mb-8 rounded-md border border-error/40 bg-error/5 px-4 py-3" role="alert" aria-live="assertive">
            <p class="text-sm font-medium text-error">Please correct the following:</p>
            <ul class="mt-2 list-disc pl-5 text-sm text-error">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('contact.submit') }}" class="flex flex-col gap-6" novalidate>
        @csrf
        @honeypot

        @if ($selectedPackage)
            <div class="rounded-md border border-border bg-panel px-4 py-3" role="status">
                <p class="text-sm text-text">
                    <span class="font-medium text-ink">Enquiring about:</span> {{ $selectedPackage['name'] }}.
                    Feel free to edit the message before sending.
                </p>
            </div>
            <input type="hidden" name="package" value="{{ old('package', $packageSlugForForm) }}">
        @endif

        <x-field name="name" label="Your name" :required="true" autocomplete="name" />
        <x-field name="email" label="Email address" type="email" :required="true" autocomplete="email" />
        <x-field name="company" label="Company name" autocomplete="organization" />
        <x-field name="message" label="How can we help?" as="textarea" :required="true" :value="$prefillMessage" />

        <div class="flex flex-wrap items-center gap-4">
            <x-button type="submit">Send message</x-button>
            <p class="text-sm text-muted">We reply within {{ config('brand.contact.response_time') }}.</p>
        </div>

        <p class="text-xs text-faint">
            By sending this you agree to us using your details to reply. See our
            <a href="{{ route('privacy') }}" class="text-blue hover:text-blue-deep">privacy policy</a>.
        </p>
    </form>
</section>
@endsection
