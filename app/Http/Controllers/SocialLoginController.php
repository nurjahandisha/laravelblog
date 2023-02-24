<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialLoginController extends Controller
{
    public function googlelogin(){
        return Socialite::driver('google')->redirect();
    }


    public function googleredirect(){
        $user = Socialite::driver('google')->user();
    }
}
