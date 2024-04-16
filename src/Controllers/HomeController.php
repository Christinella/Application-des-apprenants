<?php

namespace src\Controllers;

use src\Services\Reponse;

class HomeController
{

    use Reponse;

    public function connexion(): void
    {
        if (isset($_GET['erreur'])) {
            $erreur = htmlspecialchars($_GET['erreur']);
        } else {
            $erreur = '';
        }

        $this->render("connexion", ["erreur" => $erreur]);
    }

    public function acceuil()
    {
        $this->render("accueil", ["section" => 'menu', 'action' => 'connexion']);
    }

    public function promotion()
    {
        $this->render("Promotion", ["section" => 'menu', 'action' => 'inscription']);
    }

    public function kaka()
    {
        $this->render("formulaireReservation", ["erreur" => '']);
    }

    public function quit()
    {
        session_destroy();
        header('location: ' . HOME_URL);
        die();
    }

    public function new()
    {
        $this->render("dashboard", ["section" => 'new', 'action' => 'inscription']);
    }

    public function page404(): void
    {
        header("HTTP/1.1 404 Not Found");
        $this->render('404');
    }

    public function traitementConnexion(){
        var_dump($_POST); 



    }
}