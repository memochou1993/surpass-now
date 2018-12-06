<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class RecordResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'category' => $this->category->name,
            'item' => $this->name,
            'frequency' => $this->pivot->frequency,
            'unit' => $this->pivot->unit,
            'completed' => $this->pivot->completed,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'hash_id' => $this->hash_id,
        ];
    }
}
