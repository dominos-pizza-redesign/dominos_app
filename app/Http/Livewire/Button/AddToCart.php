<?php

namespace App\Http\Livewire\Button;

use Livewire\Component;

class AddToCart extends Component
{
    public $product;
    public $quantity;

    public function mount($product)
    {
        $this->product = $product;
    }

    public function addToCart()
    {
        $this->product->addToCart();
        $this->emit('addToCart');
    }

    public function incrementQuantity()
    {
        $this->product->transaction->increment('quantity');
        $this->emit('incrementQuantity');
    }

    public function decrementQuantity()
    {
        if ($this->product->transaction->quantity > 1) {
            $this->product->transaction->decrement('quantity');
            $this->emit('decrementQuantity');
        } else {
            $this->product->transaction->delete();
            $this->emit('decrementQuantity');
        }
    }

    public function render()
    {
        return view('livewire.button.add-to-cart');
    }
}
