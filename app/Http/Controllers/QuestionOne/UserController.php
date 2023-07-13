<?php

namespace App\Http\Controllers\QuestionOne;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /** @var $view */
    private $view = 'pages.question-one.users.';
    
    /** @var $route */
    private $route = 'question-one.users';

    public function index() {
        return view($this->view . 'index');
    }
}
