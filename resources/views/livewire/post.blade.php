<section class="text-gray-600 body-font">
    <div class="flex">
        <div class="w-full md:w-2/3 xl:w-3/4">
             <div class="mx-auto flex flex-col">
                <div class="w-full mx-auto">
                    <div class="md:rounded-lg overflow-hidden relative" style="max-height:500px">
                        <img alt="content" class="object-center h-full w-full" src="{{ $post->image }}">
                        <div class="invisible lg:visible absolute bottom-0 w-full text-white bg-gradient-to-t from-black">
                            <h1 class="px-10 py-8 text-4xl font-bold">{{ $post->title }}</h1>
                        </div>
                        <h1 class="lg:hidden text-2xl font-bold p-4 text-gray-700 bg-white">{{ $post->title }}</h1>
                    </div>

                    <div class="flex flex-col sm:flex-row mt-4 md:mt-8 px-4">
                        <div class="hidden lg:block sm:w-1/3 text-center sm:pr-8 sm:py-8">
                            <div class="w-20 h-20 rounded-full inline-flex items-center justify-center overflow-hidden">
                                <img src="{{ $post->source->thumb }}">
                            </div>
                            <div class="flex flex-col items-center text-center justify-center">
                                <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">{{ $post->source->name }}</h2>
                                <div class="w-12 h-1 bg-yellow-500 rounded mt-2 mb-4"></div>
                                <p class="text-base">
                                    Publicación original:
                                    <a class="text-sm text-gray-400 " target="_blank" href="{{ $post->link }}">{{ $post->link }}</a>
                                </p>
                            </div>
                        </div>
                        <div class="sm:w-2/3 sm:pl-8  sm:border-l border-gray-200 sm:border-t-0 sm:mt-0 sm:text-left">
                            <div class="post-wrapper leading-relaxed text-lg mb-4">
                                {!! $post->content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hidden md:block md:w-1/3 xl:w-1/4 pl-6">
            <div class="py-4 w-full">
                <div class="h-full rounded-lg overflow-hidden text-center relative bg-white p-6">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1 uppercase">Publicidad</h2>
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">Tu marca puede estar aquí</h1>
                    <p class="leading-relaxed mb-3">Anúnciate directamente a la afición incomparable. Más de 1,000,000 visitantes potenciales podrán ver tu anuncio.</p>
                    @include('components.button',[
                        'label' => __('Contactar'),
                        'href' => 'mailto:contacto@puntoindex.com',
                    ])
                </div>
            </div>
        </div>
    </div>
</section>

@include('partials.post-scripts')
