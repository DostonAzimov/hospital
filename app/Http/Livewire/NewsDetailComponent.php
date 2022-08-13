<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\News;
use Livewire\Component;

class NewsDetailComponent extends Component
{
    public $newsId;
    public $message;

    public function mount($newsId)
    {
        $this->newsId=$newsId;
    }



    public function render()
    {
        $totalComments=Comment::where('news_id',$this->newsId)->count();
        $newsDetail=News::where('id',$this->newsId)->first();
        $recentBlog=News::orderBy('created_at','DESC')->get()->take(3);
        $comment=Comment::where('news_id',$this->newsId)->get();
        return view('livewire.news-detail-component',['newsDetail'=>$newsDetail,
            'recentBlog'=>$recentBlog,'totalComments'=>$totalComments,'comment'=>$comment])->layout('layouts.base');
    }
}
