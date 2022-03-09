<x-app-layout>
    <x-slot name="title">Forgot Password</x-slot>

    <div class="h-screen flex flex-col justify-between">
        <form method="POST" action="{{ route('register') }}"
            class="w-full h-full px-4 mt-10 flex flex-col justify-center items-center gap-6">
            <div class="text-gray-600 text-center">
                <p>We will send you an email with a link to reset your password</p>
            </div>
            <x-input for="email" type="email" label="Email Address" :value="old('email')" placeholder="Email Address"
                autocomplete="email" required class="input input-primary" />
            <button type="submit" class="btn btn-md btn-primary">Send</button>
        </form>

        <div class="h-32 flex justify-center items-center border-t border-gray-400">
            <span class="text-gray-400">Already have an account? <a href="{{ route('login') }}"
                    class="text-sky-600 underline underline-offset-2">Login here!</a></span>
        </div>
    </div>
</x-app-layout>
