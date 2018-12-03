<?php

namespace App\Traits;

use Hashids;

trait HashId
{
    /**
     * Get the Hash Id for the user.
     *
     * @return bool
     */
    public function getHashIdAttribute()
    {
        return Hashids::encode($this->attributes['id']);
    }
}
