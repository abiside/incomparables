<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @yield('metadata')

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/tailwind-sk.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        <script data-ad-client="ca-pub-9659946916306519" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-QXVER4GGJB"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-QXVER4GGJB');
        </script>

    </head>
    <body class="font-sans antialiased bg-gray-100">
        <div class="min-h-screen">
            @yield('header')

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
