<section class="text-gray-600 body-font">
  <div class="py-6 mx-auto">
    <div class="flex flex-wrap md:-m-4">
    @foreach($this->posts as $post)
      <div class="p-2 w-full  lg:w-1/2 xl:w-1/3 xl:first:w-2/3">
        <div class="h-full border-2 bg-white border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
            <a href="{{ $post->publicUrl }}">
                <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{ $post->thumbnail }}" alt="blog">
            </a>
            <div class="p-6 ">
                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1 uppercase">{{ $post->source->name }}</h2>
                <a href="{{ $post->publicUrl }}"
                    class="title-font text-lg font-medium text-gray-900">
                    {{ $post->title }}
                </a>
            </div>
        </div>
      </div>
    @endforeach
    </div>
  </div>
</section>
