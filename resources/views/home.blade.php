@extends('layouts.app')

@section('title', 'Home')

@section('content')
<body>

    <div class="hero">
    </div>

    <div class="container mt-5">
        <h2 class="mb-4">Latest Articles</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="article-card">
                    <img src="" alt="Article 1">
                    <div class="card-body">
                        <h5>Article Title 1</h5>
                        <p>Short description of the article...</p>
                        <div class="article-meta">
                            <span>Author Name</span> | <span>Date Posted</span>
                        </div>
                        <a href="#" class="btn btn-primary mt-2">Read more...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="article-card">
                    <img src="path_to_article_image2.jpg" alt="Article 2">
                    <div class="card-body">
                        <h5>Article Title 2</h5>
                        <p>Short description of the article...</p>
                        <div class="article-meta">
                            <span>Author Name</span> | <span>Date Posted</span>
                        </div>
                        <a href="#" class="btn btn-primary mt-2">Read more...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="article-card">
                    <img src="path_to_article_image3.jpg" alt="Article 3">
                    <div class="card-body">
                        <h5>Article Title 3</h5>
                        <p>Short description of the article...</p>
                        <div class="article-meta">
                            <span>Author Name</span> | <span>Date Posted</span>
                        </div>
                        <a href="#" class="btn btn-primary mt-2">Read more...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
@endsection

<style>
        body {
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #f8f9fa;
        }
        .hero {
            background-image: url('image/main.jpg');
            background-size: cover;
            background-position: center;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }
        .hero h1 {
            font-size: 3rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        .article-card {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
        }
        .article-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .article-card .card-body {
            padding: 15px;
        }
        .article-card h5 {
            margin-bottom: 10px;
        }
        .article-meta {
            font-size: 0.9rem;
            color: #6c757d;
        }
    </style>