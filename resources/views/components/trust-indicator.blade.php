@props(['iconColor' => 'green-400'])

<div {{ $attributes->merge(['class' => 'flex items-center text-sm']) }}>
    <x-icon.check size="5" :color="$iconColor" class="mr-2" />
    <span>{{ $slot }}</span>
</div>
