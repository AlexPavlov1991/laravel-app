<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $articles = Article::with('state', 'tags')->orderBy('created_at', 'desc')->limit(6)->get();
        $articles = Article::lastLimit(2);
        return view('app.home', compact('articles'));
    }
}
