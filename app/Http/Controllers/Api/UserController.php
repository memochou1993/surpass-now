<?php

namespace App\Http\Controllers\Api;

use Response;
use App\Contracts\Api\UserInterface as Repository;

class UserController extends ApiController
{
    /**
     *
     */
    protected $repository;

    /**
     *
     *
     *
     */
    public function __construct(Repository $repository)
    {
        parent::__construct();

        $this->repository = $repository;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return Response::success($this->repository->getUser());
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        //
    }
}
