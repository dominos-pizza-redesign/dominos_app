<x-app-layout>
    <x-slot name="title">Register</x-slot>

    <div class="h-screen flex flex-col justify-between">
        <form method="POST" action="{{ route('register') }}"
            class="w-full px-4 mt-10 flex flex-col justify-center gap-4">
            @csrf

            {{-- Username --}}
            <x-input for="username" label="Username" :value="old('username')" placeholder="Username"
                autocomplete="username" autofocus required class="input input-primary" />

            {{-- Email --}}
            <x-input for="email" type="email" label="Email Address" :value="old('email')" placeholder="Email Address"
                autocomplete="email" required class="input input-primary" />

            {{-- Password --}}
            <x-input for="password" type="password" label="Password" placeholder="Password"
                autocomplete="current-password" required class="input input-primary" />

            {{-- Password Confirmation --}}
            <x-input for="password_confirmation" type="password" label="Confirm Password" placeholder="Confirm Password"
                autocomplete="password_confirmation" required class="input input-primary" />

            {{-- Terms of Service --}}
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <label for="terms" class="my-2">
                    <div class="flex items-center">
                        <input type="checkbox" name="terms" id="terms"
                            class="checkbox checkbox-primary">

                        <div class="ml-2 text-gray-400">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', ['terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Terms of Service') . '</a>', 'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Privacy Policy') . '</a>']) !!}
                        </div>
                    </div>
                </label>
            @endif


            {{-- Button Register --}}
            <div class="flex flex-col gap-4">
                <button type="submit" class="btn btn-md btn-primary">Next</button>
                <div class="flex justify-center items-center">
                    <div class="w-full border-t border-gray-300"></div>
                    <div class="px-2 text-gray-400">OR</div>
                    <div class="w-full border-t border-gray-300"></div>
                </div>
                <a href="#" class="btn btn-lg btn-secondary flex justify-center items-center">
                    <i class="fa-brands fa-google"></i>
                </a>
            </div>
        </form>

        {{-- Link Login --}}
        <div class="h-32 flex justify-center items-center border-t border-gray-400">
            <span class="text-gray-400">Already have an account? <a href="{{ route('login') }}"
                    class="text-sky-600 underline underline-offset-2">Login here!</a></span>
        </div>
    </div>
</x-app-layout>
