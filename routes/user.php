<?php

use App\Http\Controllers\User\PostController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'IsActiveUser'])->controller(PostController::class)->prefix('user')->group(function(){

    // CRUD (create, read, update, delete)
    Route::redirect('/', '/user/posts')->name('user');

    Route::get('/posts', 'index')->name('user.posts');

    Route::get('/posts/create', 'create')->name('user.posts.create');

    Route::post('/posts', 'store')->name('user.posts.store');

    Route::get('/posts/{post}', 'show')->name('user.posts.show');

    Route::get('/posts/{post}/edit', 'edit')->name('user.posts.edit');

    Route::put('/posts/{post}','update')->name('user.posts.update');

    Route::delete('/posts/{post}', 'delete')->name('user.posts.delete');

    Route::put('/posts/{post}/like',  'like')->name('user.posts.like');

});