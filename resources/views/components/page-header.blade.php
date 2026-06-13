@props([
    'eyebrow' => null,
    'title',
    'lead' => null,
])

<section class="border-b border-border">
    <div class="mx-auto max-w-6xl px-4 py-14 sm:px-6 sm:py-16 lg:px-8">
        <div class="max-w-3xl rise-in">
            @if ($eyebrow)
                <x-eyebrow class="mb-3">{{ $eyebrow }}</x-eyebrow>
            @endif
            <h1 class="text-3xl font-semibold leading-tight tracking-tight text-ink sm:text-4xl">{{ $title }}</h1>
            @if ($lead)
                <p class="mt-5 text-lg leading-relaxed text-muted">{{ $lead }}</p>
            @endif
            {{ $slot }}
        </div>
    </div>
</section>
