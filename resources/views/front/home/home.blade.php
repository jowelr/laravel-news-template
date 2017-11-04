@extends('front.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0">
                <div class="wrapper">
                    <!-- News Slider -->
                    <div class="ticker marg-botm">
                        <div class="ticker-wrap">
                            <!-- News Slider Title -->
                            <div class="ticker-head up-case backg-colr col-md-2">Breaking News <i class="fa fa-angle-double-right" aria-hidden="true"></i></div>
                            <div class="tickers col-md-10">
                                <div id="top-news-slider" class="owl-carousel ">
                                    @foreach($publishedNews as $published)
                                    <div class="item">

                                        <a href="{{ url('/single-news/'.$published->id) }}"> <img src=" {{ asset($published->news_image)  }}" alt="{{ $published->news_title }}"> <span>{{$published->news_title}} </span></a>

                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End News Slider -->
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 padding-0">
                <div class="slider-area">
                    <div class="bend niceties preview-2">

                        <div id="ensign-nivoslider" class="slides" style="height:541px;">
                            @foreach($publishedNews as $published)
                            <img src="{{ asset($published->news_image)  }}" alt="{{ $published->news_title }}" title="#slider-direction-1" />
                            @endforeach
                        </div>

                        <!-- direction 2 -->
                        <div id="slider-direction-1" class="slider-direction">
                            <div class="slider-content t-cn s-tb slider-1">

                                <div class="title-container s-tb-c">
                                    @foreach($publishedNews as $published)
                                    <div class="slider-botton">
                                        <ul>
                                              <li>

                                                <span class="date">
                                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i>{{ $published->created_at->diffforhumans() }}
                                                </span>
                                                <span class="comment">
                                                    <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50
                                                    </a>
                                                </span>
                                            </li>

                                        </ul>
                                    </div>

                                    <h1 class="title1"><a href="{{ url('/single-news/'.$published->id) }}">{{ $published->news_title }}</a></h1>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                        <!-- direction 2 -->

                    </div>
                </div>
            </div>
            <!-- Slider Area End Here-->
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-left-none">
                <div class="slider-right">
                    @foreach($publishedNews as $published)
                    <ul>

                       <li>

                            <div class="right-content">
                                <span class="category"><a class="cat-link" href="{{ $published->id }}">{{ $published->category_name }}</a></span>
                                <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i> {{ $published->created_at->diffforhumans() }}</span>
                                <h3><a href="{{ url('/single-news/'.$published->id) }}">{{ $published->news_title }}</a></h3>
                            </div>

                            <div class="right-image"><a href="{{ url('/single-news/'.$published->id) }}"><img src="{{ asset($published->news_image) }}" alt="sidebar image"></a></div>
                        </li>


                    </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Section end Here -->
<hr>
    <!-- Hot News Start Here -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h3 class="title-bg featured-title">Browse News By category</h3>
                <div class="slider-right">
                    @foreach($publishedCategories as $publishedCategory)
                    <ul>
                        <li class="col-md-4 col-sm-4 col-sm-12">
                            <div class="right-content">

                                <h3><a href="{{ url('/category-news/'.$publishedCategory->id) }}">{{ $publishedCategory->category_name }}</a></h3>
                            </div>
                            <div class="right-image"><a href="{{ url('/category-news/'.$publishedCategory->id) }}"><img src="{{ asset($published->news_image)  }}" alt="sidebar image"></a></div>

                        </li>

                    </ul>
                        @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="add-section separator-large2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <img src="{{ asset('/front') }}/images/footer-top.png" alt="footer">
                </div>
            </div>
        </div>
    </div>
@endsection