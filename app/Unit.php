<?php

namespace App;

use App\Traits\ModelTrait;
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
     * Get the user that owns the unit.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
