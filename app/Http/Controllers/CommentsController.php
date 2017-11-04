<?php

namespace App\Http\Controllers;

use App\Comment;

use App\News;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function postCommentInfo(Request $request, $id) {

        $comments = new Comment();
        $comments->comment_name = $request->comment_name;
        $comments->comment_id = $request->comment_id;
        $comments->comment_email = $request->comment_email;
        $comments->comment_website = $request->comment_website;
        $comments->comment_message = $request->comment_message;
        $comments->save();

        return redirect ('/single-news/'.$id )->with('message', 'Your comment is save successfully.');
    }

    public function manageCommentInfo() {


        $comments = Comment::paginate(5);
        return view('admin.comment.manage-comments', [
            'comments'=>$comments,
        ]);
    }

    public function deleteCommentInfo($id) {

        $comment = Comment::find($id);
        $comment->delete();

        return redirect('/comment/manage')->with('message', 'Comment delete successfully');
    }
}
