@props([
    'question',
])

@php($uid = 'faq-'.\Illuminate\Support\Str::random(6))

<div x-data="{ open: false }">
    <h3>
        <button type="button" @click="open = !open"
                class="flex w-full items-center justify-between gap-4 py-5 text-left"
                :aria-expanded="open.toString()" aria-controls="{{ $uid }}">
            <span class="font-medium text-ink">{{ $question }}</span>
            <svg class="h-5 w-5 shrink-0 text-muted transition-transform" :class="open && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="m6 9 6 6 6-6" />
            </svg>
        </button>
    </h3>
    <div id="{{ $uid }}" x-show="open" x-cloak>
        <div class="pb-5 pr-9 leading-relaxed text-muted">{{ $slot }}</div>
    </div>
</div>
