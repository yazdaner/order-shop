<?php

namespace Yazdan\Seller\App\Models;

use Yazdan\Media\Traits\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Yazdan\Seller\Repositories\SellerRepository;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seller extends Model
{
    use HasMedia,HasFactory;

    protected $table = 'sellers';
    protected $guarded = [];


    public function getStatusCssClass()
    {
        if ($this->status == SellerRepository::STATUS_APPROVED) return "text-success";
        elseif ($this->status == SellerRepository::STATUS_REJECTED) return "text-error";
        return "text-warning";
    }

}
