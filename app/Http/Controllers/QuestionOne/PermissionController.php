<?php

namespace App\Http\Controllers\QuestionOne;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /** @var $view */
    private $view = 'pages.question-one.permissions.';
    
    /** @var $route */
    private $route = 'question-one.permissions';

    public function index() {
        return view($this->view . 'index');
    }
}
