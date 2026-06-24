@extends('layouts.app')

@section('title', 'The Foundations OS | Solutions Delivered')
@section('meta_description', 'A ready-built Claude workspace you set up once. From then on every chat opens already knowing your business, your customers and how you sound. £197 + VAT, one-time.')

@php
    $onSale = $product['on_sale'] ?? false;
    $buyUrl = $onSale ? ($product['checkout_url'] ?? null) : null;
    $registerUrl = route('contact', ['topic' => 'foundations-os']);

    // Single source for the FAQ: drives both the visible accordion and the FAQPage schema.
    $faqs = [
        ['question' => 'Do I need Claude already, and which plan?', 'answer' => 'Yes, and you will need at least a Claude Pro plan. The Foundations OS runs in Claude Cowork, which is not available on the free tier. If you have not used Claude yet, start there first, then come back. The value is in solving problems you have already hit.'],
        ['question' => 'Where does my business data go? Can you see it?', 'answer' => 'We never get access to your files or your data. The Foundations OS is just a workspace; we cannot see what you put in it. When you use it, your content is sent to Anthropic, the company behind Claude, because that is what powers Claude Cowork, the same as any normal Claude session. It does not pass through Solutions Delivered or Sam at any point.'],
        ['question' => 'What if I am not technical?', 'answer' => 'You do not write any code. The setup, and everything after it, is a conversation in plain English. You can talk rather than type.'],
        ['question' => 'Can I add my own workflows?', 'answer' => 'Absolutely, and we would love to see what you build. Describe a workflow in plain English and the OS writes it into a skill you can reuse, so the workspace grows with how you work. If you come up with something clever, tell us. We are keen to feature and promote the best workflows our buyers create.'],
        ['question' => 'What is the difference between this and AI Foundations?', 'answer' => 'The Foundations OS is the self-serve version: you set it up yourself in one sitting. AI Foundations (£1,500 + VAT) is the done-with-you build. Over four weekly evening calls we work alongside you to get it genuinely right, then run you through the activities and homework that turn it into a habit. You finish with a workspace built to a higher standard and the confidence to use it every day. The Foundations OS is included.'],
        ['question' => 'What is your refund policy?', 'answer' => 'Covered by the 30-day One-Workflow Guarantee above. If your AI is not doing at least one piece of work noticeably better within 30 days, we fix it with you or refund you in full.'],
    ];
@endphp

@push('schema')
<x-schema.breadcrumb :items="[
    ['name' => 'Home', 'url' => route('home')],
    ['name' => 'The Foundations OS'],
]" />
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Product',
    'name' => 'The Foundations OS',
    'description' => 'A ready-built Claude workspace you set up once. From then on every chat opens already knowing your business, your customers and how you sound.',
    'brand' => ['@type' => 'Brand', 'name' => config('brand.company.name')],
    'image' => asset('og-image.png'),
    'offers' => [
        '@type' => 'Offer',
        'price' => (string) ($product['price'] ?? 197),
        'priceCurrency' => 'GBP',
        'url' => $buyUrl ?? route('foundations-os'),
        'availability' => $buyUrl ? 'https://schema.org/InStock' : 'https://schema.org/PreOrder',
        'seller' => ['@type' => 'Organization', 'name' => config('brand.company.legal_name')],
    ],
], JSON_UNESCAPED_SLASHES) !!}
</script>
{{-- FAQPage: added for AI/LLM citability, not Google rich results (FAQ rich results were retired May 2026). --}}
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => collect($faqs)->map(fn ($faq) => [
        '@type' => 'Question',
        'name' => $faq['question'],
        'acceptedAnswer' => ['@type' => 'Answer', 'text' => $faq['answer']],
    ])->all(),
], JSON_UNESCAPED_SLASHES) !!}
</script>
@endpush

@section('content')

@unless ($onSale)
{{-- Holding state: sale paused, capture interest. --}}
<div class="border-b border-border bg-blue-tint">
    <div class="mx-auto max-w-6xl px-4 py-3 text-center text-sm text-ink sm:px-6 lg:px-8">
        The Foundations OS is launching shortly.
        <a href="{{ $registerUrl }}" class="font-medium text-blue underline-offset-2 hover:underline">Register your interest</a>
        and we'll email you the moment it opens.
    </div>
</div>
@endunless

