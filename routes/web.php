<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\SignUpController;
use \App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
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

Route::redirect('/', '/posts')->name('home');

Route::get('/sign-up', [SignUpController::class, 'create'])->name('signup');
Route::post('/sign-up', [SignUpController::class, 'store']);
Route::get('/sign-in', [LoginController::class, 'create'])->name('login');
Route::post('/sign-in', [LoginController::class, 'store']);
Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');

Route::get('/posts', [PostController::class, 'index'])->name('posts');
