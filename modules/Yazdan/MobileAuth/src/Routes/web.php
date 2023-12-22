<?php

use Illuminate\Support\Facades\Route;
use Yazdan\MobileAuth\App\Http\Controllers\MobileAuthController;

Route::get('/login',[MobileAuthController::class,'login'])->name('login');
Route::get('/otp-login',[MobileAuthController::class,'otp'])->name('otp-login');
Route::get('/password-login',[MobileAuthController::class,'password'])->name('password-login');

Route::post('/authCheck',[MobileAuthController::class,'authCheck'])->name('authCheck');
