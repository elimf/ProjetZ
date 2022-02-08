<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table ='users';
    protected $primarykey= 'idUser';

    protected $allowedFields = ['pseudoUsers','mailUsers'];

    
}