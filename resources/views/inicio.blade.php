@extends('layouts.app')

@section('Titulo')
INICIO
@endsection

@section('cuerpo')
<div>
    @if(session('correcto_registro'))
    <script>
        window.onload = function() {
            alert("{{ session('correcto_registro') }}");
        };
    </script>
    @endif
    <h2 class="mb-2 block text-black font-bold text-lg">Bienvenido a este CRUD realizado por:</h2>
    <h3 class="mb-2 block text-gray-700 font-bold">Luis Arturo Maldonado Ramirez</h3>
    <h3 class="mb-2 md:flex text-gray-700 font-bold">Con codigo siiau:<p class=" text-gray-950 font-bold">216818089</p> </h3>
    <h3 class="mb-2 md:flex text-gray-700 font-bold">Carrera:<p class=" text-gray-950 font-bold">Ingenieria en Computacion </p></h3>

</div>
@endsection