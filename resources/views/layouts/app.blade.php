<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials.head')
<body class="antialiased bg-white text-gray-900">
    @if(config('services.analytics.enabled') && config('services.analytics.gtm_id'))
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{ config('services.analytics.gtm_id') }}"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @endif

    @include('partials.header')

    <!-- Main content -->
    <main id="main-content" role="main" tabindex="-1">
        @yield('content')
    </main>

    @include('partials.footer')

    @include('partials.scripts')
</body>
</html>
