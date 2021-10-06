<?php

namespace App\Http\Controllers;


use App\Models\Article; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $current_user_id = auth()->user()->id;
        
        return view('home', [
            'articles'=> DB::table('articles')
            ->where('user_id', $current_user_id)
            ->get()
        ]);
    }
}
