<?php

use Illuminate\Support\Facades\Route;
use Yazdan\MobileAuth\App\Controllers\MobileAuthController;

Route::get('/mobile-auth',[MobileAuthController::class,'test'])->name('mobile-auth');
