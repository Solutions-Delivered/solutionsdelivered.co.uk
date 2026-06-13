@extends('layouts.app')

@section('title', 'The Foundations OS | Solutions Delivered')
@section('meta_description', 'The Foundations OS is a ready-made workspace you point your AI at, so every chat already knows your business. We are finalising the details.')
@section('robots', 'noindex, follow')

@section('content')
<x-page-header
    eyebrow="Self-serve"
    title="The Foundations OS"
    lead="A ready-made workspace you download and point your AI at. Capture how your business works once, and from then on every chat opens already knowing your voice, your customers and your offers." />

<section class="mx-auto max-w-3xl px-4 py-14 sm:px-6 sm:py-16 lg:px-8">
    <x-card class="bg-blue-tint border-blue/20">
        <h2 class="text-lg font-semibold tracking-tight text-ink">We're finalising this</h2>
        <p class="mt-3 leading-relaxed text-text">
            The Foundations OS is close, and we are settling the last of the detail and the checkout before we
            put it on sale. If you would like to know the moment it is ready, or you have a question in the
            meantime, get in touch.
        </p>
        <div class="mt-6 flex flex-wrap items-center gap-x-6 gap-y-3">
            <x-button :href="route('contact', ['topic' => 'foundations-os'])">Register your interest</x-button>
            <x-button variant="link" :href="route('ai-foundations')">
                Prefer it done with you?
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m0 0-5-5m5 5-5 5" />
                </svg>
            </x-button>
        </div>
    </x-card>
</section>
@endsection
