<?php

namespace App\Http\Controllers\QuestionFour;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Laravel\Socialite\Facades\Socialite;

class HomeController extends Controller
{
    /**
     * Home Page For Question Four
     */
    public function index()
    {
        return view('pages.question-four.home');
    }

    /**
     * Redirect To Facebook For Login 
     */
    public function redirectFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Catch Callback from Facebook
     */
    public function facebookCallback()
    {
        $social = Socialite::driver('facebook')->user();

        // Call to Facebook Graph Api using access token 
        $res = Http::get(
            'https://graph.facebook.com/v17.0/me',
            [
                'access_token' => $social->token,
                'fields' => 'id,name,picture'
            ]
        );

        if ($res->failed()) {
            return redirect()->back()->with('error', 'Something went wrong');
        }

        $user = $res->object();

        $finduser = User::firstOrCreate(
            [
                'facebook_id' => $user->id,
            ],
            [
                'name' => $user->name,
                'avatar' => $user->picture->data->url,
            ]
        );

        auth()->login($finduser);

        return redirect()->route('question-four.home');
    }

    /**
     * Logout
     */
    public function logout()
    {
        auth()->logout();

        return redirect()->route('question-four.home');
    }
}
