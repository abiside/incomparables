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

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-QXVER4GGJB"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-QXVER4GGJB');
        </script>

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <!-- Page Heading -->
            <header class="bg-white body-font">
                <div class="w-full xl:w-10/12 mx-auto flex flex-wrap p-5 py-2 flex-col md:flex-row justify-between">
                    <a class="flex items-center h-12 md:w-24 relative ml-2">
                        <div class="w-16 mt-12 md:w-auto md:mt-0 md:absolute md:top-5 md:left-4">
                            @include('components.image', [
                                'src' => asset('images/logo.svg')
                            ])
                        </div>
                    </a>

                    <div class="hidden md:block px-6 w-8/12">
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

                    <div class="flex items-center hidden md:block"></div>

                </div>

                <div class="flex flex-wrap items-center bg-yellow-500 h-14 text-white font-bold">
                    <nav class="invisible md:visible ml-auto mr-auto flex flex-wrap items-center justify-center uppercase">
                        <a href="{{ url('/') }}" class="mr-5 hover:text-yellow-200">Inicio</a>
                        <a href="{{ url('/noticias') }}" class="mr-5 hover:text-yellow-200">Noticias</a>
                        <a href="{{ url('/noticias') }}" class="mr-5 hover:text-yellow-200">Quinielas</a>
                        <a href="{{ url('/noticias') }}" class="mr-5 hover:text-yellow-200">Contacto</a>
                    </nav>
                </div>
            </header>

            <!-- Page Content -->
            <main class="w-full xl:w-10/12 mx-auto flex flex-wrap md:p-5 flex-col md:flex-row items-center">
                {{ $slot }}
            </main>
        </div>

        @stack('modals')
        @stack('styles')
        @livewireScripts
        @stack('scripts')
    </body>
</html>
