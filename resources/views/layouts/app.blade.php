<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/tailwind-sk.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <!-- Page Heading -->
            <header class="bg-white body-font">
                <div class="container mx-auto flex flex-wrap p-5 py-2 flex-col md:flex-row justify-between">
                    <a class="flex items-center h-12 w-24 relative">
                        <div class="absolute top-5 left-4">
                            @include('components.image', [
                                'src' => asset('images/logo.svg')
                            ])
                        </div>
                    </a>

                    <div class="px-6 w-8/12">
                        <div class="h-20 rounded-lg overflow-hidden text-center relative bg-gray-100 items-center p-3">
                            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 uppercase w-full">Publicidad</h2>
                            <div class="flex items-center justify-center">
                                <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900">
                                    Tu marca puede estar aquí
                                </h1>
                                <div class="ml-6 w-40">
                                    @include('components.button',[
                                        'label' => __('Contactar')
                                    ])
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center">Login</div>

                </div>

                <div class="flex flex-wrap items-center bg-yellow-500 h-14 text-white font-bold">
                    <nav class="ml-auto mr-auto flex flex-wrap items-center justify-center uppercase">
                        <a href="{{ url('/') }}" class="mr-5 hover:text-yellow-200">Inicio</a>
                        <a href="{{ url('/noticias') }}" class="mr-5 hover:text-yellow-200">Noticias</a>
                        <a href="{{ url('/noticias') }}" class="mr-5 hover:text-yellow-200">Quinielas</a>
                        <a href="{{ url('/noticias') }}" class="mr-5 hover:text-yellow-200">Contacto</a>
                    </nav>
                </div>
            </header>

            <!-- Page Content -->
            <main class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
