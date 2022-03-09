<div x-data="{ showModal{{ $product->id }}: false }"
    x-on:keydown.escape.window="showModal{{ $product->id }} = false">
    <div class="hocus:bg-gray-50 grid grid-cols-8 grid-rows-1 gap-5 border-b border-gray-300 p-5">
        <div id="product_img{{ $product->id }}" class="col-span-2 flex items-center justify-center"
            @click="showModal{{ $product->id }} = true">
            <img src="{{ $product->getFirstMediaUrl('product/images') }}" alt="{{ $product->name }}"
                class="w-full">
        </div>
        <div id="detail{{ $product->id }}" class="col-span-6 flex flex-col">
            <div class="grid grid-flow-col gap-5" @click="showModal{{ $product->id }} = true">
                <div class="col-span-8">
                    <h1 class="text-xl font-semibold">{{ Str::limit($product->name, 15, '...') }}</h1>
                    <p class="text-sm font-normal text-gray-400">
                        {{ Str::limit($product->description, 40, '...') }}</p>
                </div>
                <div class="col-span-4 justify-end">
                    <div id="price" class="text-xl font-medium text-red-500">${{ $product->price }}</div>
                </div>
            </div>
            <div class="mt-6 flex h-auto items-end justify-between">
                <livewire:like-button :product="$product" />
                <livewire:button.add-to-cart :product="$product" />
            </div>
        </div>
        {{-- Product Detail Modal --}}
        <template x-teleport="body">
            <div x-show="showModal{{ $product->id }}">
                <div x-show="showModal{{ $product->id }}" id="opacity{{ $product->id }}"
                    x-transition:enter.opacity.duration.300ms x-transition:leave.opacity.duration.300ms x-init="$watch('showModal{{ $product->id }}', open => {
                        if (open) {
                            document.body.classList.add('overflow-y-hidden');
                        } else {
                            document.body.classList.remove('overflow-y-hidden');
                        }
                    })" class="fixed top-0 z-30 flex h-screen w-screen items-end"
                    @click="showModal{{ $product->id }} = false">
                    <div class="absolute inset-0 bg-gray-500 opacity-30"></div>
                </div>
                <div x-show="showModal{{ $product->id }}"
                    x-transition:enter="transition-transform ease-in-out duration-300"
                    x-transition:enter-start="translate-y-full" x-transition:enter-end="bottom-0"
                    x-transition:leave="transition-transform ease-in-out duration-300"
                    x-transition:leave-start="bottom-0" x-transition:leave-end="translate-y-full"
                    class="fixed bottom-0 bg-white rounded-t-3xl transition w-full h-auto z-50 flex flex-col px-5 pt-3 items-center pb-5 drop-shadow-[0_0_35px_rgba(0,0,0,0.25)]"
                    @click.away="showModal{{ $product->id }} = false"
                    @keydown.escape="showModal{{ $product->id }} = false">
                    <div class="flex items-center justify-center">
                        <div class="h-2 w-28 rounded-full bg-gray-400">
                        </div>
                    </div>
                    <div class="-mt-8 flex items-center justify-center">
                        <img src="{{ $product->getFirstMediaUrl('product/images') }}">
                    </div>
                    <div class="flex w-full justify-between">
                        <div class="text-2xl font-semibold">
                            <h1>{{ $product->name }}</h1>
                            <p class="text-red-500">${{ $product->price }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </div>
</div>
