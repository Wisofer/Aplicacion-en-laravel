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
    @extends('layouts.app')
    @section('contenido')
        {{-- <div class="container mx-auto py-8">
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
        </div> --}}

        <div class="min-h-screen flex items-center justify-center">
            <div class="w-full max-w-md bg-neutral-900 text-white rounded-lg shadow-lg">
                <div class="p-4">
                    <h2 class="text-xl font-bold">Nuevo Frontend</h2>
                    <p class="text-neutral-400">Complete el formulario para crear un nuevo proyecto.</p>
                </div>
                <form class="space-y-4 p-4" action="{{ route('frontend.formulario.store') }}" method="post">
                    @csrf
                    <div class="space-y-2">
                        <input type="hidden" name="id" id="id">
                        <label for="url" class="text-neutral-400">URL de la imagen</label>
                        <input
                            name="url" 
                            id="url"
                            placeholder="Ingresa la url"
                            class="bg-neutral-900 border-neutral-700 focus:border-neutral-500 block w-full p-2 rounded"
                            required
                        />
                    </div>
                    <div class="space-y-2">
                        <label for="framework" class="text-neutral-400">Framework</label>
                        <div class="relative">
                            <select
                                name="nombre"
                                id="nombre"
                                id="framework"
                                class="bg-neutral-900 border-neutral-700 focus:border-neutral-500 block w-full p-2 rounded appearance-none"
                                required
                            >
                                <option value="" disabled selected>Seleccione un framework</option>
                                <option value="React.js">React.js</option>
                                <option value="Angular">Angular</option>
                                <option value="Vue.j">Vue.j</option>
                                <option value="Ember.js">Ember.js</option>
                                <option value="Svelte">Svelte</option>
                                <option value="Backbone.js">Backbone.js:</option>
                                <option value="Meteor.js">Meteor.js</option>
                                <option value="Aurelia">Aurelia</option>
                                <option value="Mithril">Mithril</option>
                                <option value="Polymer">Polymer</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-neutral-400">
                                <svg class="h-4 w-4 fill-current" viewBox="0 0 20 20"><path d="M7 10l5 5 5-5H7z"/></svg>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label for="comment" class="text-neutral-400">Comentario</label>
                        <textarea
                            name="comentario"
                            id="comentario"
                            placeholder="Ingrese un comentario"
                            class="bg-neutral-900 border-neutral-700 focus:border-neutral-500 block w-full p-2 rounded min-h-[100px]"
                            required
                        ></textarea>
                    </div>
                    <div class="flex justify-center">
                        <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                            Crear Projecto
                        </button>
                    </div>
                </form>
            </div>
            
        </div>
    </body>
@endsection

</html>
