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

    public function fetchAll($allowPagination)
    {
        try {
            if (str_contains($allowPagination, 'true')) {
                $data = $this->Model::paginate();
            } else {
                $data = $this->Model::get();
            }
        } catch (Exception $exception) {
            throw $exception;
        }
        return $data;
    }

    public function store($request,?callable $callback = null)
    {
        DB::beginTransaction();

        $Model = $this->model();

        try {
            foreach ($request as $key => $value) {
                if ($key === 'password') {
                    $Model->$key = bcrypt($value);
                } else {
                    $Model->$key = $value;
                }
            }
            if (!$Model->save()) {
                return 'failed';
            }

            if ($callback) {
                $callback($Model);
            }

        } catch (Exception $exception) {
            throw $exception;
        }

        DB::commit();

        return $Model;
    }

    public function fetch(string $phone, array $with = [], ?callable $callback = null)
    {
        try {
            $rows =  $this->model();

            if ($callback) {
                $rows = $callback();
            }

            if ($with !== []) {
                $rows = $rows->with($with);
            }

            $result = $rows->where('phone',$phone)->first();
        } catch (Exception $exception) {
            throw $exception;
        }

        return $result;
    }
}
