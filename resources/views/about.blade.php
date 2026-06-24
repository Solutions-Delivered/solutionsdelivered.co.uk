@extends('layouts.app')

@section('title', 'About | Solutions Delivered')
@section('meta_description', 'Solutions Delivered is Sam Jenkins: fifteen years delivering software and IT that businesses depend on, now helping small businesses get real value from AI.')

@push('schema')
<x-schema.breadcrumb :items="[
    ['name' => 'Home', 'url' => route('home')],
    ['name' => 'About'],
]" />
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Person',
    'name' => 'Sam Jenkins',
    'jobTitle' => 'Founder',
    'description' => 'Founder of Solutions Delivered. Fifteen years delivering software and IT that businesses depend on, now helping small businesses get real, daily value from AI.',
    'url' => route('about'),
    'image' => asset('images/sam-headshot.png'),
    'worksFor' => [
        '@type' => 'Organization',
        'name' => config('brand.company.legal_name'),
        'url' => url('/'),
    ],
    'knowsAbout' => ['Practical AI for business', 'AI adoption', 'Web development', 'Project management', 'ITIL service management', 'Business change'],
    'hasCredential' => [
        ['@type' => 'EducationalOccupationalCredential', 'credentialCategory' => 'degree', 'name' => 'MEng Computer Science'],
        ['@type' => 'EducationalOccupationalCredential', 'credentialCategory' => 'certificate', 'name' => 'PRINCE2'],
        ['@type' => 'EducationalOccupationalCredential', 'credentialCategory' => 'certificate', 'name' => 'ITIL'],
    ],
    'sameAs' => array_values(array_filter([config('brand.social.linkedin')])),
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
@endpush

@section('content')
<x-page-header
    eyebrow="About"
    title="Practical AI from people who still do the work"
    lead="Solutions Delivered helps small businesses get real, daily value from AI. We can say that with a straight face because we deliver software and IT for a living, and we run our own business on the same AI workspace we set up for clients." />

<section class="mx-auto max-w-6xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8">
    <div class="grid gap-12 lg:grid-cols-[1fr_360px] lg:items-start lg:gap-16">
        <div class="max-w-2xl">
            <h2 class="text-2xl font-semibold tracking-tight text-ink sm:text-3xl">The person behind it</h2>
            <div class="mt-5 flex flex-col gap-4 leading-relaxed text-text">
                <p>
                    The firm is Sam Jenkins. Fifteen years building and running systems that businesses depend
                    on, with an MEng in Computer Science and PRINCE2 and ITIL behind the practice. The work has
                    run from bespoke software to service management to delivering projects that had to land.
                </p>
                <p>
                    These days a lot of that work uses AI, properly. We build and maintain a portfolio of small
                    software products, and we use AI across our own business every day: drafting, qualifying
                    enquiries, taking recurring jobs off the list. Not demos. The actual work.
                </p>
                <p>
                    That is why we lead with AI now. Plenty of people will sell you a course about it. We would
                    rather show you the same system we use ourselves, set it up so it knows your business, and
                    leave you able to run it. We still take on the IT, web and project work too; it is the proof,
                    not a competing message.
                </p>
            </div>

            <h2 class="mt-12 text-2xl font-semibold tracking-tight text-ink sm:text-3xl">What you can count on</h2>
            <ul class="mt-5 flex flex-col gap-3 text-text">
                <li class="flex gap-3">
                    <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-warm" aria-hidden="true"></span>
                    You deal with the person doing the work, start to finish.
                </li>
                <li class="flex gap-3">
                    <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-warm" aria-hidden="true"></span>
                    Plain English, honest scoping, prices labelled ex-VAT.
                </li>
                <li class="flex gap-3">
                    <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-warm" aria-hidden="true"></span>
                    A reply within {{ config('brand.contact.response_time') }}, and accessibility built in to WCAG 2.2 AA.
                </li>
            </ul>

            <div class="mt-10">
                <x-button :href="route('contact')">Work with us</x-button>
            </div>
        </div>

        <figure class="lg:sticky lg:top-24">
            <picture>
                <source type="image/avif"
                        srcset="{{ asset('images/sam-headshot-400.avif') }} 400w, {{ asset('images/sam-headshot-760.avif') }} 760w"
                        sizes="(min-width: 1024px) 360px, 100vw">
                <source type="image/webp"
                        srcset="{{ asset('images/sam-headshot-400.webp') }} 400w, {{ asset('images/sam-headshot-760.webp') }} 760w"
                        sizes="(min-width: 1024px) 360px, 100vw">
                <img src="{{ asset('images/sam-headshot.png') }}"
                     width="760" height="570"
                     alt="Sam Jenkins, founder of Solutions Delivered."
                     class="w-full rounded-lg border border-border bg-panel object-cover">
            </picture>
            <figcaption class="mt-3 text-sm text-faint">Sam Jenkins, Solutions Delivered.</figcaption>
        </figure>
    </div>
</section>
@endsection
