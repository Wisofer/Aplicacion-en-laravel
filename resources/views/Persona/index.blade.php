@extends('layouts.app')

@section('contenido')
<!-- resources/views/components/persona-table.blade.php -->
<div class="w-full max-w-4xl mx-auto mt-20">
    <div class="flex items-center justify-between mb-4">
        <h1 class="text-2xl font-bold">Personas</h1>
        <a href="{{ route('create') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
            Crear Persona
        </a>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead>
                <tr>
                    <th class="w-[200px] px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                    <th class="w-[100px] px-6 py-3 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Ver</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($listaPersonas as $persona)
                    <tr>
                        <td class="px-6 py-4 font-medium text-gray-900">{{ $persona->nombre }}</td>
                        <td class="px-6 py-4 text-right">
                            <a href="{{ route('show', ['id' => $persona->id]) }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                Detalle
                            </a>
                        </td>
                    </tr>
                 @endforeach 
            </tbody>
        </table>
    </div>
</div>

@endsection