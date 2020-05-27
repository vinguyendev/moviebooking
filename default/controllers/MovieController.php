<?php
require_once('../helpers/slug.php');
?>

<?php

class MovieController extends DefaultController {
    private $movie;
    private $booking;
    private $seat;
    private $bookingSeat;

    public function __construct()
    {
        $this->movie = $this->model('MovieModel');
        $this->booking = $this->model('BookingModel');
        $this->seat = $this->model('SeatModel');
        $this->bookingSeat = $this->model('BookingSeatModel');
    }

    public function detail($slug) {

        if(!empty($slug)) {
            $data = $this->movie->getMovieBySlug($slug);
            $this->view('movies/detail',$data);
        }

    }

    public function booking()
    {
        $this->view('movies/booking');
    }

    public function order()
    {
        $seats = $_GET['seats'];
        $session = new Session();
        $customer_id = $session::get('idCustomer');
        $total = 0.0;
        $created_at = new DateTime();
        $created_at = $created_at->format('h:m:s d/m/Y');

        $seats = $this->seat->getListSeatById($seats);

        $data = [
            'customer_id'=>(int)trim($customer_id),
            'cinema_id'=>(int)trim($_GET['cinema']),
            'date'=>trim($_GET['date']),
            'show_time_id'=>(int)trim($_GET['show_time']),
            'total'=>(float)trim($total),
            'created_at'=>trim($created_at),
            'movie_id'=>(int)trim($_GET['movie']),
        ];

        if($this->booking->createBooking($data)) {
            $id_booking = $this->booking->getIdMax();

            foreach ($seats as $seat) {
                $dataSeat = [
                    'seat_id'=>$seat->id,
                    'booking_id'=>$id_booking->max
                ];
                $this->bookingSeat->createBookingSeat($dataSeat);
            }
            echo '<script language="javascript">alert("Đặt phim thành công!");</script>';
        }
        else {
            echo '<script language="javascript">alert("Fail!");</script>';
        }

        header('Location: /?ok=1');

    }

}