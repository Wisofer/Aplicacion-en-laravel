@extends('auth.layouts.app')
@vite('resources/css/app.css')
@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <div>
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                Registro
            </h2>
        </div>
        <form class="mt-8 space-y-6" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="rounded-md shadow-sm -space-y-px">
                <div>
                    <label for="name" class="sr-only">Nombre</label>
                    <input id="name" name="name" type="text" autocomplete="name" required
                        class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                        placeholder="Nombre" value="{{ old('name') }}">
                    @error('name')
                    <p class="mt-2 text-sm text-red-600" role="alert">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                <div>
                    <label for="email" class="sr-only">Correo electrónico</label>
                    <input id="email" name="email" type="email" autocomplete="email" required
                        class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                        placeholder="Correo electrónico" value="{{ old('email') }}">
                    @error('email')
                    <p class="mt-2 text-sm text-red-600" role="alert">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                <div>
                    <label for="password" class="sr-only">Contraseña</label>
                    <input id="password" name="password" type="password" autocomplete="new-password" required
                        class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                        placeholder="Contraseña">
                    @error('password')
                    <p class="mt-2 text-sm text-red-600" role="alert">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                <div>
                    <label for="password-confirm" class="sr-only">Confirmar contraseña</label>
                    <input id="password-confirm" name="password_confirmation" type="password" autocomplete="new-password" required
                        class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                        placeholder="Confirmar contraseña">
                </div>
            </div>

            <div>
                <button type="submit"
                    class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                        <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                            <path fill-rule="evenodd"
                                d="M2 6a8 8 0 1116 0v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6zm10-4a2 2 0 00-4 0v2h4V2z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                    Registrarse
                </button>
            </div>
        </form>
        <div class="text-center">
            <p class="mt-2 text-sm text-gray-600">
                ¿Ya tienes una cuenta?
                <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                    Iniciar sesión
                </a>
            </p>
        </div>
    </div>
</div>
@endsection
