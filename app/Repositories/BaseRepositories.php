<?php

namespace App\Http\Repositories;

use Exception;

use Illuminate\Support\Facades\DB;

class BaseRepository
{
    protected $Model;
    protected array $rules;

    public function createModelObject($model)
    {
        $this->Model = new $model;
    }

    public function model()
    {
        return $this->Model;
    }

    public function validateData(
        object $request,
        array $merge = []
    ): array {
        try {
            $data = $request->validate(
                array_merge($this->rules, $merge)
            );
        } catch (Exception $exception) {
            throw $exception;
        }

        return $data;
    }

    public function store($request)
    {
        DB::beginTransaction();

        $Model = $this->model();

        try {
            $Model->create($request);
        } catch (Exception $exception) {
            throw $exception;
        }

        DB::commit();

        return $Model;
    }

    public function fetch()
    {
        try {
            $row =  $this->model();
            $result = $row->first();
        } catch (Exception $exception) {
            throw $exception;
        }

        return $result;
    }
}
