<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
   public function addContactInfo() {

       return view('front.contact.contact-us');
   }

   public function submitContactInfo(Request $request) {

       $contact = new Contact();
       $contact->fname = $request->fname;
       $contact->lname = $request->lname;
       $contact->email = $request->email;
       $contact->phone = $request->phone;
       $contact->message = $request->message;
       $contact->save();

       return redirect('/contact-us')->with('message','Contact message sent successfully');
   }

    public function manageContactInfo() {

        $contacts = Contact::all();
        return view('admin.contact.manage-contact', [
            'contacts'=>$contacts
        ]);
    }

    public function deleteContactInfo($id){

       $contact = Contact::find($id);
       $contact->delete();

       return redirect('/manage-contact-us')->with('message', 'Message delete successfully');

    }
}
