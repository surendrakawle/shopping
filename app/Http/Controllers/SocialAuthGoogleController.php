<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Exception;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;


class SocialAuthGoogleController extends Controller
{
    public function redirect()
    {
       return Socialite::driver('google')->redirect();
    }
    public function callback(){

            $googleUser= Socialite::driver('google')->user();
            $exituser = User::where('email',$googleUser->email)->first();
            if($exituser){
                Auth::loginUsingId($exituser->id,true);
            }else{
                    $user=new User;
                    $user->name=$googleUser->name;
                    $user->email=$googleUser->email;
                    $user->google_id=$googleUser->id;
                    $user->password=md5('admin');
                    $user->save();
                    Auth::loginUsingId($user->id,true);
            }
            return redirect()->to('/');


    }
}
