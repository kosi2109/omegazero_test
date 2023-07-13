<?php

namespace App\Http\Controllers\QuestionOne;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /** @var $view */
    private $view = 'pages.question-one.roles.';
    
    /** @var $route */
    private $route = 'question-one.roles';

    public function index() {
        return view($this->view . 'index');
    }
}
