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
        $items = $this->user->items();

        if ($this->relation) {
            $items->with($this->relation);
        }

        return $items->paginate($this->per_page);
    }

    /**
     *
     *
     *
     */
    public function getItem($hash_id)
    {
        $id = Hashids::decode($hash_id);

        $item = $this->relation ? $this->item->with($this->relation) : $this->item;

        return $item->find($id);
    }
}
