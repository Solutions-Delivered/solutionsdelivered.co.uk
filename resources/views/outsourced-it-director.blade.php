@extends('layouts.app')

@section('title', 'Outsourced IT director for small businesses | Solutions Delivered')
@section('meta_description', 'One senior person who owns your technology decisions, vendors, security and continuity, without a full-time salary. For UK businesses of 1 to 20 staff.')
@section('og_title', 'An IT director, without the salary')
@section('og_description', 'One senior person who owns your technology decisions, vendors, security and continuity, without a full-time salary. For UK businesses of 1 to 20 staff.')
@section('twitter_title', 'An IT director, without the salary')
@section('twitter_description', 'One senior person who owns your technology decisions, vendors, security and continuity, without a full-time salary. For UK businesses of 1 to 20 staff.')

@php
    $faqs = [
        [
            'question' => 'Is this the same as a fractional CTO?',
            'answer' => 'The work overlaps, but the labels are sold to different buyers. "Fractional CTO" grew up around funded startups with in-house development teams, and the scope usually leans towards building a product. An outsourced IT director is the older, UK-native framing: someone who owns the technology a business runs on. If you are an owner-managed business rather than a startup, the second one usually fits better.',
        ],
        [
            'question' => 'What does it cost?',
            'answer' => 'It depends on how much of the role you need, so we scope it in a conversation rather than publishing a rate card that would be wrong for most people. What we can tell you is the shape: this is advisory-weighted, measured in a few hours a month rather than days a week, and deliberately cheaper than the build-weighted engagements the fractional CTO market is priced around.',
        ],
        [
            'question' => 'Do you write code?',
            'answer' => 'Yes, but that is a separate conversation. The director role is about deciding what should be built, bought or left alone. If something does need building, we can do it, or we can help you brief and manage whoever does. Keeping those two jobs distinct is deliberate: an adviser who only ever recommends their own build work is not an adviser.',
        ],
        [
            'question' => 'We already have an IT support company. Does this replace them?',
            'answer' => 'No, and you should be wary of anyone who says it does. A support provider fixes things. A director decides things: whether that contract is good value, whether the backups are actually tested, whether the quote in front of you is fair. Those are different jobs and they work better with different people doing them.',
        ],
        [
            'question' => 'How quickly can you start?',
            'answer' => 'The first conversation costs nothing and usually tells you whether this is the right shape of help. If it is, we agree what the first ninety days look like before anything is signed.',
        ],
    ];
@endphp

@push('schema')
<x-schema.breadcrumb :items="[
    ['name' => 'Home', 'url' => route('home')],
    ['name' => 'Outsourced IT director'],
]" />
{{-- Laravel 13 compiles a literal at-context key as a Blade
    directive, which corrupts the JSON-LD. Build the key at runtime. --}}
<script type="application/ld+json">
{!! json_encode([
    '@'.'context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Outsourced IT director',
    'description' => 'A part-time IT director for owner-managed UK businesses: one senior person who owns technology decisions, vendor relationships, security posture and continuity planning.',
    'serviceType' => ['Technology leadership', 'IT strategy', 'Vendor management', 'IT continuity'],
    'provider' => [
        '@type' => 'Organization',
        'name' => config('brand.company.legal_name'),
        'url' => url('/'),
    ],
    'areaServed' => ['@type' => 'Country', 'name' => 'United Kingdom'],
    'audience' => [
        '@type' => 'BusinessAudience',
        'name' => 'Owner-managed businesses with 1 to 20 staff and no in-house technical leadership',
    ],
], JSON_UNESCAPED_SLASHES) !!}
</script>
{{-- FAQPage: added for AI and LLM citability, not Google rich results. --}}
<script type="application/ld+json">
{!! json_encode([
    '@'.'context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => collect($faqs)->map(fn ($faq) => [
        '@type' => 'Question',
        'name' => $faq['question'],
        'acceptedAnswer' => ['@type' => 'Answer', 'text' => $faq['answer']],
    ])->values()->all(),
], JSON_UNESCAPED_SLASHES) !!}
</script>
@endpush

@section('content')
<x-page-header
    eyebrow="Outsourced IT director"
    title="An IT director, without the salary"
    lead="One senior person who owns your technology decisions, your suppliers, your security posture and your continuity plan. Not a helpdesk, and not a full-time hire.">
    <div class="mt-8">
        <x-button :href="route('contact')">Book a conversation</x-button>
    </div>
