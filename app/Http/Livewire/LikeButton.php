<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LikeButton extends Component
{
    public $product;

    public function addLike()
    {
        $this->product->addLike();
    }

    public function removeLike()
    {
        $this->product->removeLike();
        $this->emit('refreshWishlist');
    }

    public function render()
    {
        return view('livewire.like-button');
    }
}
