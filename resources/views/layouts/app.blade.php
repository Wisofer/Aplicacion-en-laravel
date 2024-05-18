<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar con Tailwind CSS</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <style>

        body{
            background-image: url('{{ asset('images/img2.gif') }}');
        }

        #menu li a {
            position: relative;
        }

        #menu li a::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #00d407;
            transition: width 0.3s;
        }

        #menu li a:hover::after {
            width: 100%;
        }

        #menu li a.active::after {
            width: 0;
        }

        footer {
            position: relative;
            /* Cambia esto si hay algo que lo necesite */
            bottom: 0;
            width: 100%;
            padding: 1rem 0;
            
        }

        h3 {
            font-size: 1.5rem;
            /* Ajustar tamaño del texto */
        }

        footer img {
            transition: transform 0.2s ease-in-out;
        }

        footer img:hover {
            transform: scale(1.1);
        }
    </style>

</head>

<body>

    <nav class="bg-gradient-to-br from-blue to-blue-900">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between py-8">
                <div>
                    <a id="menu"x href="{{ route('inicio') }}" class="text-white font-bold text-xl">WILLIAM
                        BORGE</a>
                </div>
                <div class="md:hidden">
                    <button id="menu-toggle" class="text-white focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>
                <div id="menu" class="hidden md:flex md:items-center md:w-auto font-medium">
                    <ul class="md:flex md:space-x-4" style="size: 200px">
                        <li><a href="{{ route('backend.index') }}" class="text-gray-300 hover:text-white">Backend </a>
                        </li>
                        <li><a href="{{ route('frontend.index') }}" class="text-gray-300 hover:text-white">Fron End</a>
                        </li>
                        <li><a href="{{ route('create') }}" class="text-gray-300 hover:text-white">Create</a></li>
                        <li><a href="{{ route('index') }}" class="text-gray-300 hover:text-white">Datos</a></li>
                        <li><a href="{{ route('contacto') }}" class="text-gray-300 hover:text-white">Contacto</a></li>
                        @guest
                            <li><a href="{{ route('login') }}" class="text-gray-300 hover:text-white">Login</a></li>
                        @else
                            <li>
                                <a href="{{ route('logout') }}" class="text-gray-300 hover:text-white"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ Auth::user()->name }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div>
        @yield('contenido')
    </div>

    <footer class="bg-gradient-to-br from-blue to-black-100 text-white text-center py-8">
        <h3 class="text-2xl">Compañía WILLIAM BORGE© 2024</h3>
        <div class="flex justify-center mt-4">
            <a href="https://www.facebook.com/wisofer.wisofer.3?locale=es_LAm" target="_blank" class="mx-2">
                <img src="{{ asset('images/fb.png') }}" alt="Facebook" class="h-8 w-8">
            </a>
            <a href="https://twitter.com" target="_blank" class="mx-2">
                <img src="{{ asset('images/x.jpg') }}" alt="Twitter" class="h-8 w-8">
            </a>
            <a href="https://www.instagram.com/wisofer17/" target="_blank" class="mx-2">
                <img src="{{ asset('images/instagram.png') }}" alt="Instagram" class="h-8 w-8">
            </a>
            <a href="https://www.linkedin.com/in/william-borge-450798201/" target="_blank" class="mx-2">
                <img src="{{ asset('images/lin.png') }}" alt="LinkedIn" class="h-8 w-8">
            </a>
        </div>
    </footer>


    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            document.getElementById('menu').classList.toggle('hidden');
        });
    </script>
</body>
</body>

</html>
