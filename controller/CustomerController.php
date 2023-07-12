<?php

namespace Controller;

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
            header("Location: index.php?page=add");
        }
    }
    public function delete()
    {
        $id = $_GET['id'];
        $this->model->delete($id);
        header('Location: index.php');
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $data = $this->model->getById($id);
            include 'view/edit.php';
        } else {

            $id = $_POST['id'];
            if (empty($errors)) {
                $data = [
                    "name" => $_POST["name"],
                    "email" => $_POST["email"],
                    "address" => $_POST["address"],
                ];
                $this->model->update($id, $data);
                header('Location: index.php');
            } else {
                $data = $this->model->getById($id);
                include 'view/edit.php';
            }
        }
    }
}
