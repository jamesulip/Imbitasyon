<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">


    <meta property="og:site_name" content="Ardee and Randy Wedding">
    <meta property="og:title" content="Ardee and Randy Wedding">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en">
    <meta property="og:url" content="https://laravelsecrets.com/">
    <meta property="og:image" content="{{ asset('images/DSCF8585.jpg') }}">


    @if(request()->route() && request()->route()->parameters && request()->route()->parameters['invited'])
    <meta property="og:site_name" content="Ardee and Randy Wedding">
    <meta property="og:title" content="Greetings {{request()->route()->parameters['invited']['name']}} you are invited to the wedding!">
    <meta property="og:description" content="Greetings {{request()->route()->parameters['invited']['name']}} you are invited to the wedding!">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en">
    <meta property="og:url" content="https://ardee-and-randy.link/">
    <meta property="og:image" content="{{ asset('images/DSCF8585.jpg') }}">
    @endif


    <title inertia>Ardee and Randy Wedding</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @routes
    @vite('resources/js/app.js')
    @inertiaHead
</head>

<body class="font-sans antialiased  bg-repeat-round" style="background-image: url(/img/13264.jpg)">
    @inertia
</body>

</html>
