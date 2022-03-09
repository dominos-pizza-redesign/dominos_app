<x-app-layout>
    <x-slot name="title">Privacy Policy</x-slot>

    <x-header align="center" home="true">
        <img src="{{ asset('storage/logo.png') }}" alt="Logo Domino's Pizza" class="h-10">
    </x-header>

    <div class="bg-gray-100">
        <div class="min-h-screen flex flex-col items-center">
            <div class="w-full sm:max-w-2xl p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose">
                {!! $policy !!}
            </div>
        </div>
    </div>
</x-app-layout>
