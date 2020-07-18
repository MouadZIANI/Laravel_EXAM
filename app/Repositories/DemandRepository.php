<?php

namespace App\Repositories;

use App\Models\Demand;

class DemandRepository {

    private $model;

    /**
     * DemandRepository constructor.
     */
    public function __construct(Demand $model) {
        $this->model = $model;
    }

    public function findAll($length = null)
    {
        return $length ? $this->model->paginate($length) : $this->model->all();
    }

    public function save($request)
    {
        $demand = $this->model->create([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'phone_number' => $request->get('phone_number'),
            'budget' => $request->get('budget'),
            'user_id' => auth()->id()
        ]);

        return $demand;
    }
}
