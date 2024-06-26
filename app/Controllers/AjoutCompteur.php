<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CompteurModel;

class AjoutCompteur extends Controller
{

    public function index()
    {
        helper(['form']);

        $session = session();
        $data['loggin_in'] = $session->get('loggin_in');

        echo view('ajoutcompteur', $data);

    }
    public function ajoutCompteur()
    {
        $request = \Config\Services::request();

        $data = array(
            'ID' => $request->getPost('id'),
            'Nom_prop' => $request->getPost('nomProp'),
            'Num_voie' => $request->getPost('numVoie'),
            'Nom_voie' => $request->getPost('nomVoie'),
            'CP' => $request->getPost('cp'),
            'Ville' => $request->getPost('ville')
        );

        $compteurModel = new CompteurModel();
        $result = $compteurModel->insertCompteur($data);

        if ($result) {
            // L'action s'est bien déroulée
            echo '<script>alert("Le compteur a été ajouter"); window.location.href = "/studeffi/public/index.php/dashboard";</script>';
        } else {
            // En cas d'erreur
            echo '<script>alert("Une erreur est survenu, retour au dashboard ..."); window.location.href = "/studeffi/public/index.php/dashboard";</script>';
        }
    }


}