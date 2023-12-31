<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Post\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TestController;
use App\Http\Middleware\logMiddleware;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function (){

    Route::get('/register', [RegisterController::class, 'index'])->name('register');

    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');


    Route::get('/login', [LoginController::class, 'index'])->name('login');

    Route::post('/login', [LoginController::class, 'store'])->name('login.store');

});


Route::view('/', 'home.index')->name('home');

Route::redirect('/home', '/')->name('home.redirect');



Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('/blog/{post}', [BlogController::class, 'show'])->name('blog.show');

Route::post('/blog/{post}/like', [BlogController::class, 'like'])->name('blog.like');





