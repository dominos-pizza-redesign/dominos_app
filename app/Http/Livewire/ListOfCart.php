<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ListOfCart extends Component
{
    protected $rules = [
        'title' => 'required|string|min:150',
    ];

    public function render()
    {
        return view('livewire.list-of-cart');
    }
}
