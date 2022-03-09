<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ListOfProducts extends Component
{
    public $products;

    public function render()
    {
        return view('livewire.list-of-products');
    }
}
