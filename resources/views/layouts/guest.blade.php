<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'SIKOCAK') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>


    <body class="
        min-h-screen
        bg-lime-400
        bg-cover bg-center bg-no-repeat
        flex items-center justify-center
        font-sans antialiased
    ">

        <!-- Wrapper -->
        <div class="max-w-3/4 sm:max-w-2xl bg-white rounded-3xl shadow-xl p-10 border-2 border-black ">
            {{ $slot }}
        </div>

    </body>
</html>

    </body>
</html>
