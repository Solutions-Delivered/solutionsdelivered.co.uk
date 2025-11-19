@props(['direction' => 'right', 'size' => '5'])

@php
$paths = [
    'right' => 'M13 7l5 5m0 0l-5 5m5-5H6',
    'left' => 'M11 17l-5-5m0 0l5-5m-5 5h12',
    'down' => 'M7 13l5 5m0 0l5-5m-5 5V6',
    'up' => 'M17 11l-5-5m0 0l-5 5m5-5v12'
];
@endphp

<svg {{ $attributes->merge(['class' => "w-{$size} h-{$size}"]) }} fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $paths[$direction] }}"/>
</svg>
