@props(['href', 'active', 'icon'])

@php
    $activeClass = ($active ?? false)
                    ? 'bg-sky-50'
                    : ''
@endphp

<a href="{{ $href }}" class="w-20 rounded-full py-2 px-4 flex justify-center items-center mt-2 transition-colors duration-300 hocus:bg-sky-50 {{ $activeClass }}">
    <img src="{{ $icon }}" alt="Icon Home" class="h-7">
</a>
