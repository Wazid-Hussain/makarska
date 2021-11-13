<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserProfileController extends Controller
{
    public function create()
    {
        $user = Auth::user();
        return view('user.profile')->with('user', $user);
    }

        public function update(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->website = $request->website;
        $user->notes = $request->notes;
        $user->facebookID = $request->facebook;
        $user->twitterID = $request->twitter;
        $user->vkontakteID = $request->vkontakte;
        $user->whatsappID = $request->whatsapp;

        $user->update();
        return redirect('/profile');
    }
    public function addImage(Request $request)
    {
        $imagename = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('images', $imagename, 'public');

        $user = User::find(Auth::user()->id);    
        $user->image = $imagename;
        $user->update();
        
        return redirect('/profile');
    }


}
