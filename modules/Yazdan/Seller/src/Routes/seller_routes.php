<?php

use Illuminate\Support\Facades\Route;
use Yazdan\Seller\App\Http\Controllers\SellerController;

// Admin

Route::prefix('admin-panel/sellers')->name('admin.sellers.')->middleware([
    'auth',
    'verified'
])->group(function () {
    providerGetRoute('/',SellerController::class,'index','index');
    Route::delete('delete/{seller}',[SellerController::class,'destroy'])->name('destroy');

    Route::patch('/{seller}/accept',[SellerController::class,'accept'])->name('accept');
    Route::patch('/{seller}/reject',[SellerController::class,'reject'])->name('reject');


    Route::get('edit/{seller}',[SellerController::class,'edit'])->name('edit');
    Route::put('update/{seller}',[SellerController::class,'update'])->name('update');
});


// Front

Route::group([
    'middleware' => [
        'auth',
        'verified'
    ]
], function () {
    Route::get('/sellers', [SellerController::class, 'sellersForm'])->name('sellers');
    Route::post('/sellers', [SellerController::class, 'store'])->name('sellers.store');

});



// Home

Route::group([
    'middleware' => [
        'auth',
        'verified'
    ]
], function () {
    providerGetRoute('/seller/profile',SellerController::class,'profile','home.seller.profile');
    Route::patch('/seller/profile/update',[SellerController::class,'profileUpdate'])->name('seller.profile.update');

});

