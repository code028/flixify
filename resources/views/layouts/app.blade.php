<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Theater</title>
    @vite('resources/css/app.css')
</head>

<body class="w-full h-screen relative">
    <div class="w-full h-1/6 sticky top-0 left-0 bg-red-400 max-h-[80px] min-h-[80px]">
        @include('components.navbar')
    </div>
    <div class="w-full h-5/6 grid place-items-center">
        Content
    </div>
</body>
</body>
</html>
