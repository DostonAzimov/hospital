<?php

namespace App\Http\Livewire;

use App\Models\AboutUs;
use Livewire\Component;

class AboutAsComponent extends Component
{
    public function render()
    {
        $aboutUs=AboutUs::orderBy('created_at','DESC')->first();
        return view('livewire.about-as-component',['about'=>$aboutUs])->layout('layouts.base');
    }
}
