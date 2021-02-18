@extends('layouts.base')

@section('header')
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
                            'label' => __('Contactar'),
                            'href' => 'mailto:contacto@puntoindex.com',
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
            <a href="{{ url('/') }}" class="mr-5 hover:text-yellow-200">Noticias</a>
            <a class="mr-5 text-yellow-300 select-none">Quinielas</a>
            <a href="{{ url('mailto:contacto@puntoindex.com') }}" class="mr-5 hover:text-yellow-200">Contacto</a>
        </nav>
    </div>
</header>
@endsection
