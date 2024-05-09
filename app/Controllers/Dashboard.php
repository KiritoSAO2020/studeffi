<?php
namespace App\Controllers;

use App\Models\CompteurModel;
use CodeIgniter\Controller;

class Dashboard extends Controller
{

    public function index()
    {

        $session = session();
        $data['nom'] = $session->get('nom');    
        $data['prenom'] = $session->get('prenom');
        $data['type_user'] = $session->get('type_user');
        $data['loggin_in'] = $session->get('loggin_in');

        $compteurModel = new CompteurModel();
        $data['compteurs'] = $compteurModel->getCompteurs();

        echo view('header', $data);
        echo view('dashboard', $data);
    }
    public function deleteCompteur()
    {
        $request = \Config\Services::request();
        $id = $request->getPost('id');

        $compteurModel = new CompteurModel();
        $compteur = $compteurModel->getCompteurById($id);

        if ($compteur) {
            $compteurModel->deleteCompteur($id);
            // Afficher une alerte JavaScript -> validation -> href sur le dashboard
            echo '<script>alert("Le compteur n existe plus"); window.location.href = "/studeffi/public/index.php/dashboard";</script>';
        } else {
            // Afficher une alerte JavaScript -> validation -> href sur le dashboard
            echo '<script>alert("La suppresion a rencontré un problème, retour au dashboard ..."); window.location.href = "/studeffi/public/index.php/dashboard";</script>';
        }
    }
    public function ajoutCompteur()
    {

    }
}
