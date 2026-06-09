<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">

    <title>@yield('title', 'Dashboard')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- AdminLTE CSS --}}
    <link rel="stylesheet" href="{{ asset('css/adminlte.css') }}">

    {{-- Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">

<div class="app-wrapper">

    {{-- HEADER --}}
    @include('layouts.partials.header')

    {{-- SIDEBAR --}}
    @include('layouts.partials.sidebar')

    {{-- CONTENT --}}
    <div class="app-main">
        <div class="content-wrapper p-3">
            @yield('content')
        </div>
    </div>

    {{-- FOOTER (opcional) --}}
    @include('layouts.partials.footer')

</div>

</body>
</html>