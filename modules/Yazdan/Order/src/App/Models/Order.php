<?php

namespace Yazdan\Order\App\Models;

use Yazdan\Media\Traits\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Yazdan\Product\App\Models\Variation;
use Yazdan\User\App\Models\User;

class Order extends Model
{
    use HasMedia;

    protected $table = 'orders';
    protected $guarded = [];

    public function variation()
    {
        return $this->belongsTo(Variation::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
