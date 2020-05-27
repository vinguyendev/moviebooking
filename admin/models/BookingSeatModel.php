<?php

class BookingSeatModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getBookingSeats()
    {
        $this->db->query("SELECT * FROM booking_seats");

        return $this->db->resultSet();
    }

    public function createBookingSeat($data)
    {
        $sql = "INSERT INTO booking_seats (booking_id,seat_id) VALUES (".$data['booking_id'].",".$data['seat_id'].")";

        $this->db->query($sql);

        if ($this->db->execute()) {
            return true;
        }
        return false;

    }

}