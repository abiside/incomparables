@section('metadata')
    @include('partials.metadata', [
        'pageMeta' => $this->pageMeta,
    ])
@endsection

<div class="flex">
    <div class="w-full md:w-2/3 xl:w-3/4">
        @livewire('posts')
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
