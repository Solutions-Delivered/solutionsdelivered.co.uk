<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials.head')
<body class="antialiased bg-white text-gray-900">
    @include('partials.header')

    <!-- Main content -->
    <main id="main-content" role="main" tabindex="-1">
        @yield('content')
    </main>

    @include('partials.footer')

    @include('partials.scripts')
</body>
</html>
