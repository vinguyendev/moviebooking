<?php

class Booking extends Controller {
    private $booking;

    public function __construct()
    {
        $this->booking = $this->model('BookingModel');
    }

    public function index()
    {
        $data = $this->booking->getBooking();

        $this->view('booking/index', $data);
    }

}