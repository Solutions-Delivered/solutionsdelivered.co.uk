@props([
    'name',
    'promise' => null,
    'price' => null,
    'priceNote' => null,
    'href',
    'cta' => 'Learn more',
    'recommended' => false,
    'items' => [],
])

<div class="relative flex h-full flex-col rounded-md border bg-surface p-6 sm:p-7 {{ $recommended ? 'border-2 border-blue' : 'border-border' }}">
    @if ($recommended)
        <span class="absolute -top-3 left-6 rounded-sm bg-blue-strong px-2.5 py-1 text-xs font-medium text-white">Start here</span>
    @endif

    <h3 class="text-xl font-semibold tracking-tight text-ink">{{ $name }}</h3>
    @if ($promise)
        <p class="mt-2 text-text">{{ $promise }}</p>
    @endif

    @if ($price)
        <p class="mt-5 text-2xl font-semibold text-ink">{{ $price }}
            @if ($priceNote)<span class="text-sm font-normal text-muted">{{ $priceNote }}</span>@endif
        </p>
    @endif

    @if (count($items))
        <ul class="mt-5 flex flex-col gap-3 text-sm text-text">
            @foreach ($items as $item)
                <li class="flex gap-3">
                    <svg class="mt-0.5 h-4 w-4 shrink-0 text-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m5 13 4 4L19 7" />
                    </svg>
                    <span>{{ $item }}</span>
                </li>
            @endforeach
        </ul>
    @endif

    {{ $slot }}

    <div class="mt-7 pt-1">
        <x-button :href="$href" class="w-full">{{ $cta }}</x-button>
    </div>
</div>
