<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Link & Co') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="flex flex-col bg-green-900 min-h-screen">

    <div class="">
        <div class="">
            {{-- @include('layouts.navigation') --}}
        </div>
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    <script src="https://unpkg.com/flowbite@1.4.5/dist/flowbite.js"></script>
    <script src="https://unpkg.com/flowbite@1.4.5/dist/datepicker.js"></script>
</body>


</html>
