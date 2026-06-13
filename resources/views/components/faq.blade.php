{{-- Wraps a set of <x-faq-item> rows. --}}
<div {{ $attributes->merge(['class' => 'divide-y divide-border border-y border-border']) }}>
    {{ $slot }}
</div>
