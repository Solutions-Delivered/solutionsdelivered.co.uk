@extends('layouts.app')

@section('title', 'Solutions Delivered | Practical AI for small businesses')
@section('meta_description', 'We help small businesses get real, daily value from AI, and we still deliver the IT and project work behind it. Real work, not clicks.')

{{-- Preload the LCP hero image so it starts downloading before the CSS resolves it.
     AVIF-typed: browsers without AVIF support ignore this and fall back to the <picture> sources. --}}
@push('head')
<link rel="preload" as="image" type="image/avif"
      imagesrcset="{{ asset('images/sam-presenting-800.avif') }} 800w, {{ asset('images/sam-presenting-1100.avif') }} 1100w"
      imagesizes="(min-width: 1024px) 470px, 100vw" fetchpriority="high">
@endpush

@section('content')
{{-- Hero --}}
<section class="border-b border-border">
    <div class="mx-auto grid max-w-6xl gap-12 px-4 py-16 sm:px-6 sm:py-20 lg:grid-cols-[1.1fr_0.9fr] lg:items-center lg:gap-16 lg:px-8 lg:py-24">
        <div class="rise-in">
            <x-eyebrow>Practical AI, applied</x-eyebrow>
            <h1 class="mt-4 text-4xl font-semibold leading-tight tracking-tight text-ink sm:text-5xl">
                AI that knows your business and actually gets used.
            </h1>
            <p class="mt-6 max-w-xl text-lg leading-relaxed text-muted">
                Most small businesses have tried AI, got generic output, and quietly went back to doing it
                themselves. The tool was never the problem. We help you give your AI a memory of how your
                business actually works, so it produces work you would genuinely send.
            </p>
            <p class="mt-5 max-w-xl leading-relaxed text-text">
                We don't just talk about AI. We use it in our day-to-day work, alongside the IT and project
                delivery we have run for fifteen years. Real work, not clicks.
            </p>
            <div class="mt-8 flex flex-wrap items-center gap-x-6 gap-y-3">
                <x-button :href="route('contact')">Talk to us</x-button>
                <x-button variant="link" :href="route('how-it-works')">
                    See how it works
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m0 0-5-5m5 5-5 5" />
                    </svg>
                </x-button>
            </div>
        </div>

        <figure class="rise-in">
            <picture>
                <source type="image/avif"
                        srcset="{{ asset('images/sam-presenting-800.avif') }} 800w, {{ asset('images/sam-presenting-1100.avif') }} 1100w"
                        sizes="(min-width: 1024px) 470px, 100vw">
                <source type="image/webp"
                        srcset="{{ asset('images/sam-presenting-800.webp') }} 800w, {{ asset('images/sam-presenting-1100.webp') }} 1100w"
                        sizes="(min-width: 1024px) 470px, 100vw">
                <img src="{{ asset('images/sam-presenting.jpeg') }}"
                     width="1100" height="825" fetchpriority="high"
                     alt="Sam Jenkins presenting on practical AI for business, his slides on the screen behind him."
                     class="w-full rounded-lg border border-border object-cover">
            </picture>
            <figcaption class="mt-3 text-sm text-faint">Sam Jenkins, speaking on practical AI for small businesses.</figcaption>
        </figure>
    </div>
</section>

{{-- Offer ladder --}}
<section class="mx-auto max-w-6xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8" aria-labelledby="offer-heading">
    <x-section-heading
        id="offer-heading"
        eyebrow="What we offer"
        lead="Two ways to get there, depending on whether you would rather do it yourself or build it with us.">
        Start where it suits you
    </x-section-heading>

    @php($fosOnSale = config('polar.products.foundations-os.on_sale', false))
    <div class="mt-10 grid gap-6 sm:grid-cols-2">
        <x-offer-card
            name="The Foundations OS"
            promise="A ready-built Claude workspace you set up once. From then on every chat opens already knowing your business."
            price="£197"
            :priceNote="$fosOnSale ? '+ VAT, one-time' : '+ VAT · launching soon'"
            :href="route('foundations-os')"
            :cta="$fosOnSale ? 'Get the Foundations OS' : 'Register your interest'"
            :items="[
                'A self-serve workspace you download and set up in 20 to 40 minutes',
                'Capture your business once, then every chat already knows it',
                'For owners who already use Claude and want to move quickly',
            ]" />

        <x-offer-card
            name="AI Foundations"
            promise="A guided, four-week build of the same workspace, done with you in a small group."
            :href="route('ai-foundations')"
            cta="What's coming"
            :recommended="true"
            :items="[
                'One evening call a week, recorded, in a small group',
                'We build each layer with you, with light homework between',
                'You finish with the workspace built and the habit of using it',
            ]" />
    </div>

    <p class="mt-6 text-sm text-muted">
        Prices are shown ex-VAT.
        {{ $fosOnSale ? 'The Foundations OS is available now; AI Foundations is being finalised.' : 'The Foundations OS is launching shortly and AI Foundations is being finalised.' }}
        Not sure which fits? <a href="{{ route('contact') }}" class="text-blue hover:text-blue-deep">Tell us what you are after</a>
        and we will point you to the right one.
    </p>