</x-page-header>

{{-- Direct answer --}}
<section class="mx-auto max-w-3xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8" aria-labelledby="what-heading">
    <h2 id="what-heading" class="text-2xl font-semibold tracking-tight text-ink sm:text-3xl">What is an outsourced IT director?</h2>
    <div class="mt-6 space-y-4 leading-relaxed text-muted">
        <p>An outsourced IT director is someone senior who owns the technology side of your business a few hours a month, instead of a few days a week. They make and own the decisions a director would make: which systems you run, whether a supplier is doing what you pay them for, how exposed you are, and what happens when something breaks or someone leaves.</p>
        <p>It exists because of a specific gap. Businesses of ten or twenty people have real technology decisions to make and nobody whose job it is to make them. The owner ends up doing it between everything else, usually by asking whoever sold them the last thing.</p>
    </div>
</section>

{{-- Who it is for --}}
<section class="border-y border-border bg-panel" aria-labelledby="fit-heading">
    <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8">
        <x-section-heading id="fit-heading" eyebrow="Fit"
            lead="This is a narrow service and it is not right for everyone. Here is where the line sits.">
            Is this the right thing to buy?
        </x-section-heading>

        <div class="mt-10 grid gap-6 sm:grid-cols-2">
            <x-card>
                <h3 class="text-lg font-semibold tracking-tight text-ink">It fits if</h3>
                <ul class="mt-3 space-y-2 leading-relaxed text-muted">
                    <li>You have roughly 1 to 20 staff and nobody technical at a senior level.</li>
                    <li>Technology decisions keep landing on you, and you are guessing.</li>
                    <li>You have suppliers you cannot really evaluate.</li>
                    <li>A customer or insurer has started asking questions you cannot answer.</li>
                    <li>One person understands too much of how things work.</li>
                </ul>
            </x-card>
            <x-card>
                <h3 class="text-lg font-semibold tracking-tight text-ink">It does not fit if</h3>
                <ul class="mt-3 space-y-2 leading-relaxed text-muted">
                    <li><strong class="font-medium text-ink">You need a helpdesk.</strong> If the problem is broken laptops and password resets, you want a managed service provider, not a director. Buy that instead.</li>
                    <li>You are building software as your product and need someone leading a development team full time.</li>
                    <li>You want someone to rubber-stamp a decision you have already made.</li>
                </ul>
            </x-card>
        </div>

        <p class="mt-8 max-w-3xl leading-relaxed text-muted">If you are weighing this against hiring someone, <a href="/guides/hire-it-person-or-outsource" class="text-blue underline-offset-2 hover:underline">the three jobs owners tend to conflate</a> is worth ten minutes first. If you are not sure you need this level of help at all, <a href="/guides/do-i-need-a-cto" class="text-blue underline-offset-2 hover:underline">the honest answer is often no</a>.</p>
    </div>
</section>

{{-- What it covers --}}
<section class="mx-auto max-w-6xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8" aria-labelledby="covers-heading">
    <x-section-heading id="covers-heading" eyebrow="Scope"
        lead="Five things, consistently. Not a menu to pick from, because they tend to fail together.">
        What does an outsourced IT director actually do?
    </x-section-heading>

    <div class="mt-10 grid gap-6 sm:grid-cols-2">
        <x-card>
            <h3 class="text-lg font-semibold tracking-tight text-ink">Decisions</h3>
            <p class="mt-2 leading-relaxed text-muted">Which system, whether to replace or leave alone, whether the quote in front of you is fair. Decisions get made and written down, so the reasoning survives the meeting.</p>
        </x-card>
        <x-card>
            <h3 class="text-lg font-semibold tracking-tight text-ink">Suppliers</h3>
            <p class="mt-2 leading-relaxed text-muted">Someone who can read the contract, ask the awkward question and tell you whether you are getting what you pay for. Most businesses have at least one supplier relationship nobody has reviewed in years.</p>
        </x-card>
        <x-card>
            <h3 class="text-lg font-semibold tracking-tight text-ink">Security posture</h3>
            <p class="mt-2 leading-relaxed text-muted">Where you are actually exposed, in plain terms, and what is worth fixing first. Increasingly this is driven by a customer, an insurer or a tender asking for evidence you do not have yet.</p>
        </x-card>
        <x-card>
            <h3 class="text-lg font-semibold tracking-tight text-ink">Continuity</h3>
            <p class="mt-2 leading-relaxed text-muted">What happens when a system fails, a supplier disappears or the one person who understands it all hands in their notice. Documented, and tested rather than assumed.</p>
        </x-card>
        <x-card class="sm:col-span-2">
            <h3 class="text-lg font-semibold tracking-tight text-ink">AI judgement calls</h3>
            <p class="mt-2 leading-relaxed text-muted">Which of it is worth your attention and which is noise. Mostly this means saying no to things, and being specific about the few places it genuinely pays back. We use these tools daily in our own delivery work, which is a better basis for advice than having read about them.</p>
        </x-card>
    </div>
