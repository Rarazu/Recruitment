<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

// membuka halaman form user
Route::get('/user', [UserController::class, 'index']);

// submit form user
Route::post('/user/store', [UserController::class, 'store']);

Route::get('/post', [PostController::class, 'index']);

Route::post('/post/store', [PostController::class, 'store']);