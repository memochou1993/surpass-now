<?php

namespace App;

use Request;
use App\Traits\ModelTrait;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use ModelTrait;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'records';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'frequency', 'unit', 'completed',
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
    public function getCreatedAtAttribute()
    {
        return Request::input('time') == 'diffForHumans' ? Carbon::parse($this->pivot->created_at)->diffForHumans() : $this->pivot->created_at;
    }

    /**
     * 
     *
     * 
     */
    public function getUpdatedAtAttribute()
    {
        return Request::input('time') == 'diffForHumans' ? Carbon::parse($this->pivot->updated_at)->diffForHumans() : $this->pivot->updated_at;
    }

    /**
     * Get the user that owns the record.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the item that owns the record.
     */
    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
