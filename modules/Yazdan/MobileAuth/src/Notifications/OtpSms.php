<?php

namespace Yazdan\MobileAuth\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Yazdan\MobileAuth\App\Channels\SmsChannel;

class OtpSms extends Notification
{
    use Queueable;


    public function __construct()
    {
        // 
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return [SmsChannel::class];
    }

    public function toSms()
    {
        return [
            //
        ];
    }
}
