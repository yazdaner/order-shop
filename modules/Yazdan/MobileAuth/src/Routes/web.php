<?php

use Illuminate\Support\Facades\Route;
use Yazdan\MobileAuth\App\Http\Controllers\MobileAuthController;



Route::group([
    'middleware' => [
        'guest'
    ],
],function(){


Route::get('/login',[MobileAuthController::class,'login'])->name('login');
Route::post('/authCheck',[MobileAuthController::class,'authCheck'])->name('authCheck');

Route::get('/password-login',[MobileAuthController::class,'password'])->name('password-login');
Route::post('/password-check',[MobileAuthController::class,'passwordCheck'])->name('password-check');

Route::get('/otp-login',[MobileAuthController::class,'otp'])->name('otp-login');
Route::post('/otp-check',[MobileAuthController::class,'otpCheck'])->name('otp-check');


});

Route::get('logout', [MobileAuthController::class,'logout'])->middleware(['auth'])->name('logout');

