<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-orange-200">

    @include('layouts.header') 

    <main class="flex flex-col">
        @yield('content')
    </main>

</body>
</html>