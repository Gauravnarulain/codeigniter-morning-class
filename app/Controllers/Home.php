<?php

namespace App\Controllers;

class Home extends BaseController
{
    private $genre;
    function __construct()
    {
        $this->genre = new \App\Models\Genre();
    }
    public function index()
    {
        $data['genre'] = $this->genre->findAll();
        return view('welcome_message', $data);
    }
}
