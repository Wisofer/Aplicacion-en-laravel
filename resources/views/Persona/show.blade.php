@extends('layouts.app')
@section('contenido')
    {{-- <div class="max-w-md mx-auto bg-white rounded-md shadow-md p-6">
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

<br>
<br>
<br> --}}

<!-- resources/views/user-profile.blade.php -->

<div class="max-w-md mx-auto bg-gray-800 rounded-lg shadow-md mt-20">
    <div class="bg-gray-700 p-6 flex flex-col sm:flex-row items-center gap-4 rounded-t-lg">
        <div class="h-16 w-16 rounded-full overflow-hidden relative">
            <img id="user-avatar" src="{{ asset('images/' . $listaPersonas->imagen) }}" alt="User Avatar" class="w-full h-full object-cover">
            <div class="absolute inset-0 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity duration-300 bg-black bg-opacity-50 rounded-full">
                <label for="image-upload" class="cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </label>
            </div>
            <form id="upload-form" action="{{ route('personas.updateImage', $listaPersonas->id) }}" method="POST" enctype="multipart/form-data" class="hidden">
                @csrf
                @method('PUT')
                <input type="file" id="image-upload" name="image" class="hidden" accept="image/*">
            </form>
        </div>
        <div class="mt-4 sm:mt-0 space-y-1">
            <h3 class="text-lg font-semibold text-white">{{ $listaPersonas->nombre }}</h3>
            <p class="text-lg font-semibold text-white">Edad: {{ $listaPersonas->edad }}</p>
        </div>
    </div>
    
    <div class="p-6 space-y-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="space-y-1">
                @foreach ($listaPersonas->correos as $correo)
                <p class="text-gray-400 text-sm">Email</p>
                <p class="font-medium text-gray-200">{{ $correo->direccion }}</p>
                @endforeach
            </div>
            <div class="space-y-1">
                <p class="text-gray-400 text-sm">Phone</p>
                <p class="font-medium text-gray-200">(505) {{ $listaPersonas->telefono }}</p>
            </div>
        </div>
    </div>
</div>


<script>
    document.getElementById('image-upload').addEventListener('change', function() {
        document.getElementById('upload-form').submit();
    });
</script>
@endsection

<?php
// {{ route('correo.destroy', ['id_correo' => $correo->id, 'persona_id' => $correo->persona_id] ) }}
?>
