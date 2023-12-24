<?php

namespace Yazdan\User\App\Models;

use Laravel\Sanctum\HasApiTokens;
use Yazdan\Media\Traits\HasMedia;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Yazdan\Address\App\Models\Address;
use Yazdan\MobileAuth\Traits\HasMobileAuth;
use Yazdan\User\App\Notifications\VerifyMailNotification;
use Yazdan\User\App\Notifications\ResetPasswordEmailCodeNotification;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, HasMedia, HasMobileAuth;

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyMailNotification());
    }

    public function sendResetPasswordEmailCodeNotification()
    {
        $this->notify(new ResetPasswordEmailCodeNotification());
    }

    public function getVerifyAttribute()
    {
        return $this->hasVerifiedEmail() ? 'تایید شده' : 'تایید نشده';
    }

    public function getVerifyStyleAttribute()
    {
        return $this->hasVerifiedEmail() ? 'text-success' : 'text-error';
    }

    public function profilePath()
    {
        return $this->username ? route('users.showProfile', $this->username) : route('users.showProfile', 'username');
    }

    public function address()
    {
        return $this->hasOne(Address::class, 'user_id');
    }
}
