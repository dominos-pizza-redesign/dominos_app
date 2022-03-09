<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductDetailModal extends Component
{
    public  $product,
            $open = false;

    protected $listeners = [
        'showProductDetailModal'
    ];

    public function showProductDetailModal(Product $product)
    {
        $this->product = $product;
        $this->open = true;
    }

    public function render()
    {
        return view('livewire.product-detail-modal');
    }
}
