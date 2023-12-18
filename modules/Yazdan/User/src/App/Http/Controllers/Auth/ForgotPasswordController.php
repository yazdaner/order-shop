<?php

namespace Yazdan\User\App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Yazdan\User\Services\VerifyMailService;
use Yazdan\User\Repositories\UserRepository;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Yazdan\User\App\Http\Requests\ResetPasswordVerifyCodeRequest;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    public function showLinkRequestForm()
    {
        return view('User::front.passwords.email');
    }

    public function sendVerifyCodeResetPassword(Request $request)
    {
        // send Reset Password Code Email
        $request->validate([
            'email' => 'required|email',
            'captcha' => 'required|captcha',
        ],[
            'captcha.captcha' => 'کد کپچا معتبر نمی باشد',
            'captcha.required' => 'کد کپچا الزامی میباشد',
        ]);

        $user = UserRepository::getUserByEmail($request->email);

        if(isset($user) && ! $user->hasVerifiedEmail() || ! isset($user) ){
            return back()->withErrors(['email' => 'ایمیل ثبت نشده است']);
        }

        if(! VerifyMailService::cacheHas($user->id)){
            $user->sendResetPasswordEmailCodeNotification();
        }

        // show Verify Code Reset Password Form
        $email = $user->email;
        return view('User::front.passwords.verifyResetPassword',compact('email'));

    }

    public function checkVerifyCodeResetPassword(ResetPasswordVerifyCodeRequest $request)
    {
        $user = UserRepository::getUserByEmail($request->email);

        if( ! isset($user) || ! VerifyMailService::check($user->id,$request->verify_code))
        {
            return back()->withErrors(['verify_code' => 'کد نامعتبر می باشد']);
        }
        auth()->loginUsingId($user->id);
        return redirect(route('password.showResetForm'));
    }

    public function resend(Request $request)
    {
        $user = UserRepository::getUserByEmail($request->email);
        if(isset($user) && ! $user->hasVerifiedEmail() || ! isset($user) ){
            return response()->withErrors(['email' => 'ایمیل ثبت نشده است']);
        }
        VerifyMailService::cacheDelete($user->id);
        if(! VerifyMailService::cacheHas($user->id)){
            $user->sendResetPasswordEmailCodeNotification();
        }

        return $request->wantsJson()
                    ? new JsonResponse([], 202)
                    : back()->with('resent', true);
    }

}
