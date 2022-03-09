<?php

namespace App\Http\Livewire\Button;

use Livewire\Component;

class TotalCart extends Component
{
    public $totalProduct;

    protected $listeners = [
        'addToCart' => 'resetTotalProduct',
        'incrementQuantity' => 'resetTotalProduct',
        'decrementQuantity' => 'resetTotalProduct',
    ];

    public function mount()
    {
        $this->reset();
        $this->totalProduct = auth()->user()->transactions()->where('status', 'pending')->sum('quantity');
    }

    public function resetTotalProduct()
    {
        $this->reset();
        $this->totalProduct = auth()->user()->transactions()->where('status', 'pending')->sum('quantity');
    }

    public function render()
    {
        return view('livewire.button.total-cart');
    }
}
