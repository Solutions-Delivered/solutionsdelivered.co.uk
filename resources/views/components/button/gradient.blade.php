@props([
    'href' => '#',
    'icon' => 'arrow',
    'iconDirection' => 'right',
    'type' => 'link' // 'link' or 'button'
])

@if($type === 'button')
    <button {{ $attributes->merge(['class' => 'group relative inline-flex items-center justify-center bg-gradient-to-r from-[#198fd9] to-[#1a7fc7] text-white hover:from-[#1a7fc7] hover:to-[#0f6ba8] px-8 py-4 rounded-lg text-sm font-medium transition-all duration-200 shadow-lg hover:shadow-xl hover:-translate-y-0.5 active:scale-95 active:shadow-inner focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#198fd9]']) }}>
        <span class="relative z-10 flex items-center justify-center">
            {{ $slot }}
            @if($icon)
                <x-icon.arrow direction="{{ $iconDirection }}" class="ml-2 w-5 h-5 transform group-hover:translate-x-1 transition-transform" />
            @endif
        </span>
        <div class="absolute inset-0 bg-gradient-to-r from-[#198fd9] to-[#1a7fc7] rounded-lg opacity-0 group-hover:opacity-20 blur-xl transition-opacity"></div>
    </button>
@else
    <a href="{{ $href }}" {{ $attributes->merge(['class' => 'group relative inline-flex items-center justify-center bg-gradient-to-r from-[#198fd9] to-[#1a7fc7] text-white hover:from-[#1a7fc7] hover:to-[#0f6ba8] px-8 py-4 rounded-lg text-sm font-medium transition-all duration-200 shadow-lg hover:shadow-xl hover:-translate-y-0.5 active:scale-95 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#198fd9]']) }}>
        <span class="relative z-10 flex items-center justify-center">
            {{ $slot }}
            @if($icon)
                <x-icon.arrow direction="{{ $iconDirection }}" class="ml-2 w-5 h-5 transform group-hover:translate-x-1 transition-transform" />
            @endif
        </span>
        <div class="absolute inset-0 bg-gradient-to-r from-[#198fd9] to-[#1a7fc7] rounded-lg opacity-0 group-hover:opacity-20 blur-xl transition-opacity"></div>
    </a>
@endif
