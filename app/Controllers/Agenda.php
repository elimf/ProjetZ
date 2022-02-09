<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Agenda extends Controller
{
     public function index()
    {
        return view('accueil');
    }
    public function select ()
    {
        return view('formulaire');
    }  
}
