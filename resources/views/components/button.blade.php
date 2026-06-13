@props([
    'variant' => 'primary',
    'href' => null,
])

@php
    $base = 'inline-flex items-center justify-center gap-2 rounded-md text-sm font-medium transition-colors';
    $variants = [
        'primary' => 'bg-blue-strong px-5 py-2.5 text-white hover:bg-blue-strong-hover',
        'secondary' => 'border border-border-strong bg-surface px-5 py-2.5 text-ink hover:border-ink',
        'link' => 'gap-1.5 text-blue hover:text-blue-deep',
    ];
    $classes = $base.' '.($variants[$variant] ?? $variants['primary']);
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</a>
@else
    <button {{ $attributes->merge(['class' => $classes, 'type' => 'button']) }}>{{ $slot }}</button>
@endif
