@extends('front.master')
@section('content')
<body class="fashion">
<!--Preloader area Start here-->
<div class="preloader">
    <div class="sk-cube-grid">
        <div class="sk-cube sk-cube1"></div>
        <div class="sk-cube sk-cube2"></div>
        <div class="sk-cube sk-cube3"></div>
        <div class="sk-cube sk-cube4"></div>
        <div class="sk-cube sk-cube5"></div>
        <div class="sk-cube sk-cube6"></div>
        <div class="sk-cube sk-cube7"></div>
        <div class="sk-cube sk-cube8"></div>
        <div class="sk-cube sk-cube9"></div>
    </div>
</div>
<!--Preloader area end here-->

<!--Header area start here-->
<!--Header area end here-->
<!-- Inner Page Header serction start here -->
<div class="inner-page-header">
    <div class="banner">
        <img src="{{ asset('front') }}/images/banner/3.jpg" alt="Banner">
    </div>
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="header-page-locator">
                        <ul>
                            <li><a href="{{ url('/') }}">Home <i class="fa fa-compress" aria-hidden="true"></i> </a> {{ $categoryByNewsId->category_name }}</li>
                        </ul>
                    </div>
                    <div class="header-page-title">
                        <h1>{{ $newsById->news_title }}</h1>
                    </div>
                    <div class="header-page-subtitle">
                        <p>{{ $newsById->news_description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Inner Page Header serction end here -->

<!-- Category Page Start Here -->
<div class="blog-page-area gallery-page category-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
               <div class="row">
                   @foreach($categoryNews as $category)
                    <ul>
                        <li>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="carousel-inner">
                                    <div class="blog-image">
                                        <a href="{{ url('/single-news/'.$category->id) }}">
                                            <i class="fa fa-link" aria-hidden="true"></i>
                                            <img src="{{ asset($category->news_image) }} " alt="{{ $category->news_title }}" width="750" height="450">
                                        </a>
                                    </div>
                                </div>
                                <h3><a href="{{ url('/single-news/'.$category->id) }}">{{ $category->news_title }}</a></h3>
                                <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> {{ $category->created_at->diffforhumans() }}</span>               <span class="like"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>  12 </a></span>
                                <p>{{ $category->news_description }}</p>
                            </div>
                        </li>
                    </ul>
                       @endforeach
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="pagination-area">
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">. . .</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="sidebar-area">
                    <div class="like-box-area">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> <span class="like-page">like our facebook page <br/>210,956 likes</span> <span class="like"><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> <span class="like-page">Follow us on twitter<br/>2109 followers</span> <span class="like">
                                <i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                            <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i> <span class="like-page">Subscribe to our rss <br/>210,956 likes</span> <span class="like"><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                        </ul>
                    </div>
                    <div class="recent-post-area hot-news">
                        <h3 class="title-bg">Recent Post</h3>
                        <ul class="news-post">
                            <li>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                        <div class="item-post">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-right-none">
                                                    <a href="blog-single.html"><img src="{{ asset('front') }}/images/popular/1.jpg" alt="" title="News image" /></a>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <h4><a href="blog-single.html"> US should prepare for<br/> Russian election</a></h4>
                                                    <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                        <div class="item-post">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-right-none">
                                                    <a href="blog-single.html"><img src="{{ asset('front') }}/images/popular/2.jpg" alt="" title="News image" /></a>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <h4><a href="blog-single.html">Pellentesque Odio Nisi <br/>Euismod In Pharet</a></h4>
                                                    <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>June 28, 2017</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                        <div class="item-post">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-right-none">
                                                    <a href="blog-single.html"><img src="{{ asset('front') }}/images/popular/3.jpg" alt="" title="News image" /></a>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <h4><a href="blog-single.html"> Erant Aeque Neius No <br/>Numes Electram</a></h4>
                                                    <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                        <div class="item-post">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-right-none">
                                                    <a href="blog-single.html"><img src="{{ asset('front') }}/images/popular/4.jpg" alt="" title="News image" /></a>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <h4><a href="blog-single.html">Erant Aeque Neius No <br/>Numes Electram</a></h4>
                                                    <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>June 28, 2017</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="trending-post-area">
                        <h3 class="title-bg">Trending Post</h3>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <ul>
                                    <li>
                                        <a href="blog-single.html" class="hvr-bounce-to-right team-btn">The team</a><br/>
                                        <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                        <h4><a href="blog-single.html"> Jake Dribbler Announced The <br />Reting Next Month </a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectet dipis cing elit. Vivamus tincidunt quam eget trisp  nunc sed mattis phasellus.</p>
                                    </li>
                                    <li>
                                        <a href="blog-single.html" class="hvr-bounce-to-right team-btn">The team</a><br/>
                                        <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                        <h4><a href="blog-single.html"> Jake Dribbler Announced The <br />Reting Next Month </a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectet dipis cing elit. Vivamus tincidunt quam eget trisp  nunc sed mattis phasellus.</p>
                                    </li>
                                    <li>
                                        <a href="blog-single.html" class="hvr-bounce-to-right team-btn">The team</a><br/>
                                        <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                        <h4><a href="blog-single.html"> Jake Dribbler Announced The <br />Reting Next Month </a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectet dipis cing elit. Vivamus tincidunt quam eget trisp  nunc sed mattis phasellus.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="add">
                        <img src="{{ asset('front') }}/images/add/2.jpg" alt="Add">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

