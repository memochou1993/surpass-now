<?php

namespace App\Contracts\Api;

interface RecordInterface
{
    public function getAllRecords();
    public function getRecord($hash_id);
}
