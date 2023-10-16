<?php

use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;
// user
Route::controller(PostController::class)->prefix('admin')->group(function(){

    // CRUD (create, read, update, delete)
    Route::get('/posts', 'index')->name('admin.posts');

    Route::get('/posts/create', 'create')->name('admin.posts.create');

    Route::post('/posts', 'store')->name('admin.posts.store');

    Route::get('/posts/{post}', 'show')->name('admin.posts.show');

    Route::get('/posts/{post}/edit', 'edit')->name('admin.posts.edit');

    Route::put('/posts/{post}', 'update')->name('admin.posts.update');

    Route::delete('/posts/{post}', 'delete')->name('admin.posts.delete');

    Route::put('/posts/{post}/like', 'like')->name('admin.posts.like');

});
