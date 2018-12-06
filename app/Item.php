<?php

namespace App;

use App\Traits\ModelTrait;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
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
     * Get the user that owns the item.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the category that owns the item.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * The records that belong to the item.
     *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function records()
    {
        return $this->belongsToMany(User::class, 'records')->withPivot(['frequency', 'unit', 'completed'])->withTimestamps();
    }
}
