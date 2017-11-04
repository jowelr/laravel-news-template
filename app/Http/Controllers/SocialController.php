<?php

namespace App\Http\Controllers;

use App\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
        public function addSocialLinks() {

            return view('admin.sitting.social.add-social');
        }

        public function saveSocialLinks(Request $request) {

            $socials = new Social();
            $socials->facebook_ = $request->facebook_;
            $socials->twitter = $request->twitter;
            $socials->google_plus = $request->google_plus;
            $socials->pinterest = $request->pinterest;
            $socials->instagram = $request->instagram;
            $socials->linkedin = $request->linkedin;
            $socials->youtube = $request->youtube;
            $socials->save();

            return redirect('/add-social')->with('message', 'Socail links save successfully');
        }
}
