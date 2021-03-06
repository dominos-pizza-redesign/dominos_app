<div>
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
            <a href="{{ route('profile.edit') }}"
                class="hocus:cursor-pointer hocus:bg-sky-600 hocus:text-white flex items-center justify-center rounded-full border border-sky-600 py-2 px-4 text-sm text-sky-600 transition-colors duration-150">
                Change Location
            </a>
        </div>
    </div>

    @each('livewire.list-of-cart', $products, 'product')

    <div class="m-5 flex flex-col overflow-hidden rounded-3xl border border-gray-400"
        x-data="{ showPaymentDetailModal: false }" x-on:keydown.escape.window="showPaymentDetailModal = false">
        <div class="p-5">
            <h1 class="font-semibold">Payment Summary</h1>
            <div class="flex flex-col p-3">
                <div class="flex justify-between text-gray-400">
                    <span>Total Price</span>
                    <span>${{ $products->sum('total_price') }}</span>
                </div>
                <div class="flex justify-between text-gray-400">
                    <span>Delivery Fee</span>
                    <span>$1.00</span>
                </div>
                <div class="flex justify-between text-gray-400">
                    <span>Platform Fee</span>
                    <span>$0.30</span>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-between border border-y border-x-0 border-gray-400 p-5 font-semibold">
            <span>Total Payment</span>
            <span>${{ $products->sum('total_price') + 1.0 + 0.3 }}</span>
        </div>
        <div class="hocus:bg-slate-100 hocus:cursor-pointer flex items-center justify-between p-5 font-semibold text-sky-600"
            @click="showPaymentDetailModal = true">
            <span>View Details</span>
            <i class="fa-solid fa-angle-right"></i>
        </div>
        {{-- Modal Payment Detail --}}
        <template x-teleport="body">
            <div x-show="showPaymentDetailModal">
                <div x-show="showPaymentDetailModal" id="opacity" x-transition:enter.opacity.duration.300ms
                    x-transition:leave.opacity.duration.300ms x-init="$watch('showPaymentDetailModal', open => {
                if (open) {
                    document.body.classList.add('overflow-y-hidden');
                } else {
                    document.body.classList.remove('overflow-y-hidden');
                }
            })" class="fixed top-0 z-30 flex h-screen w-screen items-end" @click="showPaymentDetailModal = false">
                    <div class="absolute inset-0 bg-gray-500 opacity-30"></div>
                </div>
                <div x-show="showPaymentDetailModal" x-transition:enter="transition-transform ease-in-out duration-300"
                    x-transition:enter-start="translate-y-full" x-transition:enter-end="bottom-0"
                    x-transition:leave="transition-transform ease-in-out duration-300"
                    x-transition:leave-start="bottom-0" x-transition:leave-end="translate-y-full"
                    class="fixed bottom-0 bg-white rounded-t-3xl transition w-full h-auto z-50 flex flex-col pt-3 items-center pb-5 drop-shadow-[0_0_35px_rgba(0,0,0,0.25)]"
                    @click.away="showPaymentDetailModal = false" @keydown.escape="showPaymentDetailModal = false">
                    <div class="flex items-center justify-center">
                        <div class="h-2 w-28 rounded-full bg-gray-400">
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="m-5 flex flex-col overflow-hidden rounded-3xl border border-gray-400">
                            <div class="p-5">
                                <h1 class="font-semibold">Payment Summary</h1>
                                <div class="flex flex-col p-3">
                                    <div class="flex justify-between text-gray-400">
                                        <span>Total Price</span>
                                        <span>${{ $products->sum('total_price') }}</span>
                                    </div>
                                    <div class="flex justify-between text-gray-400">
                                        <span>Delivery Fee</span>
                                        <span>$1.00</span>
                                    </div>
                                    <div class="flex justify-between text-gray-400">
                                        <span>Platform Fee</span>
                                        <span>$0.30</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between border-y border-gray-400 p-5 font-semibold">
                                <span>Total Payment</span>
                                <span>${{ $products->sum('total_price') + 1.0 + 0.3 }}</span>
                            </div>
                            <a href="{{ route('transactions.print.invoice') }}"
                                class="hocus:bg-slate-100 hocus:cursor-pointer flex items-center justify-between p-5 font-semibold text-sky-600">
                                <span>Print Invoice</span>
                                <i class="fa-solid fa-print"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </div>

    <div x-data="{shownOrderTransition: false, timeout: null}">
        <div class="fixed bottom-5 z-40 w-full px-5">
            <button class="btn btn-primary btn-lg" @click="shownOrderTransition = true" onclick="play()">Order</button>
        </div>

        <audio src="{{ asset('storage/audio/success-sound-effect.mp3') }}" id="audio" class="hidden"></audio>

        <template x-teleport="body">
            <div x-init="$watch('shownOrderTransition', open => {
                document.body.classList.add('overflow-y-hidden');
                })" x-show="shownOrderTransition" x-transition:enter="transition ease-in-out duration-700"
                x-transition:enter-start="opacity-0 scale-80" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in-out duration-700"
                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-80"
                class="duration fixed bottom-0 z-50 flex h-screen w-screen items-center justify-center bg-sky-600 pt-3 pb-5 transition"
                @keydown.escape="shownOrderTransition = false">
                <div class="flex items-center justify-center">
                    <div class="flex flex-col items-center justify-center">
                        <h1 class="text-center text-3xl font-semibold text-white">Transaction Success</h1>
                        <div class="relative flex h-64 w-64 items-center justify-center">
                            <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_v1rnvv8r.json"
                                background="transparent" speed="1" style="width: 100%; height: 100%;" loop autoplay>
                            </lottie-player>
                        </div>
                        <h3 class="text-center text-lg font-light text-white">Enjoy Your Pizza</h3>
                    </div>
                    <div class="absolute bottom-0 w-full">
                        <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_fJ7CVd.json"
                            background="transparent" speed="1" style="width: 100%; height: 300px;" loop autoplay>
                        </lottie-player>
                    </div>
                    <div class="fixed bottom-5 z-40 w-full px-5">
                        <a href="{{ route('transactions.success') }}">
                            <button
                                class="btn btn-lg btn-secondary hocus:bg-sky-100 hocus:shadow hocus:text-sky-600 rounded-full px-5 text-xl">Done</button>
                        </a>
                    </div>
                </div>
            </div>
        </template>
    </div>
</div>

@push('scripts')
    <script>
        function play() {
            var audio = document.getElementById("audio");
            audio.play();
        }
    </script>
@endpush
