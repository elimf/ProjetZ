<?php

namespace App\Models;

use CodeIgniter\Model;

class AgendaModel extends Model
{
    protected $table ='agenda';
    protected $primarykey= 'idAgenda';

    protected $allowedFields = ['intituleAgenda','couvertureAgenda','contenuAgenda','dateAgenda','lieuAgenda','heureAgenda','jaugeAgenda','organisateurAgenda','contactAgenda','infoAgenda','pousserAgenda','idUser'];
    // Requete qui renvoie les evenements crée selon un utilisateur choisi dans la base de donnée.
    public function infoAgenda()
    {
        $db = \Config\Database::connect();
        $query = $db->query(
            "SELECT * FROM agenda where idUser= 1 ORDER BY agenda.dateAgenda ASC"
        );
        return $result = (object)$query->getResult();
    }
}