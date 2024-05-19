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

        <div class="bg-gradient-to-r from-purple-300 to-yellow-800 py-20 text-center">
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
