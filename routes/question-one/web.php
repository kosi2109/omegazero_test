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

Route::name('question-one.')
    ->namespace('App\Http\Controllers\QuestionOne')
    ->group(function () {

        // Home Route Start ______

        Route::get('/', function () {
            return view('pages.question-one.home');
        })->name('home');

        // Home Route End ______

        // Login Route Start ____

        Route::prefix('auth')
            ->controller(AuthController::class)
            ->name('auth.')
            ->group(function () {
                Route::get('/login', 'login')->name('index')->middleware('guest');
                Route::post('/', 'store')->name('store')->middleware('guest');
                Route::post('/logout', 'logout')->name('logout')->middleware('auth');
            });

        // Login Route End ____

        // Dashboard Route Start ____

        Route::prefix('users')
            ->controller(UserController::class)
            ->name('users.')
            ->middleware('auth')
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/view/{user}', 'view')->name('view')->middleware('can:view_users');
                Route::get('create', 'create')->name('create')->middleware('can:create_users');
                Route::post('create', 'store')->name('store')->middleware('can:create_users');
                Route::get('edit/{user}', 'edit')->name('edit')->middleware('can:edit_users');
                Route::post('update/{user}', 'update')->name('update')->middleware('can:view_users');
                Route::get('destroy/{user}', 'delete')->name('delete')->middleware('can:delete_users');
                Route::delete('destroy/{user}', 'destroy')->name('destroy')->middleware('can:delete_users');
            });

        // Dashboard Route Start ____
    });
