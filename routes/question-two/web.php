<?php

use Illuminate\Support\Facades\Route;

Route::name('question-two.')
    ->namespace('App\Http\Controllers\QuestionTwo')
    ->controller('HomeController')
    ->group(function () {
        Route::get('/', 'index')->name('home');
        Route::post('/mail-send', 'mailSend')->name('mail-send');
    });
