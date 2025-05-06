<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- Scripts --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- tailwind --}}
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body class="font-sans antialiased bg-gray-100">

    <div class="min-h-screen">
        @yield('content')
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
