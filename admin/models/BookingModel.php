<?php

class BookingModel{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getBooking()
    {
        $this->db->query("SELECT * FROM bookings");

        return $this->db->resultSet();
    }

    public function createBooking($data)
    {
        $created_at = "'".$data['created_at']."'";
        $sql = "INSERT INTO bookings (customer_id, cinema_id, date, show_time_id, total, created_at, movie_id)
            values (".$data['customer_id'].",".$data['cinema_id'].",".$data['date'].",".$data['show_time_id'].",".$data['total'].",".$created_at.",".$data['movie_id'].")";

        $this->db->query($sql);

        if ($this->db->execute()) {
            return true;
        }
        return false;
    }

    public function getIdMax()
    {
        $sql = "SELECT max(id) as max FROM bookings";

        $this->db->query($sql);

        return $this->db->single();
    }

}