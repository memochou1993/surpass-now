<?php

namespace App\Traits;

use Hashids;

trait HashId
{
    public function getIdAttribute($value)
    {
        return $this->attributes['id'] = Hashids::encode($value);
    }
}
