<?php

namespace Models;


class Cours
{
    private $_Id_Cours;
    private $_Nom_Cours;
    private $_Debut_Cours;
    private $_Fin_Cours;
    private $_Code;
    private $_Id_Promo;


    function __construct(array $datas = [])
    {
        foreach ($datas as $key => $value) {
            $this->$key = $value;
        }
    }



    /**
     * Get the value of _Id_Cours
     */
    public function getIdCours()
    {
        return $this->_Id_Cours;
    }

    /**
     * Set the value of _Id_Cours
     */
    public function setIdCours($_Id_Cours): self
    {
        $this->_Id_Cours = $_Id_Cours;

        return $this;
    }

    /**
     * Get the value of _Nom_Cours
     */
    public function getNomCours()
    {
        return $this->_Nom_Cours;
    }

    /**
     * Set the value of _Nom_Cours
     */
    public function setNomCours($_Nom_Cours): self
    {
        $this->_Nom_Cours = $_Nom_Cours;

        return $this;
    }

    /**
     * Get the value of _Debut_Cours
     */
    public function getDebutCours()
    {
        return $this->_Debut_Cours;
    }

    /**
     * Set the value of _Debut_Cours
     */
    public function setDebutCours($_Debut_Cours): self
    {
        $this->_Debut_Cours = $_Debut_Cours;

        return $this;
    }

    /**
     * Get the value of _Fin_Cours
     */
    public function getFinCours()
    {
        return $this->_Fin_Cours;
    }

    /**
     * Set the value of _Fin_Cours
     */
    public function setFinCours($_Fin_Cours): self
    {
        $this->_Fin_Cours = $_Fin_Cours;

        return $this;
    }

    /**
     * Get the value of _Code
     */
    public function getCode()
    {
        return $this->_Code;
    }

    /**
     * Set the value of _Code
     */
    public function setCode($_Code): self
    {
        $this->_Code = $_Code;

        return $this;
    }

    /**
     * Get the value of _Id_Promo
     */
    public function getIdPromo()
    {
        return $this->_Id_Promo;
    }

    /**
     * Set the value of _Id_Promo
     */
    public function setIdPromo($_Id_Promo): self
    {
        $this->_Id_Promo = $_Id_Promo;

        return $this;
    }
}