<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{

    protected $table= 'user';
    protected $allowedFields=['ID','login','mdp','type_user','nom','prenom'];
}