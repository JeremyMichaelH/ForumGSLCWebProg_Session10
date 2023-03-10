<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name(name: 'login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);

Route::get('login/github', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGithub'])->name(name: 'login.github');
Route::get('login/github/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGithubCallback']);
