<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search()
    {

        $search = $_GET['query'];
        $news = News::where('title', 'LIKE', '%' . $search . '%')->get();
        $recentBlog=News::orderBy('created_at','DESC')->get()->take(3);
        return view('livewire.search-component', ['news'=>$news,'recentBlog'=>$recentBlog]);

    }

}
