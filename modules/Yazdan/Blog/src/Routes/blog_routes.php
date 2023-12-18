<?php

use Illuminate\Support\Facades\Route;
use Yazdan\Blog\App\Http\Controllers\BlogController;

Route::prefix('admin-panel')->name('admin.')->middleware([
    'auth',
    'verified'
])->group(function () {
    Route::resource('blogs', BlogController::class);
});

Route::get('/blogs', [BlogController::class, 'blogs'])->name('blogs');
Route::get('/blogs/{blog:slug}', [BlogController::class, 'blogShow'])->name('blogs.show');
