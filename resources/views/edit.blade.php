@extends('layouts.app')

@section('Titulo')
Registar
@endsection

@section('cuerpo')
<div class=" text-center mb-8 text-3xl font-bold"><h2>Modificar Usuario</h2></div>
<div class="md:flex md:justify-center md:mb-5">
    
    <div class="md:w-1/2 bg-white p-8 rounded-md shadow-lg md:gap-5">
        <form action="{{ url('/usuarios/'.$user->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label for="name" class="mb-2 block uppercase text-gray-800 font-bold">Nombre</label>
                <input id="name" name="name" type="text" placeholder="Escribe tu Nombre" class="border p-3 w-full rounded-md shadow-sm @error('name')
                border-red-500    
                @enderror" value=" {{$user->name}} ">
                @error('name')
                    <p class="bg-red-500 text-white my-1 rounded-lg text-sm p-1 text-center font-bold"> {{ $message }} </p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="username" class="mb-2 block uppercase text-gray-800 font-bold">Nombre de Usuario</label>
                <input id="username" name="username" type="text" placeholder="Escribe tu Nombre de Usuario" class="border p-3 w-full rounded-md shadow-sm @error('username') border-red-500    
                @enderror" value=" {{$user->username}} ">
                @error('username')
                    <p class="bg-red-500 text-white my-1 rounded-lg text-sm p-1 text-center font-bold"> {{ $message }} </p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="mb-2 block uppercase text-gray-800 font-bold">Email</label>
                <input id="email" name="email" type="email" placeholder="Escribe tu Correo" class="border p-3 w-full rounded-md shadow-sm @error('email') border-red-500    
                @enderror" value=" {{$user->email}} ">
                @error('email')
                    <p class="bg-red-500 text-white my-1 rounded-lg text-sm p-1 text-center font-bold"> {{ $message }} </p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="mb-2 block uppercase text-gray-800 font-bold">Contraseña</label>
                <input id="password" name="password" type="password" placeholder="Escribe tu Contraseña" class="border p-3 w-full rounded-md shadow-sm @error('password') border-red-500    
                @enderror">
                @error('password')
                    <p class="bg-red-500 text-white my-1 rounded-lg text-sm p-1 text-center font-bold"> {{ $message }} </p>
                @enderror
            </div>

            <input type="submit" value="Editar" class=" bg-sky-600 hover:bg-sky-700 transition-colors cursor cursor-pointer uppercase font-bold w-full p-3 text-white rounded-md" onclick="return confirm('¿Deseas editar a este usuario?')">
        </form>
    </div>
</div>
@endsection