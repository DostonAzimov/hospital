<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\News;
use Livewire\Component;

class NewsComponent extends Component
{


    public static function comment()
    {
     return Comment::all()->count();
    }


    public function render()
    {
        $news=News::paginate(8);
        $recentBlog=News::orderBy('created_at','DESC')->get()->take(3);
        return view('livewire.news-component',['news'=>$news,'recentBlog'=>$recentBlog])->layout('layouts.base');
    }
}
