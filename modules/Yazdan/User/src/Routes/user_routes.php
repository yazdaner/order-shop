<?php

use Illuminate\Support\Facades\Route;
use Yazdan\User\App\Http\Controllers\Auth\ForgotPasswordController;
use Yazdan\User\App\Http\Controllers\Auth\LoginController;
use Yazdan\User\App\Http\Controllers\Auth\RegisterController;
use Yazdan\User\App\Http\Controllers\Auth\ResetPasswordController;
use Yazdan\User\App\Http\Controllers\Auth\VerificationController;
use Yazdan\User\App\Http\Controllers\UserController;


Route::prefix('admin-panel')->name('admin.')->middleware([
    'auth',
    'verified'
])->group(function () {

    // User Routes

    Route::resource('users', UserController::class);
    Route::post('users/{user}/add/role', [UserController::class, 'addRole'])->name('users.role');
    Route::delete('users/{user}/remove/{role}', [UserController::class, 'removeRole'])->name('users.removeRole');
    Route::patch('users/{user}/manualVerify', [UserController::class, 'manualVerify'])->name('users.manualVerify');

});



// Home
Route::group([
    'middleware' => [
        'auth',
        'verified'
    ]
], function () {

    // Update User's Photo
    Route::post('/users/updatePhoto', [UserController::class, 'updatePhoto'])->name('users.updatePhoto');

    // Profile
    providerGetRoute('/users/profile',UserController::class,'profile','users.profile');
    Route::patch('/users/profile', [UserController::class, 'updateProfile'])->name('users.profile');

});


// Verification

Route::get('/email/verify', [VerificationController::class, 'show'])->name('verification.notice');
Route::post('/email/verify', [VerificationController::class, 'verify'])->name('verification.verify');

Route::post('/email/resend', [VerificationController::class, 'resend'])->name('verification.resend');

// login

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');

// logout

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/logout', function(){
auth()->logout();
return back();
})->name('logout');

// Register

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

// Reset Password
Route::get('/password/reset/request', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::get('/password/email', [ForgotPasswordController::class, 'sendVerifyCodeResetPassword'])->name('password.sendVerifyCode');

Route::post('/password/reset/verify', [ForgotPasswordController::class, 'checkVerifyCodeResetPassword'])
    ->name('password.checkVerifyCode')
    ->middleware('throttle:5,1');

Route::get('/password/update', [ResetPasswordController::class, 'showResetForm'])
    ->name('password.showResetForm')
    ->middleware('auth');

Route::post('/password/update', [ResetPasswordController::class, 'update'])->name('password.update');


Route::get('/password/resend/{email}', [ForgotPasswordController::class, 'resend'])->name('password.sendVerifyCode.resend');

