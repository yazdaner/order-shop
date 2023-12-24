<?php

namespace Yazdan\MobileAuth\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Yazdan\MobileAuth\App\Rules\ValidMobile;

class PasswordCheckRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'mobile' => ['required','numeric','digits:11','exists:users,mobile',new ValidMobile],
            'password' => ['required'],
        ];

    }

    public function attributes()
    {
        return [
            "mobile" => "شماره موبایل",
        ];
    }
}
