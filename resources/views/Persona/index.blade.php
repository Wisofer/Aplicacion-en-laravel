@extends('Persona.navbar')

@section('contenido')

<div class="bg-gray-100 p-4">
    <div class="text-gray-800">
        {{ $menssage }}
    </div>
    <a href="{{ route('create') }}" class="text-gray-300 hover:text-white mt-4 inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create</a>
</div>

<div class="mt-4">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Ver
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($listaPersonas as $persona)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">{{ $persona->nombre }}</div>
                </td>
                
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                    <a href="{{ route('show', ['id' => $persona->id]) }}" class="text-blue-500 hover:text-blue-700">Detalle</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
