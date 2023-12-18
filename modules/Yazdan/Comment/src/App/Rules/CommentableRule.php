<?php

namespace Yazdan\Comment\App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class CommentableRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!class_exists($value) && !method_exists($value, "comments")) {
            $fail('The validation error message.');
        }
    }
}
