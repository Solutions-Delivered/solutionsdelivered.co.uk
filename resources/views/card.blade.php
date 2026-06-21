@extends('layouts.card')

@section('title', 'Sam Jenkins | Practical AI that gives you your week back')
@section('meta_description', "I'm Sam Jenkins. I help busy business owners cut the busywork, so the work that needs you gets your time. Grab the free AI Starter Kit.")
@section('og_title', 'Sam Jenkins — Practical AI for busy business owners')
@section('og_description', 'Cut the busywork. Grab the free AI Starter Kit: the four cornerstones of an AI-ready business.')

@section('content')
{{-- Narrow single-column digital business card (~600px), centred. Page colours
     come from the shared tokens so the whole thing flips with the theme toggle;
     the navy band is an intentional fixed-dark feature panel (same convention as
     the Foundations OS page). --}}

{{-- Top bar --}}
<div class="px-5 pt-5 sm:px-10">
    <div class="mx-auto flex max-w-[600px] items-center justify-between gap-4">
        <span class="text-base font-semibold tracking-tight text-ink">Sam Jenkins</span>
        <div class="flex items-center gap-1.5">
            <span class="font-mono text-[11px] tracking-wide text-muted">{{ request()->getHost() }}/card</span>
            <x-theme-toggle />
        </div>
    </div>
</div>

{{-- Hero --}}
<section class="px-5 pb-10 pt-7 sm:px-10 sm:pb-14 sm:pt-12">
    <div class="mx-auto max-w-[600px]">
        <div class="mb-6 inline-flex items-center gap-2 sm:mb-7">
            <span class="h-[7px] w-[7px] rounded-full bg-warm" aria-hidden="true"></span>
            <span class="text-xs font-semibold uppercase tracking-[0.13em] text-muted">Good to meet you</span>
        </div>

        <div class="flex flex-wrap-reverse items-end gap-6 sm:gap-9">
            <div class="min-w-[240px] flex-1">
                <h1 class="text-[clamp(2rem,8.5vw,3.25rem)] font-semibold leading-[1.05] tracking-tight text-ink">
                    Practical AI that gives you your week back<span class="text-warm">.</span>
                </h1>
                <p class="mt-4 max-w-[38ch] text-[clamp(1rem,4.2vw,1.2rem)] leading-relaxed text-text text-pretty">
                    I'm Sam Jenkins. I help busy business owners cut the busywork, so the work that needs you gets your time. No hype, no jargon.
                </p>
            </div>

            {{-- Headshot, circle treatment (works cleanly with a standard photo). --}}
            <div class="h-[clamp(8.25rem,32vw,10.5rem)] w-[clamp(8.25rem,32vw,10.5rem)] shrink-0 self-end overflow-hidden rounded-full border border-border bg-surface">
                <img src="{{ asset('images/sam-headshot.png') }}" alt="Sam Jenkins"
                     width="336" height="336" class="h-full w-full object-cover object-top">
            </div>
        </div>
    </div>
</section>