</section>

{{-- How it works summary --}}
<section class="border-y border-border bg-panel" aria-labelledby="how-heading">
    <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8">
        <x-section-heading id="how-heading" eyebrow="How we work"
            lead="The same four steps whether it's AI or IT work: a straight conversation, a clear proposal, delivery done with you, then support afterwards.">
            A clear path from first conversation to working AI
        </x-section-heading>

        <ol class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            @foreach (['Initial discussion', 'Proposal and planning', 'Collaborative delivery', 'Handover and support'] as $i => $step)
                <li class="flex items-baseline gap-3">
                    <span class="font-mono text-sm text-faint" aria-hidden="true">{{ sprintf('%02d', $i + 1) }}</span>
                    <span class="font-medium text-ink">{{ $step }}</span>
                </li>
            @endforeach
        </ol>

        <div class="mt-8">
            <x-button variant="link" :href="route('how-it-works')">
                Read how we work in full
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m0 0-5-5m5 5-5 5" />
                </svg>
            </x-button>
        </div>
    </div>
</section>

{{-- Proof / why trust us --}}
<section class="mx-auto max-w-6xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8" aria-labelledby="proof-heading">
    <div class="grid gap-10 lg:grid-cols-2 lg:gap-16">
        <div>
            <x-section-heading id="proof-heading" eyebrow="Why us">
                Fifteen years shipping systems businesses depend on
            </x-section-heading>
            <p class="mt-5 leading-relaxed text-text">
                Solutions Delivered is Sam Jenkins, who has spent fifteen years delivering software and IT
                that businesses run on, with an MEng in Computer Science and PRINCE2 and ITIL behind it. We
                run a portfolio of small software products built with AI, and we use the same AI workspace we
                set up for clients to run our own business.
            </p>
            <p class="mt-4 leading-relaxed text-text">
                That is the point of the name. The AI advice comes from people who still do the work, not from
                people selling a course about it.
            </p>
        </div>

        <x-card class="self-start">
            <h3 class="text-lg font-semibold tracking-tight text-ink">When we're a good fit</h3>
            <ul class="mt-4 flex flex-col gap-3 text-text">
                <li class="flex gap-3">
                    <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-warm" aria-hidden="true"></span>
                    You talk to the person doing the work, not an account manager.
                </li>
                <li class="flex gap-3">
                    <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-warm" aria-hidden="true"></span>
                    You get a reply within {{ config('brand.contact.response_time') }}, not a ticket number.
                </li>
                <li class="flex gap-3">
                    <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-warm" aria-hidden="true"></span>
                    We build what you need and nothing you don't. No bloat.
                </li>
            </ul>
            <p class="mt-5 text-sm text-muted">
                We also still take on the IT, web and project work we have always done. If that is what you
                need, <a href="{{ route('consultancy') }}" class="text-blue hover:text-blue-deep">see our consultancy work</a>.
            </p>
        </x-card>
    </div>
</section>

{{-- Final CTA --}}
<section class="border-t border-border bg-panel" aria-labelledby="cta-heading">
    <div class="mx-auto max-w-3xl px-4 py-16 text-center sm:px-6 sm:py-20 lg:px-8">
        <h2 id="cta-heading" class="text-2xl font-semibold tracking-tight text-ink sm:text-3xl">
            Tell us what you're trying to do with AI
        </h2>
        <p class="mx-auto mt-4 max-w-xl leading-relaxed text-muted">
            One honest conversation, no obligation. We will tell you plainly whether we can help and how.
        </p>
        <div class="mt-8 flex justify-center">
            <x-button :href="route('contact')">Get in touch</x-button>
        </div>
    </div>
</section>
@endsection
