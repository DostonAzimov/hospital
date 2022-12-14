
<?php
$totalComment=0;
$totalComment=\App\Http\Livewire\NewsComponent::comment();
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>One Health</title>

    <link rel="stylesheet" href="{{asset('../assets/css/maicons.css')}}">

    <link rel="stylesheet" href="{{asset('../assets/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('../assets/vendor/owl-carousel/css/owl.carousel.css')}}">

    <link rel="stylesheet" href="{{asset('../assets/vendor/animate/animate.css')}}">

    <link rel="stylesheet" href="{{asset('../assets/css/theme.css')}}">
</head>
<body>

<!-- Back to top button -->
<div class="back-to-top"></div>

<header>
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 text-sm">
                    <div class="site-info">
                        <a href="tel:+998901234567"><span class="mai-call text-primary"></span> +998901234567</a>
                        <span class="divider">|</span>
                        <a href="mailto:azimov@gmail.com"><span class="mai-mail text-primary"></span> mail@example.com</a>
                    </div>
                </div>
                <div class="col-sm-4 text-right text-sm">
                    <div class="social-mini-button">
                        <a href="#Facebook"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#twitter"><span class="mai-logo-twitter"></span></a>
                        <a href="#telegram"><span class="mai-logo-telegram"></span></a>
                        <a href="#instagram"><span class="mai-logo-instagram"></span></a>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}"><span class="text-primary">One</span>-Health</a>

            <form action="#">
                <div class="input-group input-navbar">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
                </div>
            </form>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupport">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('aboutUs')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('doctors')}}">Doctors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('news')}}">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary ml-lg-3" href="#">Login / Register</a>
                    </li>
                </ul>
            </div> <!-- .navbar-collapse -->
        </div> <!-- .container -->
    </nav>
</header>

<div class="page-banner overlay-dark bg-image" style="background-image: url({{asset('../assets/img/bg_image_1.jpg')}});">
    <div class="banner-section">
        <div class="container text-center wow fadeInUp">
            <nav aria-label="Breadcrumb">
                <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                </ol>
            </nav>
            <h1 class="font-weight-normal">Search</h1>
        </div> <!-- .container -->
    </div> <!-- .banner-section -->
</div> <!-- .page-banner -->
@extends('layouts.base2')

<div class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    @foreach($news as $new)
                        <div class="col-sm-6 py-3">
                            <div class="card-blog">
                                <div class="header">
                                    <div class="post-category">
                                        <a href="#">Covid19</a>
                                    </div>
                                    <a href="blog-details" class="post-thumb">
                                        <img src="{{asset('assets/img/blog')}}/{{$new->image}}" alt="">
                                    </a>
                                </div>
                                <div class="body">
                                    <h5 class="post-title"><a href="blog-details.html">{{$new->title}}</a></h5>
                                    <div class="site-info">

                                        <div class="avatar mr-2">
                                            <div href="#"><span class="mai-chatbubbles"></span>{{$totalComment}}</div>
                                        </div>

                                        <span class="mai-time"></span> 1 week ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="col-12 paginate">
{{--                        {{$news->links()}}--}}
                    </div>
                </div> <!-- .row -->
            </div>


            <div class="col-lg-4">
                <div class="sidebar">


                    <div class="sidebar-block">
                        <h3 class="sidebar-title">Search</h3>
                        <form action="search" class="search-form" type="get" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" name="query" placeholder="Search..">
                                <button type="submit" class="btn"><span class="icon mai-search"></span></button>
                            </div>
                        </form>
                    </div>

                    <div class="sidebar-block">
                        <h3 class="sidebar-title">Recent Blog</h3>
                        @foreach($recentBlog as $recent)
                            <div class="blog-item">
                                <a class="post-thumb" href="">
                                    <img src="{{asset('assets/img/blog')}}/{{$recent->image}}" alt="">
                                </a>
                                <div class="content">
                                    <h5 class="post-title"><a href="#">Even the all-powerful Pointing has no control</a></h5>
                                    <div class="meta">
                                        <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                                        <a href="#"><span class="mai-person"></span> Admin</a>
                                        <a href="#"><span class="mai-chatbubbles"></span> {{$totalComment}}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div> <!-- .row -->
    </div> <!-- .container -->
</div> <!-- .page-section -->

<footer class="page-footer">
    <div class="container">
        <div class="row px-md-3">
            <div class="col-sm-6 col-lg-3 py-3">
                <h5>Company</h5>
                <ul class="footer-menu">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Career</a></li>
                    <li><a href="#">Editorial Team</a></li>
                    <li><a href="#">Protection</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-3 py-3">
                <h5>More</h5>
                <ul class="footer-menu">
                    <li><a href="#">Terms & Condition</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Advertise</a></li>
                    <li><a href="#">Join as Doctors</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-3 py-3">
                <h5>Our partner</h5>
                <ul class="footer-menu">
                    <li><a href="#">One-Fitness</a></li>
                    <li><a href="#">One-Drugs</a></li>
                    <li><a href="#">One-Live</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-3 py-3">
                <h5>Contact</h5>
                <p class="footer-link mt-2">Toshkent shahar, Murobod tumani</p>
                <a href="#" class="footer-link">+998900061316</a>
                <a href="#" class="footer-link">hospital@gmail.com</a>

                <h5 class="mt-3">Social Media</h5>
                <div class="footer-sosmed mt-3">
                    <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
                    <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
                    <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
                    <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
                    <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

</body>
</html>

<style>
    .paginate{
        margin-left: 250px;
        margin-top: 30px;
    }

</style>
