<?php

use Illuminate\Support\Facades\Route;
use Yazdan\Category\App\Http\Controllers\CategoryController;

Route::prefix('admin-panel')->name('admin.')->middleware([
    'auth',
    'verified'
])->group(function () {
    Route::resource('categories', CategoryController::class)->except([
        'create', 'show'
    ]);
});

Route::get('/categories/{category:slug}', [CategoryController::class, 'categoryShow'])->name('categories.show');
