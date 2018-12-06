<?php

namespace App\Repositories\Api;

use Hashids;
use App\Unit;
use App\Contracts\Api\UnitInterface;

class UnitRepository extends ApiRepository implements UnitInterface
{
    /**
     *
     */
    protected $unit;

    /**
     *
     *
     *
     */
    public function __construct(Unit $unit)
    {
        parent::__construct();

        $this->unit = $unit;
    }

    /**
     *
     *
     *
     */
    public function getAllUnits()
    {
        return $this->user->units()->paginate($this->per_page);
    }

    /**
     *
     *
     *
     */
    public function getUnit($hash_id)
    {
        $id = Hashids::decode($hash_id);
        
        return $this->unit->find($id);
    }
}
