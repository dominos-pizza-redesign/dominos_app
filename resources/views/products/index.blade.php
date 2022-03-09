<x-app-layout>
    <x-slot name="title">{{ $menu->name . ' - ' . $category->name }}</x-slot>

    <x-slot name="header">
        <x-header align="left" back_to="home">{{ $menu->name }}</x-header>
    </x-slot>

    <div class="fixed top-16 z-30 grid w-full grid-cols-1">
        <div class="flex bg-sky-600 shadow-xl">
            @foreach ($menu->categories as $category)
                <a href="{{ route('products.index', ['menu' => $menu->slug, 'category' => $category->slug]) }}"
                    class='w-full h-12 flex justify-center items-center hocus:border-b-2 hocus:border-sky-50 hocus:cursor-pointer @if (request()->is("products/$menu->slug/$category->slug")) border-b-4 border-sky-50 @endif'>
                    <p class="text-sm font-normal text-white">{{ $category->name }}</p>
                </a>
            @endforeach
        </div>
    </div>

    <div class="mt-8">
        @each('livewire.list-of-products', $products, 'product', 'view.empty')
    </div>

    <div class="fixed bottom-5 z-40 w-full px-5">
        <livewire:button.total-cart />
    </div>
</x-app-layout>
