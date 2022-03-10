<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        {{ isset($title)? $title . ' | ' . config('app.name', "Domino's Pizza Redesign App"): config('app.name', "Domino's Pizza Redesign App") }}
    </title>

    <!-- Favicon -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ asset('favicon/apple-touch-icon-57x57.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="{{ asset('favicon/apple-touch-icon-114x114.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('favicon/apple-touch-icon-72x72.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="{{ asset('favicon/apple-touch-icon-144x144.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="{{ asset('favicon/apple-touch-icon-60x60.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120"
        href="{{ asset('favicon/apple-touch-icon-120x120.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{ asset('favicon/apple-touch-icon-76x76.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152"
        href="{{ asset('favicon/apple-touch-icon-152x152.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('favicon/favicon-196x196.png') }}" sizes="196x196" />
    <link rel="icon" type="image/png" href="{{ asset('favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/png" href="{{ asset('favicon/favicon-32x32.png') }}" sizes="32x32" />
    <link rel="icon" type="image/png" href="{{ asset('favicon/favicon-16x16.png') }}" sizes="16x16" />
    <link rel="icon" type="image/png" href="{{ asset('favicon/favicon-128.png') }}" sizes="128x128" />
    <meta name="application-name" content="Domino's Pizza" />
    <meta name="msapplication-TileColor" content="#0086C9" />
    <meta name="msapplication-TileImage" content="{{ asset('favicon/mstile-144x144.png') }}" />
    <meta name="msapplication-square70x70logo" content="{{ asset('favicon/mstile-70x70.png') }}" />
    <meta name="msapplication-square150x150logo" content="{{ asset('favicon/mstile-150x150.png') }}" />
    <meta name="msapplication-wide310x150logo" content="{{ asset('favicon/mstile-310x150.png') }}" />
    <meta name="msapplication-square310x310logo" content="{{ asset('favicon/mstile-310x310.png') }}" />

    <!-- Primary Meta Tags -->
    <meta name="title" content="Domino's Pizza Redesign App">
    <meta name="description" content="This is a concept app for domino's pizza company.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://metatags.io/">
    <meta property="og:title" content="Domino's Pizza Redesign App">
    <meta property="og:description" content="This is a concept app for domino's pizza company.">
    <meta property="og:image"
        content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://metatags.io/">
    <meta property="twitter:title" content="Domino's Pizza Redesign App">
    <meta property="twitter:description" content="This is a concept app for domino's pizza company.">
    <meta property="twitter:image"
        content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

    <!-- Theme UI -->
    <meta name="theme-color" content="#0086C9" media="(prefers-color-scheme: light)">
    <meta name="theme-color" content="#0086C9" media="(prefers-color-scheme: dark)">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="preload" href="{{ asset('scene.json') }}" as="fetch">
    @stack('head')

    @livewireStyles

    <!-- Scripts -->
    <script defer src="{{ mix('js/app.js') }}"></script>
    <script src="https://kit.fontawesome.com/69dc71572f.js" crossorigin="anonymous"></script>
</head>

<body class="font-sans text-gray-900">
    <main>
        @auth
            {{ $header ?? '' }}
            <div class="mb-32">
                {{ $slot }}
            </div>

            @stack('modals')
            @stack('scripts')
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        @endauth

        @guest
            {{ $slot }}
            @stack('scripts')
        @endguest
    </main>
    @livewireScripts
</body>

</html>
