<?php

namespace App\Http\Controllers\Api;

use Response;
use Exception;
use App\Http\Requests\Api\UnitRequest as Request;
use App\Contracts\Api\UnitInterface as Repository;
use App\Http\Resources\Api\UnitResource as Resource;

class UnitController extends ApiController
{
    /**
     *
     */
    protected $repository;

    /**
     *
     */
    protected $request;

    /**
     *
     */
    protected $errors;

    /**
     *
     *
     *
     */
    public function __construct(Repository $repository, Request $request)
    {
        parent::__construct();

        $this->repository = $repository;

        $this->request = $request;

        $this->errors = $this->request->validator ? $this->request->validator->errors() : null;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \App\Http\Resources\Resource
     */
    public function index()
    {
        if ($this->errors) {
            return Response::fail($this->errors);
        }

        try {
            return Resource::collection($this->repository->getAllUnits());
        } catch (Exception $e) {
            return Response::error($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $hash_id
     * @return \App\Http\Resources\Resource
     */
    public function show($hash_id)
    {
        if ($this->errors) {
            return Response::fail($this->errors);
        }

        try {
            return new Resource($this->repository->getUnit($hash_id));
        } catch (Exception $e) {
            return Response::error($e->getMessage());
        }
    }
}
