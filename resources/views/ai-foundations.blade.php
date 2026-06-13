@extends('layouts.app')

@section('title', 'AI Foundations | Solutions Delivered')
@section('meta_description', 'AI Foundations is a guided, done-with-you build of an AI workspace for your business, over four weeks in a small group. We are finalising the details.')
@section('robots', 'noindex, follow')

@section('content')
<x-page-header
    eyebrow="Done with you"
    title="AI Foundations"
    lead="A guided, four-week build of an AI workspace that knows your business, done with you in a small group. One evening call a week, with light homework between, so it gets used rather than filed away." />

<section class="mx-auto max-w-3xl px-4 py-14 sm:px-6 sm:py-16 lg:px-8">
    <x-card class="bg-blue-tint border-blue/20">
        <h2 class="text-lg font-semibold tracking-tight text-ink">We're finalising this</h2>
        <p class="mt-3 leading-relaxed text-text">
            We are reworking the shape of AI Foundations so the detail and the price land right. Rather than
            publish something we will change next week, we would rather hear what you are trying to do and tell
            you plainly whether this is the right fit.
        </p>
        <div class="mt-6 flex flex-wrap items-center gap-x-6 gap-y-3">
            <x-button :href="route('contact', ['topic' => 'ai-foundations'])">Register your interest</x-button>
            <x-button variant="link" :href="route('how-it-works')">
                See how we work
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m0 0-5-5m5 5-5 5" />
                </svg>
            </x-button>
        </div>
    </x-card>
</section>
@endsection
