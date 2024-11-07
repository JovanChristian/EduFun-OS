@extends('layouts.app')

@section('title', $article->title)

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            @if($article->image)
            <img src="{{ $article->image }}" class="img-fluid mb-4" alt="{{ $article->title }}">
            @endif
            <h1>{{ $article->title }}</h1>
            <div class="text-muted mb-4">
                By {{ $article->writer->name }} | 
                {{ $article->created_at->format('M d, Y') }} | 
                Category: {{ $article->category->name }}
            </div>
            <div class="article-content">
                {!! $article->content !!}
            </div>
        </div>
    </div>
</div>
@endsection