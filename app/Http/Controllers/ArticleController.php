<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Comment;
use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Http\Controllers\CommentController;

class ArticleController extends Controller
{

        // READING
    public function index(){
        return view('home', [
            'articles' => Article::all()
        ]);
    }

    public function show($id){

        return view('show', [
            'article' => Article::find($id),
            'comments' => Comment::where('article_id', $id)
            ->get()
        ]);
    }

        // CREATING
    public function create(){
        return view('create');
    }

    public function store(Request $request){
        Article::query()->create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->to('/home');
    }

        // EDITING
    public function edit(Article $article){
        return view('edit', compact('article'));
    }

    public function update(Request $request, Article $article){
       $article->update([
        'title' => $request->title,
        'body' => $request->body
       ]);

        return redirect()->to('home');
    }

        // DELETING
    public function destroy($id) {
        try {
            Article::find($id)->delete();
        } catch (\Throwable $th) {
            dd($th);
        }

        return redirect()->to('/home');
    }
}
