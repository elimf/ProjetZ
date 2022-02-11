<?php

namespace App\Models;

use CodeIgniter\Model;

class AgendaModel extends Model
{
    protected $table ='agenda';
    protected $primarykey= 'idAgenda';

    protected $allowedFields = ['intituleAgenda','couvertureAgenda','contenuAgenda','dateAgenda','lieuAgenda','heureAgenda','jaugeAgenda','organisateurAgenda','contactAgenda','infoAgenda','pousserAgenda','idUser'];

    public function infoAgenda()
    {
        $db = \Config\Database::connect();
        $query = $db->query(
            "SELECT * FROM agenda where idUser= 3"
        );
        return $result = (object)$query->getResult();
    }
}