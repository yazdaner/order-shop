<?php

namespace Yazdan\MobileAuth\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Otp extends Model
{
    use HasFactory,Notifiable;

    protected $fillable = ['mobile', 'otp'];

    protected $casts = [
        'created_at' => 'timestamp'
    ];
}
