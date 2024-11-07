

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduFun - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">EduFun</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{  route('home')}}">Home</a></li><li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('/categories/category1') }}">Category 1</a>
                        <a class="dropdown-item" href="{{ url('/categories/category2') }}">Category 2</a>
                    </div>
                </li>
                    <li class="nav-item"><a class="nav-link" href="{{  route('writers.index')}}">Writers</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{  route('about')}}">About Us</a></li>
                </ul>   
            </div>
        </div>
    </nav>
<main class="bgc" >
        @yield('content')
</main>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5>About EduFun</h5>
                    <p>Providing free IT education to students worldwide. Learn Data Science, Interactive Multimedia, Network Security, and Software Engineering.</p>
                </div>

                <div class="col-md-4 mb-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('categories.index') }}">Categories</a></li>
                        <li><a href="{{ route('writers.index') }}">Writers</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('articles.popular') }}">Popular Articles</a></li>
                    </ul>
                </div>

                <div class="col-md-4 mb-4">
                    <h5>Contact Us</h5>
                    <p>
                        <i class="fas fa-envelope me-2"></i> contact@edufun.com<br>
                        <i class="fas fa-phone me-2"></i> +1 234 567 890<br>
                        <i class="fas fa-map-marker-alt me-2"></i> Jakarta, Indonesia
                    </p>
                    <div class="social-icons mt-3">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12 text-center">
                    <hr class="bg-light">
                    <p class="mb-0">
                        &copy; {{ date('Y') }} EduFun - 2602087365 - Jovan Christian Elbindo.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        main {
            flex: 1;
        }
        .footer {
            background-color: #212529;
            color: white;
            padding: 3rem 0;
            margin-top: auto;
        }
        .footer a {
            color: white;
            text-decoration: none;
        }
        .footer a:hover {
            color: #0d6efd;
        }
        .bgc{
            background-color: #cce7e8
        }
        .social-icons a {
            margin: 0 10px;
            font-size: 1.5rem;
        }
    </style>