{{-- HERO --}}
<section class="border-b border-border">
    <div class="mx-auto grid max-w-6xl items-center gap-12 px-4 py-16 sm:px-6 sm:py-20 lg:grid-cols-[1.05fr_.95fr] lg:gap-14 lg:px-8">
        <div class="rise-in">
            <x-eyebrow class="mb-3">For people who already use Claude</x-eyebrow>
            <h1 class="text-3xl font-semibold leading-tight tracking-tight text-ink sm:text-4xl lg:text-5xl">
                Set your AI up once. Never re-explain your business again.
            </h1>
            <p class="mt-5 max-w-xl text-lg leading-relaxed text-muted">
                The Foundations OS is a ready-built Claude workspace. You point Claude at it, spend 20 to 40
                minutes telling it about your business, and from then on every chat opens already knowing your
                work, your customers and how you sound.
            </p>
            <div class="mt-8 flex flex-wrap items-center gap-x-6 gap-y-3">
                @if ($buyUrl)
                    <x-button :href="$buyUrl">Get the Foundations OS, £197 + VAT</x-button>
                @else
                    <x-button :href="$registerUrl">Register your interest</x-button>
                @endif
                <x-button variant="link" :href="route('ai-foundations')">
                    Rather have it built with you?
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m0 0-5-5m5 5-5 5" />
                    </svg>
                </x-button>
            </div>
            <p class="mt-5 text-sm text-muted">
                One payment, <strong class="font-medium text-text">yours to keep</strong>. Founding price. 30-day guarantee.
            </p>
        </div>

        {{-- Chat mockup --}}
        <div class="rise-in" aria-hidden="true">
            <div class="overflow-hidden rounded-xl border border-border bg-surface shadow-xl shadow-ink/10">
                <div class="flex items-center gap-2.5 border-b border-border bg-panel px-4 py-3">
                    <x-brand.monogram class="h-5 w-5" />
                    <span class="font-mono text-xs tracking-wide text-muted">Foundations OS · Claude Cowork</span>
                </div>
                <div class="p-5">
                    <div class="mb-3 ml-10 rounded-2xl rounded-br-sm bg-blue-tint px-4 py-3 text-sm leading-snug text-ink">
                        Draft a reply to the Henderson quote
                    </div>
                    <div class="mb-3 flex flex-wrap gap-2">
                        @foreach (['company', 'voice', 'customers', 'offers'] as $chip)
                            <span class="inline-flex items-center gap-1 rounded-full border border-blue/20 bg-blue-tint px-2.5 py-1 font-mono text-[0.7rem] text-blue">
                                <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m5 13 4 4L19 7" /></svg>
                                {{ $chip }}
                            </span>
                        @endforeach
                    </div>
                    <div class="rounded-2xl rounded-bl-sm border border-border bg-bg px-4 py-3 text-sm leading-snug text-text">
                        <span class="mb-1.5 block font-mono text-[0.65rem] uppercase tracking-widest text-blue">Claude</span>
                        Routing this to your Email workstation. Writing in your voice, matched to how Henderson
                        wrote, no re-explaining needed…
                    </div>
                    <p class="mt-3 text-center text-sm italic text-muted">Nothing pasted in. It already knew.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- TRUST STRIP --}}
<div class="border-b border-border bg-panel">
    <div class="mx-auto flex max-w-6xl flex-wrap items-center justify-center gap-x-10 gap-y-3 px-4 py-5 text-sm text-muted sm:px-6 lg:px-8">
        @foreach ([
            '<b class="font-semibold text-ink">One-time</b> purchase, yours to keep',
            'Set up in <b class="font-semibold text-ink">20–40 minutes</b>',
            '<b class="font-semibold text-ink">No code</b>, it is a conversation',
            'Built by <b class="font-semibold text-ink">Sam Jenkins</b>, used daily to run Solutions Delivered',
        ] as $item)
            <span class="inline-flex items-center gap-2">
                <span class="h-1.5 w-1.5 shrink-0 rounded-full bg-warm" aria-hidden="true"></span>
                {!! $item !!}
            </span>
        @endforeach
    </div>
</div>

