<?php

namespace Controller;
use Model\BaseModel;
use Model\DBConnect;
use Model\CustomerDB;

class BaseController
{
    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function index()
    {
        return $this->model->getAll();
    }
}
