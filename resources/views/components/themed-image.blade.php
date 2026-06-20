@props([
    'light',
    'dark',
    'alt' => '',
])

{{-- Theme-aware image. Renders both sources; CSS shows whichever matches the
     active theme (the `.dark` class on <html>, driven by the nav toggle), so it
     follows the on-site theme rather than only the OS preference. Both carry the
     same alt text — the hidden one is display:none, which assistive tech ignores,
     so the visible image is always the one announced. Width/height/loading and
     any extra classes pass through to both. --}}
<img src="{{ $light }}" alt="{{ $alt }}" {{ $attributes->merge(['class' => 'block dark:hidden']) }}>
<img src="{{ $dark }}" alt="{{ $alt }}" {{ $attributes->merge(['class' => 'hidden dark:block']) }}>
