@props(['disabled' => false])

@php
    $classes = "px-6 py-4 placeholder-gray-400 text-gray-700 relative bg-white bg-white
    text-base shadow-lg w-full mt-2 rounded-full
    outline-none ring-yellow-500 border-1 border-gray-200 border";
@endphp
<label class="ml-6 text-gray-500">{{ $attributes['label'] }}</label>
<input
    {{ $disabled ? 'disabled' : '' }}
    {!! $attributes->merge(['class' => $classes]) !!}
/>