<?php

namespace App;

use Request;
use App\Traits\ModelTrait;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use ModelTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'hash_id',
    ];

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

    /**
     * Get the user that owns the unit.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
