<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @extends('Layouts.app')
    <title>Document</title>
</head>
<body class="bg-gray-300">
 
  @section('contenido')
  <div class="flex items-center justify-center h-screen">
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
</div>

    @endsection
</body>
</html>
