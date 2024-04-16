<?php
// var_dump($_SERVER);

use src\Controllers\HomeController;

$url = $_SERVER['REDIRECT_URL'];
$methode = $_SERVER['REQUEST_METHOD'];

$HomeController = new HomeController;

switch ($url) {
    case '/test':
        echo password_hash('mada', PASSWORD_DEFAULT);
        break;
    case '/':
        if ($methode == 'GET'){
            $HomeController->connexion();  
        }else {
            $HomeController->traitementConnexion();
        }
            
        $HomeController->connexion();
        break;

    case '/acceuil':
        $HomeController->acceuil();
        break;

    case '/promotions':
        $HomeController->promotion();
        break;


    default:
        $HomeController->page404();
        break;
}
