@extends('layouts.app')

@section('title', 'Writers')

@section('content')
<div class="container">
    <h1 class="mb-4">Our Writers</h1>
    <div class="row">
        @foreach($writers as $writer)
        <div class="col-md-4 mb-4 ">
            <div class="card">
                @if($writer->image)
                <img src="{{ $writer->image }}" class="card-img-top" alt="{{ $writer->name }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $writer->name }}</h5>
                    <p class="card-text">{{ Str::limit($writer->bio, 150) }}</p>
                    <a href="{{ route('writers.show', $writer->id) }}" class="btn btn-primary">
                        View Profile
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection