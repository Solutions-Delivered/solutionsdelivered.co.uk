<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Set the colour theme before paint to avoid a flash. --}}
    @include('partials.theme-script')

    @if(config('services.analytics.enabled') && config('services.analytics.gtm_id'))
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','{{ config('services.analytics.gtm_id') }}');</script>
    <!-- End Google Tag Manager -->
    @endif

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('meta_description', config('brand.company.description'))">
    <meta name="robots" content="@yield('robots', 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1')">

    {{-- Browser UI colour, per theme. --}}
    <meta name="theme-color" content="#fbfaf7" media="(prefers-color-scheme: light)">
    <meta name="theme-color" content="#13161c" media="(prefers-color-scheme: dark)">

    <title>@yield('title', config('brand.company.name').' | '.config('brand.company.tagline'))</title>

    {{-- Favicons: the SD monogram. --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon-sd.svg') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">

    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Preload the two most-used font cuts. --}}
    <link rel="preload" href="{{ asset('fonts/hanken-grotesk-400.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('fonts/hanken-grotesk-600.woff2') }}" as="font" type="font/woff2" crossorigin>

    @if(config('services.analytics.enabled') && config('services.analytics.gtm_id'))
    <link rel="preconnect" href="https://www.googletagmanager.com" crossorigin>
    <link rel="dns-prefetch" href="https://www.googletagmanager.com">
    @endif

    {{-- Open Graph --}}
    <meta property="og:title" content="@yield('og_title', config('brand.company.name'))">
    <meta property="og:description" content="@yield('og_description', config('brand.company.description'))">
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('og-image.png') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="{{ config('brand.company.name') }}">
    <meta property="og:locale" content="en_GB">

    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', config('brand.company.name'))">
    <meta name="twitter:description" content="@yield('twitter_description', config('brand.company.description'))">
    <meta name="twitter:image" content="{{ asset('og-image.png') }}">

    {{-- Organisation schema --}}
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => config('brand.company.legal_name'),
        'legalName' => config('brand.company.legal_name'),
        'url' => url('/'),
        'logo' => url('/').'/logo.svg',
        'description' => config('brand.company.description'),
        'foundingDate' => config('brand.company.founded'),
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => config('brand.company.address.street'),
            'addressLocality' => config('brand.company.address.locality'),
            'addressRegion' => config('brand.company.address.region'),
            'postalCode' => config('brand.company.address.postcode'),
            'addressCountry' => config('brand.company.address.country'),
        ],
        'contactPoint' => [
            '@type' => 'ContactPoint',
            'contactType' => 'Customer Service',
            'email' => config('brand.contact.general'),
            'url' => route('contact'),
        ],
        'areaServed' => ['@type' => 'Country', 'name' => 'United Kingdom'],
        'taxID' => config('brand.company.company_number'),
        'knowsAbout' => ['Practical AI for business', 'AI adoption', 'Web development', 'Project management', 'ITIL service management', 'Business change'],
    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>

    @stack('schema')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
