<?php

namespace App\Http\Controllers\Api;

use Response;
use Exception;
use App\Http\Requests\Api\RecordRequest as Request;
use App\Contracts\Api\RecordInterface as Repository;
use App\Http\Resources\Api\RecordResource as Resource;

class RecordController extends ApiController
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
            return Resource::collection($this->repository->getAllRecords());
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
            return Response::success($this->repository->getRecord($hash_id));
        } catch (Exception $e) {
            return Response::error($e->getMessage());
        }
    }
}
