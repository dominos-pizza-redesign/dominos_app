@push('head')
    <style>
        .swiper-slide-active {
            transform: scale(1.1) !important;
        }

    </style>
@endpush

<x-app-layout>

    <x-slot name="title">Home</x-slot>

    <x-slot name="header">
        <x-header align="center" home="true">
            <img src="{{ asset('storage/logo.png') }}" alt="Logo Domino's Pizza" class="h-10">
        </x-header>
    </x-slot>

    <div class="swiper w-full">
        <div class="swiper-wrapper py-5 !w-max">
            <!-- Slides -->
            <div class="swiper-slide !w-max transition-transform duration-300">
                <img src="{{ asset('storage/banner/banner 1.jpg') }}" class="h-32 rounded-lg">
            </div>
            <div class="swiper-slide !w-max transition-transform duration-300 px-6">
                <img src="{{ asset('storage/banner/banner 2.jpg') }}" class="h-32 rounded-lg">
            </div>
            <div class="swiper-slide !w-max transition-transform duration-300">
                <img src="{{ asset('storage/banner/banner 3.jpg') }}" class="h-32 rounded-lg">
            </div>
            <div class="swiper-slide !w-max transition-transform duration-300 px-6">
                <img src="{{ asset('storage/banner/banner 4.jpg') }}" class="h-32 rounded-lg">
            </div>
            <div class="swiper-slide !w-max transition-transform duration-300">
                <img src="{{ asset('storage/banner/banner 5.jpg') }}" class="h-32 rounded-lg">
            </div>
        </div>
    </div>

    <div class="px-4">
        <div class="flex w-full items-center justify-between py-5">
            <a href="{{ route('products.index', ['menu' => 'pizza', 'category' => 'mania']) }}">
                <div
                    class="hocus:bg-sky-50 hocus:rounded-lg flex h-28 w-28 flex-col items-center justify-center gap-2 text-sky-500 transition-colors duration-300">
                    <img src="{{ asset('storage/icon/icon-pizza.svg') }}" alt="Icon Pizza">
                    <p>Pizza</p>
                </div>
            </a>
            <a href="{{ route('products.index', ['menu' => 'side-order', 'category' => 'sides']) }}">
                <div
                    class="hocus:bg-sky-50 hocus:rounded-lg flex h-28 w-28 flex-col items-center justify-center gap-2 text-sky-500 transition-colors duration-300">
                    <img src="{{ asset('storage/icon/icon-meat.svg') }}" alt="Icon Meat">
                    <p>Side Order</p>
                </div>
            </a>
            <a href="{{ route('products.index', ['menu' => 'beverages', 'category' => 'soft-drink']) }}">
                <div
                    class="hocus:bg-sky-50 hocus:rounded-lg flex h-28 w-28 flex-col items-center justify-center gap-2 text-sky-500 transition-colors duration-300">
                    <img src="{{ asset('storage/icon/icon-beverage.svg') }}" alt="Icon Beverage">
                    <p>Beverages</p>
                </div>
            </a>
        </div>

        <div class="grid grid-cols-2 gap-6">
            <a href="{{ route('products.index', ['menu' => 'pizza', 'category' => 'favourites']) }}"
                class="hocus:bg-sky-50 col-span-1 flex h-36 flex-col items-center overflow-hidden rounded-lg border border-gray-300 transition-colors duration-300">
                <div class="mt-2 flex items-center justify-center rounded-full bg-sky-50 px-2 py-1">
                    <h1 class="uppercase text-sky-600">favourites</h1>
                </div>
                <img src="{{ asset('storage/Products/Pizza/Favourites/9. beef-pepperoni-feast.png') }}"
                    alt="Pizza Photo" class="w-full scale-110">
            </a>
            <a href="{{ route('products.index', ['menu' => 'pizza', 'category' => 'mania']) }}"
                class="hocus:bg-sky-50 col-span-1 flex h-36 flex-col items-center overflow-hidden rounded-lg border border-gray-300 transition-colors duration-300">
                <div class="mt-2 flex items-center justify-center rounded-full bg-sky-50 px-2 py-1">
                    <h1 class="uppercase text-sky-600">mania</h1>
                </div>
                <img src="{{ asset('storage/Products/Pizza/Mania/3. beef-rasher.png') }}" alt="Pizza Photo"
                    class="w-full scale-125">
            </a>
            <a href="{{ route('products.index', ['menu' => 'pizza', 'category' => 'premium']) }}"
                class="hocus:bg-sky-50 col-span-2 flex h-48 flex-col items-center overflow-hidden rounded-lg border border-gray-300 transition-colors duration-300">
                <div class="mt-2 flex items-center justify-center rounded-full bg-sky-50 px-2 py-1">
                    <h1 class="uppercase text-sky-600">premium</h1>
                </div>
                <img src="{{ asset('storage/Products/Pizza/Premium/19. mexican-chicken-nachos.png') }}"
                    alt="Pizza Photo" class="w-full -translate-y-10 scale-125">
            </a>
        </div>
    </div>

    <x-bottom-nav />
</x-app-layout>
