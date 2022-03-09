<div>
    @if ($product->isLikedByAuthUser())
        <button class="hocus:bg-transparent hocus:text-red-400 hocus:cursor-pointer bg-transparent text-2xl text-red-500"
            wire:click="removeLike">
            <i class="fa-solid fa-heart"></i>
        </button>
    @else
        <button
            class="hocus:bg-transparent hocus:text-red-400 hocus:cursor-pointer bg-transparent text-2xl text-gray-400"
            wire:click="addLike">
            <i class="fa-regular fa-heart"></i>
        </button>
    @endif
</div>
