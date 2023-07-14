<?php

namespace App\Http\Controllers\QuestionTwo;

use App\Http\Controllers\Controller;
use App\Http\Requests\QuestionTwo\MailSendRequest;
use App\Mail\UserNotifyMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Home Page For Question Two
     */
    public function index()
    {
        return view('pages.question-two.home');
    }

    /**
     * Mail Send To User Controller
     * 
     * @param MailSendRequest $request
     */
    public function mailSend(MailSendRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        Mail::to($user)->queue(new UserNotifyMail($request->all()));

        return redirect()->back()->with('success', "Mail is sending in the background.");
    }
}
