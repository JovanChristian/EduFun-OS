@extends('layouts.app')

@section('title', $category->name)

@section('content')
<div class="container">
    <h1 class="mb-4">{{ $category->name }}</h1>
    <div class="row">
        @foreach($category->articles as $article)
        <div class="col-md-4 mb-4">
            <div class="card">
                @if($article->image)
                <img src="{{ $article->image }}" class="card-img-top" alt="{{ $article->title }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <p class="card-text">{{ Str::limit($article->content, 100) }}</p>
                    <p class="text-muted">
                        By {{ $article->writer->name }} | 
                        {{ $article->created_at->format('M d, Y') }}
                    </p>
                    <a href="{{ route('articles.show', $article->slug) }}" class="btn btn-primary">
                        Read more...
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection