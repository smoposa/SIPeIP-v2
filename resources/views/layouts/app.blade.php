<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SIPeIP') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-[#F2F2F2]">

    <div class="flex h-screen overflow-hidden">

        <!-- Sidebar -->
        @include('layouts.partials.sidebar')

        <!-- Contenido -->
        <div class="flex flex-col flex-1 overflow-hidden">

            <!-- Topbar -->
            @include('layouts.partials.topbar')

            <!-- Contenido principal -->
            <main class="flex-1 overflow-y-auto p-6">

                <!-- Breadcrumb -->
                @include('layouts.partials.breadcrumb')

                @yield('content')

            </main>

            <!-- Footer -->
            @include('layouts.partials.footer')

        </div>

    </div>

</body>

</html>