<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <title>CRUD - @yield ('Titulo')</title>
        <script src="{{asset('js/app.js')}}" defer></script>
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-200">
        <header class="p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-extrabold text-black"><a href="/">CRUD</a></h1>

                <nav class="flex gap-2 items-center">
                    <a class=" font-bold uppercase text-gray-800 text-sm hover:text-blue-500" href="usuarios">Usuarios</a>
                    <a class=" font-bold uppercase text-gray-800 text-sm hover:text-blue-500" href="Registro">Registrar</a> 
                </nav>
            </div>
        </header>

        <main class="container mx-auto mt-8">
            <h2 class=" font-black text-center text-3xl mb-10">@yield('titulo')</h2>
            @yield('cuerpo')
        </main>

        <footer>
            <h1 class=" text-center text-gray-800 font-bold text-xs">CFE {{now()->year}} </h1>
        </footer>
    </body>
</html>