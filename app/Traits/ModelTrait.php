<?php

namespace App\Traits;

use Hashids;

trait ModelTrait
{
    /**
     * Get the Hash Id for the user.
     *
     * @return bool
     */
    protected function getHashIdAttribute()
    {
        return Hashids::encode($this->attributes['id']);
    }
}
