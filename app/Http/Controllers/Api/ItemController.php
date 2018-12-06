<?php

namespace App\Http\Controllers\Api;

use Response;
use Exception;
use App\Http\Requests\Api\ItemRequest as Request;
use App\Contracts\Api\ItemInterface as Repository;
use App\Http\Resources\Api\ItemResource as Resource;

class ItemController extends ApiController
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
            return Resource::collection($this->repository->getAllItems());
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
            return new Resource($this->repository->getItem($hash_id));
        } catch (Exception $e) {
            return Response::error($e->getMessage());
        }
    }
}
