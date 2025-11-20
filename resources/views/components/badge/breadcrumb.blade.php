@props(['icon' => null])

<div {{ $attributes->merge(['class' => 'inline-flex items-center px-4 py-2 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 text-sm font-medium']) }}>
    @if($icon)
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            {!! $icon !!}
        </svg>
    @endif
    {{ $slot }}
</div>
