<x-app-layout>
    <x-slot name="title">Privacy Policy</x-slot>

    <x-header align="center" home="true">
        <img src="{{ asset('storage/logo/logo.png') }}" alt="Logo Domino's Pizza" class="h-10">
    </x-header>

    <div class="bg-gray-100">
        <div class="flex min-h-screen flex-col items-center">
            <div class="prose w-full overflow-hidden bg-white p-6 shadow-md sm:max-w-2xl sm:rounded-lg">
                {!! $policy !!}
            </div>
        </div>
    </div>
</x-app-layout>
