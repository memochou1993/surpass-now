<?php

namespace App\Traits;

use Hashids;
use Request;
use Carbon\Carbon;

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

    /**
     *
     *
     *
     */
    public function getCreatedAtAttribute($value)
    {
        return Request::input('time') == 'diffForHumans' ? Carbon::parse($value)->diffForHumans() : $value;
    }

    /**
     *
     *
     *
     */
    public function getUpdatedAtAttribute($value)
    {
        return Request::input('time') == 'diffForHumans' ? Carbon::parse($value)->diffForHumans() : $value;
    }
}
