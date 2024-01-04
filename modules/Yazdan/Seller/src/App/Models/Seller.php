<?php

namespace Yazdan\Seller\App\Models;

use Yazdan\User\App\Models\User;
use Yazdan\Media\Traits\HasMedia;
use Yazdan\Media\Traits\HasGallery;
use Illuminate\Database\Eloquent\Model;
use Yazdan\Seller\Repositories\SellerRepository;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seller extends Model
{
    use HasMedia,HasFactory,HasGallery;

    protected $table = 'sellers';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function getStatusCssClass()
    {
        if ($this->status == SellerRepository::STATUS_APPROVED) return "text-success";
        elseif ($this->status == SellerRepository::STATUS_REJECTED) return "text-error";
        return "text-warning";
    }

}
