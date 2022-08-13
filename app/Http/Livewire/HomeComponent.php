<?php

namespace App\Http\Livewire;

use App\Models\AboutUs;
use App\Models\Category;
use App\Models\Doctor;
use App\Models\News;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $doctors=Doctor::all();
        $news=News::orderBy('created_at','DESC')->get()->take(3);
        $aboutUs=AboutUs::orderBy('created_at','DESC')->first();
        $category=Category::all();
        return view('livewire.home-component',['doctors'=>$doctors,'news'=>$news,
            'about'=>$aboutUs,'category'=>$category])->layout('layouts.base');
    }
}
