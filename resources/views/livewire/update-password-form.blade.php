<form wire:submit.prevent="updatePassword" class="p-5 flex flex-col gap-4">
    <x-input for="current_password" type="password" wire:model.defer="state.current_password" label="Current Password" autocomplete="current-password" required autofocus class="input input-primary"/>
    <x-input for="password" type="password" wire:model.defer="state.password" label="New Password" autocomplete="new-password" required class="input input-primary"/>
    <x-input for="password_confirmation" type="password" wire:model.defer="state.password_confirmation" label="Confirm New Password" autocomplete="new-password" required class="input input-primary"/>

    <x-jet-action-message on="saved" class="flex justify-center items-center w-full p-3">
        Saved
    </x-jet-action-message>

    <x-button variant="primary">Save</x-button>
</form>
