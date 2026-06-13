@props([
    'number',
    'title',
])

<div {{ $attributes->merge(['class' => 'flex gap-5 border-t border-border py-6']) }}>
    <span class="shrink-0 font-mono text-sm text-faint" aria-hidden="true">{{ str_pad((string) $number, 2, '0', STR_PAD_LEFT) }}</span>
    <div>
        <h3 class="text-lg font-semibold tracking-tight text-ink">{{ $title }}</h3>
        <div class="mt-2 leading-relaxed text-muted">{{ $slot }}</div>
    </div>
</div>
