<?php

namespace App\Http\Controllers\Api;

use App;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    /**
     *
     *
     *
     */
    public function __construct()
    {
        if (! App::environment('local')) {
            $this->middleware('auth:api');
        }
    }
}