{{-- Navy band: the free AI Starter Kit. Fixed-dark feature panel. --}}
<section class="bg-[#16223a] px-5 py-12 sm:px-10 sm:py-16">
    <div class="mx-auto max-w-[600px]">
        <div class="mb-3.5 text-xs font-semibold uppercase tracking-[0.13em] text-[#8fb3f5]">Start here, it's free</div>
        <h2 class="text-[clamp(1.7rem,6.5vw,2.4rem)] font-semibold leading-tight tracking-tight text-white">The AI Starter Kit</h2>
        <p class="mt-3.5 max-w-[46ch] text-[clamp(0.95rem,4vw,1.0625rem)] leading-relaxed text-[#c5cddb] text-pretty">
            Four documents you fill in: the four cornerstones of an AI-ready business, so anything you or AI builds on top actually sounds and works like you.
        </p>

        <ul class="mt-7 flex list-none flex-col gap-3.5 sm:mt-8">
            @foreach ([
                ['Context', 'what your business actually is, you and your business, in one place.'],
                ['Voice profile', 'so anything you or AI writes sounds like you.'],
                ['Customers', 'so you get sharp on exactly who you serve.'],
                ['Services', 'what you offer, priced and packaged.'],
            ] as [$term, $rest])
                <li class="flex items-start gap-3 text-[clamp(0.875rem,3.8vw,1rem)] leading-snug text-[#c5cddb]">
                    <svg class="mt-px h-5 w-5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="#8fb3f5" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4.5 12.5l5 5 10-11" /></svg>
                    <span><strong class="font-semibold text-white">{{ $term }}</strong>, {{ $rest }}</span>
                </li>
            @endforeach
        </ul>

        @if (session('card_kit_sent'))
            <div class="mt-7 rounded-lg border border-[#2e3b52] bg-white/5 p-6 rise-in sm:mt-8">
                <div class="mb-2 flex items-center gap-2.5">
                    <svg class="h-[22px] w-[22px]" viewBox="0 0 24 24" fill="none" stroke="#7fcb9b" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9" /><path d="M8 12.5l2.5 2.5 5-5.5" /></svg>
                    <span class="text-xl font-semibold text-white">On its way</span>
                </div>
                <p class="text-[15px] leading-relaxed text-[#c5cddb]">
                    Check <strong class="font-semibold text-white">{{ session('card_kit_email') }}</strong> in the next few minutes. If it's not there, have a look in spam.
                </p>
            </div>
        @else
            <form method="POST" action="{{ route('card.subscribe') }}" class="mt-7 flex flex-col gap-3 sm:mt-8">
                @csrf
                @honeypot
                <label for="kit-email" class="sr-only">Your email</label>
                <input type="email" name="email" id="kit-email" required
                       value="{{ old('email') }}"
                       autocomplete="email" placeholder="you@yourbusiness.co.uk"
                       class="w-full rounded-md border border-[#2e3b52] bg-white px-4 py-3.5 text-base text-ink outline-none focus:border-[#6fa0f2] focus:ring-2 focus:ring-[#6fa0f2]/35">
                @error('email')
                    <p class="text-sm text-[#f0a8a0]">{{ $message }}</p>
                @enderror
                <button type="submit"
                        class="inline-flex w-full items-center justify-center rounded-md bg-blue-strong px-5 py-3.5 text-base font-medium text-white transition-colors hover:bg-blue-strong-hover">
                    Send me the AI Starter Kit
                </button>
                <p class="mt-1 text-[13px] leading-relaxed text-[#9ba6b7] text-pretty">
                    Free. The AI Starter Kit comes with Practically AI, my Tuesday email. Unsubscribe any time.
                </p>
            </form>
        @endif
    </div>
</section>

{{-- Save contact --}}
<section class="px-5 py-8 sm:px-10 sm:py-12"
         x-data="{
            emailMe() { window.location.href = 'mailto:' + ['Sam', 'SamJenkins.com'].join('@'); },
            saveContact() {
                const vcard = ['BEGIN:VCARD','VERSION:3.0','N:Jenkins;Sam','FN:Sam Jenkins','ORG:Solutions Delivered Ltd','EMAIL:Sam@SamJenkins.com','TEL:+447951938344','URL:https://samjenkins.com','END:VCARD'].join('\n');
                const url = URL.createObjectURL(new Blob([vcard], { type: 'text/vcard' }));
                const a = document.createElement('a');
                a.href = url; a.download = 'Sam Jenkins.vcf';
                document.body.appendChild(a); a.click(); a.remove();
                setTimeout(() => URL.revokeObjectURL(url), 1500);
            }
         }">
    <div class="mx-auto flex max-w-[600px] flex-wrap items-center justify-between gap-5 rounded-lg border border-border bg-surface p-5 shadow-sm sm:p-6">
        <div class="min-w-[240px] flex-1">
            <div class="mb-3.5 text-[clamp(1.125rem,4.8vw,1.3125rem)] font-semibold tracking-tight text-ink">Save my details</div>
            <div class="flex flex-wrap gap-x-5 gap-y-2.5">
                <button type="button" @click="emailMe()" class="inline-flex items-center gap-2 text-sm font-medium text-ink">
                    <svg class="h-[17px] w-[17px] shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2" /><path d="M3.5 6.5l8.5 6 8.5-6" /></svg>
                    <span class="text-muted"><span>Sam</span><span>&#64;</span><span>SamJenkins.com</span></span>
                </button>
                <a href="https://www.linkedin.com/in/sam-jenkins" rel="noopener" class="inline-flex items-center gap-2 text-sm font-medium text-ink">
                    <svg class="h-[17px] w-[17px] shrink-0" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M4.98 3.5a2.5 2.5 0 11-.02 5 2.5 2.5 0 01.02-5zM3 9h4v12H3zM10 9h3.8v1.7h.05c.53-.95 1.83-1.95 3.77-1.95 4.03 0 4.78 2.5 4.78 5.75V21h-4v-5.1c0-1.22-.02-2.8-1.85-2.8-1.85 0-2.13 1.35-2.13 2.7V21h-4z" /></svg>
                    LinkedIn
                </a>
                <a href="https://x.com/IAmSamJenkins" rel="noopener" class="inline-flex items-center gap-2 text-sm font-medium text-ink">
                    <svg class="h-[15px] w-[15px] shrink-0" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24h-6.66l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" /></svg>
                    @IAmSamJenkins
                </a>
            </div>
        </div>
        <button type="button" @click="saveContact()"
                class="inline-flex items-center justify-center gap-2 rounded-md border border-border-strong bg-surface px-5 py-2.5 text-sm font-medium text-ink transition-colors hover:border-ink">
            <svg class="h-[18px] w-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3v11m0 0l-4-4m4 4l4-4M5 19h14" /></svg>
            Save my contact
        </button>
    </div>
