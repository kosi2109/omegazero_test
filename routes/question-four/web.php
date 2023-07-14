<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::name('question-four.')
    ->namespace('App\Http\Controllers\QuestionFour')
    ->controller('HomeController')
    ->group(function () {
        Route::get('/', 'index')->name('home');
        Route::get('/facebook', 'redirectFacebook')->name('facebook');
        Route::get('/logout', 'logout')->name('logout');
        Route::any('/callback', 'facebookCallback')->name('callback');
    });
