<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials.head')
<body class="min-h-screen bg-bg text-text antialiased">
    <a href="#main-content" class="skip-link">Skip to main content</a>

    @if(config('services.analytics.enabled') && config('services.analytics.gtm_id'))
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{ config('services.analytics.gtm_id') }}"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    @endif

    @include('partials.header')

    <main id="main-content" tabindex="-1">
        @yield('content')
    </main>

    @include('partials.footer')

    @include('cookie-consent::index')

    @include('partials.scripts')
</body>
</html>
