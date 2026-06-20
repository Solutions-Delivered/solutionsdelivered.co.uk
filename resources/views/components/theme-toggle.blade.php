{{-- Dark-mode toggle. Reads/writes the Alpine theme store (resources/js/app.js);
     the .dark class itself is set pre-paint by partials/theme-script. --}}
<button type="button"
        x-data
        @click="$store.theme.toggle()"
        class="inline-flex h-10 w-10 items-center justify-center rounded-md text-muted transition-colors hover:text-ink"
        :aria-pressed="$store.theme ? $store.theme.dark.toString() : 'false'"
        aria-label="Toggle dark mode">
    {{-- Sun (shown in dark mode: click to go light) --}}
    <svg x-show="$store.theme && $store.theme.dark" x-cloak class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" aria-hidden="true">
        <circle cx="12" cy="12" r="4" />
        <path stroke-linecap="round" d="M12 2v2m0 16v2M4.93 4.93l1.41 1.41m11.32 11.32 1.41 1.41M2 12h2m16 0h2M4.93 19.07l1.41-1.41m11.32-11.32 1.41-1.41" />
    </svg>
    {{-- Moon (shown in light mode: click to go dark) --}}
    <svg x-show="!$store.theme || !$store.theme.dark" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79Z" />
    </svg>
</button>
