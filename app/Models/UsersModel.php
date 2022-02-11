<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table ='users';
    protected $primarykey= 'idUser';

    protected $allowedFields = ['pseudoUsers','mailUsers'];

    public function infoUser()
    {
        $db = \Config\Database::connect();
        $query = $db->query(
            "SELECT * FROM users where idUser= 1"
        );
        return $result = (object)$query->getResult();
    }

    
}