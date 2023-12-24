<?php

namespace Yazdan\MobileAuth\Traits;

trait HasMobileAuth
{
    public function initializeHasMobileAuth()
    {
        $this->fillable[] = 'mobile';
        $this->fillable[] = 'attempts_left';
        $this->fillable[] = 'must_login_with_otp';
    }
}
