<x-app-layout>
    <x-slot name="title">Cart</x-slot>

    <x-slot name="header">
        <x-header align="left" back_to="home">Cart</x-header>
    </x-slot>

    <div class="fixed top-16 z-30 grid w-full grid-cols-1">
        <div class="flex bg-sky-600 shadow-xl">
            <a href="{{ route('cart', ['status' => 'pending']) }}"
                class='w-full h-12 flex justify-center items-center hocus:border-b-2 hocus:border-sky-50 hocus:cursor-pointer @if (request()->is('cart') && request()->query('status') === '') border-b-4 border-sky-50 @elseif (request()->query('status') === 'pending') border-b-4 border-sky-50 @endif'>
                <p class="text-sm font-normal text-white">Pending</p>
            </a>
            <a href="{{ route('cart', ['status' => 'success']) }}"
                class='w-full h-12 flex justify-center items-center hocus:border-b-2 hocus:border-sky-50 hocus:cursor-pointer @if (request()->query('status') === 'success') border-b-4 border-sky-50 @endif'>
                <p class="text-sm font-normal text-white">Success</p>
            </a>
        </div>
    </div>

    <div class="mt-8">
        @each('livewire.list-of-products', $cartProducts, 'product', 'transactions.empty')
    </div>

    @if ($cartProducts->count() > 0)
        <div class="fixed bottom-24 z-40 w-full px-5">
            <livewire:button.total-cart />
        </div>
    @endif

    <x-bottom-nav />
</x-app-layout>
