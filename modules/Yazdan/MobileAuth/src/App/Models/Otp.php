<?php

namespace Yazdan\MobileAuth\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Otp extends Model
{
    use HasFactory;

    protected $fillable = ['mobile', 'otp'];

    protected $casts = [
        'created_at' => 'timestamp'
    ];
}
