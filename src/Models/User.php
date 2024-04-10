<?php

namespace Models;


class User
{
    private $_Id_User;
    private $_Nom;
    private $_Prenom;
    private $_Password;
    private $_Compte_Actif;
    private $_Email;
    private $_Id_Role;


    function __construct(array $datas = [])
    {
        foreach ($datas as $key => $value) {
            $this->$key = $value;
        }
    }

    /**
     * Get the value of _Id_User
     */
    public function getIdUser()
    {
        return $this->_Id_User;
    }

    /**
     * Set the value of _Id_User
     */
    public function setIdUser($_Id_User): self
    {
        $this->_Id_User = $_Id_User;

        return $this;
    }

    /**
     * Get the value of _Nom
     */
    public function getNom()
    {
        return $this->_Nom;
    }

    /**
     * Set the value of _Nom
     */
    public function setNom($_Nom): self
    {
        $this->_Nom = $_Nom;

        return $this;
    }

    /**
     * Get the value of _Prenom
     */
    public function getPrenom()
    {
        return $this->_Prenom;
    }

    /**
     * Set the value of _Prenom
     */
    public function setPrenom($_Prenom): self
    {
        $this->_Prenom = $_Prenom;

        return $this;
    }

    /**
     * Get the value of _Password
     */
    public function getPassword()
    {
        return $this->_Password;
    }

    /**
     * Set the value of _Password
     */
    public function setPassword($_Password): self
    {
        $this->_Password = $_Password;

        return $this;
    }

    /**
     * Get the value of _Compte_Actif
     */
    public function getCompteActif()
    {
        return $this->_Compte_Actif;
    }

    /**
     * Set the value of _Compte_Actif
     */
    public function setCompteActif($_Compte_Actif): self
    {
        $this->_Compte_Actif = $_Compte_Actif;

        return $this;
    }

    /**
     * Get the value of _Email
     */
    public function getEmail()
    {
        return $this->_Email;
    }

    /**
     * Set the value of _Email
     */
    public function setEmail($_Email): self
    {
        $this->_Email = $_Email;

        return $this;
    }

    /**
     * Get the value of _Id_Role
     */
    public function getIdRole()
    {
        return $this->_Id_Role;
    }

    /**
     * Set the value of _Id_Role
     */
    public function setIdRole($_Id_Role): self
    {
        $this->_Id_Role = $_Id_Role;

        return $this;
    }
}