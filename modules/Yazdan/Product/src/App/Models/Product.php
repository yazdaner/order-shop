<?php

namespace Yazdan\Product\App\Models;

use Yazdan\Common\Traits\HasView;
use Yazdan\Media\Traits\HasMedia;
use Yazdan\Media\Traits\HasGallery;
use Yazdan\Comment\Trait\HasComments;
use Illuminate\Database\Eloquent\Model;
use Yazdan\Category\Traits\HasCategory;

class Product extends Model
{
    use HasComments,HasMedia,HasCategory,HasGallery,HasView;

    protected $table = 'products';
    protected $guarded = [];
    protected $appends = ['quantity_check', 'sale_check', 'price_check'];

    public function variations()
    {
        return $this->hasMany(Variation::class,'product_id');
    }

    public function path()
    {
        return route('products.show',$this->slug);
    }

    public function getSaleCheckAttribute()
    {
        return $this->variations()->where('quantity', '>', 0)->where('price2', '!=', null)->orderBy('price2')->first() ?? false;
    }

    public function getQuantityCheckAttribute()
    {
        return $this->variations()->where('quantity', '>', 0)->first() ?? 0;
    }

    public function getPriceCheckAttribute()
    {
        return $this->variations()->where('quantity', '>', 0)->orderBy('price')->first() ?? false;
    }
}
