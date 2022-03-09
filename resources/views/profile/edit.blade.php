<x-app-layout>
    <x-slot name="title">Change Profile</x-slot>

    <x-slot name="header">
        <x-header align="left" back_to="profile.index">
            <h3 class="text-xl font-medium text-white">Change Profile</h3>
        </x-header>
    </x-slot>

    <div class="h-full flex flex-col justify-between">
        <livewire:update-profile-information-form>
    </div>
</x-app-layout>
