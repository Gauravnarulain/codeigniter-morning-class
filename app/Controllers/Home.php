<?php

namespace App\Controllers;

class Home extends BaseController
{
    private $genre;
    function __construct() // magic methofs
    {
        $this->genre = new \App\Models\Genre();
        helper('form');
    }
    public function index()
    {
        $data['genre'] = $this->genre->findAll();
        return view('welcome_message', $data);
    }
    public function store()
    {
        $data = array(
            'title' => 'Abc',
            'created' => date('Y-m-d h:i:s'),
            'status' => 'Active'
        );
        $res = $this->genre->insert($data);
        if ($res)
            echo "Data added successfully";
        else
            echo "Error, while processing your request";
    }
    public function update()
    {
        $data = array(
            'title' => 'xyz',
            'created' => date('Y-m-d h:i:s'),
            'status' => 'Active'
        );
        $res = $this->genre->update(9, $data);
        if ($res)
            echo "Data updated successfully";
        else
            echo "Error, while processing your request";
    }

    public function delete()
    {
        $res = $this->genre->delete(9);
        if ($res)
            echo "Data delete successfully";
        else
            echo "Error, while processing your request";
    }
}
