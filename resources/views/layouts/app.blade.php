<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <meta
        name="application-name"
        content="{{ config('app.name') }}"
    >
    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <title>{{ config('app.name') }}</title>

    <!--Favicon-->
    <link
        rel="shortcut icon"
        href="{{ Vite::asset('resources/images/favicon.ico') }}"
        title="Favicon"
    />

    <!--Google Webfonts-->
    <link
        href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800'
        rel='stylesheet'
        type='text/css'
    >

    {{-- prettier-ignore --}}
    @vite([
    'resources/css/style.css',
    'resources/css/namari-color.css',
    'resources/css/font-awesome.min.css',
    'resources/css/animate.css',
    'resources/js/app.js',
    'resources/js/jquery.1.8.3.min.js',
    'resources/js/wow.min.js',
    'resources/js/featherlight.min.js',
    'resources/js/featherlight.gallery.min.js',
    'resources/js/jquery.enllax.min.js',
    'resources/js/jquery.scrollUp.min.js',
    'resources/js/jquery.easing.min.js',
    'resources/js/jquery.stickyNavbar.min.js',
    'resources/js/jquery.waypoints.min.js',
    'resources/js/images-loaded.min.js',
    'resources/js/lightbox.min.js',
    'resources/js/site.js'
    ])
</head>

<body class="antialiased">
    <x-ui.partials.preloader />

    <x-ui.partials.header />

    {{ $slot }}

    <x-ui.partials.footer />
</body>

</html>
