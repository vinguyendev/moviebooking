<?php

class CustomerModel {
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getCustomers()
    {
        $this->db->query("SELECT * FROM customers");

        return $this->db->resultSet();
    }

    public function createCustomer($data)
    {
        $this->db->query("INSERT INTO customers (name,mobile,email,area,password) 
            VALUES (:name ,:mobile, :email, :area, :password)");

        $this->db->bind(":name",$data['name']);
        $this->db->bind(":mobile",$data['mobile']);
        $this->db->bind(":email",$data['email']);
        $this->db->bind(":area",$data['area']);
        $this->db->bind(":password",$data['password']);

        if ($this->db->execute()) {
            return true;
        }
        return false;
    }

    public function getIdMax()
    {
        $this->db->query("SELECT MAX(id) as max FROM customers");

        return $this->db->single();
    }

    public function getNameById($id)
    {
        $this->db->query("SELECT name FROM customers WHERE id='$id'");

        return $this->db->single();
    }

}