<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\News;
use Illuminate\Http\Request;
use DB;

class NewsController extends Controller
{
    public function addNewsInfo() {

        $publishedCategories = Category::where('publication_status', 1)->get();
        return view('admin.news.add-news', [
            'publishedCategories' => $publishedCategories
        ]);
    }

    public function saveNewsInfo(Request $request) {

        $newsImage = $request->file('news_image');
        $imageName = $newsImage->getClientOriginalName();
        $directory = 'nes-image/';
        $newsImage -> move($directory, $imageName);
        $imageUrl = $directory.$imageName;

        $news = new News();
        $news->news_title = $request->news_title;
        $news->category_id = $request->category_id;
        $news->news_description = $request->news_description;
        $news->news_image = $imageUrl;
        $news->publication_status = $request->publication_status;
        $news->save();

        return redirect ('/news/add')->with ('message', 'News info save successfully');
    }

    public function manageNewsInfo() {

//        $allNewses = News::all();

        $allNewses= DB::table('news')
            ->join('categories', 'news.category_id', '=', 'categories.id')
            ->select('news.*', 'categories.category_name')
            ->paginate(7);



        return view('admin.news.manage-news', ['allNewses' => $allNewses]);
    }

    public function viewNewsInfo ($id) {
       $newsById = News::find($id);
       $newsById = DB::table ('news')
            ->join('categories', 'news.category_id', '=', 'categories.id')
            ->select('news.*', 'categories.category_name')
           ->where('news.id',$id)
            ->first();

        return view('admin.news.view-news', ['newsById' =>$newsById]);
    }

    public function unpublishedNewsInfo($id) {

        $newsById = News::find($id);
        $newsById->publication_status = 0;
        $newsById->save();

        return redirect('/news/manage')->with ('message', 'News info unpublished successfully');
    }

    public function publishedNewsInfo($id) {

        $newsById = News::find($id);
        $newsById->publication_status = 1;
        $newsById->save();

        return redirect ('/news/manage')->with ('message', 'News info published successfully');
    }

    public function editNewsInfo($id) {

        $newsById = News::find($id);
        $publishedCategories = Category::where('publication_status', 1)->get();
        return view('admin.news.edit-news', [
            'newsById' => $newsById,
            'publishedCategories'=>$publishedCategories
        ]);
    }

    public function updateNewsInfo(Request $request) {

        $newsImage = $request->file('news_image');
        if($newsImage) {
            $newsById = News::find($request->news_id);

            $imageName = $newsImage->getClientOriginalName();
            $directory = 'nes-image/';
            $newsImage -> move($directory, $imageName);
            $imageUrl = $directory.$imageName;

            $newsById->news_title = $request->news_title;
            $newsById->category_id = $request->category_id;
            $newsById->news_description = $request->news_description;
            $newsById->news_image = $imageUrl;
            $newsById->publication_status = $request->publication_status;
            $newsById->save();

        return redirect('/news/manage')->with('message', 'News info update successfully');
        }
        else {
            $newsById = News::find($request->news_id);
            $newsById->news_title = $request->news_title;
            $newsById->category_id = $request->category_id;
            $newsById->news_description = $request->news_description;
            $newsById->publication_status = $request->publication_status;
            $newsById->save();

        }
    }
    public function deleteNewsInfo($id) {

        $newsById = News::find($id);
        $newsById->delete();

        return redirect('/news/manage')->with('message', 'News info delete successfully');
    }

    public function singleNewsInfo($id) {



        return view('front.news.single-news');
    }

}
