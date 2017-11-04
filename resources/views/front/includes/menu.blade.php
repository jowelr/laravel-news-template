<div class="header-top-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="header-top-left">
                    <ul>
                        <li>{{ date('Y-m-d H:i:s') }}</li>
                        @if(Session::get('authorId'))
                            <li><b>Welcome</b> {{ Session::get('authorName') }}</li>

                        <li><a href="{{ url('/logout') }}">Logout</a></li>
                        @else
                        <li><a href="{{ url('/account') }}">Sign In / Join</a></li>
                        @endif
                        <li><a href="{{ url('/contact-us') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="social-media-area">
                    <nav>
                        <ul>
                            <li><a href="{{ url($social->facebook_) }}" class="active"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{ url($social->google_plus) }}"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="{{ url($social->twitter) }}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{ url($social->youtube) }}"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                            <li><a href="{{ url($social->pinterest) }}"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header-middle-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="logo-area">
                    <a href="{{ url('/') }}"><img src="{{ asset('/front') }}/images/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="right-banner">
                    <img src="{{ asset('/front') }}/images/add/1.png" alt="add image">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header-bottom-area" id="sticky">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                <div class="navbar-header">
                    <div class="col-sm-8 col-xs-8 padding-null">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="col-sm-4 col-xs-4 hidden-desktop text-right search">
                        <a href="#search-mobile" data-toggle="collapse" class="search-icon"><i class="fa fa-search" aria-hidden="true"></i></a>
                        <div id="search-mobile" class="collapse search-box">
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </div>
                </div>
                <div class="main-menu navbar-collapse collapse">
                    <nav>
                        <ul>
                            <li><a href="{{ url('/') }}" class="has dropdown-toggle">Home</a></li>

                            @foreach($publishedCategories as $publishedCategory)
                            <li><a href="{{ url('/category-news/'.$publishedCategory->id) }}">{{ $publishedCategory->category_name }}</a></li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-hidden col-xs-hidden text-right search hidden-mobile">
                <a href="#search" data-toggle="collapse" class="search-icon"><i class="fa fa-search" aria-hidden="true"></i></a>
                <form action="{{ url('/search-results') }}" method="GET" id="search" class="collapse search-box">
                     <input type="text" name="searchfield" class="form-control" placeholder="type and hit enter.." >
                </form>
            </div>
        </div>
    </div>
</div>