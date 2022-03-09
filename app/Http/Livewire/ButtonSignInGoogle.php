<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ButtonSignInGoogle extends Component
{
    public $message;

    public function setMessageToHello()
    {
        $this->message = 'Hello';
    }

    public function render()
    {
        return view('livewire.button-sign-in-google');
    }
}
