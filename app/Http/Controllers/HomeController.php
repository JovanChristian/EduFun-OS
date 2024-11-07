<?php
namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $latestArticles = Article::with(['category', 'writer'])
            ->latest()
            ->take(6)
            ->get();
        
        return view('home', compact('latestArticles'));
    }
}