<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function accountInfo() {

        $authorId = Session::get('authorId');
        return view('front.account.account', ['authorId'=>$authorId]);
    }

    public function newAuthorInfo(Request $request) {

        $this->validate($request, [
            'author_name' => 'required|regex:/^[\pL\s\-]+$/u',
            'author_email' => 'required|email|unique:authors,author_email',
            'author_password' => 'required',
        ]);

        $author = new Author();
        $author->author_name = $request->author_name;
        $author->author_username = $request->author_username;
        $author->author_email = $request->author_email;
        $author->author_password = bcrypt($request->author_password);
        $author->save();

        return redirect ('/account')->with('message', 'Your account is created successfully');
    }

    public function authorLogoutInfo() {

        Session::forget('authorId');
        Session::forget('authorName');

        return redirect ('/account');
    }

    public function authorloginCheck(Request $request) {
        $author = Author::where('author_email', $request->author_email)->first();

        if($author) {
            if(password_verify($request->author_password, $author->author_password)) {
                Session::put('authorId', $author->id);
                Session::put('authorName', $author->author_name);

                return redirect('/');
            } else {
                return redirect('/account')->with('message', 'Your password is not correct');
            }
        } else {
            return redirect('/account')->with('message', 'Your email is not correct');
        }
    }

    public function addAuthor() {

        return view('admin.author.add-author');
    }

    public function saveAuthorInfo(Request $request) {

        $newAuthor = new Author();
        $newAuthor->author_name = $request->author_name;
        $newAuthor->author_username = $request->author_username;
        $newAuthor->author_email = $request->author_email;
        $newAuthor->author_password = bcrypt($request->author_password);
        $newAuthor->save();


        return redirect('/author/add')->with('message', 'User info save successfully');
    }

    public function manageAuthorInfo() {

        $authors = Author::all();
        return view ('admin.author.manage-author', ['authors'=>$authors]);
    }

    public function editAuthorInfo($id){

        $authorById = Author::find($id);
        return view('admin.author.edit-author', ['authorById'=>$authorById]);
    }

    public function updateAuthorInfo(Request $request) {

        $newAuthor= Author::find($request->author_id);
        $newAuthor->author_username = $request->author_username;
        $newAuthor->author_email = $request->author_email;
        $newAuthor->author_password = bcrypt($request->author_password);
        $newAuthor->save();

        return redirect('/author/manage')->with('message', 'User info update successfully');
    }

    public function deleteAuthorInfo($id) {
        $author = Author::find($id);
        $author->delete();

        return redirect('/author/manage')->with('message', 'Author info delete successfully');
    }
}
