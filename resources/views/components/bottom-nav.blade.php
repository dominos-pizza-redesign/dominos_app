<div
    class="fixed bottom-0 z-30 flex h-20 w-screen items-center justify-evenly rounded-tr-3xl rounded-tl-3xl border border-gray-300 bg-white">
    <x-bottom-nav-link :href="route('home')" :active="request()->routeIs('home')"
        :icon="asset('storage/icon/icon-home.svg')" />
    <x-bottom-nav-link :href="route('wishlist')" :active="request()->routeIs('wishlist')"
        :icon="asset('storage/icon/icon-heart.svg')" />
    <x-bottom-nav-link :href="route('cart', ['status' => 'pending'])" :active="request()->routeIs('cart')"
        :icon="asset('storage/icon/icon-cart.svg')" />
    <x-bottom-nav-link :href="route('profile.index')" :active="request()->routeIs('profile.index')"
        :icon="asset('storage/icon/icon-profile.svg')" />
</div>
