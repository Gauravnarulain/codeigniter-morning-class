<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $genre = new \App\Models\Genre();
        $data['genre'] = $genre->findAll();

        return view('welcome_message', $data);
    }
    public function movie_list($str = '')
    {
        // echo ucwords($str) . ' Movie List';
        return view('movie/movies');
    }
}
