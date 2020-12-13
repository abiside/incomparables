@php
    $classes = "px-6 py-4 placeholder-gray-400 text-gray-700 relative bg-white bg-white
    text-base shadow-lg w-full mt-2 rounded-full
    outline-none ring-yellow-500 border-1 border-gray-200 border";

    $type = $type ?? 'text';
    $id = $id ?? '';
    $name = $name ?? '';
    $required = $required ?? false;
    $label = $label ?? '';
    $value = isset($value) ? $value : '';
@endphp

<label class="ml-6"> {{ $label }}</label>
<input
    id="{{ $id }}"
    class="{{ $classes }}"
    type="{{ $type }}"
    name="{{ $name }}"
    @if($required) required @endif
    @if(isset($autocomplete))
        autocomplete="{{ $autocomplete }}"
    @endif

    :value="{{ $value }}"

/>
