<x-app-layout>
    <x-slot:title>Cart</x-slot:title>

    <x-slot:header>
        <x-header align="left" back_to="home">Cart</x-header>
    </x-slot:header>

    <div class="flex w-full flex-col gap-5 border-b border-gray-300 py-3 px-4">
        <div class="flex w-full items-center justify-between gap-4">
            <div>
                <h4 class="text-base">
                    <span class="font-medium">
                        {{ auth()->user()->first_name . ' ' . auth()->user()->last_name }}
                    </span>
                </h4>
                <h4 class="text-base">
                    <p class="font-medium">
                        {{ auth()->user()->address .', ' .auth()->user()->city .', ' .auth()->user()->province .' ' .auth()->user()->postal_code }}
                    </p>
                </h4>
            </div>
            <div
                class="hocus:cursor-pointer hocus:bg-sky-600 hocus:text-white flex items-center justify-center rounded-full border border-sky-600 py-2 px-4 text-sm text-sky-600 transition-colors duration-150">
                Change Location
            </div>
        </div>
        <div
            class="hocus:bg-gray-200 hocus:cursor-pointer flex w-max items-center justify-center gap-2 rounded-full border border-gray-300 py-2 px-3 transition-colors duration-150">
            <img src="{{ asset('storage/icon/icon-notes.svg') }}" alt="Icon" class="h-5">
            <span class="text-sm">
                Notes
            </span>
        </div>
    </div>

    <livewire:list-of-cart />
</x-app-layout>
