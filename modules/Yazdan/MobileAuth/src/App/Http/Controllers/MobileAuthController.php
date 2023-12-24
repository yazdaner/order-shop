<?php

namespace Yazdan\MobileAuth\App\Http\Controllers;

use Yazdan\User\App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Yazdan\MobileAuth\App\Models\Otp;
use Yazdan\MobileAuth\App\Http\Requests\OtpCheckRequest;
use Yazdan\MobileAuth\App\Http\Requests\MobileAuthRequest;
use Yazdan\MobileAuth\App\Http\Requests\PasswordCheckRequest;

class MobileAuthController extends Controller
{
    public function login()
    {
        return view('MobileAuth::front.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with([
            'is_logged_out' => true
        ]);
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

    public function password()
    {
        return view('MobileAuth::front.password');
    }

    public function passwordCheck(PasswordCheckRequest $request)
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

        if (!$user->password || $user->attempts_left <= 0 || $user->most_login_otp)
        return redirect()->route('otp-login')->with([
            'mobile'                             => $mobile,
            'is_redirected_from_password_login' => true
        ]);

        if(Hash::check($request->password,$user->password)){
            Auth::loginUsingId($user->id);
            $user->update([
                'attempts_left'       => 3,
                'must_login_with_otp' => false
            ]);
            return redirect()->route('home')
            ->with(['welcome_message' => true]);
        }
         //password is wrong
         $user->decrement('attempts_left', 1);
         return redirect()->back()
         ->withInput(['mobile' => $mobile])
         ->withErrors(['password' => 'گذرواژه شما اشتباه است!']);
    }

    public function otp()
    {
        if(request()->mobile != []){
            session()->put('mobile',request()->mobile);
        }

        $mobile = session()->get('mobile');
        if(!$mobile){
            return redirect()->route('login');
        }

        $this->_fireOtpEvent();
        session()->reflash();
        return view('MobileAuth::front.otp');
    }

    private function _fireOtpEvent()
    {
        $mobile = session()->get('mobile');

        $otpRequest = Otp::where('mobile', $mobile)->first();

        if (!$otpRequest) {
            $this->_generateOtp();
        } else {
            // otp exist
            $expired_at = $otpRequest->created_at + 120;

            if (time() > $expired_at)
                $this->_generateOtp();
        }

    }

    private function _generateOtp()
    {
        $mobile = session()->get('mobile');

        Otp::where('mobile', $mobile)->delete();

        $otp = random_int(1000, 9999);

        $isExist = Otp::where('otp', $otp)->first();

        if ($isExist)
            $this->_generateOtp();

        Otp::create([
            'mobile' => $mobile,
            'otp'  => $otp
        ]);
    }

    public function otpCheck(Request $request)
    {
        session()->reflash();

        $request->validate([
            'mobile' => 'required|numeric|digits:11|exists:otps,mobile',
            'otp'   => 'required|numeric'
        ], [
            'mobile.required' => 'شماره موبایل الزامی است',
            'mobile.numeric'  => 'شماره موبایل باید عدد باشد.',
            'mobile.digits'   => 'شماره موبایل باید 11 رقم باشد.',
            'mobile.exists'   => 'شماره وارد شده معتبر نیست!',
            'otp.required'   => 'کدیکبار مصرف الزامی است',
            'otp.numeric'    => 'کدیکبار مصرف باید عدد باشد.',
        ]);

        $mobile = $request->mobile;
        $otp   = $request->otp;
        $otpRequest = Otp::where('mobile', $mobile)->first();
        if ($otpRequest->otp != $otp)
            return redirect()->route('otp-login')
                           ->withInput([
                               'mobile' => $mobile
                           ])
                           ->withErrors([
                               'otp' => 'رمز یکبار مصرف وارد شده معتبر نیست!'
                           ]);
         // 100% Sure, Code true!
        // Is Registered?
        $user = User::where('mobile', $mobile)->first();

        if (!$user)
        {
            User::create([ 'mobile' => $mobile ])->markEmailAsVerified();
            $user = User::where('mobile', $mobile)->first();
            Auth::loginUsingId($user->id);
        }

        Auth::loginUsingId($user->id);

        Otp::where('mobile', $mobile)->delete();
        User::where('mobile', $mobile)->update([
            'attempts_left'       => 3,
            'must_login_with_otp' => false
        ]);

        return redirect()->route('home')->with([
            'welcome_message' => true,
        ]);

    }

}
