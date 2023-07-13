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

        Route::get('/', function() {
            return view('pages.question-one.home');
        })->name('home');

        // Home Route End ______
        
        // Login Route Start ____
        
        Route::prefix('login')
            ->controller(LoginController::class)
            ->name('login.')
            ->middleware('guest')
            ->group(function () {
                Route::get('/', 'login')->name('index');
                Route::post('/', 'store')->name('store');
            });

        // Login Route End ____

        // Dashboard Route Start ____

        Route::prefix('users')
            ->controller(UserController::class)
            ->name('users.')
            ->middleware('auth')
            ->group(function () {
                Route::get('/', 'index')->name('index');
                // Route::post('/', 'store')->name('store');
        });

        // Dashboard Route Start ____

        // Roles Route Start ____

        Route::prefix('roles')
            ->controller(RoleController::class)
            ->name('roles.')
            ->middleware('auth')
            ->group(function () {
                Route::get('/', 'index')->name('index');
                // Route::post('/', 'store')->name('store');
        });

        // Roles Route Start ____
        
        // Permissions Route Start ____

        Route::prefix('permissions')
            ->controller(PermissionController::class)
            ->name('permissions.')
            ->middleware('auth')
            ->group(function () {
                Route::get('/', 'index')->name('index');
                // Route::post('/', 'store')->name('store');
        });

        // Permissions Route Start ____
        
    });
