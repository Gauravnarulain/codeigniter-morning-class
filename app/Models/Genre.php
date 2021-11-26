<?php

namespace App\Models;

use CodeIgniter\Model;

class Genre extends Model
{
    protected  $table = "genre";

    protected $primaryKey = 'id'; // for reference
    protected $allowedFields = ['title', 'status']; // save/insert / update
}
