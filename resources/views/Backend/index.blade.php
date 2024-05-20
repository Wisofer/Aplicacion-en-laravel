<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
    <style>
        /* Estilos personalizados */
        .btn-move {
            transition: transform 0.2s ease;
        }

        .btn-move:hover {
            transform: scale(1.05);
            /* Escala del botón al pasar el cursor sobre él */
        }

        body {
            background-image: url('{{ asset('images/img2.gif') }}');
            
        }
        @keyframes flame {
            0% {
                transform: scale(1) rotate(-5deg) translateX(-2px);
                opacity: 1;
            }

            50% {
                transform: scale(1.1) rotate(5deg) translateX(2px);
                opacity: 0.8;
            }

            100% {
                transform: scale(1) rotate(-5deg) translateX(-2px);
                opacity: 1;
            }
        }

        .animate-flame {
            animation: flame 1s ease-in-out infinite;
        }
    </style>
</head>

<body class="">
    @extends('Layouts.app')
    @section('contenido')
        <div class="h-full flex items-center justify-center  mt-50">
            <div class="text-white text-center">
                <h1 class="text-9xl font-bold mb-4">¡Saludos!</h1>
                <p class="text-lg text-5xl">Bienvenido a esta experiencia celestial.</p>
            </div>
        </div>

        <div class="bg-gradient-to-br from-pink-300 to-green-600 text-white py-20 px-4 mb-20 mt-20">
            <h1 class="text-center text-3xl md:text-5xl lg:text-9xl font-bold">Framework Backend</h1>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-10 ">
            @foreach ($backends as $backend)
                <div class="flex justify-center ">
                    <div class="max-w-xs md:max-w-sm rounded overflow-hidden shadow-lg bg-white m-4 mx-10 flex-shrink-0">
                        <img class="w-full" src="{{ $backend->url }}" alt="{{ $backend->nombre }}">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">{{ $backend->nombre }}</div>
                            <p class="text-gray-700 text-base">{{ $backend->comentario }}</p>
                        </div>
                        <div class="px-6 py-2 flex justify-center items-center">
                            <!-- Botones con iconos -->
                            <div class="flex justify-center space-x-4">
                                <!-- Botón de Editar -->
                                <a href="#" class="text-blue-500 hover:text-blue-700" aria-label="Editar">
                                    <svg class="h-8 w-8" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
                                        <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
                                        <line x1="16" y1="5" x2="19" y2="8" />
                                    </svg>
                                </a>
                                <!-- Botón de Mostrar -->
                                <a href="#" class="text-green-500 hover:text-green-700" aria-label="Mostrar">
                                    <svg class="h-8 w-8" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="2" />
                                        <path d="M2 12l1.5 2a11 11 0 0 0 17 0l1.5 -2" />
                                        <path d="M2 12l1.5 -2a11 11 0 0 1 17 0l1.5 2" />
                                    </svg>
                                </a>
                                <!-- Formulario de Eliminar -->
                                <form action="#" method="POST"
                                    onsubmit="return confirm('¿Estás seguro de eliminar este registro?')"
                                    class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700" aria-label="Eliminar">
                                        <svg class="h-8 w-8" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <line x1="4" y1="7" x2="20" y2="7" />
                                            <line x1="10" y1="11" x2="10" y2="17" />
                                            <line x1="14" y1="11" x2="14" y2="17" />
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


        <div class="bg-gradient-to-r from-purple-300 to-yellow-800 py-20 text-center mt-20">
            <h2 class="text-xl font-semibold text-5xl">¡Explora nuevos horizontes!</h2>
            <p class="text-gray-800 mt-2 text-3xl">Descubre y comparte tu framework frontend favorito. ¡Demuestra su
                potencial!</p>
            <a href="{{route('backend.formulario.create')}}"
                class="text-3xl inline-block relative overflow-hidden font-bold py-5 px-4 rounded-md mt-5">
                <span class="absolute inset-0 bg-gradient-to-r from-orange-500 to-red-600 rounded-md animate-flame"></span>
                <span class="relative text-white z-10">Agregar Framework Backend</span>
            </a>
        </div>
    @endsection

</body>

</html>
