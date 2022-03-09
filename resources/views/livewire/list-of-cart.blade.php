<div class="flex justify-between border-b border-gray-300 py-3 px-8"
    x-data="{ showNotesInputModal{{ $product->id }}: false }">
    <div class="flex flex-col gap-16">
        <div>
            <h1 class="font-medium">{{ $product->name }}</h1>
            <h3 class="text-red-500">${{ $product->price }}</h3>
        </div>
    </div>
    <div class="flex flex-col items-center justify-between">
        <img src="{{ $product->getFirstMediaUrl('product/images') }}" alt="{{ $product->name }}"
            class="w-32">
        <livewire:button.add-to-cart :product="$product" />
    </div>
</div>
