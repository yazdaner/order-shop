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
        $user = User::where('mobile',$request->mobile)->first();

        if(!$user){
            return redirect()->back()->withErrors([
                'mobile' => 'شماره مورد نظر یافت نشد'
            ]);
        }
        dd($user);
    }
}
