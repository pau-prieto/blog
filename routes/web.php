<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Author\PostController as AuthorPostController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\AuthorMiddleware;

Route::get('/', function () {
    return view('welcome');
});

// Admin routes
Route::group(['middleware' => [AdminMiddleware::class]], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.dashboard');
        Route::resource('/posts', AdminPostController::class)->names([
            'index' => 'admin.posts.index',
            'create' => 'admin.posts.create',
            'store' => 'admin.posts.store',
            'show' => 'admin.posts.show',
            'edit' => 'admin.posts.edit',
            'update' => 'admin.posts.update',
            'destroy' => 'admin.posts.destroy',
        ]);
        Route::get('/posts/{post}/delete', [AdminPostController::class, 'delete'])->name('admin.posts.delete');
        Route::resource('/users', UserController::class);
        Route::get('/users/{user}/delete', [UserController::class, 'delete'])->name('users.delete');
    });
});

// Author routes
Route::group(['middleware' => [AuthorMiddleware::class]], function () {
    Route::prefix('author')->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('author.dashboard');
        Route::resource('/posts', AuthorPostController::class)->names([
            'index' => 'author.posts.index',
            'create' => 'author.posts.create',
            'store' => 'author.posts.store',
            'show' => 'author.posts.show',
            'edit' => 'author.posts.edit',
            'update' => 'author.posts.update',
            'destroy' => 'author.posts.destroy',
        ]);
        Route::get('/posts/{post}/delete', [AuthorPostController::class, 'delete'])->name('author.posts.delete');
    });
});

// Authentication Routes
Auth::routes();
