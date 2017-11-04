<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;
use Illuminate\Http\Request;
use DB;

class ProjectController extends Controller
{
    public function index() {

        $publishedNews = News::where('publication_status', 1)->orderBy('id', 'desc')->take(2)->get();
        $publishedCategories = Category::where('publication_status', 1)->get();

        return view('front.home.home', [
            'publishedNews' => $publishedNews,
            'publishedCategories' => $publishedCategories
         ]);
    }

    public function categoryNewsInfo($id) {
        $categoryByNewsId = DB::table ('news')
            ->join('categories', 'news.category_id', '=', 'categories.id')
            ->select('news.*', 'categories.category_name')
            ->where('news.id',$id)
            ->first();

        $newsById = News::find($id);
        $categoryNews = News::where('category_id', $newsById->category_id)->orderBy('id', 'desc')->take(8)->get();

        return view('front.category.category', [
            'newsById'=>$newsById,
            'categoryNews'=>$categoryNews,
            'categoryByNewsId'=>$categoryByNewsId
        ]);
    }
}
