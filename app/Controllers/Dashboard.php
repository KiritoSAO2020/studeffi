<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class Dashboard extends Controller{

    public function index(){
    
        $session=session();

        echo "<h1>Bienvenue".$session->get('user_name')."</h1>";
        
        echo anchor('/Login/logout','logout');
    }
}