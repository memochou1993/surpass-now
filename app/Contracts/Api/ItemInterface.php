<?php

namespace App\Contracts\Api;

interface ItemInterface
{
    public function getAllItems();
    public function getItem($hash_id);
}
