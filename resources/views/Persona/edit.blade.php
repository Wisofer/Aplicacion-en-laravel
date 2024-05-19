@extends('Layouts.app')
@section('contenido')

<div class="bg-white p-8 rounded shadow-lg w-full max-w-md">
    <form action="{{ route('update', ['id' => $listaPersonas->id]) }}" method="POST">
        @method("PUT")
        @csrf
        <div class="mb-6">
            <label for="nombre" class="block text-gray-600 font-semibold mb-2">id</label>
            <input id="id" name="id" type="text" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-purple-500" value="{{$listaPersonas->id}}" readonly>
        </div>
        <div class="mb-6">
            <label for="apellido" class="block text-gray-600 font-semibold mb-2">Nombre</label>
            <input id="nombre" name="nombre" type="text" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-purple-500" value=" {{$listaPersonas->nombre}}">
        </div>
        <div class="mb-6">
            <label for="edad" class="block text-gray-600 font-semibold mb-2">Edad</label>
            <input id="apellido" name="edad" type="number" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-purple-500" value=" {{$listaPersonas->edad}}" >
        </div>
        <div class="flex justify-end">
            <button type="submit" class="bg-purple-500 hover:bg-purple-400 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Guardar</button>
        </div>
    </form>
</div>


@endsection