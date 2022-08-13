
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
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('aboutUs')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('doctors')}}">Doctors</a>
                    </li>
                    <li class="nav-item active">
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
            <h1 class="font-weight-normal">News</h1>
        </div> <!-- .container -->
    </div> <!-- .banner-section -->
</div> <!-- .page-banner -->

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
                                <a href="{{url('/news-detail',['newsId'=>$new->id])}}" class="post-thumb">
                                    <img src="{{asset('assets/img/blog')}}/{{$new->image}}" alt="">
                                </a>
                            </div>
                            <div class="body">
                                <h5 class="post-title"><a href="{{url('/news-detail',['newsId'=>$new->id])}}">{{$new->title}}</a></h5>
                                <div class="site-info">
                                        <a href="{{url('/comments',['newsId'=>$new->id])}}"><span class="mai-chatbubbles"></span></a>
                                    <span class="mai-time"></span> 1 week ago
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="col-12 paginate">
                            {{$news->links()}}
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
                                <h5 class="post-title"><a href="{{url('/news-detail',['newsId'=>$recent->id])}}">{{$recent->title}}</a></h5>
                                <div class="meta">
                                    <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                                    <a href="#"><span class="mai-person"></span> Admin</a>
                                    <a href="{{url('/comments',['newsId'=>$recent->id])}}"><span class="mai-chatbubbles"></span></a>
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




<style>
.paginate{
    margin-left: 250px;
    margin-top: 30px;
}

</style>
