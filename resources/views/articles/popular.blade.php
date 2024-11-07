@extends('layouts.app')

@section('title', 'Popular Articles')

@section('content')
<div class="container">
    <h1 class="mb-4">Popular Articles</h1>

    @if($popularArticles->isEmpty())
        <p>No popular articles found.</p>
    @else
        <div class="row">
            @foreach($popularArticles as $article)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ $article->image }}" class="card-img-top" alt="{{ $article->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{{ $article->excerpt }}</p>
                            <a href="{{ route('post.show', $article) }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection