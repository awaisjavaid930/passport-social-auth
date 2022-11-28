<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;


class SocialController extends Controller
{
    
    public function index()
    {
        return Socialite::driver('github')->redirect();
    }

    public function google()
    {
        return Socialite::driver('google')->redirect();
    }


    public function callBackGoogle(Request $request)
    {
        // $user = Socialite::driver('github')->user();
        $user = Socialite::driver('google')->user();
        dd($user);
    }
}
