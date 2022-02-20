<?php namespace App\Controllers;
use CodeIgniter\Model\AgendaModel;

use CodeIgniter\Controller;


class Agenda extends Controller
{
       public function __construct(){
        helper(['url','form']);
    }
     public function index()
    {
         $agenda = new \App\Models\AgendaModel();
        $data['agenda']= $agenda->infoAgenda();
        return view('accueil',$data);
    }
    
    //Permet d'afficher le view du formulaire
    public function select ()
    {
        $user = new \App\Models\UsersModel();
        $data['user']= $user->infoUser();
        return view('formulaire',$data);
    } 
    //Sauvegarder les données du formulaire
    public function save()
    {
        $agenda = new \App\Models\AgendaModel();
        $data = [
            'intituleAgenda' => $this->request->getPost('intituleAgenda'),
            'couvertureAgenda' => $this->request->getPost('couvertureAgenda'),
            'contenuAgenda'=> $this->request->getPost('contenuAgenda'),
            'dateAgenda' => $this->request->getPost('dateAgenda'),
            'lieuAgenda' => $this->request->getPost('lieuAgenda'),
            'heureAgenda'=> $this->request->getPost('heureAgenda'),
            'jaugeAgenda' => $this->request->getPost('jaugeAgenda'),
            'organisateurAgenda' => $this->request->getPost('organisateurAgenda'),
            'contactAgenda'=> $this->request->getPost('contactAgenda'),
            'infoAgenda' => $this->request->getPost('infoAgenda'),
            'pousserAgenda' => $this->request->getPost('pousserAgenda'),
            'idUser' => $this->request->getPost('idUser'),
        ];
        $agenda->save($data);
       
      return;
    } 
   
   public function confirmation ()
    {
        
        return view('confirmation');
    } 
    
}
