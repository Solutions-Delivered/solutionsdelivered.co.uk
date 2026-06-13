@extends('layouts.app')

@section('title', 'How it works | Solutions Delivered')
@section('meta_description', 'How we work: a straight conversation, a clear proposal, delivery done with you, and support afterwards. The same approach whether it is AI or IT work.')

@push('schema')
<x-schema.breadcrumb :items="[
    ['name' => 'Home', 'url' => route('home')],
    ['name' => 'How it works'],
]" />
@endpush

@section('content')
<x-page-header
    eyebrow="How we work"
    title="A clear path from first conversation to working AI"
    lead="The same four steps whether we are building your AI workspace or delivering a piece of IT or project work. No mystery, no handing it to a junior, no surprises on the invoice." />

{{-- The four steps --}}
<section class="mx-auto max-w-3xl px-4 py-14 sm:px-6 sm:py-16 lg:px-8" aria-labelledby="steps-heading">
    <h2 id="steps-heading" class="sr-only">Our four steps</h2>
    <div class="border-b border-border">
        <x-process-step :number="1" title="Initial discussion">
            We start with a straight conversation about your business, how you work now, and where AI or better
            systems could genuinely save you time. We will tell you if we are not the right fit. No pitch, no pressure.
        </x-process-step>
        <x-process-step :number="2" title="Proposal and planning">
            We write up what we would do in plain English: the scope, what you will end up with, the timeline,
            and what it costs (ex-VAT, clearly labelled). You decide from there, with everything in front of you.
        </x-process-step>
        <x-process-step :number="3" title="Collaborative delivery">
            We build it with you, not behind a curtain. You see the work as it happens, we explain the decisions,
            and you learn enough to run it yourself rather than depending on us forever.
        </x-process-step>
        <x-process-step :number="4" title="Handover and support">
            You finish with something that works on your own stack and the confidence to use it. We stay on hand,
            replying within {{ config('brand.contact.response_time') }} when you need us.
        </x-process-step>
    </div>
</section>

{{-- What to expect --}}
<section class="border-y border-border bg-panel" aria-labelledby="expect-heading">
    <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8">
        <x-section-heading id="expect-heading" eyebrow="What to expect">
            Working with us, in practice
        </x-section-heading>
        <div class="mt-8 grid gap-6 sm:grid-cols-3">
            <x-card>
                <h3 class="font-semibold text-ink">Direct access</h3>
                <p class="mt-2 text-sm leading-relaxed text-muted">You talk to the person doing the work. No account managers, no telephone queue.</p>
            </x-card>
            <x-card>
                <h3 class="font-semibold text-ink">Plain English</h3>
                <p class="mt-2 text-sm leading-relaxed text-muted">We explain what we are doing and why, without jargon, so you stay in control of the decisions.</p>
            </x-card>
            <x-card>
                <h3 class="font-semibold text-ink">No bloat</h3>
                <p class="mt-2 text-sm leading-relaxed text-muted">We build what you need and nothing you don't. You are not paying for features you will never use.</p>
            </x-card>
        </div>
    </div>
</section>

{{-- Good fit --}}
<section class="mx-auto max-w-3xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8" aria-labelledby="fit-heading">
    <x-section-heading id="fit-heading" eyebrow="When we're a good fit">
        Who we work best with
    </x-section-heading>
    <p class="mt-5 leading-relaxed text-text">
        Small business owners who are busy and practical, who want AI and their systems to pull real weight, and
        who have no interest in becoming a prompt engineer or an IT department. You do not need to be technical.
        If you can hold a conversation about your business, we can work with you.
    </p>

    <div class="mt-10">
        <x-button :href="route('contact')">Start a conversation</x-button>
    </div>
</section>
@endsection
