<?php

namespace App\Controllers;

class Movies extends BaseController
{
    private $movie;
    function __construct()
    {
        $this->movie = new \App\Models\Movie();
    }
    public function index($id = null)
    {
        $data["movie_list"] = $this->movie->where('genre_id', $id)->findAll();
        return view('movie/index', $data);
    }
}
