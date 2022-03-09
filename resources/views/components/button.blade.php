@props(['variant' => 'primary'])

<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-'.$variant]) }}>
    {{ $slot }}
</button>

