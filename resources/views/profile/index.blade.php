<x-app-layout>
    <x-slot:title>Profile</x-slot:title>

    <x-slot:header>
        <x-header align="left" back_to="home">
            <h3 class="text-xl font-medium text-white">Profile</h3>
        </x-header>
    </x-slot:header>

    <div class="flex w-full justify-between p-5">
        <div class="flex gap-4">
            @if (auth()->user()->getFirstMediaUrl('avatars'))
                <div class="h-20 w-20 rounded-full bg-cover bg-center bg-no-repeat"
                    style="background-image: url('{{ auth()->user()->getFirstMedia('avatars')->getUrl('thumb') }}')">
                </div>
            @else
                <div class="h-20 w-20 rounded-full bg-cover bg-center bg-no-repeat">
                    <img src="https://ui-avatars.com/api/?name={{ auth()->user()->first_name . '+' . auth()->user()->last_name }}&background=B9E6FE&rounded=true&color=0086C9&size=80"
                        alt="User Image">
                </div>
            @endif
            <div class="flex flex-col justify-between">
                <h1 class="text-lg font-bold">
                    {{ auth()->user()->first_name . ' ' . auth()->user()->last_name }}</h1>
                <div class="flex flex-col">
                    <p>{{ auth()->user()->email }}</p>
                    <p>{{ auth()->user()->phone_number }}</p>
                </div>
            </div>
        </div>
        <a href="{{ route('profile.edit') }}" class="h-min w-min">
            <i class="fa-solid fa-pencil text-sky-600"></i>
        </a>
    </div>

    <a href="{{ route('wishlist') }}">
        <div
            class="hocus:bg-sky-50 flex h-20 w-full items-center justify-between border-b border-gray-300 px-5 text-sky-600 transition-colors">
            <div class="flex items-center gap-4">
                <img src="{{ asset('storage/icon/icon-heart-solid.svg') }}" alt="Icon Svg" class="w-7">
                <p class="text-base font-medium">My Wishlist</p>
            </div>
            <i class="fa-solid fa-angle-right"></i>
        </div>
    </a>
    <a href="{{ route('cart') }}">
        <div
            class="hocus:bg-sky-50 flex h-20 w-full items-center justify-between border-b border-gray-300 px-5 text-sky-600 transition-colors">
            <div class="flex items-center gap-4">
                <img src="{{ asset('storage/icon/icon-cart-solid.svg') }}" alt="Icon Svg" class="w-7">
                <p class="text-base font-medium">My Cart</p>
            </div>
            <i class="fa-solid fa-angle-right"></i>
        </div>
    </a>
    <a href="{{ route('profile.password.edit') }}">
        <div
            class="hocus:bg-sky-50 flex h-20 w-full items-center justify-between border-b border-gray-300 px-5 text-sky-600 transition-colors">
            <div class="flex items-center gap-4">
                <img src="{{ asset('storage/icon/icon-edit-password-solid.svg') }}" alt="Icon Svg"
                    class="w-7">
                <p class="text-base font-medium">Change Password</p>
            </div>
            <i class="fa-solid fa-angle-right"></i>
        </div>
    </a>
    <a href="{{ route('policy.show') }}">
        <div
            class="hocus:bg-sky-50 flex h-20 w-full items-center justify-between border-b border-gray-300 px-5 text-sky-600 transition-colors">
            <div class="flex items-center gap-4">
                <img src="{{ asset('storage/icon/icon-privacy-police-solid.svg') }}" alt="Icon Svg"
                    class="w-7">
                <p class="text-base font-medium">Privacy Police</p>
            </div>
            <i class="fa-solid fa-angle-right"></i>
        </div>
    </a>
    <a href="{{ route('terms.show') }}">
        <div
            class="hocus:bg-sky-50 flex h-20 w-full items-center justify-between border-b border-gray-300 px-5 text-sky-600 transition-colors">
            <div class="flex items-center gap-4">
                <img src="{{ asset('storage/icon/icon-terms-services-solid.svg') }}" alt="Icon Svg"
                    class="w-7">
                <p class="text-base font-medium">Terms & Service</p>
            </div>
            <i class="fa-solid fa-angle-right"></i>
        </div>
    </a>
    <a href="{{ route('dev-profile') }}">
        <div
            class="hocus:bg-sky-50 flex h-20 w-full items-center justify-between border-b border-gray-300 px-5 text-sky-600 transition-colors">
            <div class="flex items-center gap-4">
                <img src="{{ asset('storage/icon/icon-profile-solid.svg') }}" alt="Icon Svg" class="w-7">
                <p class="text-base font-medium">Developer Profile</p>
            </div>
            <i class="fa-solid fa-angle-right"></i>
        </div>
    </a>

    <form method="POST" action="{{ route('logout') }}" class="mt-5 h-full w-full px-5">
        @csrf
        <button class="btn btn-danger" onclick="event.preventDefault(); this.closest('form').submit();">Log
            Out</button>
    </form>
</x-app-layout>