{{-- PROBLEM --}}
<section class="mx-auto max-w-6xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8">
    <div class="mx-auto max-w-3xl text-center">
        <x-eyebrow class="mb-3">The problem this fixes</x-eyebrow>
        <h2 class="text-2xl font-semibold tracking-tight text-ink sm:text-3xl">The tool is capable. The setup is the bit that is missing.</h2>
        <p class="mx-auto mt-6 max-w-2xl text-lg leading-relaxed text-text">
            Most people using Claude start every session cold. You can put a bit about yourself in the settings,
            but the more you load in there, the more of every new chat's memory gets used up before you have even
            started. So people keep it thin, and end up re-explaining the same background anyway.
        </p>
        <p class="mx-auto mt-4 max-w-2xl leading-relaxed text-muted">
            The Foundations OS takes a different approach. It loads only a little to begin with, then pulls in the
            right context exactly when it is needed, and only that. Your whole business is there, ready, without
            weighing down every conversation.
        </p>
    </div>

    <div class="mt-12 grid gap-6 sm:grid-cols-2">
        <x-card>
            <h3 class="font-mono text-xs uppercase tracking-widest text-muted">Every session today</h3>
            <ul class="mt-4 flex flex-col gap-3">
                @foreach ([
                    'Start cold, or bloat your settings and burn memory every chat',
                    'Re-explain your customers and your offers',
                    'Fix the draft that sounds nothing like you',
                    'Lose the good context when the chat ends',
                ] as $point)
                    <li class="flex gap-3 text-sm leading-relaxed text-text">
                        <span class="mt-0.5 font-semibold text-error" aria-hidden="true">✕</span>{{ $point }}
                    </li>
                @endforeach
            </ul>
        </x-card>
        <x-card class="border-blue/30 shadow-lg shadow-blue/5">
            <h3 class="font-mono text-xs uppercase tracking-widest text-blue">Every session with the Foundations OS</h3>
            <ul class="mt-4 flex flex-col gap-3">
                @foreach ([
                    'It loads light, then pulls in your business only when it is needed',
                    'Work routes to the right place on its own',
                    'Drafts come back sounding like you wrote them',
                    'Your context stays, and gets sharper over time',
                ] as $point)
                    <li class="flex gap-3 text-sm leading-relaxed text-text">
                        <svg class="mt-0.5 h-4 w-4 shrink-0 text-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m5 13 4 4L19 7" /></svg>
                        {{ $point }}
                    </li>
                @endforeach
            </ul>
        </x-card>
    </div>
</section>

{{-- HOW IT WORKS --}}
<section class="border-y border-border bg-panel">
    <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <x-eyebrow class="mb-3">How it works</x-eyebrow>
            <h2 class="text-2xl font-semibold tracking-tight text-ink sm:text-3xl">Three steps, then you are working from a head start</h2>
        </div>
        <div class="mt-10 grid gap-6 md:grid-cols-3">
            @foreach ([
                ['01', 'Install in five minutes', 'Add the Foundations OS from the Customize menu, then point Claude at your workspace folder. That is the whole install. Nothing to configure.', '~5 minutes'],
                ['02', 'Tell it about your business, once', 'A guided conversation captures what you do, who you serve, what you sell and how you write. You can talk rather than type, in sections, at your pace.', '20–40 minutes, one sitting'],
                ['03', 'Get straight to work', 'From your next session, Claude already knows. Draft an email in your voice, vet a new supplier, sharpen an offer, without re-explaining anything.', 'From your very next chat'],
            ] as [$n, $title, $body, $time])
                <x-card>
                    <span class="font-mono text-sm tracking-widest text-blue">{{ $n }}</span>
                    <h3 class="mt-3 text-lg font-semibold tracking-tight text-ink">{{ $title }}</h3>
                    <p class="mt-2 leading-relaxed text-text">{{ $body }}</p>
                    <span class="mt-4 block font-mono text-xs text-muted">{{ $time }}</span>
                </x-card>
            @endforeach
        </div>
    </div>
</section>

