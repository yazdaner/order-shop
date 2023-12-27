<?php

namespace Yazdan\MobileAuth\App\Channels;

use Ghasedak\GhasedakApi;
use Illuminate\Notifications\Notification;

class SmsChannel{
    public function send($notifiable,Notification $notification)
    {
        $mobile = $notifiable->mobile;
        $code = $notifiable->otp;
        $template = "test";
        $api = new GhasedakApi(env('GHASEDAK_API_KEY'));
        $api->Verify(
            $mobile,
            $template,
            $code
        );
    }
}
