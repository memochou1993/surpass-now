<?php

namespace App\Repositories\Api;

use Hashids;
use App\Record;
use App\Contracts\Api\RecordInterface;

class RecordRepository extends ApiRepository implements RecordInterface
{
    /**
     *
     */
    protected $record;

    /**
     *
     *
     *
     */
    public function __construct(Record $record)
    {
        parent::__construct();

        $this->record = $record;
    }

    /**
     *
     *
     *
     */
    public function getAllRecords()
    {
        return $this->user->records()->with(['category'])->paginate($this->per_page);
    }

    /**
     *
     *
     *
     */
    public function getRecord($hash_id)
    {
        $id = Hashids::decode($hash_id);
        
        //
    }
}