</section>

{{-- How it works --}}
<section class="border-y border-border bg-panel" aria-labelledby="how-heading">
    <div class="mx-auto max-w-3xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8">
        <x-section-heading id="how-heading" eyebrow="How it works"
            lead="Deliberately unglamorous.">
            How does the engagement work?
        </x-section-heading>

        <div class="mt-8 space-y-4 leading-relaxed text-muted">
            <p><strong class="font-medium text-ink">A conversation first.</strong> An hour, no charge, no obligation. Often it ends with us telling you that you need something cheaper than this.</p>
            <p><strong class="font-medium text-ink">Then a look at what you have.</strong> Systems, suppliers, exposure, and where the single points of failure are. You get that written down whether or not you carry on with us. It is yours.</p>
            <p><strong class="font-medium text-ink">Then a standing rhythm.</strong> A regular slot for decisions, plus availability when something lands unexpectedly. Scope and cost agreed up front, reviewed openly, cancellable.</p>
            <p>The longer version is on <a href="{{ route('how-it-works') }}" class="text-blue underline-offset-2 hover:underline">how it works</a>. When something needs building rather than deciding, that runs as <a href="{{ route('consultancy') }}" class="text-blue underline-offset-2 hover:underline">separate, scoped delivery work</a>.</p>
        </div>
    </div>
</section>

{{-- Who you would be working with --}}
<section class="mx-auto max-w-3xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8" aria-labelledby="who-heading">
    <h2 id="who-heading" class="text-2xl font-semibold tracking-tight text-ink sm:text-3xl">Who would you be working with?</h2>
    <div class="mt-6 space-y-4 leading-relaxed text-muted">
        <p>Sam Jenkins. MEng in Computer Science, PRINCE2 and ITIL qualified, with a background delivering software and services in government and other environments where getting it wrong is expensive. Solutions Delivered has been trading since 2019 and is based in the North West, working with businesses across the UK.</p>
        <p>You would be working with him directly. That is the point of the service and also its limit: it does not scale to a large estate, which is why the fit section above is as narrow as it is.</p>
        <p>You should check any of that. <a href="/guides/vet-an-it-consultant" class="text-blue underline-offset-2 hover:underline">Here is the checklist we would want you to run on us</a>, including where to verify each claim free.</p>
    </div>
</section>

{{-- FAQ --}}
<section class="border-y border-border bg-panel" aria-labelledby="faq-heading">
    <div class="mx-auto max-w-3xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8">
        <x-section-heading id="faq-heading" eyebrow="Questions">
            Common questions
        </x-section-heading>

        <x-faq class="mt-8">
            @foreach ($faqs as $faq)
                <x-faq-item :question="$faq['question']">{{ $faq['answer'] }}</x-faq-item>
            @endforeach
        </x-faq>
    </div>
</section>

{{-- CTA --}}
<section class="mx-auto max-w-3xl px-4 py-16 text-center sm:px-6 sm:py-20 lg:px-8" aria-labelledby="cta-heading">
    <h2 id="cta-heading" class="text-2xl font-semibold tracking-tight text-ink sm:text-3xl">Book a conversation</h2>
    <p class="mt-4 leading-relaxed text-muted">An hour, no charge. If it is not the right thing for you, we will say so and point you at what is.</p>
    <div class="mt-8">
        <x-button :href="route('contact')">Get in touch</x-button>
    </div>
</section>
@endsection
