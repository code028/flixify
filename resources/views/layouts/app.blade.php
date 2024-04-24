<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flixify</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body x-data="darkMode:{{ Auth::user()->theme }}" :class="{'dark': darkMode = {{ Auth::user()->theme }} }" class="w-full h-screen relative antialiased dark:bg-slate-900">
{{-- <body x-data="darkMode:{{ Auth::user()->theme }}" :class="{'dark': darkMode = {{ Auth::user()->theme }} }" class="w-full h-screen relative antialiased dark:bg-slate-900"> --}}
    <div class="w-full h-1/6 sticky top-0 left-0 max-h-[80px] min-h-[80px] dark:bg-slate-900">
        @include('components.navbar')
    </div>
    <div class="w-full h-5/6 grid place-items-center">
        @yield('content')
    </div>
</body>
</body>
</html>
