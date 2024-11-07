<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function show($slug)
    {
        $category = Category::where('slug', $slug)
            ->with(['articles' => function($query) {
                $query->latest();
            }])
            ->firstOrFail();
        
        return view('categories.show', compact('category'));
    }
}