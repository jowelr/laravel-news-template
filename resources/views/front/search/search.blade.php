@extends('front.master')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h3 class="title-bg featured-title">Search Results</h3>
                <div class="slider-right">
                    @if(isset($details))
                        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
                        @foreach($details as $user)
                        <ul>

                            <li class="col-md-4 col-sm-4 col-sm-12">
                                <div class="right-content">

                                    <h3><a href="{{ url('/single-news/'.$user->id) }}">{{ $user->news_title }}</a></h3>
                                </div>
                                <div class="right-image"><a href="{{ url('/category-news/'.$user->id) }}"><img src="{{ asset($user->news_image)  }}" alt="sidebar image"></a></div>

                            </li>
                        </ul>
                        @endforeach
                        @else
                       <p> No Results found. Try to search again !</p>
                        @endif
                </div>
            </div>
        </div>
    </div>


@endsection