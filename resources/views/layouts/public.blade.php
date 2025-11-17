<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <meta property="og:site_name" content="Panda Egyetem">
    <meta property="og:url" content="{{ request()->fullUrl() }}">
    <meta property="og:image" content="{{ asset('images/fb_cover.jpg') }}">
    <meta property="og:type" content="article">

    @sectionMissing('seo')
        <x-seo title="Maxold ki az egyetemet!"
               description="Tanulj hatékonyabban, szerezd meg az álom melót, fizesd vissza a diákhitelt! Segítünk mindhárom cél elérésében." />
    @endif

    @yield('seo')

    <link rel=preconnect href="https://pixel.barion.com">
    <link rel="dns-prefetch" href="https://pixel.barion.com">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;800&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;800&display=swap">
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;800&display=swap">
    </noscript>

    <!-- Styles -->
    @vite('resources/css/app.css')
    @stack('template_linked_css')

    <x-google-analytics />
</head>
<body class="font-sans antialiased text-gray-900">

    {{ $slot }}

    <x-barion-pixel />

    <!-- Scripts -->
    @stack('footer-scripts')
</body>
</html>
