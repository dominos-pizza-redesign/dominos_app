<form wire:submit.prevent="updateProfileInformation" class="w-full px-4 mt-4 grid justify-center gap-4">
    <div class="w-full col-span-12 flex-col gap-6">
        <label for="avatar" class="block text-gray-400 mb-2">Profile Picture</label>
        <input type="file" name="avatar" id="avatar" wire:model="avatar" class="hidden">
        <div class="flex items-center gap-4">
            @if($avatar)
                @if($avatar->exists())
                    <label for="avatar">
                        <div class="h-14 w-14 bg-no-repeat bg-center bg-cover rounded-full cursor-pointer hocus:opacity-90" style="background-image: url('{{ $avatar->temporaryUrl() }}')"></div>
                    </label>
                @elseif($this->user->getFirstMediaUrl('avatars'))
                    <label for="avatar">
                        <div class="h-14 w-14 bg-no-repeat bg-center bg-cover rounded-full cursor-pointer hocus:opacity-90" style="background-image: url('{{ $this->user->getFirstMedia('avatars')->getUrl('thumb') }}')"></div>
                    </label>
                @else
                    <label for="avatar">
                        <div class="h-14 w-14 bg-no-repeat bg-center bg-cover rounded-full cursor-pointer hocus:opacity-90" x-show="! photoPreview">
                            <img src="https://ui-avatars.com/api/?name={{ auth()->user()->first_name."+".auth()->user()->last_name }}&background=B9E6FE&rounded=true&color=0086C9&size=80" alt="User Image">
                        </div>
                    </label>
                @endif
            @elseif($this->user->getFirstMediaUrl('avatars'))
                <label for="avatar">
                    <div class="h-14 w-14 bg-no-repeat bg-center bg-cover rounded-full cursor-pointer hocus:opacity-90" style="background-image: url('{{ $this->user->getFirstMedia('avatars')->getUrl('thumb') }}')"></div>
                </label>
            @else
                <label for="avatar">
                    <div class="h-14 w-14 bg-no-repeat bg-center bg-cover rounded-full cursor-pointer hocus:opacity-90" x-show="! photoPreview">
                        <img src="https://ui-avatars.com/api/?name={{ auth()->user()->first_name."+".auth()->user()->last_name }}&background=B9E6FE&rounded=true&color=0086C9&size=80" alt="User Image">
                    </div>
                </label>
            @endif


            <div class="flex justify-between gap-6">
                <label for="avatar" class="text-sky-500 cursor-pointer hocus:text-sky-600">Change Profile Picture</label>
                <p class="text-red-400 cursor-pointer hocus:text-red-500" wire:click="deleteProfilePhoto">Delete Picture</p>
            </div>
        </div>
        @error('avatar')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
    </div>

    {{-- Username --}}
    <div class="col-span-12">
        <x-input for="username" type="text" wire:model.defer="state.username" label="Username" :value="old('username')"
            placeholder="Username" autocomplete="username" value="{{ auth()->user()->username }}" autofocus required class="input input-primary" />
    </div>

    {{-- Email --}}
    <div class="col-span-12">
        <x-input for="email" type="email" wire:model.defer="state.email" label="Email Address" :value="old('email')"
            placeholder="Email Address" autocomplete="email" value="{{ auth()->user()->email }}" autofocus required class="input input-primary" />
    </div>

    {{-- First Name --}}
    <div class="col-span-6">
        <x-input for="first_name" type="text" wire:model.defer="state.first_name" label="First Name" :value="old('first_name')"
            placeholder="First Name" autocomplete="first_name" value="{{ auth()->user()->first_name }}" autofocus required class="input input-primary" />
    </div>

    {{-- Last Name --}}
    <div class="col-span-6">
        <x-input for="last_name" type="text" wire:model.defer="state.last_name" label="Last Name" :value="old('last_name')" placeholder="Last Name"
            autocomplete="last_name" value="{{ auth()->user()->last_name }}" required class="input input-primary" />
    </div>

    {{-- Address --}}
    <div class="col-span-12">
        <x-input for="address" type="text" wire:model.defer="state.address" label="Address" :value="old('address')" placeholder="Address"
            autocomplete="address" value="{{ auth()->user()->address }}" required class="input input-primary" />
    </div>

    {{-- Province --}}
    <div class="col-span-12">
        <x-input for="province" type="text" wire:model.defer="state.province" label="Province" :value="old('province')" placeholder="Province"
            autocomplete="province" value="{{ auth()->user()->province }}" required class="input input-primary" />
    </div>

    {{-- City --}}
    <div class="col-span-12">
        <x-input for="city" type="text" wire:model.defer="state.city" label="City" :value="old('city')" placeholder="City" autocomplete="city" value="{{ auth()->user()->city }}"
            required class="input input-primary" />
    </div>

    {{-- Postal Code --}}
    <div class="col-span-6">
        <x-input for="postal_code" type="text" wire:model.defer="state.postal_code" label="ZIP/Postal Code" :value="old('postal_code')"
            placeholder="ZIP/Postal Code" value="{{ auth()->user()->postal_code }}" autocomplete="postal_code" required class="input input-primary" />
    </div>

    {{-- Phone Number --}}
    <div class="col-span-6">
        <x-input for="phone_number" type="number" wire:model.defer="state.phone_number" label="Phone Number" :value="old('phone_number')" placeholder="Phone Number"
            autocomplete="phone_number" value="{{ auth()->user()->phone_number }}" required class="input input-primary" />
    </div>

    {{-- Button Register --}}
    <x-jet-action-message on="saved" class="col-span-12 flex justify-center items-center p-3">
        Saved
    </x-jet-action-message>

    <x-button variant="primary" class="col-span-12 btn-md flex justify-center items-center" wire:loading.attr="disable">
        <div wire:loading class="flex items-center justify-center">
            <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            <span>Saving...</span>
        </div>
        <p wire:loading.remove>Save</p>
    </x-button>
</form>
