<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar con Tailwind CSS</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-slate-500">

<nav class="bg-gray-700">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between py-4">
            <div>
                <a href="{{ route('inicio') }}" class="text-white font-bold text-xl">WILLIAM BORGE</a>
            </div>
            <div class="md:hidden">
                <button id="menu-toggle" class="text-white focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
            <div id="menu" class="hidden md:flex md:items-center md:w-auto">
                <ul class="md:flex md:space-x-4">
                    <li><a href="{{ route('inicio') }}" class="text-gray-300 hover:text-white">Backend </a></li>
                    <li><a href="{{ route('acerca') }}" class="text-gray-300 hover:text-white">Fron End</a></li>
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
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
</nav>

<div class="mx-auto py-8 mb-10">
  @yield('contenido')
</div>

<footer class="bg-gray-800 text-white text-center py-4 fixed bottom-0 w-full">
  <h3>Compañía WILLIAM BORGE© 2023</h3>
</footer>
 
<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        document.getElementById('menu').classList.toggle('hidden');
    });
</script>

</body>
</html>
