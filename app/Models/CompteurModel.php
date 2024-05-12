<?php
namespace App\Models;

use CodeIgniter\Model;

class CompteurModel extends Model
{

    protected $table = 'compteur';
    protected $primaryKey = 'ID'; // Clé primaire de la table

    protected $allowedFields = ['Nom_prop', 'Nom_voie', 'Num_voie', 'CP', 'Ville'];

    public function getCompteurs()
    {
        return $this->findAll();
    }

    public function getCompteurById($id)
    {
        return $this->find($id);
    }

    public function insertCompteur($data)
    {
        return $this->insert($data);
    }

    public function updateCompteur($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteCompteur($id)
    {
        return $this->delete($id);
    }

    // Dans votre modèle Compteurs_model.php par exemple

    public function getAPICodeInsee($codePostal,$ville)
    {
        $curl = curl_init();
        $url = "https://geo.api.gouv.fr/communes?codePostal=" . $codePostal . "&nom=" . $ville ;
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        $data = json_decode($response, true);
        $codeInsee = null;

        // Parcourir le tableau pour extraire le code INSEE
        foreach ($data as $item) {
            $codeInsee = $item['code'];
            break; // Sortir de la boucle après avoir trouvé le premier code INSEE
        }

        curl_close($curl);

        // Retourner le code INSEE extrait
        return $codeInsee;

    }
}

