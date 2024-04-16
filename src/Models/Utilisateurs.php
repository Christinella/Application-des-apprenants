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

  public function getId(): int
  {
      return $this->Id_User;
  }


  public function setId(int $Id_User): void
  {
      $this->Id = $Id_User;
  }

  
  public function getNom(): string
  {
      return $this->Nom;
  }

  
  
  public function setNom(string $Nom): void
  {
      $this->Nom = $Nom;
  }



  public function getPrenom(): string
  {
      return $this->Prenom;
  }


  public function setPrenom(string $Prenom): void
  {
      $this->Prenom = $Prenom;
  }

 
  public function getPassword(): string
  {
      return $this->Password;
  }


  public function setPassword(string $Password): void
  {
    
    $this->Password = $Password; 
  }

 
  public function getMail(): string
  {
      return $this->Email;
  }


  public function setMail(string $Email): void
  {
      $this->Mail = $Email;
  }

  public function getCompteActif(): string
  {
      return $this->Compte_Actif;
  }


  public function setCompteActif(string $Compte_Actif): void
  {
      $this->Compte_Actif = $Compte_Actif;
  }

  public function getIdRole(): string
  {
      return $this->id_Role;
  }


  public function setIdRole(string $id_Role): void
  {
      $this->id_Role = $id_Role;
  }
}
