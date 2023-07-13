<?php

namespace App\Http\Controllers\QuestionOne;

use App\Http\Controllers\Controller;
use App\Http\Requests\QuestionOne\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /** @var $view */
    private $view = 'pages.question-one.';
    
    /** @var $route */
    private $route = 'question-one.login';
    
    /**
     * Login View Controller For Question One
     */
    public function login() {
        return view($this->view . 'login');
    }

    /**
     * Login Store Controller For Question One
     */
    public function store(
        LoginRequest $request
    ) {

        if (!Auth::attempt($request->only(['email', 'password']))) {

            return redirect()->back()->with('auth_fail', "Wrong User Credential.");
        }

        return redirect()->route($this->view . 'dashboard.index');
    }
}
