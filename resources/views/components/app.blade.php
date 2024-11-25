<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.title', 'Home') }} - {{ config('app.name', 'A-Library') }}</title>

    <!-- Vite -->
    @vite(['resources/scss/app.scss'])

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css') }}/style.css?{{ rand(1, 100) }}">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css') }}/all.min.css">

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- {{  Route::current()->getPrefix() }} -->
    @if (in_array(Route::current()->getPrefix(), ['wiki']))
        <!-- Ruffle -->
        <script src="https://unpkg.com/@ruffle-rs/ruffle"></script>

        <!-- DataTables -->
        <link href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    @endif

    @stack('head')
</head>

<body>
    <header class="mb-3">
        <x-carousel />
        <x-navbar />
    </header>

    <main id="app" class="mb-5">
        {{ $slot }}
    </main>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Vite -->
    @vite(['resources/js/app.js'])

    <!-- Client -->
    <script src="{{ asset('js') }}/client.js?{{ rand(1, 100) }}"></script>

    @if (in_array(Route::current()->getPrefix(), ['wiki']))
        <!-- DataTables -->
        <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>

        <!-- SWFObject -->
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>

        <!-- Client Wiki -->
        <script src="{{ asset('js') }}/client-wiki.js?{{ rand(1, 100) }}"></script>
    @endif

    @stack('body')
</body>

</html>
