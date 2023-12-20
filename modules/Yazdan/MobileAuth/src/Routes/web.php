<?php

use Illuminate\Support\Facades\Route;

Route::get('/mobile-auth',function() {
    echo 'mobile auth';
})->name('mobile-auth');
