<?php
require_once('../helpers/slug.php');
?>

<?php

class MovieController extends DefaultController {
    private $movie;

    public function __construct()
    {
        $this->movie = $this->model('MovieModel');
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

}