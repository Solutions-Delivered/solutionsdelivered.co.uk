@extends('layouts.app')

@section('title', 'Consultancy | Solutions Delivered')
@section('meta_description', 'The IT, web and project delivery we have done for fifteen years. It is the proof behind our AI work: real work, not clicks. Productised engagements with clear scope and price.')

@push('schema')
<x-schema.breadcrumb :items="[
    ['name' => 'Home', 'url' => route('home')],
    ['name' => 'Consultancy'],
]" />
@endpush

@section('content')
<x-page-header
    eyebrow="Consultancy"
    title="The delivery work behind the AI"
    lead="We lead with AI because we use it every day. This is the work that earns us the right to: fifteen years of software, IT and project delivery that businesses depend on. Real work, not clicks.">
    <div class="mt-8">
        <x-button :href="route('contact')">Discuss a project</x-button>
    </div>
</x-page-header>

{{-- What we do --}}
<section class="mx-auto max-w-6xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8" aria-labelledby="services-heading">
    <x-section-heading id="services-heading" eyebrow="What we do"
        lead="Four areas we have delivered in for years. Project management in particular is not always about IT; if you have a programme that needs running properly, we can run it.">
        Areas we deliver in
    </x-section-heading>

    <div class="mt-10 grid gap-6 sm:grid-cols-2">
        <x-card>
            <h3 class="text-lg font-semibold tracking-tight text-ink">Web and software development</h3>
            <p class="mt-2 leading-relaxed text-muted">Bespoke web applications, built carefully on a modern Laravel stack, accessible to WCAG 2.2 AA, and maintained properly rather than abandoned at launch.</p>
        </x-card>
        <x-card>
            <h3 class="text-lg font-semibold tracking-tight text-ink">Service management</h3>
            <p class="mt-2 leading-relaxed text-muted">ITIL-aligned service delivery and support: incident, change and problem handled with the discipline of someone who has run it at scale.</p>
        </x-card>
        <x-card>
            <h3 class="text-lg font-semibold tracking-tight text-ink">Project management</h3>
            <p class="mt-2 leading-relaxed text-muted">PRINCE2 and agile delivery for projects that need a steady hand, clear stage gates and honest reporting. Not always IT; whatever needs delivering.</p>
        </x-card>
        <x-card>
            <h3 class="text-lg font-semibold tracking-tight text-ink">Business change</h3>
            <p class="mt-2 leading-relaxed text-muted">Helping a business adopt new ways of working so the change actually sticks, rather than a process document nobody opens twice.</p>
        </x-card>
    </div>
</section>

{{-- Productised engagements --}}
<section class="border-y border-border bg-panel" aria-labelledby="packages-heading">
    <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8">
        <x-section-heading id="packages-heading" eyebrow="Productised engagements"
            lead="Some work is easier to buy when the scope and price are fixed up front. These are sharply-scoped pieces with clear deliverables and no surprises.">
            Fixed-scope ways to work with us
        </x-section-heading>

        <div class="mt-10 grid gap-6 lg:grid-cols-3">
            @foreach ($packages as $slug => $pkg)
                @php
                    $priceLine = $pkg['price'] !== null
                        ? '£'.number_format($pkg['price']).' '.($pkg['price_suffix'] ?? 'ex-VAT')
                        : 'Price on request';
                @endphp
                <div class="flex h-full flex-col rounded-md border border-border bg-surface p-6 sm:p-7">
                    <x-eyebrow>{{ $pkg['eyebrow'] }}</x-eyebrow>
                    <h3 class="mt-2 text-lg font-semibold tracking-tight text-ink">{{ $pkg['name'] }}</h3>
                    <p class="mt-2 text-sm leading-relaxed text-text">{{ $pkg['outcome'] }}</p>

                    <dl class="mt-4 flex flex-col gap-1 text-sm">
                        <div class="flex justify-between gap-3">
                            <dt class="text-muted">Duration</dt>
                            <dd class="text-text">{{ $pkg['duration'] }}</dd>
                        </div>
                        <div class="flex justify-between gap-3">
                            <dt class="text-muted">Price</dt>
                            <dd class="font-medium text-ink">{{ $priceLine }}</dd>
                        </div>
                    </dl>

                    <p class="mt-4 text-xs font-medium uppercase tracking-wide text-faint">What's included</p>
                    <ul class="mt-2 flex flex-col gap-2 text-sm text-text">
                        @foreach ($pkg['included'] as $item)
                            <li class="flex gap-2.5">
                                <svg class="mt-0.5 h-4 w-4 shrink-0 text-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m5 13 4 4L19 7" />
                                </svg>
                                <span>{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>

                    <p class="mt-4 text-sm text-muted"><span class="font-medium text-ink">Best for:</span> {{ $pkg['best_for'] }}</p>

                    <div class="mt-6 pt-1">
                        <x-button :href="route('contact', ['package' => $slug])" class="w-full">Enquire about {{ $pkg['name'] }}</x-button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="mx-auto max-w-3xl px-4 py-16 text-center sm:px-6 sm:py-20 lg:px-8">
    <h2 class="text-2xl font-semibold tracking-tight text-ink sm:text-3xl">Something that doesn't fit a box?</h2>
    <p class="mx-auto mt-4 max-w-xl leading-relaxed text-muted">Most work sits between the lines. Tell us what you need and we will scope it honestly.</p>
    <div class="mt-8 flex justify-center">
        <x-button :href="route('contact')">Get in touch</x-button>
    </div>
</section>
@endsection
