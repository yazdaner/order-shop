<?php

use Ghasedak\GhasedakApi;
use Kavenegar\KavenegarApi;
use Yazdan\User\App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Yazdan\MobileAuth\Notifications\OtpSms;
use Yazdan\RolePermissions\Repositories\RoleRepository;
use Yazdan\Seller\App\Models\Seller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/ad', function () {
    $user = User::factory()->create();
    $user->assignRole(RoleRepository::ROLE_SUPER_ADMIN);
    auth()->loginUsingId($user->id);
    return back();
});
Route::get('/a', function () {
    Auth::loginUsingId(1, TRUE);
    return back();
});
Route::get('/z', function () {
    dd(auth()->check());
});
Route::get('/xx', function () {
    dd(auth()->user());
});


Route::get('/v', function () {
    $user = User::find(1);
    $user->notify(new OtpSms(1234));
});
Route::get('/hhh', function () {
    Seller::factory()->create();
});
