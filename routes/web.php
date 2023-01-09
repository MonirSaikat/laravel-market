<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {
  Route::get('/', [HomeController::class, 'index'])->name('pages.home');
  Route::get('/profile', [ProfileController::class, 'index'])->name('pages.profile');
  Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
  Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'post_login'])->name('auth.login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'post_register'])->name('auth.register');
Route::post('/logout', [AuthController::class, 'post_logout'])->name('auth.logout');
