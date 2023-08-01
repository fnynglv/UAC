<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ThumbController;
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

Route::get('/home', function () {
    return view('home');
});

Route::get('/register', [RegisterController::class, 'registerForm']);
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'loginForm']);
Route::post('/login', [LoginController::class, 'login']);

Route::get('/logout', [LoginController::class, 'logout']);

// Route::get('/thumb', [ThumbController::class, 'thumb']);
Route::post('/thumb', [ThumbController::class, 'thumb']);

Route::get('/communicate', function () {
    return view('communicate');
});

Route::get('/wishlist', function () {
    return view('wishlist');
});
