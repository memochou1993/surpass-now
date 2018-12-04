<?php

namespace App\Repositories\Api;

use App\Contracts\Api\UserInterface;
use App\Repositories\Api\ApiRepository;

class UserRepository extends ApiRepository implements UserInterface
{
    /**
     *
     *
     *
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     *
     *
     *
     */
    public function getUser()
    {
        return $this->user;
    }
}
