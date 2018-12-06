<?php

namespace App\Repositories\Api;

use App;
use Auth;
use Request;
use App\User;
use App\Repositories\Repository;

class ApiRepository extends Repository
{
    /**
     *
     */
    protected $user;

    /**
     *
     */
    protected $per_page;

    /**
     *
     *
     *
     */
    public function __construct()
    {
        parent::__construct();

        $this->user = App::environment('local') ? User::find(config('seeds.users.id')) : Auth::user();

        $this->per_page = (int) Request::input('per_page');
    }
}
