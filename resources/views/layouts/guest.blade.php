<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SIPeIP') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-white">

<div class="min-h-screen flex">

    <!-- Panel Institucional -->
    <div class="hidden lg:flex lg:w-1/2 bg-[#024687] flex-col">

        <!-- Encabezado -->
        <div class="pt-8 text-center">

            <p class="text-xs uppercase tracking-widest text-blue-100">
                Gobierno del Ecuador
            </p>

            <p class="text-lg text-white">
                Secretaría Nacional de Planificación
            </p>

        </div>

        <!-- Logo -->
        <div class="flex-1 flex items-center justify-center px-16">

            <img src="{{ asset('images/logosystem.png') }}"
                 alt="SIPeIP"
                 class="max-w-md w-full">

        </div>

        <!-- Footer -->
        <div class="pb-8 text-center">

            <img src="{{ asset('images/footer.png') }}"
                 class="mx-auto h-14 mb-4"
                 alt="Gobierno del Ecuador">

            <p class="text-blue-100 text-sm">
                SIPeIP | Versión 2.0
            </p>

        </div>

    </div>

    <!-- Panel Login -->
    <div class="flex-1 bg-gray-50 flex items-center justify-center p-8">

        <div class="w-full max-w-md">

            {{ $slot }}

        </div>

    </div>

</div>

</body>

</html>