{{-- WHAT'S IN THE BOX --}}
<section class="mx-auto max-w-6xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8">
    <div class="mx-auto max-w-2xl text-center">
        <x-eyebrow class="mb-3">What is in the box</x-eyebrow>
        <h2 class="text-2xl font-semibold tracking-tight text-ink sm:text-3xl">A complete workspace, not a template to assemble</h2>
    </div>
    <div class="mt-10 grid gap-6 sm:grid-cols-2">
        @foreach ([
            ['01', 'A self-serve onboarding coach', 'Captures your whole business in one 20 to 40 minute sitting, in sections, at your pace. You talk, it writes.', null],
            ['10', 'Ten built-in skills', "Including an offer designer built on Hormozi's frameworks, a UK background-check skill for vetting suppliers and clients, plus weekly and monthly reviews and a voice refresh.", 'A single offer audit or due-diligence check usually costs more than the whole OS.'],
            ['02', 'Two ready workstations', 'Email and Content, set up and routing on day one. Add more just by asking in plain English.', null],
            ['06', 'Six plain-English PDF guides', 'Install, tour, onboarding, first workflows, extending it yourself, and using AI responsibly. No jargon, no code.', null],
            ['+', 'The skill-builder', 'Describe a repeatable job in plain English and the OS writes it into a reusable skill. The workspace grows with you.', null],
            ['↻', 'Free updates', 'When we improve the OS, download the latest and copy in the new skills and guides. Your own files stay exactly as they are.', null],
        ] as [$badge, $title, $body, $anchor])
            <x-card class="flex gap-4">
                <span class="grid h-11 w-11 shrink-0 place-items-center rounded-lg bg-blue-tint font-mono text-base font-semibold text-blue" aria-hidden="true">{{ $badge }}</span>
                <div>
                    <h3 class="font-semibold tracking-tight text-ink">{{ $title }}</h3>
                    <p class="mt-1 text-sm leading-relaxed text-text">{{ $body }}</p>
                    @if ($anchor)
                        <span class="mt-2 block text-xs italic text-muted">{{ $anchor }}</span>
                    @endif
                </div>
            </x-card>
        @endforeach
    </div>
</section>

{{-- IRSR FRAMEWORK --}}
<section class="border-y border-border bg-panel">
    <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <x-eyebrow class="mb-3">The framework underneath</x-eyebrow>
            <h2 class="text-2xl font-semibold tracking-tight text-ink sm:text-3xl">Built on IRSR, so it stays organised as it grows</h2>
            <p class="mx-auto mt-4 max-w-xl leading-relaxed text-muted">
                Your business at the centre, work routed to the right place, repeatable jobs saved as skills, and a
                review rhythm that keeps it sharp.
            </p>
        </div>
        <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ([
                ['I', 'Identity', 'Who you are, who you serve, what you sell and how you sound. The core every chat reads first.'],
                ['R', 'Routing', 'Email, content, a new line of work. Each request goes to the right workstation automatically.'],
                ['S', 'Skills', 'Repeatable jobs saved once and reused. Offer design, background checks, reviews, your own additions.'],
                ['R', 'Review', 'A weekly and monthly rhythm that keeps your context current instead of drifting out of date.'],
            ] as [$letter, $title, $body])
                <x-card class="bg-bg">
                    <span class="text-3xl font-semibold leading-none text-blue">{{ $letter }}</span>
                    <h3 class="mt-3 font-semibold tracking-tight text-ink">{{ $title }}</h3>
                    <p class="mt-1.5 text-sm leading-relaxed text-text">{{ $body }}</p>
                </x-card>
            @endforeach
        </div>
    </div>
</section>

{{-- WHO IT'S FOR --}}
<section class="mx-auto max-w-6xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8">
    <div class="mx-auto max-w-2xl text-center">
        <x-eyebrow class="mb-3">Honest fit</x-eyebrow>
        <h2 class="text-2xl font-semibold tracking-tight text-ink sm:text-3xl">Who it is for, and who it is not</h2>
    </div>
    <div class="mt-10 grid gap-6 sm:grid-cols-2">
        <x-card>
            <h3 class="text-lg font-semibold tracking-tight text-ink">It is for you if…</h3>
            <ul class="mt-4 flex flex-col gap-3">
                @foreach ([
                    'You already use Claude and want it to actually know your business',
                    'You run a busy operation and lose time re-explaining context',
                    'You want one hub for work and the rest of life, not a business-only tool',
                    'You are happy to spend 20 to 40 minutes setting it up properly',
                ] as $point)
                    <li class="flex gap-3 text-sm leading-relaxed text-text">
                        <svg class="mt-0.5 h-4 w-4 shrink-0 text-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m5 13 4 4L19 7" /></svg>
                        {{ $point }}
                    </li>
                @endforeach
            </ul>
        </x-card>
        <x-card class="bg-panel">
            <h3 class="text-lg font-semibold tracking-tight text-ink">It is not for you if…</h3>
            <ul class="mt-4 flex flex-col gap-3">
                @foreach ([
                    'You have not used Claude yet (come back once you have, the value is in solving problems you have already hit)',
                    'You are after a Notion template. This is not that',
                    'You want a free tool. Good free options exist, we charge for what we ship',
                ] as $point)
                    <li class="flex gap-3 text-sm leading-relaxed text-text">
                        <span class="mt-0.5 shrink-0 font-semibold text-muted" aria-hidden="true">—</span>{{ $point }}
                    </li>
                @endforeach
            </ul>
        </x-card>
    </div>
    <p class="mx-auto mt-6 max-w-2xl text-center text-sm text-muted">
        We would rather you bought this knowing it fits than be disappointed it was not what you expected.
    </p>
</section>

{{-- FOUNDING RELEASE (intentional dark panel, fixed navy in both themes) --}}
<section class="mx-auto max-w-6xl px-4 pb-4 sm:px-6 lg:px-8">
    <div class="rounded-2xl bg-[#16223a] p-8 text-[#c7d0e2] sm:p-11">
        <p class="font-mono text-xs uppercase tracking-widest text-warm">A founding release</p>
        <h2 class="mt-3 text-2xl font-semibold tracking-tight text-white sm:text-3xl">You are early, and the price reflects that</h2>
        <p class="mt-3 max-w-2xl leading-relaxed">
            This is version 1.0. It is built, tested and complete, and we run our own business on it every day.
            What it does not have yet is a wall of customer logos, because the first buyers are coming in now. So we
            are selling it at a founding price, and the people who buy at this stage get a say in where it goes next.
        </p>
        <ul class="mt-6 grid gap-3 sm:grid-cols-2 sm:gap-x-8">
            @foreach ([
                'Founding price of £197 + VAT, rising to £297 after launch',
                'Free updates locked in for founding buyers',
                'Your feedback shapes the roadmap, a direct line to us',
                'Backed by the same 30-day guarantee as everyone else',
            ] as $point)
                <li class="flex gap-3 leading-relaxed text-[#e8ecf4]">
                    <span class="mt-1 shrink-0 font-semibold text-warm" aria-hidden="true">✓</span>{{ $point }}
                </li>
            @endforeach
        </ul>
    </div>
</section>

{{-- GUARANTEE --}}
<section class="mx-auto max-w-6xl px-4 py-12 sm:px-6 lg:px-8">
    <div class="rounded-2xl border border-blue/20 bg-blue-tint p-8 text-center sm:p-10">
        <div class="mx-auto grid h-16 w-16 place-items-center rounded-full border-2 border-blue text-xl font-semibold text-blue">30</div>
        <x-eyebrow class="mt-5">The One-Workflow Guarantee</x-eyebrow>
        <h2 class="mt-2 text-2xl font-semibold tracking-tight text-ink sm:text-3xl">One workflow noticeably better, or your money back</h2>
        <p class="mx-auto mt-3 max-w-2xl leading-relaxed text-text">
            If, 30 days after install, you cannot point to one piece of work your AI does noticeably better with the
            Foundations OS in place, tell us. We will work with you to fix it, or refund you in full. Your choice.
        </p>
        <p class="mt-3 text-sm text-muted">The risk sits with us, which is where it should sit.</p>
    </div>
</section>

{{-- PRICING / BUY --}}
<section id="buy" class="mx-auto max-w-6xl scroll-mt-20 px-4 py-16 sm:px-6 sm:py-20 lg:px-8">
    <div class="mx-auto max-w-2xl text-center">
        <x-eyebrow class="mb-3">Get the Foundations OS</x-eyebrow>
        <h2 class="text-2xl font-semibold tracking-tight text-ink sm:text-3xl">One payment. The done-with-you version is £1,500 + VAT.</h2>
        <p class="mx-auto mt-4 max-w-2xl leading-relaxed text-muted">
            With AI Foundations we build it with you over four weeks and coach you until it is right. The Foundations
            OS gives you the same workspace to set up in your own time, for a fraction of that.
        </p>
    </div>

    <div class="mt-10 grid items-start gap-8 lg:grid-cols-[1fr_.85fr]">
        <x-card>
            <h3 class="text-lg font-semibold tracking-tight text-ink">What you are getting</h3>
            <div class="mt-4 divide-y divide-border">
                @foreach ([
                    ['Self-serve onboarding coach', 'included'],
                    ['Ten built-in skills (offer design, background checks, reviews)', 'included'],
                    ['Two ready workstations (Email, Content)', 'included'],
                    ['Six plain-English PDF guides', 'included'],
                    ['Skill-builder, add your own in plain English', 'included'],
                    ['Free updates, locked in for founding buyers', 'included'],
                ] as [$label, $value])
                    <div class="flex justify-between gap-4 py-3 text-sm">
                        <span class="text-text">{{ $label }}</span>
                        <span class="shrink-0 font-mono text-xs text-muted">{{ $value }}</span>
                    </div>
                @endforeach
                <div class="flex justify-between gap-4 border-t-2 border-ink py-3 text-sm font-medium text-ink">
                    <span>AI Foundations: we build it with you over four weeks and coach you to nail it</span>
                    <span class="shrink-0 font-mono text-xs">£1,500 + VAT</span>
                </div>
            </div>
        </x-card>

        {{-- Price card (intentional dark panel) --}}
        <div class="rounded-2xl bg-[#16223a] p-8 text-center lg:sticky lg:top-20">
            <p class="font-mono text-xs uppercase tracking-widest text-warm">Founding price</p>
            <p class="mt-3 text-5xl font-semibold leading-none text-white">£197</p>
            <p class="mt-2 text-sm text-[#a9b4cc]">+ VAT · £236.40 inc VAT</p>
            <p class="mt-2 text-sm text-[#8b97b4] line-through">£297 after launch</p>
            @if ($buyUrl)
                <a href="{{ $buyUrl }}" class="mt-5 inline-flex w-full items-center justify-center rounded-md bg-blue-strong px-5 py-3 text-sm font-medium text-white transition-colors hover:bg-blue-strong-hover">Buy the Foundations OS</a>
            @else
                <a href="{{ route('contact', ['topic' => 'foundations-os']) }}" class="mt-5 inline-flex w-full items-center justify-center rounded-md bg-blue-strong px-5 py-3 text-sm font-medium text-white transition-colors hover:bg-blue-strong-hover">Register your interest</a>
            @endif
            <ul class="mt-6 flex flex-col gap-2 text-left text-sm">
                @foreach (['One payment, yours to keep', 'Set up in 20 to 40 minutes', '30-day money-back guarantee', 'Free updates included'] as $point)
                    <li class="flex gap-2.5 text-[#d5dcec]">
                        <span class="mt-0.5 shrink-0 font-semibold text-warm" aria-hidden="true">✓</span>{{ $point }}
                    </li>
                @endforeach
            </ul>
            <p class="mt-4 text-xs leading-relaxed text-[#a9b4cc]">
                Requires a Claude Pro plan or above. The Foundations OS runs in Claude Cowork, which is not on the free tier.
            </p>
        </div>
    </div>
</section>

{{-- FAQ --}}
<section class="border-t border-border bg-panel">
    <div class="mx-auto max-w-3xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8">
        <div class="text-center">
            <x-eyebrow class="mb-3">Questions</x-eyebrow>
            <h2 class="text-2xl font-semibold tracking-tight text-ink sm:text-3xl">Before you buy</h2>
        </div>
        <div class="mt-8">
            <x-faq>
                @foreach ($faqs as $faq)
                    <x-faq-item :question="$faq['question']">{{ $faq['answer'] }}</x-faq-item>
                @endforeach
            </x-faq>
        </div>
    </div>
</section>

{{-- FINAL CTA (intentional dark panel) --}}
<section class="mx-auto max-w-6xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8">
    <div class="rounded-2xl bg-[#16223a] px-8 py-14 text-center">
        <p class="font-mono text-xs uppercase tracking-widest text-warm">Set it up once</p>
        <h2 class="mx-auto mt-3 max-w-2xl text-2xl font-semibold tracking-tight text-white sm:text-3xl">Give your AI a workspace that knows your business</h2>
        <p class="mx-auto mt-3 max-w-xl leading-relaxed text-[#c7d0e2]">
            20 to 40 minutes now, then every chat from here opens already up to speed. Founding price while it lasts.
        </p>
        <div class="mt-7">
            @if ($buyUrl)
                <a href="{{ $buyUrl }}" class="inline-flex items-center justify-center rounded-md bg-blue-strong px-6 py-3 text-sm font-medium text-white transition-colors hover:bg-blue-strong-hover">Get the Foundations OS, £197 + VAT</a>
            @else
                <a href="{{ route('contact', ['topic' => 'foundations-os']) }}" class="inline-flex items-center justify-center rounded-md bg-blue-strong px-6 py-3 text-sm font-medium text-white transition-colors hover:bg-blue-strong-hover">Register your interest</a>
            @endif
        </div>
        <p class="mt-4 text-sm text-[#8b97b4]">One payment · yours to keep · 30-day guarantee · £236.40 inc VAT</p>
    </div>
</section>

@endsection
