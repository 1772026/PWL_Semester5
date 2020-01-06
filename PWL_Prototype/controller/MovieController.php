<?php

class MovieController
{
    private $movieDao;

    /**
     * MovieController constructor.
     * @param $movieDao
     */
    public function __construct()
    {
        $this->movieDao = new movieDao();
    }

    public function index()
    {
        $input = filter_input(INPUT_POST, "btnSubmit");
        if (isset($input)) {
            $judul = filter_input(INPUT_POST, 'title');
            $durasi = filter_input(INPUT_POST, 'duration');
            $deskripsi = filter_input(INPUT_POST, 'description');
            $movie = new Movie();
            $movie->setTitle($judul);
            $movie->setDuration($durasi);
            $movie->setDescription($deskripsi);
            $this->movieDao->addMovie($movie);
        }
    }
}