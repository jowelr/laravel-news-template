@extends('front.master')
@section('content')
    <div class="inner-page-header">
        <div class="banner">
            <img src="{{ asset('/front') }}/images/banner/3.jpg" alt="">
        </div>
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-page-locator">
                            <ul>
                                <li><a href="{{ url('/') }}">Home <i class="fa fa-compress" aria-hidden="true"></i> </a> </li>
                            </ul>
                        </div>
                        <div class="header-page-title">
                            <h1></h1>
                        </div>
                        <div class="header-page-subtitle">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Page Header serction end here -->

    <!-- Blog Single Start Here -->
    <div class="single-blog-page-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="single-image">
                        <img src="" alt="" width="100%" >
                    </div>
                    <h3><a href="{{ url('/single-news/') }}"></a></h3>
                    <p></p>

                    <div class="share-section">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 life-style">
                                <span class="admin"> <a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> </a> <a href="#"> <i class="fa fa-comment-o" aria-hidden="true"></i> 12</a></span>
                                <span class="date">
                                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>  </span>

                                <a href="#"><i class="fa fa-folder-o" aria-hidden="true"></i>  </a>


                            </div>
                        </div>
                    </div>

                    <div class="like-section">
                        <h3 class="title-bg">YOU MIGHT ALSO LIKE</h3>
                        <div class="row">

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="popular-post-img">
                                    <a href=""><img src="" alt="Blog single photo"></a>
                                </div>
                                <h3>
                                    <a href="{{ url('/single-news/') }}"></a>
                                </h3>
                                <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> </span>
                            </div>

                        </div>
                    </div>
                    <div class="author-comment">
                        <h3 class="title-bg">Recent Comments</h3>
                        <ul>

                            <li>
                                <div class="row">

                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <div class="image-comments"><img src="{{ asset('/front') }}/images/single/3.jpg" alt="Blog single photo"></div>
                                    </div>

                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                        <span class="reply"> <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> </span></span>
                                        <div class="dsc-comments">
                                            <h4></h4>
                                            <p></p>
                                            <a href="#"> Reply</a>
                                        </div>
                                    </div>

                                </div>
                            </li>

                        </ul>
                    </div>
                    <div class="leave-comments-area">
                                                <h4 class="title-bg">Leave Comments</h4>
                        @if($message = Session::get('message'))
                            <h1 class="text-center text-success">{{ $message }}</h1>
                            <hr/>
                        @endif
                        <form action="{{ url('/comment/new/') }}" method="POST">
                            {{ csrf_field() }}
                            <fieldset>
                                <div class="form-group">
                                    <label>Name*</label>
                                    <input type="text" name="comment_name" class="form-control">
                                    <input type="hidden" value="#" name="comment_id" class="form-control">

                                </div>
                                <div class="form-group">
                                    <label>Email*</label>
                                    <input type="email" name="comment_email" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Website</label>
                                    <input type="website" name="comment_website" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Your comment here...</label>
                                    <textarea cols="40" rows="10" class="textarea form-control" name="comment_message"></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="btn-send" type="submit">Post Comment</button>
                                </div>
                            </fieldset>

                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <!-- Sidebar Start Here -->
                    <div class="sidebar-area">
                        <div class="like-box-area">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> <span class="like-page">like our facebook page <br/>210,956 likes</span> <span class="like"><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> <span class="like-page">Follow us on twitter<br/>2109 followers</span> <span class="like">
                                <i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i> <span class="like-page">Subscribe to our rss <br/>210,956 likes</span> <span class="like"><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                            </ul>
                        </div>
                        <div class="recent-post-area hot-news sidebar-recent">
                            <h3 class="title-bg">Recent Post</h3>
                            <ul class="news-post">
                                <li>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                            <div class="item-post">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3 paddimg-right-none">
                                                        <a href="blog-single.html"> <img src="{{ asset('/front') }}/images/popular/1.jpg" alt="" title="News image" /></a>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-9">
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
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3 paddimg-right-none">
                                                        <a href="blog-single.html"><img src="{{ asset('/front') }}/images/popular/2.jpg" alt="" title="News image" /></a>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-9">
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
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3 paddimg-right-none">
                                                        <a href="blog-single.html"><img src="{{ asset('/front') }}/images/popular/3.jpg" alt="" title="News image" /></a>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-9">
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
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3 paddimg-right-none">
                                                        <a href="blog-single.html"><img src="{{ asset('/front') }}/images/popular/4.jpg" alt="" title="News image" /></a>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-9">
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
                        <div class="instagram instagram-home">
                            <h3 class="title-bg">Instagram</h3>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <a href="#">
                                        <img src="{{ asset('/front') }}/images/instagram/1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <a href="#">
                                        <img src="{{ asset('/front') }}/images/instagram/2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <a href="#">
                                        <img src="{{ asset('/front') }}/images/instagram/3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <a href="#">
                                        <img src="{{ asset('/front') }}/images/instagram/4.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <a href="#">
                                        <img src="{{ asset('/front') }}/images/instagram/5.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <a href="#">
                                        <img src="{{ asset('/front') }}/images/instagram/6.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="romantic-look">
                            <a href="category-fashion.html">
                                <div class="images">
                                    <img src="{{ asset('/front') }}/images/look.jpg" alt="">
                                </div>
                                <div class="text-des">
                                    <h2>Romantic Look</h2>
                                    <p>See it, like it, shop it!</p>
                                </div>
                            </a>
                        </div>
                        <div class="subscribe-area">
                            <h3>Subscribe Now!</h3>
                            <p>Receive the latest news from Beauty:game new adquisitionsand professional match result.</p>
                            <form method="get" action="#" class="form-inline" >
                                <input name="q" class="span5" type="text"  placeholder="your email address...">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection