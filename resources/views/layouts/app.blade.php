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
        href="images/favicon.ico"
        title="Favicon"
    />

    <!-- Main CSS Files -->
    <link
        rel="stylesheet"
        href="css/style.css"
    >

    <!-- Namari Color CSS -->
    <link
        rel="stylesheet"
        href="css/namari-color.css"
    >

    <!--Icon Fonts - Font Awesome Icons-->
    <link
        rel="stylesheet"
        href="css/font-awesome.min.css"
    >

    <!-- Animate CSS-->
    <link
        href="css/animate.css"
        rel="stylesheet"
        type="text/css"
    >

    <!--Google Webfonts-->
    <link
        href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800'
        rel='stylesheet'
        type='text/css'
    >

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    {{ $slot }}
</body>

</html>
