<?php

use Illuminate\Support\Facades\Route;

Route::name('question-four.')
    ->namespace('App\Http\Controllers\QuestionFour')
    ->controller('HomeController')
    ->group(function () {
        Route::get('/', 'index')->name('home');
        Route::get('/facebook', 'redirectFacebook')->name('facebook');
        Route::get('/logout', 'logout')->name('logout');
        Route::any('/callback', 'facebookCallback')->name('callback');
    });
