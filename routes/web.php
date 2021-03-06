<?php

// use App\Http\Controllers\ArticleController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::resource('articles', ArticleController::class);



        // ARTICLES
// Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/create', [ArticleController::class, 'create']);
Route::post('/articles/store', [ArticleController::class, 'store']);
Route::get('/articles/{article:id}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
Route::put('/articles/{article}', [ArticleController::class, 'update'])->name('articles.update');
Route::delete('/articles/{article:id}', [ArticleController::class, 'destroy'])->name('articles.destroy');


Auth::routes();

// ALL ARTICLES
Route::get('/', [ArticleController::class, 'index']);

// MY ARTICLES
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        // COMMENTS
//Route::resource('/comments', CommentController::class);
Route::post('/articles/{article}/comments', [CommentController::class, 'store'])->name('articles.comments');
