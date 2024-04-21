<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Theater</title>
    @vite('resources/css/app.css')
</head>
<body class="w-full h-screen flex justify-center items-center">
    <div>
        U igri si mali
    
        <form action="{{ route('logout')}}" method="POST">
            @csrf
        <button type="submit" class="py-2 px-4 bg-red-500">
            VAj ga du
        </button>
        </form>
    </div>
</body>
</html>