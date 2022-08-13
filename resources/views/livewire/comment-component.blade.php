

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

<div class="page-section pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb bg-transparent py-0 mb-5">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('news')}}">Blog</a></li>
                        <li class="breadcrumb-item active" aria-current="page">List of Countries without Coronavirus case</li>
                    </ol>
                </nav>
            </div>
        </div> <!-- .row -->

        <div class="row">
            <div class="col-lg-8">
                <article class="blog-details">
                    <div class="post-thumb">
                        <img src="{{asset('assets/img/blog')}}/{{$newsDetail->image}}" alt="">
                    </div>
                    <div class="post-meta">
                        <div class="post-author">
                            <span class="text-grey">By</span> <a href="#">Admin</a>
                        </div>
                        <span class="divider">|</span>
                        <div class="post-date">
                            <a href="#">22 Jan, 2018</a>
                        </div>
                        <span class="divider">|</span>

                        <span class="divider">|</span>
                        <div class="post-comment-count">
                            <a href="{{url('/comments',['newsId'=>$newsDetail->id])}}">{{$totalComments}} Comments</a>
                        </div>
                    </div>
                    <h2 class="post-title h1">{{$newsDetail->title}}</h2>
                    <div class="post-content">
                        <p>{{$newsDetail->desc}}</p>
                    </div>

                    <h5>Comments:</h5>
                        @foreach($comment as $comment)
                    <div class="post-content">
                        <p>{{$comment->user->name}}: {{$comment->message}}</p>
                    </div>
                    @endforeach
                </article> <!-- .blog-details -->

                <div class="">
                    <h3 class="mb-5">Leave a comment</h3>
                    <form action="{{url('/comment',['id'=>$newsDetail->id])}}" >
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="message" id="5"  cols="10" rows="4" class="form-control" ></textarea>
                        </div>
                        <input type="submit"  name="submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="sidebar-block">
                        <h3 class="sidebar-title">Search</h3>
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
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
                                        <a href="{{url('/comments',['newsId'=>$recent->id])}}"><span class="mai-chatbubbles"></span> </a>
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


