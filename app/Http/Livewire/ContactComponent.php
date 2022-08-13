<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactComponent extends Component
{
    public $name;
    public $email;
    public $phoneNumber;
    public $subject;
    public $message;



    public function render()
    {
        return view('livewire.contact-component')->layout('layouts.base');
    }
}
