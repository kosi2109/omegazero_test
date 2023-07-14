<?php

use Illuminate\Support\Facades\Route;

Route::name('question-three.')
    ->namespace('App\Http\Controllers\QuestionThree')
    ->controller('HomeController')
    ->group(function () {
        Route::get('/', 'index')->name('home');
    });
