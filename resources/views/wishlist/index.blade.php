<x-app-layout>
    <x-slot name="title">Wishlist</x-slot>

    <x-slot name="header">
        <x-header align="left" back_to="home">Wishlist</x-header>
    </x-slot>

    @each('livewire.list-of-products', $wishlist, 'product', 'wishlist.empty')

    <x-bottom-nav />
</x-app-layout>
