<head>
    @if(config('services.analytics.enabled') && config('services.analytics.gtm_id'))
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','{{ config('services.analytics.gtm_id') }}');</script>
    <!-- End Google Tag Manager -->
    @endif

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('meta_description', 'Solutions Delivered - Tailored business solutions for process design, project management, and organisational change.')">
    <meta name="robots" content="@yield('robots', 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1')">

    <!-- Theme Color for Browser UI -->
    <meta name="theme-color" content="#198fd9">
    <meta name="msapplication-TileColor" content="#198fd9">

    <title>@yield('title', 'Solutions Delivered - Delivering Solutions is in Our DNA')</title>

    <!-- Favicons -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Performance Hints -->
    <link rel="preload" href="{{ asset('logo.svg') }}" as="image" type="image/svg+xml">

    @if(config('services.analytics.enabled') && config('services.analytics.gtm_id'))
    <!-- Preconnect to Google Tag Manager -->
    <link rel="preconnect" href="https://www.googletagmanager.com" crossorigin>
    <link rel="dns-prefetch" href="https://www.googletagmanager.com">
    @endif

    <!-- DNS Prefetch for likely next navigations -->
    @if(!request()->routeIs('get-started'))
    <link rel="prefetch" href="{{ route('get-started') }}" as="document">
    @endif

    @if(request()->routeIs('home'))
    <link rel="prefetch" href="{{ route('solutions') }}" as="document">
    <link rel="prefetch" href="{{ route('about') }}" as="document">
    @endif

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
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => 'Solutions Delivered Limited',
        'legalName' => 'Solutions Delivered Limited',
        'url' => url('/'),
        'logo' => url('/') . '/logo.svg',
        'description' => 'Solutions Delivered provides tailored business solutions for process design, project management, and organizational change. 100% remote or client-site based consultancy serving clients UK-wide.',
        'foundingDate' => '2019-06-21',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => 'Belmont Suite, Paragon Business Park, Chorley New Road',
            'addressLocality' => 'Horwich',
            'addressRegion' => 'Bolton',
            'postalCode' => 'BL6 6HG',
            'addressCountry' => 'GB'
        ],
        'contactPoint' => [
            '@type' => 'ContactPoint',
            'contactType' => 'Customer Service',
            'url' => route('get-started')
        ],
        'areaServed' => [
            '@type' => 'Country',
            'name' => 'United Kingdom'
        ],
        'taxID' => '12063264',
        'sameAs' => [],
        'additionalType' => 'RemoteFirstOrganization'
    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>

    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'ProfessionalService',
        'name' => 'Solutions Delivered Limited',
        'url' => url('/'),
        'logo' => url('/') . '/logo.svg',
        'description' => 'Professional IT consultancy specialising in web development, service management, project management, and business change. Services delivered remotely or on client-site across the UK.',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => 'Belmont Suite, Paragon Business Park, Chorley New Road',
            'addressLocality' => 'Horwich',
            'addressRegion' => 'Bolton',
            'postalCode' => 'BL6 6HG',
            'addressCountry' => 'GB'
        ],
        'areaServed' => [
            '@type' => 'Country',
            'name' => 'United Kingdom'
        ],
        'priceRange' => '££',
        'foundingDate' => '2019-06-21',
        'knowsAbout' => [
            'Web Development',
            'Service Management',
            'Project Management',
            'Business Change Management',
            'ITIL',
            'Laravel Development',
            'WCAG Accessibility',
            'Remote IT Consulting'
        ],
        'serviceType' => 'IT Consultancy',
        'slogan' => 'Delivering Solutions is in Our DNA'
    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>

    @stack('schema')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
