<div>
    @if ($product->isInCart())
        <div class="flex items-center justify-between gap-4">
            <button wire:click="decrementQuantity"
                class="hocus:bg-sky-600 hocus:text-white h-8 w-8 rounded-full border border-sky-600 text-center text-lg font-semibold text-sky-600 transition-colors duration-300">-</button>
            <span>{{ $product->transaction->quantity ?? '1' }}</span>
            <button wire:click="incrementQuantity"
                class="hocus:bg-sky-600 hocus:text-white h-8 w-8 rounded-full border border-sky-600 text-center text-lg font-semibold text-sky-600 transition-colors duration-300">+</button>
        </div>
    @else
        <button
            class="hocus:bg-sky-600 hocus:text-white z-10 rounded-lg border border-sky-600 bg-white py-1 px-3 text-center capitalize text-sky-600 transition-colors duration-300"
            wire:click="addToCart">
            @if ($product->isInCart())
                Is On Cart
            @else
                Add
            @endif
        </button>
    @endif
</div>
