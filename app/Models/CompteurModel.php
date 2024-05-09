<?php
namespace App\Models;

use CodeIgniter\Model;

class CompteurModel extends Model{

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
}
