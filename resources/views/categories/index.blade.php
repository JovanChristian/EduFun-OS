@extends('layouts.app')

@section('title', 'Categories')

@section('content')
<div class="container">
    <h1 class="mb-4">Categories</h1>
    <div class="row">
        @foreach($categories as $category)
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $category->name }}</h5>
                    <p class="card-text">{{ $category->description }}</p>
                    <a href="{{ route('categories.show', $category->slug) }}" class="btn btn-primary">
                        View Courses
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection