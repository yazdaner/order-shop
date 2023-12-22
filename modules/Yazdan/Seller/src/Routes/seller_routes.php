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


// Home

Route::group([
    'middleware' => [
        'auth',
        'verified'
    ]
], function () {
    providerGetRoute('/sellers',SellerController::class,'sellersForm','sellers');
    // Route::post('/sellers', [SellerController::class, 'store'])->name('sellers.store');
    // Route::put('/sellerses/{sellers}', [SellerController::class, 'update'])->name('sellers.update');
    // Route::get('/get-province-cities-list', [SellerController::class, 'getProvinceCitiesList']);

});

