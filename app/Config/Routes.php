<?php

use App\Controllers\AjoutCompteur;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 //routes par défault
$routes->get('/', 'Home::index');

//routes login
$routes->get('/login', 'Login::index');
$routes->post('/login/auth','Login::auth');
$routes->get('/Login/logout','Login::logout');

//routes dashboard
$routes->get('/dashboard', 'Dashboard::index');
$routes->post('/dashboard/deleteCompteur','Dashboard::deleteCompteur');

//routes ajout compteur
$routes->get('/ajoutcompteur','AjoutCompteur::index');
$routes->post('/ajoutcompteur/ajouter','AjoutCompteur::ajoutCompteur');
