<?php
namespace src\Models;

use src\Services\Hydratation;

class Utilisateurs {
    private $Id_User;
    private $Nom;
    private $Prenom;
    private $Password;
    private $Compte_Actif;
    private $Email;
    private $id_Role;

  use Hydratation;

  
}