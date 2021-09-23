<?php

namespace App\Http\Controllers;

use App\Models\Article; 
use Illuminate\Http\Request;

class ArticleController extends Controller
{

        // READING
    public function index(){
        return view('index', [
            'articles'=> Article::all()
        ]);
    }

    public function show(Article $article){
        return view('show', [
            'article' => Article::find($article->id)
        ]);
    }

        // CREATING 
    public function create(){
        return view('create');
    }

    public function store(Request $request){
        Article::query()->create([
            'title' => $request->title,
            'body' => $request->body
        ]);
        
        return redirect()->to('/articles');
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

        return redirect()->to('/articles');
    }

        // DELETING
    public function destroy(Article $article) {
        try {
            $article->delete();            
        } catch (\Throwable $th) {
            dd($th);
        }

        return redirect()->to('/articles');
    }
}
