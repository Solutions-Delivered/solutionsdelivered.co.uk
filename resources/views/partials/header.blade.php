@php($navItems = $navItems ?? [])
@php($navCta = $navCta ?? null)

<header class="sticky top-0 z-50 border-b border-border bg-bg/90 backdrop-blur-sm" role="banner">
    <nav class="mx-auto flex h-16 max-w-6xl items-center justify-between gap-4 px-4 sm:px-6 lg:px-8" aria-label="Main navigation">
        {{-- Wordmark + SD monogram --}}
        <a href="{{ route('home') }}" class="flex shrink-0 items-center gap-2.5" aria-label="{{ config('brand.company.name') }}, home">
            <x-brand.monogram class="h-8 w-8" />
            <span class="text-base font-semibold tracking-tight text-ink">Solutions Delivered</span>
        </a>

        {{-- Desktop links --}}
        <div class="hidden items-center gap-1 md:flex">
            @foreach ($navItems as $item)
                @php($active = request()->routeIs($item['route']))
                <a href="{{ route($item['route']) }}"
                   class="rounded-md px-3 py-2 text-sm transition-colors {{ $active ? 'font-medium text-ink' : 'text-muted hover:text-ink' }}"
                   @if($active) aria-current="page" @endif>
                    {{ $item['label'] }}
                </a>
            @endforeach
        </div>

        <div class="flex items-center gap-1.5">
            <x-theme-toggle />

            @if ($navCta)
                <a href="{{ route($navCta['route']) }}"
                   class="hidden rounded-md bg-blue-strong px-4 py-2 text-sm font-medium text-white transition-colors hover:bg-blue-strong-hover sm:inline-flex">
                    {{ $navCta['label'] }}
                </a>
            @endif

            {{-- Mobile menu --}}
            <div class="md:hidden" x-data="{ open: false }" @keydown.escape.window="open = false">
                <button type="button" @click="open = !open"
                        class="inline-flex h-10 w-10 items-center justify-center rounded-md text-muted hover:text-ink"
                        :aria-expanded="open.toString()" aria-controls="mobile-menu" aria-label="Toggle navigation menu">
                    <svg x-show="!open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="open" x-cloak class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>

                <div id="mobile-menu" x-show="open" x-cloak x-transition.opacity
                     class="absolute inset-x-0 top-16 border-b border-border bg-surface shadow-sm">
                    <nav class="mx-auto flex max-w-6xl flex-col gap-1 px-4 py-4 sm:px-6" aria-label="Mobile navigation">
                        @foreach ($navItems as $item)
                            @php($active = request()->routeIs($item['route']))
                            <a href="{{ route($item['route']) }}"
                               class="rounded-md px-3 py-2.5 text-base transition-colors {{ $active ? 'font-medium text-ink' : 'text-text hover:text-ink' }}"
                               @if($active) aria-current="page" @endif>
                                {{ $item['label'] }}
                            </a>
                        @endforeach
                        @if ($navCta)
                            <a href="{{ route($navCta['route']) }}"
                               class="mt-2 inline-flex items-center justify-center rounded-md bg-blue-strong px-4 py-2.5 text-base font-medium text-white transition-colors hover:bg-blue-strong-hover">
                                {{ $navCta['label'] }}
                            </a>
                        @endif
                    </nav>
                </div>
            </div>
        </div>
    </nav>
</header>
