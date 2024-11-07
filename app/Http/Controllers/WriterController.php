<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function index()
    {
        $writers = Writer::withCount('articles')
            ->orderBy('articles_count', 'desc')
            ->get();
            
        return view('writers.index', compact('writers'));
    }

    public function show(Writer $writer)
    {
        $articles = $writer->articles()
            ->with('category')
            ->latest()
            ->paginate(6);
            
        return view('writers.show', compact('writer', 'articles'));
    }
}