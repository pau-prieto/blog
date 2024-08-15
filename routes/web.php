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
        Route::get('/dashboard', [AdminPostController::class, 'index'])->name('admin.dashboard');
        Route::resource('/posts', AdminPostController::class)->names([
            'index' => 'admin.posts.index',
            'create' => 'admin.posts.create',
            'store' => 'admin.posts.store',
            'show' => 'admin.posts.show',
            'edit' => 'admin.posts.edit',
            'update' => 'admin.posts.update',
            'destroy' => 'admin.posts.destroy',
        ]);
        Route::resource('/users', UserController::class);
        Route::get('/admin/users/{user}/delete', [UserController::class, 'delete'])->name('users.delete');
        Route::post('/posts/{post}/likes', [AdminPostController::class, 'like'])->name('admin.posts.likes');
        Route::post('/posts/{post}/unlikes', [AdminPostController::class, 'unlike'])->name('admin.posts.unlikes');
    });
});

// Author routes
Route::group(['middleware' => [AuthorMiddleware::class]], function () {
    Route::prefix('author')->group(function () {
        Route::get('/dashboard', [AuthorPostController::class, 'index'])->name('author.dashboard');
        Route::resource('/posts', AuthorPostController::class)->names([
            'index' => 'author.posts.index',
            'create' => 'author.posts.create',
            'store' => 'author.posts.store',
            'show' => 'author.posts.show',
            'edit' => 'author.posts.edit',
            'update' => 'author.posts.update',
            'destroy' => 'author.posts.destroy',
        ]);
        Route::post('/posts/{post}/likes', [AuthorPostController::class, 'like'])->name('author.posts.likes');
        Route::post('/posts/{post}/unlikes', [AuthorPostController::class, 'unlike'])->name('author.posts.unlikes');
    });
});

// Authentication Routes
Auth::routes();
