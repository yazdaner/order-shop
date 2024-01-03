<?php

use Illuminate\Support\Facades\Route;
use Yazdan\Seller\App\Http\Controllers\SellerController;
use Yazdan\Seller\App\Http\Controllers\SellerProfileController;

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
// profile
Route::group([
    'middleware' => [
        'auth',
        'verified'
    ]
], function () {
    providerGetRoute('/seller/profile',SellerProfileController::class,'profile','home.seller.profile');
    Route::patch('/seller/profile/update',[SellerProfileController::class,'profileUpdate'])->name('seller.profile.update');

     // gallery
     Route::get('seller/gallery',[SellerProfileController::class,'gallery'])->name('home.sellers.gallery');
     Route::post('seller/{seller}/addImageGallery',[SellerProfileController::class,'addImagesGallery'])->name('home.sellers.addImagesGallery');
     Route::get('galleries/{gallery}/delete',[SellerProfileController::class,'deleteImageGallery'])->name('home.sellers.galleryDelete');

});


// info
Route::group([
    'middleware' => [
        'auth',
        'verified'
    ]
], function () {
    providerGetRoute('/seller/info',SellerProfileController::class,'info','home.seller.info');

});
