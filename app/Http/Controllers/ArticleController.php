<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($slug)
    {
        $article = Article::where('slug', $slug)
            ->with(['category', 'writer'])
            ->firstOrFail();
        
        return view('articles.show', compact('article'));
    }
    
    public function popular()
    {
        $popularArticles = Post::orderBy('views', 'desc')->take(10)->get();

        return view('articles.popular', compact('popularArticles'));
    }

}