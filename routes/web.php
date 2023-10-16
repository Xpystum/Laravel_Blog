<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Post\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('register', [RegisterController::class, 'index'])->name('register');

Route::post('register', [RegisterController::class, 'store'])->name('register.store');


Route::get('login', [LoginController::class, 'index'])->name('login');

Route::post('login', [LoginController::class, 'store'])->name('login.store');


Route::get('blog', [BlogController::class, 'index'])->name('blog');

Route::get('blog/{post}', [BlogController::class, 'show'])->name('blog.show');

Route::post('blog/{post}/like', [BlogController::class, 'like'])->name('blog.like');





