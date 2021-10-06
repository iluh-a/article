<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{


    public function store(Request $request, Article $article) {
        $current_user_id = auth()->user()->id;

//        dd(gettype($current_user_id));
//        dd($article->getAttributes()['id']);
        Comment::create([
            'body' => $request->body,
            'user_id' =>auth()->user()->id,
            'article_id' => $article->getAttributes()['id']
        ]);

        return back();
    }
}
