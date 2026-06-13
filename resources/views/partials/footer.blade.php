@php($navItems = $navItems ?? [])
@php($navCta = $navCta ?? null)

<footer class="mt-24 border-t border-border bg-panel" role="contentinfo">
    <div class="mx-auto max-w-6xl px-4 py-14 sm:px-6 lg:px-8">
        <div class="grid gap-10 md:grid-cols-3">
            <div class="max-w-sm">
                <a href="{{ route('home') }}" class="flex items-center gap-2.5" aria-label="{{ config('brand.company.name') }}, home">
                    <x-brand.monogram class="h-8 w-8" />
                    <span class="text-base font-semibold tracking-tight text-ink">Solutions Delivered</span>
                </a>
                <p class="mt-4 text-sm leading-relaxed text-muted">
                    {{ config('brand.company.positioning') }}
                </p>
            </div>

            <nav aria-label="Footer navigation">
                <h2 class="text-xs font-medium uppercase tracking-wide text-faint">Explore</h2>
                <ul class="mt-4 flex flex-col gap-2.5">
                    @foreach ($navItems as $item)
                        <li>
                            <a href="{{ route($item['route']) }}" class="text-sm text-text transition-colors hover:text-blue">{{ $item['label'] }}</a>
                        </li>
                    @endforeach
                    @if ($navCta)
                        <li>
                            <a href="{{ route($navCta['route']) }}" class="text-sm text-text transition-colors hover:text-blue">{{ $navCta['label'] }}</a>
                        </li>
                    @endif
                </ul>
            </nav>

            <div>
                <h2 class="text-xs font-medium uppercase tracking-wide text-faint">Get in touch</h2>
                <ul class="mt-4 flex flex-col gap-2.5 text-sm">
                    <li>
                        <a href="mailto:{{ config('brand.contact.general') }}" class="text-text transition-colors hover:text-blue">{{ config('brand.contact.general') }}</a>
                    </li>
                    <li class="text-muted">We reply within {{ config('brand.contact.response_time') }}.</li>
                    @foreach ($socialLinks ?? [] as $platform => $url)
                        <li>
                            <a href="{{ $url }}" rel="noopener" class="text-text transition-colors hover:text-blue capitalize">{{ $platform }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="mt-12 flex flex-col gap-4 border-t border-border pt-8 text-sm text-muted sm:flex-row sm:items-center sm:justify-between">
            <div>
                <p>&copy; {{ date('Y') }} {{ config('brand.company.legal_name') }}</p>
                <p class="mt-1 text-xs text-faint">Registered in England and Wales. Company No. {{ config('brand.company.company_number') }}. Built to WCAG 2.2 AA.</p>
            </div>
            <div class="flex items-center gap-5">
                <a href="{{ route('privacy') }}" class="transition-colors hover:text-blue">Privacy</a>
                <a href="{{ route('terms') }}" class="transition-colors hover:text-blue">Terms</a>
            </div>
        </div>
    </div>
</footer>
