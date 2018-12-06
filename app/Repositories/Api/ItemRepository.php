<?php

namespace App\Repositories\Api;

use Hashids;
use App\Item;
use App\Contracts\Api\ItemInterface;

class ItemRepository extends ApiRepository implements ItemInterface
{
    /**
     *
     */
    protected $item;

    /**
     *
     *
     *
     */
    public function __construct(Item $item)
    {
        parent::__construct();

        $this->item = $item;
    }

    /**
     *
     *
     *
     */
    public function getAllItems()
    {
        return $this->user->items()->with(['category'])->paginate($this->per_page);
    }

    /**
     *
     *
     *
     */
    public function getItem($hash_id)
    {
        $id = Hashids::decode($hash_id);
        
        return $this->item->with(['category'])->find($id);
    }
}
