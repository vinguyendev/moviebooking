<?php

class MovieModel {

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getMovies()
    {
        $this->db->query("SELECT * FROM movies");

        return $this->db->resultSet();
    }

    public function getMoviesShowing()
    {
        $this->db->query("SELECT * FROM movies WHERE status=1");

        return $this->db->resultSet();
    }

    public function getMoviesComing()
    {
        $this->db->query("SELECT * FROM movies WHERE status=0");

        return $this->db->resultSet();
    }

    public function getMovieById($id)
    {
        $this->db->query('SELECT * FROM movies WHERE id = :id');
        $this->db->bind(':id',$id);
        return $this->db->single();
    }

    public function getMovieBySlug($slug)
    {
        $this->db->query('SELECT * FROM movies WHERE slug = :slug');
        $this->db->bind(':slug',$slug);
        return $this->db->single();
    }

    public function createMovie($data)
    {
        $this->db->query('INSERT INTO movies (name,slug,directors, casts,categories, premiere,duration,language,rated,description, image, media) 
                    values (:name,:slug,:directors,:casts,:categories,:premiere,:duration,:language,:rated,:description,:image,:media)');

        $this->db->bind(":name",$data['name']);
        $this->db->bind(":slug",$data['slug']);
        $this->db->bind(":directors",$data['directors']);
        $this->db->bind(":casts",$data['casts']);
        $this->db->bind(":categories",$data['categories']);
        $this->db->bind(":premiere",$data['premiere']);
        $this->db->bind(":duration",$data['duration']);
        $this->db->bind(":language",$data['language']);
        $this->db->bind(":rated",$data['rated']);
        $this->db->bind(":description",$data['description']);
        $this->db->bind(":image",$data['image']);
        $this->db->bind(":media",$data['media']);

        if ($this->db->execute()) {
            return true;
        }
        return false;

    }

}