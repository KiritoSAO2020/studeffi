<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CompteurModel;

class AjoutCompteur extends Controller
{

    public function index()
    {
        helper(['form']);
        
        echo view('ajoutcompteur');
        
    }
    public function ajoutCompteur(){
        
    }
}