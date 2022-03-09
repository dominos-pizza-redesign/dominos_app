@props(['align' => 'center', 'home' => 'false', 'back_to' => 'home'])

{{ $attributes }}
@php
$align_class = match ($align) { 'center' => 'justify-center',  'left' => 'justify-start',  'right' => 'justify-end' };
@endphp

<div
    class="bg-sky-600 p-5 h-20 max-h-fit flex {{ $align_class }} items-center text-center font-semibold text-white text-2xl sticky top-0 z-20">
    @if ($home == 'false')
        <a href="{{ isset($back_to) ? route($back_to) : url()->previous() }}">
            <i class="fa-solid fa-angle-left ml-5 mr-8 text-lg"></i>
        </a>
    @endif
    {{ $slot }}
</div>
