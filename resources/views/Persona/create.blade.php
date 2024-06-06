<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @extends('layouts.app')
    <title>Document</title>
</head>
<body class="bg-gray-300">
 
  @section('contenido')
  {{-- <div class="flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded shadow-lg w-full max-w-md">
        <form action="{{ route('store') }}" method="POST">
            @csrf
            <div class="mb-6">
                <label for="nombre" class="block text-gray-600 font-semibold mb-2">id</label>
                <input id="id" name="id" type="text" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-purple-500">
            </div>
            <div class="mb-6">
                <label for="apellido" class="block text-gray-600 font-semibold mb-2">Nombre</label>
                <input id="nombre" name="nombre" type="text" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-purple-500">
            </div>
            <div class="mb-6">
                <label for="edad" class="block text-gray-600 font-semibold mb-2">Edad</label>
                <input id="apellido" name="edad" type="number" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-purple-500">
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-purple-500 hover:bg-purple-400 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Guardar</button>
            </div>
        </form>
    </div>
</div> --}}

<div class="min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md bg-neutral-900 text-white rounded-lg shadow-lg">
        <div class="p-4">
            <h2 class="text-xl font-bold">Registro de Usuario</h2>
            <p class="text-neutral-400">Por favor, complete los siguientes campos para registrarse.</p>
        </div>
        <form class="space-y-4 p-4" action="{{ route('store') }}" method="post">
            @csrf
            <div class="space-y-2">
                <input type="hidden" name="id" id="id">
                <label for="nombre" class="block text-white-600 font-semibold mb-2">id</label>
                <input id="id" name="id" type="text" class="bg-neutral-900 border-neutral-700 focus:border-neutral-500 block w-full p-2 rounded appearance-none"> 
            </div>
            <div class="space-y-2">
                <label for="apellido" class="block text-white-600 font-semibold mb-2">Nombre</label>
                <input id="nombre" name="nombre" type="text" class="bg-neutral-900 border-neutral-700 focus:border-neutral-500 block w-full p-2 rounded appearance-none">
            </div>
            <div class="space-y-2">
                <label for="edad" class="block text-white-600 font-semibold mb-2">Edad</label>
                <input id="apellido" name="edad" type="number" class="bg-neutral-900 border-neutral-700 focus:border-neutral-500 block w-full p-2 rounded appearance-none">
            </div>
            <div class="flex justify-center">
                <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                    Agregar Usuuario
                </button>
            </div>
        </form>
    </div>
    
</div>
    @endsection
</body>
</html>
