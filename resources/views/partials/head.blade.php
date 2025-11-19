<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('meta_description', 'Solutions Delivered - Tailored business solutions for process design, project management, and organisational change.')">

    <!-- Theme Color for Browser UI -->
    <meta name="theme-color" content="#198fd9">
    <meta name="msapplication-TileColor" content="#198fd9">

    <title>@yield('title', 'Solutions Delivered - Delivering Solutions is in Our DNA')</title>

    <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Performance Hints -->
    <link rel="preload" href="{{ asset('logo.png') }}" as="image" type="image/png">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="@yield('og_title', 'Solutions Delivered - Delivering Solutions is in Our DNA')">
    <meta property="og:description" content="@yield('og_description', 'Solutions Delivered - Tailored business solutions for process design, project management, and organisational change.')">
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('og-image.png') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Solutions Delivered - Delivering Solutions is in Our DNA">
    <meta property="og:site_name" content="Solutions Delivered">
    <meta property="og:locale" content="en_GB">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', 'Solutions Delivered - Delivering Solutions is in Our DNA')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Solutions Delivered - Tailored business solutions for process design, project management, and organisational change.')">
    <meta name="twitter:image" content="{{ asset('og-image.png') }}">
    <meta name="twitter:image:alt" content="Solutions Delivered - Delivering Solutions is in Our DNA">

    <!-- Schema.org JSON-LD Markup -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Solutions Delivered",
        "url": "{{ url('/') }}",
        "logo": "{{ url('/') }}/logo.png",
        "description": "Solutions Delivered provides tailored business solutions for process design, project management, and organizational change.",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "GB"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "Customer Service",
            "url": "{{ route('get-started') }}"
        },
        "sameAs": []
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Solutions Delivered",
        "url": "{{ url('/') }}",
        "description": "Professional IT consultancy specialising in web development, service management, project management, and business change.",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "GB"
        },
        "priceRange": "££"
    }
    </script>

    @stack('schema')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
