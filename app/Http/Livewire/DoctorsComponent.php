<?php

namespace App\Http\Livewire;

use App\Models\AboutUs;
use App\Models\Doctor;
use App\Models\News;
use Livewire\Component;

class DoctorsComponent extends Component
{
    public function render()
    {
        $doctors=Doctor::all();
        $news=News::orderBy('created_at','DESC')->get()->take(3);
        $aboutUs=AboutUs::orderBy('created_at','DESC')->first();
        return view('livewire.doctors-component',['doctors'=>$doctors,'news'=>$news,
            'about'=>$aboutUs])->layout('layouts.base');
    }
}
