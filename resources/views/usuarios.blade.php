@extends('layouts.app')

@section('Titulo')
Usuarios
@endsection

@section('cuerpo')

<div class="container mx-auto mt-10 mb-5">
    @if(session('correcto_edit'))
    <script>
        window.onload = function() {
            alert("{{ session('correcto_edit') }}");
        };
    </script>
    @endif
    @if(session('correcto_delete'))
    <script>
        window.onload = function() {
            alert("{{ session('correcto_delete') }}");
        };
    </script>
    @endif
    <div class=" text-center mb-5 font-bold text-3xl"><h1>Usuarios Registrados</h1></div>
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b text-left">ID</th>
                <th class="py-2 px-4 border-b text-left">Nombre</th>
                <th class="py-2 px-4 border-b text-left">Email</th>
                <th class="py-2 px-4 border-b text-left">Username</th>
                <th class="py-2 px-4 border-b text-left">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td class="py-2 px-4 border-b"> {{$loop->iteration}} </td>
                <td class="py-2 px-4 border-b">{{$user->name}}</td>
                <td class="py-2 px-4 border-b">{{$user->email}}</td>
                <td class="py-2 px-4 border-b">{{$user->username}}</td>
                <td>
                    <div class="flex space-x-4">
                        <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            <a href=" {{ url('/usuarios/'.$user->id.'/edit')}} ">Editar</a>
                        </button>
                        
                        <form method="POST" action="{{ url('/usuarios/' . $user->id) }}">
                        @csrf
                        @method('delete')
                        <button type="submit" onclick="return confirm('¿Deseas Borrar este usuario?')" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"> Eliminar </button>
                        
                        </form>
                    </div>

                </td>

            </tr>

        @endforeach

        </tbody>
    </table>
</div>

@endsection