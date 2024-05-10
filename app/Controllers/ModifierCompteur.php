<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CompteurModel;

class ModifierCompteur extends Controller
{
    public function modifierCompteur()
    {
        $request = \Config\Services::request();

        $id = $request->getPost('id');

        $data = array(
            'Nom_prop' => $request->getPost('nomProp'),
            'Num_voie' => $request->getPost('numVoie'),
            'Nom_voie' => $request->getPost('nomVoie'),
            'CP' => $request->getPost('cp'),
            'Ville' => $request->getPost('ville')
        );

        $compteurModel = new CompteurModel();
        $result = $compteurModel->updateCompteur($id,$data);

        if ($result) {
            // L'action s'est bien déroulée
            echo '<script>alert("Le compteur a été modifier"); window.location.href = "/studeffi/public/index.php/dashboard";</script>';
        } else {
            // En cas d'erreur
            echo '<script>alert("Une erreur est survenu, retour au dashboard ..."); window.location.href = "/studeffi/public/index.php/dashboard";</script>';
        }
    }
}