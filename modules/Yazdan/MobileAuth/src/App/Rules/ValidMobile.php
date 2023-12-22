<?php

namespace Yazdan\MobileAuth\App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ValidMobile implements ValidationRule
{

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if(! preg_match('/^09[0|1|2|3][0-9]{8}$/', $value)){
            $fail('فرمت موبایل نامعتبر است. شماره موبایل باید با 09 شروع بشود و بدون فاصله وارد شود.');
        }
    }
}
