<?php

namespace App\Contracts\Api;

interface UnitInterface
{
    public function getAllUnits();
    public function getUnit($hash_id);
}
