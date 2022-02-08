<?php

namespace App\Models;

use CodeIgniter\Model;

class AgendaModel extends Model
{
    protected $table ='agenda';
    protected $primarykey= 'idAgenda';

    protected $allowedFields = ['intituleAgenda','couvertureAgenda','contenuAgenda','dateAgenda','lieuAgenda','organisateurAgenda','contactAgenda','idUser'];

    
}