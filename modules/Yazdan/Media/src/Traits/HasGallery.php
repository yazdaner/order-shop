<?php

namespace Yazdan\Media\Traits;

use Yazdan\Media\App\Models\Gallery;
use Illuminate\Database\Eloquent\Concerns\HasRelationships;

trait HasGallery
{
    use HasRelationships;

    public function galleries()
    {
        return $this->morphMany(Gallery::class, 'gallerisable');
    }

}
