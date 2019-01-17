<?php

namespace App\models;

use App\lib\Database;

class Customer
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function addCustomer($data)
    {
        $this->db->query("INSERT INTO customers(id, first_name, last_name, email) VALUES(:id, :first_name, :last_name, :email)");

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':first_name', $data['first_name']);
        $this->db->bind(':last_name', $data['last_name']);
        $this->db->bind(':email', $data['email']);
        
        return $this->db->execute() ? true : false;
    }

    public function all()
    {
        $this->db->query("SELECT * FROM customers ORDER BY created_at DESC");
        return $this->db->resultset();
    }
}
