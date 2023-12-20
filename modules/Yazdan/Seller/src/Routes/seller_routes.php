<?php

use Illuminate\Support\Facades\Route;
use Yazdan\Seller\App\Http\Controllers\SellerController;

Route::prefix('admin-panel/sellers')->name('admin.sellers.')->middleware([
    'auth',
    'verified'
])->group(function () {
    providerGetRoute('/',SellerController::class,'index','index');
    Route::delete('delete/{seller}',[SellerController::class,'destroy'])->name('delete');
});
