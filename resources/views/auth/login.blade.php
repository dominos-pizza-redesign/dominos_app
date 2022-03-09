<x-app-layout>
    <x-slot name="title">Login</x-slot>

    <div class="fixed top-0 flex h-32 w-screen items-center justify-center bg-sky-600 py-8 px-4">
        <img src="{{ asset('storage/logo.png') }}" alt="Domino's Pizza 3D Logo PNG Transparent" class="drop-shadow-lg">
    </div>
    <div class="flex h-screen flex-col justify-between">
        <div class="h-min w-full px-4 pt-40">
            <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-6">
                @csrf

                {{-- Email --}}
                <x-input for="email" type="email" label="Email Address" :value="old('email')"
                    placeholder="Email Address" autocomplete="email" autofocus required class="input input-primary" />

                {{-- Password --}}
                <x-input for="password" type="password" label="Password" placeholder="Password"
                    autocomplete="current-password" required class="input input-primary" />

                {{-- Forgot Password --}}
                @if (Route::has('password.request'))
                    <div class="flex justify-end">
                        <a href="{{ route('password.request') }}"
                            class="text-sky-600 underline underline-offset-1">Forgot password?</a>
                    </div>
                @endif

                {{-- Button Login --}}
                <button type="submit" class="btn btn-md btn-primary">Log In</button>
            </form>
        </div>

        {{-- Link Register --}}
        <div class="flex h-32 items-center justify-center border-t border-gray-400">
            <span class="text-gray-400">
                Dont have an account? <a href="{{ route('register') }}"
                    class="text-sky-600 underline underline-offset-2">Register here!</a>
            </span>
        </div>
    </div>
</x-app-layout>
