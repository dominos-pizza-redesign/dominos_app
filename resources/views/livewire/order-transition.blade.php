<div x-data="{ shownPaymentDetailModal: false, timeout: null }">
    <template x-teleport="body">
        <div x-init="@this.on('orderSuccess', () => { clearTimeout(timeout); shownPaymentDetailModal = true; timeout = setTimeout(() => { shownPaymentDetailModal = false }, 4000);  })"
            x-show="shownPaymentDetailModal" x-transition:enter="transition-transform ease-in-out duration-300"
            x-transition:enter-start="translate-y-full" x-transition:enter-end="bottom-0"
            x-transition:leave="transition-transform ease-in-out duration-300" x-transition:leave-start="bottom-0"
            x-transition:leave-end="translate-y-full"
            class="fixed bottom-0 z-50 hidden h-screen w-screen bg-sky-600 pt-3 pb-5 transition"
            @click.away="shownPaymentDetailModal = false" @keydown.escape="shownPaymentDetailModal = false">
            <div class="flex items-center justify-center">
            </div>
        </div>
    </template>
</div>
