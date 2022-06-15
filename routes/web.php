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
    return view('layouts.main');
})->name('index');

// membuka halaman form user
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::get('/user/edit/{user:id}', [UserController::class, 'edit']);
// submit form user
Route::post('/user/create/store', [UserController::class, 'store'])->name('user.store');
Route::post('/user/edit/update/{user:id}', [UserController::class, 'update']);
//hapus
Route::get('/user/delete/{user:id}', [UserController::class, 'delete']);

Route::get('/post', [PostController::class, 'index'])->name('post.index');
Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
Route::get('/post/edit/{post:id}', [PostController::class, 'edit']);
Route::get('/post/{post:id}', [PostController::class, 'show']);
//submit post
Route::post('/post/create/store', [PostController::class, 'store'])->name('post.store');
Route::post('/post/edit/update/{post:id}', [PostController::class, 'update']);
//hapus
Route::get('/post/delete/{post:id}', [PostController::class, 'delete']);
