<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Validator;
use Socialite;
use Exception;
use Auth;

class SocialLoginController extends Controller
{
    public function facebook(){
        return Socialite::driver('facebook')->redirect();
    }

    
     public function facebookRedirect()
    {
        try {
    
            $user = Socialite::driver('facebook')->user();

            // dd($user->avatar_original);
            
            $facebookId = User::where('facebookID', $user->id)->first();
     
            if($facebookId){
                Auth::login($facebookId);
                return redirect('/dashboard');
            }else{
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'facebookID' => $user->id,
                    'password' => encrypt('john123'),
                    'image' =>  $user->getAvatar()
                ]);
    
                Auth::login($createUser);
                return redirect('/dashboard');
            }
    
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }
}
