@extends('layouts.app')
@section('contenido')
    <div class="max-w-md mx-auto bg-white rounded-md shadow-md p-6">
        <h2 class="text-2xl font-semibold mb-4">{{ $listaPersonas->nombre }}</h2>
        <p class="text-gray-600 mb-4">Edad: {{ $listaPersonas->edad }}</p>
        <div class="flex justify-between mb-4">
            <a href="{{ route('edit', ['id' => $listaPersonas->id]) }}">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Editar</button>
            </a>

            <form action="{{ route('destroy', ['id' => $listaPersonas->id]) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit"
                    class="bg-red-500 hover:bg-red-600 text-white font-semibold px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Eliminar</button>
            </form>
        </div>

        <div class="mb-4">
            <b>Correos electrónicos</b>
            <form action="{{ route('correo.store') }}" method="POST" class="flex items-center mt-2">
                @csrf
                <input type="hidden" name="id_persona" value="{{ $listaPersonas->id }}">
                <input type="text" name="direccion" placeholder="Agregar correo"
                    class="mr-2 border border-gray-300 px-3 py-1 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Agregar</button>
            </form>
        </div>

        <table class="w-full">
            @foreach ($listaPersonas->correos as $correo)
                <tr>
                    <td class="py-2">{{ $correo->direccion }}</td>
                    <td class="py-2">
                        <form
                            action="{{ route('correo.destroy', ['id_correo' => $correo->id, 'persona_id' => $correo->persona_id]) }}"
                            method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit"
                                class="bg-red-500 hover:bg-red-600 text-white font-semibold px-2 py-1 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <a href="{{ route('index') }}"
            class="bg-purple-700 hover:bg-red-600 text-white font-semibold px-2 py-1 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Regresar</a>
    </div>


<!-- resources/views/users/show.blade.php -->
<div class="w-full max-w-md mx-auto rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
    <div class="relative h-32 bg-gray-200 rounded-t-lg">
        <div class="absolute top-16 left-1/2 -translate-x-1/2 w-20 h-20 ring-4 ring-white rounded-full overflow-hidden">
            <img src="/placeholder.svg" alt="User Avatar" class="object-cover w-full h-full">
            <span class="absolute inset-0 flex items-center justify-center text-2xl font-bold text-gray-500">JD</span>
        </div>
    </div>
    <div class="p-6 space-y-4">
        <div class="text-center">
            <div class="text-xl font-bold">John Doe</div>
            <div class="text-gray-500">32 años</div>
        </div>
        <div class="flex justify-center gap-4">
            <a href="#" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Editar</a>
            <form method="POST" action="">
                @csrf
                @method('DELETE')
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Eliminar</button>
            </form>
        </div>
        <div class="h-px bg-gray-200"></div>
        <div class="space-y-2">
            <div class="flex justify-between items-center">
                <span class="font-medium">Correos electrónicos</span>
                <a href="#" class="inline-flex items-center justify-center w-6 h-6 rounded-full hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-gray-500">
                        <path d="M12 5v14m7-7H5" />
                    </svg>
                </a>
            </div>
            <div class="space-y-2">
                {{-- @foreach($user->emails as $email) --}}
                    <div class="flex justify-between items-center">
                        <span>wisofer17@gmail.com</span>
                        <form method="POST" action="">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline-flex items-center justify-center w-6 h-6 rounded-full hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-gray-500">
                                    <path d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </form>
                    </div>
                {{-- @endforeach --}}
            </div>
        </div>
        <div class="flex justify-center">
            <a href="" class="inline-flex items-center text-indigo-600 hover:text-indigo-900">Volver</a>
        </div>
    </div>
</div>
@endsection

<?php
// {{ route('correo.destroy', ['id_correo' => $correo->id, 'persona_id' => $correo->persona_id] ) }}
?>
