@php
    $color = $color ?? 'gray';
    $color = "bg-{$color}-500 hover:bg-{$color}-600 active:bg-{$color}-700";
@endphp

<a
    class="block w-full rounded-full text-center font-semibold text-white uppercase
    tracking-widest focus:outline-none disabled:opacity-25 transition
    ease-in-out duration-150 p-2 text-sm {{ $color }}"

    @isset($href)
        href="{{ $href }}"
    @endisset
    >

    {{ $label }}
</a>
