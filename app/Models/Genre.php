<?php

namespace App\Models;

use CodeIgniter\Model;

class Genre extends Model
{
    protected  $table = "genre";

    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'status'];
}
