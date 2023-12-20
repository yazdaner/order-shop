<?php

namespace Yazdan\Seller\App\Models;

use Yazdan\Media\Traits\HasMedia;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasMedia;

    protected $table = 'sellers';
    protected $guarded = [];
}
