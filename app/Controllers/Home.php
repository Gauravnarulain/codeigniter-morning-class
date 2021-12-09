<?php

namespace App\Controllers;

// single

class Home extends BaseController
{
    private $genre;
    // private $validation;
    public $category = [
        'title'     => 'required',
        'releasedate'     => 'required',
        'status' => 'required'
    ];

    public $category_errors = [
        'title' => [
            'required'    => 'You must choose a title.',
        ],
        'releasedate'    => [
            'required' => 'Release date is required.'
        ],
        'status'    => [
            'required' => 'Status is required'
        ],
    ];

    function __construct() // magic methofs
    {
        $this->genre = new \App\Models\Genre();
        // $this->validation =  \Config\Services::validation();
        helper('form');
    }
    public function index()
    {

        $data['genre'] = $this->genre->findAll();
        return view('welcome_message', $data);
    }
    public function store()
    {
        //https://www.positronx.io/codeigniter-form-validation-tutorial-with-example/

        if (!$this->validate($this->category)) {
            echo view('welcome_message', [
                'validation' => $this->validator
            ]);
        }

        $postArray = $this->request->getVar();

        $data = array(
            'title' => $postArray['title'],
            'created' => $postArray['releasedate'],
            'status' => $postArray['status']
        );


        $res = $this->genre->insert($data);
        if ($res)
            return redirect()->back()->with('success', 'data has been saved successfully');
        else
            return redirect()->back()->with('error', 'error, while processing your request');;
    }
    public function update()
    {
        $data = array(
            'title' => 'xyz',
            'created' => date('Y-m-d h:i:s'),
            'status' => 'Active'
        );
        $res = $this->genre->update(13, $data);
        if ($res)
            echo "Data updated successfully";
        else
            echo "Error, while processing your request";
    }

    public function delete()
    {
        $res = $this->genre->delete(13);
        if ($res)
            echo "Data delete successfully";
        else
            echo "Error, while processing your request";
    }
}
