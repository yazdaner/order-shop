<?php

use Illuminate\Support\Facades\Route;
use Yazdan\Product\App\Http\Controllers\ProductController;
use Yazdan\Product\App\Http\Controllers\VariationController;
use Yazdan\Product\App\Http\Controllers\HomeProductController;
use Yazdan\Product\App\Http\Controllers\HomeVariationController;

Route::prefix('admin-panel')->name('admin.')->middleware([
    'auth',
    'verified'
])->group(function () {

    // products
    Route::resource('products', ProductController::class);

    // gallery
    Route::get('products/{product}/gallery',[ProductController::class,'gallery'])->name('products.gallery');
    Route::post('products/{product}/addImageGallery',[ProductController::class,'addImagesGallery'])->name('products.addImagesGallery');
    Route::get('galleries/{gallery}/delete',[ProductController::class,'deleteImageGallery'])->name('gallery.delete');

    // variation

    Route::get('variations/{product}',[VariationController::class,'index'])->name('variations.index');
    Route::post('variations/store',[VariationController::class,'store'])->name('variations.store');
    Route::get('variations/{variation}/edit',[VariationController::class,'edit'])->name('variations.edit');
    Route::put('variations/{variation}/update',[VariationController::class,'update'])->name('variations.update');
    Route::delete('variations/{variation}/destroy',[VariationController::class,'destroy'])->name('variations.destroy');

});

// Front
Route::get('/products', [ProductController::class, 'products'])->name('products');
Route::get('/products/{product:slug}', [ProductController::class, 'productShow'])->name('products.show');



// Home
Route::prefix('home')->name('home.')->middleware([
    'auth',
    'verified'
])->group(function () {
    providerGetRoute('/products',HomeProductController::class,'sellerProducts','products');
    Route::get('products/create',[HomeProductController::class,'create'])->name('products.create');
    Route::post('products/store',[HomeProductController::class,'store'])->name('products.store');


    // variation

    Route::get('variations/{product}',[HomeVariationController::class,'index'])->name('variations.index');
    Route::post('variations/store',[HomeVariationController::class,'store'])->name('variations.store');
    Route::get('variations/{variation}/edit',[HomeVariationController::class,'edit'])->name('variations.edit');
    Route::put('variations/{variation}/update',[HomeVariationController::class,'update'])->name('variations.update');
    Route::delete('variations/{variation}/destroy',[HomeVariationController::class,'destroy'])->name('variations.destroy');
});

