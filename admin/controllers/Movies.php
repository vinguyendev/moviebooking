<?php

class Movies extends Controller {

    private $movie;

    public function __construct()
    {
        $this->movie = $this->model('MovieModel');
    }

    public function index()
    {
        $movies = $this->movie->getMovies();
        $data = [
            'movies' => $movies
        ];

        $this->view('movies/index', $data);
    }

    public function create()
    {
        $this->view('movies/create');
    }
}
