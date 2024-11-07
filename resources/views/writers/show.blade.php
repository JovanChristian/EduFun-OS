@extends('layouts.app')

@section('title', $writer->name)

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                @if($writer->image)
                <img src="{{ $writer->image }}" class="card-img-top" alt="{{ $writer->name }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $writer->name }}</h5>
                    <p class="card-text">{{ $writer->bio }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <h2>Articles by {{ $writer->name }}</h2>
            @foreach($writer->articles as $article)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <p class="card-text">{{ Str::limit($article->content, 150) }}</p>
                    <p class="text-muted">
                        {{ $article->created_at->format('M d, Y') }} | 
                        Category: {{ $article->category->name }}
                    </p>
                    <a href="{{ route('articles.show', $article->slug) }}" class="btn btn-primary">
                        Read more...
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection