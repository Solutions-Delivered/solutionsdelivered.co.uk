@props([
    'code',
    'title',
])

<section class="mx-auto flex max-w-3xl flex-col items-start px-4 py-20 sm:px-6 sm:py-28 lg:px-8">
    <p class="font-mono text-sm text-faint" aria-hidden="true">{{ $code }}</p>
    <h1 class="mt-3 text-3xl font-semibold tracking-tight text-ink sm:text-4xl">{{ $title }}</h1>
    <div class="mt-4 max-w-xl leading-relaxed text-muted">{{ $slot }}</div>
    <div class="mt-8 flex flex-wrap items-center gap-x-6 gap-y-3">
        <x-button :href="route('home')">Back to home</x-button>
        <x-button variant="link" :href="route('contact')">
            Contact us
            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m0 0-5-5m5 5-5 5" />
            </svg>
        </x-button>
    </div>
</section>
