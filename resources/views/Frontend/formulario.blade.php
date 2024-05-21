<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de Imagen</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="">
    @extends('Layouts.app')
    @section('contenido')
        <div class="container mx-auto py-8">
            <p class="text-center text-xl font-bold mb-4"></p>
            <form action="{{ route('frontend.formulario.store') }}" method="post"
                class="max-w-md mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                <input type="hidden" name="id" id="id">
                <div class="mb-4">
                    <label for="url" class="block text-gray-700 text-sm font-bold mb-2">URL de la imagen:</label>
                    <input type="text" name="url" id="url"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre del framework:</label>
                    <input type="text" name="nombre" id="nombre"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-6">
                    <div class="mb-4">
                        <label for="comentario" class="block text-gray-700 text-sm font-bold mb-2">Comentario de la
                            imagen:</label>
                        <textarea name="comentario" id="comentario"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline resize-none"></textarea>
                    </div>
                    <div class="flex items-center justify-end">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Enviar</button>
                    </div>
            </form>
        </div>
    </body>
@endsection

</html>
