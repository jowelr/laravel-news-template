<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(){

        $searchfield = Input::get ( 'searchfield' );
        $news = News::where('news_title','LIKE','%'.$searchfield.'%')->orWhere('news_description','LIKE','%'.$searchfield.'%')->get();
        if(count($news) > 0)
            return view('front.search.search')->withDetails($news)->withQuery ( $searchfield );

        else return view ('front.search.search')->withMessage('No Results found. Try to search again !');

    }
}
