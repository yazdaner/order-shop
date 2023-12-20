<?php

use Illuminate\Support\Facades\Route;
use Yazdan\Seller\App\Http\Controllers\SellerController;

Route::prefix('admin-panel')->name('admin.')->middleware([
    'auth',
    'verified'
])->group(function () {
    Route::resource('sellers', SellerController::class)->except([
        'index'
    ]);
    providerGetRoute('/sellers',SellerController::class,'index','sellers.index');
});
