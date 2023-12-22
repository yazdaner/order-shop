<?php

namespace Yazdan\MobileAuth\App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Yazdan\MobileAuth\App\Http\Requests\MobileAuthRequest;

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

    public function authCheck(MobileAuthRequest $request)
    {
        $mobile = $request->mobile;
        $user = User::where('mobile',$mobile)->first();

        if(!$user)
        {
            return redirect()->route('otp-login')->with([
                'mobile' => $mobile,
                'can_login_with_password' => false,
            ]);
        }
        if(!$user->password ||  $user->attempts_left <= 0 || $user->must_login_with_otp)
        {
            return redirect()->route('otp-login')->with('mobile',$mobile);
        }else{
            return redirect()->route('password-login')->with('mobile',$mobile);
        }
    }
}
