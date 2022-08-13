<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SearchComponent extends Component
{
    public $search;

    public function mount($search){
        dd($search);
    }

    public function render()
    {
        return view('livewire.search-component')->layout('layouts.base');
    }
}
