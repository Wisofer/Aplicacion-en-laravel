@extends('Persona.navbar')

@section('contenido')

<div class="max-w-md mx-auto bg-white rounded-md shadow-md p-6">
    <h2 class="text-2xl font-semibold mb-4">{{$listaPersonas->nombre}}</h2>
    <p class="text-gray-600 mb-4">Edad: {{$listaPersonas->edad}}</p>
    <div class="flex justify-between mb-4">
        <a href="{{ route('edit', ['id'=>$listaPersonas->id]) }}">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Editar</button>
        </a>

        <form action="{{route('destroy', ['id' =>$listaPersonas->id])}}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-semibold px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Eliminar</button>
        </form>
    </div>

    <div class="mb-4">
        <b>Correos electrónicos</b>
        <form action="{{ route('correo.store') }}" method="POST" class="flex items-center mt-2">
            @csrf
            <input type="hidden" name="id_persona" value="{{$listaPersonas->id}}">
            <input type="text" name="direccion" placeholder="Agregar correo" class="mr-2 border border-gray-300 px-3 py-1 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Agregar</button>
        </form>
    </div>

    <table class="w-full">
        @foreach ($listaPersonas->correos as $correo)
            <tr>
                <td class="py-2">{{ $correo->direccion }}</td>
                <td class="py-2">
                    <form action="{{ route('correo.destroy', ['id_correo' => $correo->id, 'persona_id' => $correo->persona_id] ) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-semibold px-2 py-1 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Eliminar</button>
                    </form>
                </td>
            </tr>
            

        @endforeach
    </table>
    <a href="{{ route('index') }}" class="bg-purple-700 hover:bg-red-600 text-white font-semibold px-2 py-1 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Regresar</a>
</div>

@endsection

<?php
// {{ route('correo.destroy', ['id_correo' => $correo->id, 'persona_id' => $correo->persona_id] ) }} 
?>
