<?php

use Ghasedak\GhasedakApi;
use Kavenegar\KavenegarApi;
use Yazdan\User\App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Yazdan\MobileAuth\Notifications\OtpSms;
use Yazdan\RolePermissions\Repositories\RoleRepository;

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
Route::get('/ee', function () {
    $sender = env('KAVENEGAR_SENDER');
    $receptor = "09368276505";
    $message = "1234";
    $api = new KavenegarApi(env('KAVENEGAR_API_KEY'));
    $api->Send($sender,$receptor,$message);

});

Route::get('/d', function () {
    // $response = Http::withHeader('$API','ZUNDIpNCPQrQJP6vtcyaqAeriwA=')->post('https://panel.spotplayer.ir/license/edit/',[
    //     "test" => true,
    //     "course" => ["654344fc93423d0ad025033f"],
    //     "name" => "customer",
    //     "watermark" =>  ['texts' => [['text'=>'09121112266']]]
    //     ]);
    // dd($response->json());
    // Http::withUrlParameters([
    //     'endpoint' => 'http://ippanel.com:8080',
    //     'apikey' => 'B6P9rgn8r_O74GEGTnm0UViP8oaOAT8C5s3rXSrlzpU=',
    //     'pid' => 'lxtj19319bawgz4',
    //     'fnum' => '3000505',
    //     'tnum' => '09368276505',
    //     'p1' => 'code',
    //     'v2' => '1234',
    // ])->get('{+endpoint}/{page}&{version}&{topic}&{topic}&{topic}&{topic}');

    // $response = Http::get('http://ippanel.com:8080', [
    //     'apikey' => 'B6P9rgn8r_O74GEGTnm0UViP8oaOAT8C5s3rXSrlzpU=',
    //     'pid' => 'lxtj19319bawgz4',
    //     'fnum' => '3000505',
    //     'tnum' => '09368276505',
    //     'p1' => 'code',
    //     'v2' => '1234',
    // ]);
    // dd($response);
    // $response = Http::get('http://ippanel.com:8080', [
    //     'apikey' => 'B6P9rgn8r_O74GEGTnm0UViP8oaOAT8C5s3rXSrlzpU=',
    //     'pid' => '7duic3llh7sovjz',
    //     'fnum' => '3000505',
    //     'tnum' => '09368276505',
    //     'p1' => 'amount',
    //     'v2' => '1234',
    // ]);
    // dd($response);


});
Route::get('/test', function () {
    $api = new GhasedakApi(env('GHASEDAK_API_KEY'));
    $api->Verify(
        "09368276505",
        "test",
        "1234"
    );
});


Route::get('/v', function () {
    $user = User::find(1);
    $user->notify(new OtpSms(1234));
});

