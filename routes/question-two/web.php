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

Route::name('question-two.')
    ->namespace('App\Http\Controllers\QuestionTwo')
    ->controller('HomeController')
    ->group(function () {

        Route::get('/', 'index')->name('home');
        Route::post('/mail-send', 'mailSend')->name('mail-send');
    });
