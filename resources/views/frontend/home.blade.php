@extends('frontend.layouts.app')
@section('title', 'Home')
@section('content')
    <section id="home" class="welcome-hero">
        <div class="container">
            <div class="welcome-hero-txt">
                <h2>best place to find Services in <br> Recruitment and Consulting</h2>
                <p>
                    Find Resume Writing, Recruitment, Consulting, Placements, Career Services, and more in just one
                    click re
                </p>
            </div>
            <div class="welcome-hero-serch-box">
                <div class="welcome-hero-form">
                    <div class="single-welcome-hero-form">
                        <h3>Are you looking for a professionally crafted resume?</h3>
                        <form action="index.html">
                            <input type="text" placeholder="If, Yes." />
                        </form>
                    </div>
                </div>
                <div class="welcome-hero-serch">
                    <button class="welcome-hero-btn" onclick="window.location.href='#'">
                        Click Here <i data-feather="search"></i>
                    </button>
                </div>
            </div>
        </div>

    </section><!--/.welcome-hero-->
    <!--welcome-hero end -->

    <!--list-topics start -->
    <section id="list-topics" class="list-topics">
        <div class="container">
            <div class="list-topics-content">
                <ul>
                    <li>
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon">
                                <i class="flaticon-restaurant"></i>
                            </div>
                            <h2><a href="#">resturent</a></h2>
                            <p>150 listings</p>
                        </div>
                    </li>
                    <li>
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon">
                                <i class="flaticon-travel"></i>
                            </div>
                            <h2><a href="#">destination</a></h2>
                            <p>214 listings</p>
                        </div>
                    </li>
                    <li>
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon">
                                <i class="flaticon-building"></i>
                            </div>
                            <h2><a href="#">hotels</a></h2>
                            <p>185 listings</p>
                        </div>
                    </li>
                    <li>
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon">
                                <i class="flaticon-pills"></i>
                            </div>
                            <h2><a href="#">healthcaree</a></h2>
                            <p>200 listings</p>
                        </div>
                    </li>
                    <li>
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon">
                                <i class="flaticon-transport"></i>
                            </div>
                            <h2><a href="#">automotion</a></h2>
                            <p>120 listings</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div><!--/.container-->

    </section><!--/.list-topics-->
    <!--list-topics end-->

    <!--works start -->
    <section id="works" class="works">
        <div class="container">
            <div class="section-header">
                <h2>how it works</h2>
                <p>Learn More about how our website works</p>
            </div><!--/.section-header-->
            <div class="works-content">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="single-how-works">
                            <div class="single-how-works-icon">
                                <i class="flaticon-lightbulb-idea"></i>
                            </div>
                            <h2><a href="#">choose <span> what to</span> do</a></h2>
                            <p>
                                Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor
                                incididunt
                                ut laboremagna aliqua.
                            </p>
                            <button class="welcome-hero-btn how-work-btn" onclick="window.location.href='#'">
                                read more
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-how-works">
                            <div class="single-how-works-icon">
                                <i class="flaticon-networking"></i>
                            </div>
                            <h2><a href="#">find <span> what you want</span></a></h2>
                            <p>
                                Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor
                                incididunt
                                ut laboremagna aliqua.
                            </p>
                            <button class="welcome-hero-btn how-work-btn" onclick="window.location.href='#'">
                                read more
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-how-works">
                            <div class="single-how-works-icon">
                                <i class="flaticon-location-on-road"></i>
                            </div>
                            <h2><a href="#">explore <span> amazing</span> place</a></h2>
                            <p>
                                Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor
                                incididunt
                                ut laboremagna aliqua.
                            </p>
                            <button class="welcome-hero-btn how-work-btn" onclick="window.location.href='#'">
                                read more
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->

    </section><!--/.works-->
    <!--works end -->

    <!--explore start -->
    <section id="explore" class="explore">
        <div class="container">
            <div class="section-header">
                <h2>explore</h2>
                <p>Explore New place, food, culture around the world and many more</p>
            </div><!--/.section-header-->
            <div class="explore-content">
                <div class="row">
                    <div class=" col-md-4 col-sm-6">
                        <div class="single-explore-item">
                            <div class="single-explore-img">
                                <img src="assets/images/explore/e1.jpg" alt="explore image">
                                <div class="single-explore-img-info">
                                    <button onclick="window.location.href='#'">best rated</button>
                                    <div class="single-explore-image-icon-box">
                                        <ul>
                                            <li>
                                                <div class="single-explore-image-icon">
                                                    <i class="fa fa-arrows-alt"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="single-explore-image-icon">
                                                    <i class="fa fa-bookmark-o"></i>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single-explore-txt bg-theme-1">
                                <h2><a href="#">tommy helfinger bar</a></h2>
                                <p class="explore-rating-price">
                                    <span class="explore-rating">5.0</span>
                                    <a href="#"> 10 ratings</a>
                                    <span class="explore-price-box">
                                        form
                                        <span class="explore-price">5$-300$</span>
                                    </span>
                                    <a href="#">resturent</a>
                                </p>
                                <div class="explore-person">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="explore-person-img">
                                                <a href="#">
                                                    <img src="assets/images/explore/person.png" alt="explore person">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod
                                                tempor incid ut labore et dolore magna aliqua....
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="explore-open-close-part">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <button class="close-btn" onclick="window.location.href='#'">close
                                                now</button>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="explore-map-icon">
                                                <a href="#"><i data-feather="map-pin"></i></a>
                                                <a href="#"><i data-feather="upload"></i></a>
                                                <a href="#"><i data-feather="heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-explore-item">
                            <div class="single-explore-img">
                                <img src="assets/images/explore/e2.jpg" alt="explore image">
                                <div class="single-explore-img-info">
                                    <button onclick="window.location.href='#'">featured</button>
                                    <div class="single-explore-image-icon-box">
                                        <ul>
                                            <li>
                                                <div class="single-explore-image-icon">
                                                    <i class="fa fa-arrows-alt"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="single-explore-image-icon">
                                                    <i class="fa fa-bookmark-o"></i>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single-explore-txt bg-theme-2">
                                <h2><a href="#">swim and dine resort</a></h2>
                                <p class="explore-rating-price">
                                    <span class="explore-rating">4.5</span>
                                    <a href="#"> 8 ratings</a>
                                    <span class="explore-price-box">
                                        form
                                        <span class="explore-price">50$-500$</span>
                                    </span>
                                    <a href="#">hotel</a>
                                </p>
                                <div class="explore-person">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="explore-person-img">
                                                <a href="#">
                                                    <img src="assets/images/explore/person.png" alt="explore person">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod
                                                tempor incid ut labore et dolore magna aliqua....
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="explore-open-close-part">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <button class="close-btn open-btn" onclick="window.location.href='#'">open
                                                now</button>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="explore-map-icon">
                                                <a href="#"><i data-feather="map-pin"></i></a>
                                                <a href="#"><i data-feather="upload"></i></a>
                                                <a href="#"><i data-feather="heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-explore-item">
                            <div class="single-explore-img">
                                <img src="assets/images/explore/e3.jpg" alt="explore image">
                                <div class="single-explore-img-info">
                                    <button onclick="window.location.href='#'">best rated</button>
                                    <div class="single-explore-image-icon-box">
                                        <ul>
                                            <li>
                                                <div class="single-explore-image-icon">
                                                    <i class="fa fa-arrows-alt"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="single-explore-image-icon">
                                                    <i class="fa fa-bookmark-o"></i>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single-explore-txt bg-theme-3">
                                <h2><a href="#">europe tour</a></h2>
                                <p class="explore-rating-price">
                                    <span class="explore-rating">5.0</span>
                                    <a href="#"> 15 ratings</a>
                                    <span class="explore-price-box">
                                        form
                                        <span class="explore-price">5k$-10k$</span>
                                    </span>
                                    <a href="#">destination</a>
                                </p>
                                <div class="explore-person">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="explore-person-img">
                                                <a href="#">
                                                    <img src="assets/images/explore/person.png" alt="explore person">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod
                                                tempor incid ut labore et dolore magna aliqua....
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="explore-open-close-part">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <button class="close-btn" onclick="window.location.href='#'">close
                                                now</button>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="explore-map-icon">
                                                <a href="#"><i data-feather="map-pin"></i></a>
                                                <a href="#"><i data-feather="upload"></i></a>
                                                <a href="#"><i data-feather="heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-4 col-sm-6">
                        <div class="single-explore-item">
                            <div class="single-explore-img">
                                <img src="assets/images/explore/e4.jpg" alt="explore image">
                                <div class="single-explore-img-info">
                                    <button onclick="window.location.href='#'">most view</button>
                                    <div class="single-explore-image-icon-box">
                                        <ul>
                                            <li>
                                                <div class="single-explore-image-icon">
                                                    <i class="fa fa-arrows-alt"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="single-explore-image-icon">
                                                    <i class="fa fa-bookmark-o"></i>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single-explore-txt bg-theme-4">
                                <h2><a href="#">banglow with swiming pool</a></h2>
                                <p class="explore-rating-price">
                                    <span class="explore-rating">5.0</span>
                                    <a href="#"> 10 ratings</a>
                                    <span class="explore-price-box">
                                        form
                                        <span class="explore-price">10k$-15k$</span>
                                    </span>
                                    <a href="#">real estate</a>
                                </p>
                                <div class="explore-person">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="explore-person-img">
                                                <a href="#">
                                                    <img src="assets/images/explore/person.png" alt="explore person">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod
                                                tempor incid ut labore et dolore magna aliqua....
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="explore-open-close-part">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <button class="close-btn" onclick="window.location.href='#'">close
                                                now</button>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="explore-map-icon">
                                                <a href="#"><i data-feather="map-pin"></i></a>
                                                <a href="#"><i data-feather="upload"></i></a>
                                                <a href="#"><i data-feather="heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-explore-item">
                            <div class="single-explore-img">
                                <img src="assets/images/explore/e5.jpg" alt="explore image">
                                <div class="single-explore-img-info">
                                    <button onclick="window.location.href='#'">featured</button>
                                    <div class="single-explore-image-icon-box">
                                        <ul>
                                            <li>
                                                <div class="single-explore-image-icon">
                                                    <i class="fa fa-arrows-alt"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="single-explore-image-icon">
                                                    <i class="fa fa-bookmark-o"></i>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single-explore-txt bg-theme-2">
                                <h2><a href="#">vintage car expo</a></h2>
                                <p class="explore-rating-price">
                                    <span class="explore-rating">4.2</span>
                                    <a href="#"> 8 ratings</a>
                                    <span class="explore-price-box">
                                        form
                                        <span class="explore-price">500$-1200$</span>
                                    </span>
                                    <a href="#">automotion</a>
                                </p>
                                <div class="explore-person">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="explore-person-img">
                                                <a href="#">
                                                    <img src="assets/images/explore/person.png" alt="explore person">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod
                                                tempor incid ut labore et dolore magna aliqua....
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="explore-open-close-part">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <button class="close-btn open-btn" onclick="window.location.href='#'">open
                                                now</button>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="explore-map-icon">
                                                <a href="#"><i data-feather="map-pin"></i></a>
                                                <a href="#"><i data-feather="upload"></i></a>
                                                <a href="#"><i data-feather="heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-explore-item">
                            <div class="single-explore-img">
                                <img src="assets/images/explore/e6.jpg" alt="explore image">
                                <div class="single-explore-img-info">
                                    <button onclick="window.location.href='#'">best rated</button>
                                    <div class="single-explore-image-icon-box">
                                        <ul>
                                            <li>
                                                <div class="single-explore-image-icon">
                                                    <i class="fa fa-arrows-alt"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="single-explore-image-icon">
                                                    <i class="fa fa-bookmark-o"></i>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single-explore-txt bg-theme-5">
                                <h2><a href="#">thailand tour</a></h2>
                                <p class="explore-rating-price">
                                    <span class="explore-rating">5.0</span>
                                    <a href="#"> 15 ratings</a>
                                    <span class="explore-price-box">
                                        form
                                        <span class="explore-price">5k$-10k$</span>
                                    </span>
                                    <a href="#">destination</a>
                                </p>
                                <div class="explore-person">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="explore-person-img">
                                                <a href="#">
                                                    <img src="assets/images/explore/person.png" alt="explore person">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod
                                                tempor incid ut labore et dolore magna aliqua....
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="explore-open-close-part">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <button class="close-btn" onclick="window.location.href='#'">close
                                                now</button>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="explore-map-icon">
                                                <a href="#"><i data-feather="map-pin"></i></a>
                                                <a href="#"><i data-feather="upload"></i></a>
                                                <a href="#"><i data-feather="heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->

    </section><!--/.explore-->
    <!--explore end -->

    <!--reviews start -->
    <section id="reviews" class="reviews">
        <div class="section-header">
            <h2>Clients Reviews</h2>
            <p>What our clients say about us</p>
        </div>
        <div class="reviews-content">
            <div class="testimonial-carousel">
                @foreach ($reviews as $review)
                    <div class="single-testimonial-box">
                        <div class="testimonial-description">
                            <div class="testimonial-info">
                                <div class="testimonial-img">
                                    <img class="review-image"
                                        src="{{ $review->image ? asset('storage/' . $review->image) : asset('assets/images/avatar.png') }}"
                                        alt="{{ $review->name ?? 'Default Avatar' }}" class="w-10 h-10 rounded-full">

                                    {{-- <img src="{{ asset('storage/' . $review->image) }}" alt="{{ $review->name }}"> --}}
                                </div>
                                <div class="testimonial-person">
                                    <h2>{{ $review->name }}</h2>
                                    <h4>{{ $review->location }}</h4>
                                    <div class="testimonial-person-star">
                                        @for ($i = 1; $i <= $review->rating; $i++)
                                            <i class="fa fa-star"></i>
                                        @endfor
                                        @for ($i = $review->rating + 1; $i <= 5; $i++)
                                            <i class="fa fa-star-o"></i>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-comment">
                                <p>{{ $review->review }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!--reviews end -->

    <!-- statistics strat -->
    <section id="statistics" class="statistics">
        <div class="container">
            <div class="statistics-counter">
                <div class="col-md-3 col-sm-6">
                    <div class="single-ststistics-box">
                        <div class="statistics-content">
                            <div class="counter">90 </div> <span>K+</span>
                        </div><!--/.statistics-content-->
                        <h3>listings</h3>
                    </div><!--/.single-ststistics-box-->
                </div><!--/.col-->
                <div class="col-md-3 col-sm-6">
                    <div class="single-ststistics-box">
                        <div class="statistics-content">
                            <div class="counter">40</div> <span>k+</span>
                        </div><!--/.statistics-content-->
                        <h3>listing categories</h3>
                    </div><!--/.single-ststistics-box-->
                </div><!--/.col-->
                <div class="col-md-3 col-sm-6">
                    <div class="single-ststistics-box">
                        <div class="statistics-content">
                            <div class="counter">65</div> <span>k+</span>
                        </div><!--/.statistics-content-->
                        <h3>visitors</h3>
                    </div><!--/.single-ststistics-box-->
                </div><!--/.col-->
                <div class="col-md-3 col-sm-6">
                    <div class="single-ststistics-box">
                        <div class="statistics-content">
                            <div class="counter">50</div> <span>k+</span>
                        </div><!--/.statistics-content-->
                        <h3>happy clients</h3>
                    </div><!--/.single-ststistics-box-->
                </div><!--/.col-->
            </div><!--/.statistics-counter-->
        </div><!--/.container-->

    </section><!--/.counter-->
    <!-- statistics end -->

    <!--blog start -->
    <section id="blog" class="blog">
        <div class="container">
            <div class="section-header">
                <h2>news and articles</h2>
                <p>Always upto date with our latest News and Articles </p>
            </div><!--/.section-header-->
            <div class="blog-content">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="single-blog-item">
                            <div class="single-blog-item-img">
                                <img src="assets/images/blog/b1.jpg" alt="blog image">
                            </div>
                            <div class="single-blog-item-txt">
                                <h2><a href="#">How to find your Desired Place more quickly</a></h2>
                                <h4>posted <span>by</span> <a href="#">admin</a> march 2018</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur de adipisicing elit, sed do eiusmod
                                    tempore
                                    incididunt ut labore et dolore magna.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-blog-item">
                            <div class="single-blog-item-img">
                                <img src="assets/images/blog/b2.jpg" alt="blog image">
                            </div>
                            <div class="single-blog-item-txt">
                                <h2><a href="#">How to find your Desired Place more quickly</a></h2>
                                <h4>posted <span>by</span> <a href="#">admin</a> march 2018</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur de adipisicing elit, sed do eiusmod
                                    tempore
                                    incididunt ut labore et dolore magna.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-blog-item">
                            <div class="single-blog-item-img">
                                <img src="assets/images/blog/b3.jpg" alt="blog image">
                            </div>
                            <div class="single-blog-item-txt">
                                <h2><a href="#">How to find your Desired Place more quickly</a></h2>
                                <h4>posted <span>by</span> <a href="#">admin</a> march 2018</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur de adipisicing elit, sed do eiusmod
                                    tempore
                                    incididunt ut labore et dolore magna.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section><!--/.blog-->
    <!--blog end -->

    <!--subscription strat -->
    <section id="contact" class="subscription">
        <div class="container">
            <div class="subscribe-title text-center">
                <h2>
                    Do you want to explore job services with us?
                </h2>
                <p>
                    Dizams offers you comprehensive resume writing services and career solutions, helping you
                    achieve
                    your professional goals effortlessly.
                </p>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="subscription-input-group">
                        <form action="#">
                            <input type="email" class="subscription-input-form" placeholder="Enter your email here">
                            <button class="appsLand-btn subscribe-btn" onclick="window.location.href='#'">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
