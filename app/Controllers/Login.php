<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Login extends Controller
{

    public function index()
    {

        helper(['form']);

        echo view('login');
    }

    public function auth()
    {

        $session = session();
        $model = new UserModel();
        $login = $this->request->getVar('login');
        $password = $this->request->getVar('password');

        $data = $model->where('login', $login)->first();

        if ($data) {

            $pass = $data['mdp'];
            $verify_pass = password_verify($password, $pass);

            if ($verify_pass) {

                $ses_data = [

                    'id' => $data['id'],
                    'nom' => $data['nom'],
                    'prenom' => $data['prenom'],
                    'type_user' => $data['type_user'],
                    'loggin_in' => TRUE
                ];

                $session->set($ses_data);
                return redirect()->to('/dashboard');

            } else {

                $session->SetFlashData('msg', 'Mauvais mot de passe');
                return redirect()->to('/login');

            }
            
        } else {

            $session->SetFlashData('msg', 'Mauvais login');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {

        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}