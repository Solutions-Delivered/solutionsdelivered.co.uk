@props([
    'eyebrow' => null,
    'id' => null,
    'lead' => null,
])

<div {{ $attributes->merge(['class' => 'max-w-2xl']) }}>
    @if ($eyebrow)
        <x-eyebrow class="mb-3">{{ $eyebrow }}</x-eyebrow>
    @endif
    <h2 @if($id) id="{{ $id }}" @endif class="text-2xl font-semibold tracking-tight text-ink sm:text-3xl">
        {{ $slot }}
    </h2>
    @if ($lead)
        <p class="mt-4 text-lg leading-relaxed text-muted">{{ $lead }}</p>
    @endif
</div>
