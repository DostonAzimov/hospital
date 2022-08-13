<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function comment(Request $request,$id)
    {
        $comment=New Comment();
        $comment->message=$request->message;
        $comment->news_id=$id;
        $comment->user_id=1;
        $comment->save();
        $url='/news-detail/'.$id;
        return redirect($url);
    }
}