</section>

{{-- Paid paths --}}
<section class="px-5 pb-14 pt-2 sm:px-10">
    <div class="mx-auto max-w-[600px]">
        <div class="mb-3 text-xs font-semibold uppercase tracking-[0.13em] text-muted">When you're ready to go further</div>
        <h2 class="mb-6 text-[clamp(1.5rem,6vw,2rem)] font-semibold leading-tight tracking-tight text-ink sm:mb-7">Two ways to work with me</h2>

        <div class="flex flex-col gap-4">
            @foreach ([
                ['name' => 'The Foundations OS', 'price' => '£197–297 ex VAT', 'route' => 'foundations-os', 'cta' => 'Get the OS', 'blurb' => 'A self-serve system you download and set up yourself. The templates, prompts and playbooks I use, ready to go.'],
                ['name' => 'AI Foundations', 'price' => '£1,500 ex VAT · founding £750', 'route' => 'ai-foundations', 'cta' => 'See the cohort', 'blurb' => 'A four-week, done-with-you cohort. We build your first real automations together, on your business, not a demo.'],
            ] as $path)
                <div class="rounded-lg border border-border bg-surface p-5 shadow-sm sm:p-6">
                    <div class="mb-2.5 flex flex-wrap items-baseline gap-x-3 gap-y-2.5">
                        <h3 class="text-[clamp(1.1875rem,5vw,1.375rem)] font-semibold tracking-tight text-ink">{{ $path['name'] }}</h3>
                        <span class="whitespace-nowrap rounded-full bg-blue-tint px-2.5 py-1 text-xs font-semibold text-blue">{{ $path['price'] }}</span>
                    </div>
                    <p class="mb-4 text-[15px] leading-relaxed text-text text-pretty">{{ $path['blurb'] }}</p>
                    <a href="{{ route($path['route']) }}" class="inline-flex items-center gap-1.5 text-[15px] font-semibold text-blue transition-colors hover:text-blue-deep">
                        {{ $path['cta'] }}
                        <svg class="h-[17px] w-[17px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14m0 0l-6-6m6 6l-6 6" /></svg>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Footer --}}
<footer class="border-t border-border px-5 py-9 sm:px-10 sm:py-11">
    <div class="mx-auto flex max-w-[600px] flex-wrap items-center justify-between gap-x-6 gap-y-4">
        <div class="flex items-center gap-3">
            <span class="h-[34px] w-[34px] shrink-0 overflow-hidden rounded-full border border-border bg-surface">
                <img src="{{ asset('images/sam-headshot.png') }}" alt="" width="34" height="34" class="h-full w-full object-cover object-top">
            </span>
            <div>
                <div class="text-sm font-semibold text-ink">Sam Jenkins</div>
                <div class="text-[13px] text-muted"><span>Sam</span><span>&#64;</span><span>SamJenkins.com</span></div>
            </div>
        </div>
        <div class="flex items-center gap-5">
            <a href="https://www.linkedin.com/in/sam-jenkins" rel="noopener" class="inline-flex items-center gap-1.5 text-sm font-medium text-ink transition-colors hover:text-blue">
                <svg class="h-[18px] w-[18px]" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M4.98 3.5a2.5 2.5 0 11-.02 5 2.5 2.5 0 01.02-5zM3 9h4v12H3zM10 9h3.8v1.7h.05c.53-.95 1.83-1.95 3.77-1.95 4.03 0 4.78 2.5 4.78 5.75V21h-4v-5.1c0-1.22-.02-2.8-1.85-2.8-1.85 0-2.13 1.35-2.13 2.7V21h-4z" /></svg>
                LinkedIn
            </a>
            <a href="https://samjenkins.com" rel="noopener" class="text-sm font-medium text-ink transition-colors hover:text-blue">samjenkins.com</a>
        </div>
    </div>
    <div class="mx-auto mt-6 max-w-[600px] text-xs text-faint">Solutions Delivered Ltd</div>
</footer>
@endsection
