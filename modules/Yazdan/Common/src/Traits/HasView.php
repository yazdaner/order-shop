<?php

namespace Yazdan\Common\Traits;

use Illuminate\Database\Eloquent\Concerns\HasRelationships;

trait HasView
{
    use HasRelationships;

    public function incrementReadCount() {
        $this->views++;
        return $this->save();
    }
}
