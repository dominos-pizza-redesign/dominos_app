<x-app-layout>
    <div class="h-screen flex flex-col justify-between">
        <form method="POST" action="{{ route('register.step-2.store') }}"
            class="w-full px-4 mt-10 grid justify-center gap-4">
            @csrf

            {{-- First Name --}}
            <div class="col-span-6">
                <x-input for="first_name" type="text" label="First Name" :value="old('first_name')"
                    placeholder="First Name" autocomplete="first_name" autofocus required class="input input-primary" />
            </div>

            {{-- Last Name --}}
            <div class="col-span-6">
                <x-input for="last_name" type="text" label="Last Name" :value="old('last_name')" placeholder="Last Name"
                    autocomplete="last_name" required class="input input-primary" />
            </div>

            {{-- Address --}}
            <div class="col-span-12">
                <x-input for="address" type="text" label="Address" :value="old('address')" placeholder="Address"
                    autocomplete="address" required class="input input-primary" />
            </div>

            {{-- Province --}}
            <div class="col-span-12">
                <x-input for="province" type="text" label="Province" :value="old('province')" placeholder="Province"
                    autocomplete="province" required class="input input-primary" />
            </div>

            {{-- City --}}
            <div class="col-span-12">
                <x-input for="city" type="text" label="City" :value="old('city')" placeholder="City" autocomplete="city"
                    required class="input input-primary" />
            </div>

            {{-- Postal Code --}}
            <div class="col-span-6">
                <x-input for="postal_code" type="text" label="ZIP/Postal Code" :value="old('postal_code')"
                    placeholder="ZIP/Postal Code" autocomplete="postal_code" required class="input input-primary" />
            </div>

            {{-- Phone Number --}}
            <div class="col-span-6">
                <x-input for="phone_number" type="text" label="Phone Number" :value="old('phone_number')" placeholder="Phone Number"
                    autocomplete="phone_number" required class="input input-primary" />
            </div>

            {{-- Button Register --}}
            <button type="submit" class="btn btn-md btn-primary col-span-12">Register</button>
        </form>
    </div>
</x-app-layout>
