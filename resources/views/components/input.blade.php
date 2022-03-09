@props(['for', 'type' => 'text', 'label', 'isLabelled' => 'true', 'class'])

<div class="w-full">
    @if($isLabelled == "true")
        <label for="{{ $for }}" class="block text-gray-400">{{ $label ?? "" }}</label>
    @endif
    <input type="{{ $type }}" name="{{ $for }}" id="{{ $for }}" {!! $attributes !!} class="{{ $class }} @error($for) border-red-500 @enderror">
    @error($for)
        <p class="text-red-500">{{ $message }}</p>
    @enderror
</div>

