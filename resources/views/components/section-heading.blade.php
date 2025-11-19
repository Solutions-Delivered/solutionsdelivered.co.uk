@props([
    'eyebrow' => null,
    'align' => 'center', // 'center', 'left', 'right'
    'id' => null
])

<div class="mb-16 text-{{ $align }}">
    @if($eyebrow)
        <p class="text-sm font-semibold text-[#198fd9] tracking-wider uppercase mb-3">{{ $eyebrow }}</p>
    @endif
    <h2 @if($id) id="{{ $id }}" @endif class="text-4xl md:text-5xl font-bold text-gray-900">
        {{ $slot }}
    </h2>
</div>
