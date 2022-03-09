<div x-data="{ open: false }" class="z-30 fixed">
    <div x-show="open"
        x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-100"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed top-0 bg-gray-500 opacity-50 h-screen w-screen flex items-end z-30 bottom" @click="open = !open"></div>

    <div x-show="open"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="-bottom-64"
        x-transition:enter-end="bottom-0"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="bottom-0"
        x-transition:leave-end="-bottom-64"
        class="fixed bottom-0 bg-white rounded-t-3xl w-full h-auto z-40 flex flex-col px-5 pt-3 items-center pb-24"
        @click.away="open = false">
        <div class="flex justify-center items-center">
            <div class="h-2 w-28 bg-gray-400 rounded-full"></div>
        </div>
        <div class="flex justify-center items-center -mt-8">
            <img src="{{ $product->getFirstMediaUrl('product/images') }}" >
        </div>
        <div class="flex w-full">
            <div class="font-semibold text-2xl">
                <h1>{{ $product->name }}</h1>
                <p class="text-red-500">${{ $product->price }}</p>
            </div>
        </div>
    </div>
</div>
