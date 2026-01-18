<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth</title>
    @vite(['resources/css/app.css'])
</head>
<body class="flex justify-center items-center bg-gray-100">

    {{-- Carrega o conteúdo das páginas --}}
    @yield('content')
    
</body>
</html>
