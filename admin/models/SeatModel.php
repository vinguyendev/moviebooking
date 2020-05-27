<?php

class SeatModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getSeats()
    {
        $this->db->query("SELECT * FROM seats");

        return $this->db->resultSet();
    }

    public function getSeatByID($id)
    {
        $this->db->query("SELECT * FROM seats WHERE id='$id'");

        return $this->db->single();
    }

    public function getListSeatById($ids)
    {
        $this->db->query("SELECT * FROM seats WHERE id IN (".$ids.")");

        return $this->db->resultSet();
    }
}