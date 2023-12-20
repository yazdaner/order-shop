<?php

namespace Yazdan\Blog\App\Models;

use Yazdan\User\App\Models\User;
use Yazdan\Media\Traits\HasMedia;
use Yazdan\Comment\Trait\HasComments;
use Illuminate\Database\Eloquent\Model;
use Yazdan\Category\Traits\HasCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Yazdan\Common\Traits\HasView;

class Blog extends Model
{
    use HasFactory,HasComments,HasCategory,HasMedia,HasView;

    protected $table = 'blogs';
    protected $guarded = [];

    public function path()
    {
        return route('blogs.show',$this->slug);
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

}

