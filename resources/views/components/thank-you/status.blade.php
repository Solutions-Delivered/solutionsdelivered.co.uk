@props([
    'confirmation',
])

@php
    $name = $confirmation->customerName;
@endphp

@if ($confirmation->isVerified())
    <x-card class="border-blue-strong/30 bg-blue-strong/5">
        <p class="text-sm font-medium text-ink">
            Payment confirmed{{ $name ? ', '.$name : '' }} — thank you.
        </p>
        <p class="mt-1 text-sm text-muted">
            A receipt is on its way to your inbox. Your next steps are below.
        </p>
    </x-card>
@elseif ($confirmation->notPaid())
    <x-card class="border-amber-500/30 bg-amber-500/5">
        <p class="text-sm font-medium text-ink">We could not confirm a completed payment.</p>
        <p class="mt-1 text-sm text-muted">
            If you have just paid it may take a moment to settle — refresh this page shortly.
            If the problem persists, <a class="text-blue hover:text-blue-deep" href="{{ route('contact') }}">get in touch</a> and we will sort it out.
        </p>
    </x-card>
@elseif ($confirmation->wrongProduct())
    <x-card class="border-amber-500/30 bg-amber-500/5">
        <p class="text-sm font-medium text-ink">This confirmation link is for a different purchase.</p>
        <p class="mt-1 text-sm text-muted">
            Please use the link from your purchase confirmation, or
            <a class="text-blue hover:text-blue-deep" href="{{ route('contact') }}">contact us</a> for help.
        </p>
    </x-card>
@else
    {{-- Could not confirm: no checkout id, unreachable API, or unknown id. Stay welcoming. --}}
    <x-card>
        <p class="text-sm font-medium text-ink">Thanks for your purchase.</p>
        <p class="mt-1 text-sm text-muted">
            We could not automatically confirm your order on this page. If your getting-started
            details do not arrive by email shortly, <a class="text-blue hover:text-blue-deep" href="{{ route('contact') }}">let us know</a>.
        </p>
    </x-card>
@endif
