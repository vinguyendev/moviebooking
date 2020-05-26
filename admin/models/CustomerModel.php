<?php

class CustomerModel {
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getMovies()
    {
        $this->db->query("SELECT * FROM customers");

        return $this->db->resultSet();
    }

}