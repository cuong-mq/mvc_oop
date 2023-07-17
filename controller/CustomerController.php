<?php

namespace Controller;

use Exception;
use Model\BaseModel;
use Model\CustomerModel;
use Model\DBConnect;

class CustomerController extends BaseController
{

    protected $model;


    public function __construct()
    {
        $this->model = new CustomerModel();
        parent::__construct($this->model);
    }

    public function index()
    {

        $customers = parent::index();
        include "view/list.php";
    }
    public function store()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include "view/add.php";
        } else {
            $data = [
                "name" => $_POST["name"],
                "email" => $_POST["email"],
                "address" => $_POST["address"],
            ];

            $this->model->store($data);
            // header("Location: index.php");
            include "view/add.php";
        }
    }
    public function delete()
    {
        $id = $_GET['id'];
        $this->model->delete($id);
        header('Location: http://localhost:3000/?c=CustomerController&a=index');
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $data = $this->model->getById($id);
            include 'view/edit.php';
        } else {
            $data = [
                "name" => $_POST["name"],
                "email" => $_POST["email"],
                "address" => $_POST["address"],
            ];
            $id = $_GET['id'];
            $this->model->update($id, $data);

            header('Location: http://localhost:3000/?c=CustomerController&a=index');
        }
    }
}
