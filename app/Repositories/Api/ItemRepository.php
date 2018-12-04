<?php

namespace App\Repositories\Api;

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
    public function getAllUserItems()
    {
        $items = $this->user->items();

        if ($this->with) {
            $items->with($this->with);
        }

        return $items->paginate($this->per_page);
    }
}
