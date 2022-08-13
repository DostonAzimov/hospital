
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
@if(Session::has('message'))
    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
@endif


<div class="page-hero bg-image overlay-dark" style="background-image: url({{asset('../assets/img/bg_image_1.jpg')}});">
    <div class="hero-section">
        <div class="container text-center wow zoomIn">
            <span class="subhead">Let's make your life happier</span>
            <h1 class="display-4">Healthy Living</h1>
            <a href="#" class="btn btn-primary">Let's Consult</a>
        </div>
    </div>
</div>

<div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card-service wow fadeInUp">
                        <div class="circle-shape bg-secondary text-white">
                            <span class="mai-chatbubbles-outline"></span>
                        </div>
                        <p><span>Chat</span> with a doctors</p>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card-service wow fadeInUp">
                        <div class="circle-shape bg-primary text-white">
                            <span class="mai-shield-checkmark"></span>
                        </div>
                        <p><span>One</span>-Health Protection</p>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card-service wow fadeInUp">
                        <div class="circle-shape bg-accent text-white">
                            <span class="mai-basket"></span>
                        </div>
                        <p><span>One</span>-Health Pharmacy</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .page-section -->



    <div class="page-section pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 py-3 wow fadeInUp">
                    <h1>Welcome to Your Health <br> Center</h1>
                    <p class="text-grey mb-4">{{$about->title}}</p>
                    <a href="{{route('aboutUs')}}" class="btn btn-primary">Learn More</a>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                    <div class="img-place custom-img-1">
                        <img src="{{asset('assets/img')}}/{{$about->image}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .bg-light -->
</div> <!-- .bg-light -->



<div class="page-section">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>

        <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
            @foreach($doctors as $doctor)
            <div class="item">
                <div class="card-doctor">
                    <div class="header">
                        <img src="{{asset('assets\img\doctors')}}/{{$doctor->image}}" alt="">
                        <div class="meta">
                            <a href="tel:{{$doctor->phoneNumber}}"><span class="mai-call"></span></a>
                            <a href="https://telegram.me/{{$doctor->telegram}}"><span class="mai-logo-telegram"></span></a>
                        </div>
                    </div>
                    <div class="body">
                        <p class="text-xl mb-0">{{$doctor->fullName}}</p>
                        <span class="text-sm text-grey">{{$doctor->category->name}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="page-section bg-light">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Latest News</h1>
        <div class="row mt-5">
            @foreach($news as $news)
            <div class="col-lg-4 py-2 wow zoomIn">
                <div class="card-blog">
                    <div class="header">
                        <div class="post-category">
                            <a href="{{url('/news-detail',['id'=>$news->id])}}">Covid19</a>
                        </div>
                        <a href="{{url('/news-detail',['id'=>$news->id])}}" class="post-thumb">
                            <img src="{{asset('assets/img/blog')}}/{{$news->image}}" alt="">
                        </a>
                    </div>
                    <div class="body">
                        <h5 class="post-title"><a href="{{url('/news-detail',['newsId'=>$news->id])}}">{{$news->title}}</a></h5>
                        <div class="site-info">
                            <div class="avatar mr-2">
                                <div href="#"><span class="mai-chatbubbles"></span></div>
                            </div>
                            <span class="mai-time"></span> 1 week ago
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-12 text-center mt-4 wow zoomIn">
                <a href="{{route('news')}}" class="btn btn-primary">Read More</a>
            </div>

        </div>
    </div>
</div> <!-- .page-section -->

<div class="page-section">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

        <form action="{{route('appointment')}}" class="main-form">
            <div class="row mt-5 ">
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                    <input type="text" name="name" class="form-control" placeholder="Full name">
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                    <input type="text" name="email" class="form-control" placeholder="Email address..">
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <input type="date" name="date" class="form-control">
                    @error('date') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight"  data-wow-delay="300ms">
                    <select  class="custom-select" name="category_id">
                        @foreach($category as $category)
                            <option value="{{$category->id}}">{{$category->name}} </option>
                        @endforeach
                            @error('category_id') <span class="text-danger">{{ $message }}</span> @enderror
                    </select>
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <input type="text" name="phoneNumber" class="form-control" placeholder="Number..">
                    @error('phoneNumber') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
                    @error('message') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
        </form>
    </div>
</div> <!-- .page-section -->

