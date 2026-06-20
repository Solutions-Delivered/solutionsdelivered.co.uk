@extends('layouts.app')

@section('title', 'The Foundations OS | Solutions Delivered')
@section('meta_description', 'The Foundations OS is a ready-made workspace you point your AI at, so every chat already knows your business. Buy once, set up in 20-40 minutes.')

@push('schema')
<x-schema.breadcrumb :items="[
    ['name' => 'Home', 'url' => route('home')],
    ['name' => 'The Foundations OS'],
]" />
@endpush

@section('content')
<x-page-header
    eyebrow="Self-serve"
    title="The Foundations OS"
    lead="A ready-made workspace you download and point your AI at. Capture how your business works once, and from then on every chat opens already knowing your voice, your customers and your offers." />

<section class="mx-auto max-w-3xl px-4 py-14 sm:px-6 sm:py-16 lg:px-8">
    <x-card class="bg-blue-tint border-blue/20">
        <div class="flex flex-col gap-6 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h2 class="text-lg font-semibold tracking-tight text-ink">Buy the Foundations OS</h2>
                <p class="mt-2 leading-relaxed text-text">
                    One-time purchase. Download the workspace, run the guided setup, and your AI is
                    ready to work with you from the next chat on.
                </p>
            </div>
            <div class="shrink-0 text-right">
                <p class="text-3xl font-semibold tracking-tight text-ink">&pound;{{ $product['price'] }}</p>
                <p class="text-sm text-muted">one-time</p>
            </div>
        </div>

        <div class="mt-6 flex flex-wrap items-center gap-x-6 gap-y-3">
            @if (! empty($product['checkout_url']))
                <x-button :href="$product['checkout_url']">Buy now</x-button>
            @else
                <x-button :href="route('contact', ['topic' => 'foundations-os'])">Register your interest</x-button>
            @endif
            <x-button variant="link" :href="route('ai-foundations')">
                Prefer it done with you?
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m0 0-5-5m5 5-5 5" />
                </svg>
            </x-button>
        </div>
    </x-card>

    <div class="mt-12">
        <x-section-heading eyebrow="What you get">
            One setup, every chat ready
        </x-section-heading>

        <div class="mt-8">
            <x-process-step :number="1" title="Download the workspace">
                A single folder, no install. Open it in Claude or your assistant of choice.
            </x-process-step>
            <x-process-step :number="2" title="Tell it about your business once">
                Twenty to forty minutes of guided prompts capture your voice, your customers and
                your offers.
            </x-process-step>
            <x-process-step :number="3" title="Work from a head start">
                Every new chat opens already knowing your business. No re-explaining, no
                copy-pasting context.
            </x-process-step>
        </div>
    </div>
</section>
@endsection
