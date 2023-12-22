<?php

namespace Yazdan\MobileAuth\App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class MobileAuthController extends Controller
{
    public function login()
    {
        return view('MobileAuth::front.login');
    }

    public function otp()
    {
        return view('MobileAuth::front.otp');
    }

    public function password()
    {
        return view('MobileAuth::front.password');
    }

    public function authCheck(Request $request)
    {
        $user = User::where('mobile',$request->mobile)->firstOrFail();
        dd($user);
    }
}
