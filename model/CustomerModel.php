<?php

namespace Model;

class CustomerModel extends BaseModel
{
    protected $table = "customer";

    public function __construct()
    {
        parent::__construct($this->table);
    }

    public function store($data)
    {

        $sql = "INSERT INTO `customer`( `name `, `email`, `address)
        VALUES (?,?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data['name']);
        $stmt->bindParam(2, $data['email']);
        $stmt->bindParam(3, $data['address']);
        $stmt->execute();
    }
    public function update($id, $data){
    $sql ="UPDATE `customer` SET `( `name `, `email`, `address)
        VALUES (?,?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data['name']);
        $stmt->bindParam(2, $data['email']);
        $stmt->bindParam(3, $data['address']);
        $stmt->execute();
    }
}