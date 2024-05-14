<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    @extends('Layouts.app')
    @section('contenido')
        <div class="bg-gradient-to-br from-blue-400 to-purple-800 text-white py-20 px-4 mb-20 mt-20">
            <h1 class="text-center text-3xl md:text-5xl lg:text-7xl font-bold">Framework Frontend</h1>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($frontends as $frontend)
                <div class="flex justify-center">
                    <div class="max-w-xs md:max-w-sm rounded overflow-hidden shadow-lg bg-white m-4 mx-10 flex-shrink-0">
                        <img class="w-full" src="{{ $frontend->url }}" alt="{{ $frontend->nombre }}">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">{{ $frontend->nombre }}</div>
                            <p class="text-gray-700 text-base">{{ $frontend->comentario }}</p>
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



        <div class="bg-gradient-to-br from-red-400 to-purple-800 text-white py-20 px-4 mb-20 mt-20">
            <h1 class="text-center text-3xl md:text-5xl lg:text-7xl font-bold">Framework CSS</h1>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-20">
            <div class="flex justify-center">
                <div class="max-w-xs md:max-w-sm rounded overflow-hidden shadow-lg bg-white m-4">
                    <img class="w-full"
                        src="https://picperf.io/https://laravelnews.s3.amazonaws.com/images/tailwindcss-1633184775.jpg"
                        alt="Vue Logo">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Tailwind</div>
                        <p class="text-gray-700 text-base">Tailwind CSS es un framework de utilidades de CSS que proporciona
                            una amplia variedad de clases predefinidas para estilizar elementos HTML. En lugar de
                            proporcionar estilos predefinidos, Tailwind ofrece clases utilitarias que se aplican
                            directamente a los elementos HTML para modificar su apariencia y comportamiento</p>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="max-w-xs md:max-w-sm rounded overflow-hidden shadow-lg bg-white m-4">
                    <img class="w-full"
                        src="https://www.etatvasoft.com/insights/wp-content/uploads/2017/02/b-thumb-img9.jpg"
                        alt="Vue Logo">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Bootstrap</div>
                        <p class="text-gray-700 text-base">Bootstrap es un framework de código abierto de CSS y JavaScript
                            que proporciona una amplia variedad de componentes y estilos predefinidos para ayudar en el
                            desarrollo rápido y fácil de interfaces web responsivas y atractivas. Está basado en el concepto
                            de diseño móvil primero (mobile-first), lo que significa que los diseños y componentes se
                            adaptan automáticamente a diferentes tamaños de pantalla, desde dispositivos móviles hasta
                            computadoras de escritorio.</p>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="max-w-xs md:max-w-sm rounded overflow-hidden shadow-lg bg-white m-4">
                    <img class="w-full"
                        src="https://raw.githubusercontent.com/jgthms/bulma/master/docs/images/bulma-banner.png"
                        alt="Vue Logo">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Bulma</div>
                        <p class="text-gray-700 text-base">Bulma es un framework de CSS que se enfoca en proporcionar una
                            estructura limpia y modular para el diseño de interfaces web. A diferencia de otros frameworks
                            como Bootstrap, Bulma no utiliza JavaScript, lo que lo hace más ligero y flexible.</p>
                    </div>
                </div>
            </div>

        </div>
    @endsection
</body>

</html>
