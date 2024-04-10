<?php

namespace Models;


class Promo
{
    private $_Id_Promo;
    private $_Nom_Promo;
    private $_Date_Debut;
    private $_Date_Fin;
    private $_Nombre_Apprenants;


    function __construct(array $datas = [])
    {
        foreach ($datas as $key => $value) {
            $this->$key = $value;
        }
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

    /**
     * Get the value of _Nom_Promo
     */
    public function getNomPromo()
    {
        return $this->_Nom_Promo;
    }

    /**
     * Set the value of _Nom_Promo
     */
    public function setNomPromo($_Nom_Promo): self
    {
        $this->_Nom_Promo = $_Nom_Promo;

        return $this;
    }

    /**
     * Get the value of _Date_Debut
     */
    public function getDateDebut()
    {
        return $this->_Date_Debut;
    }

    /**
     * Set the value of _Date_Debut
     */
    public function setDateDebut($_Date_Debut): self
    {
        $this->_Date_Debut = $_Date_Debut;

        return $this;
    }

    /**
     * Get the value of _Date_Fin
     */
    public function getDateFin()
    {
        return $this->_Date_Fin;
    }

    /**
     * Set the value of _Date_Fin
     */
    public function setDateFin($_Date_Fin): self
    {
        $this->_Date_Fin = $_Date_Fin;

        return $this;
    }

    /**
     * Get the value of _Nombre_Apprenants
     */
    public function getNombreApprenants()
    {
        return $this->_Nombre_Apprenants;
    }

    /**
     * Set the value of _Nombre_Apprenants
     */
    public function setNombreApprenants($_Nombre_Apprenants): self
    {
        $this->_Nombre_Apprenants = $_Nombre_Apprenants;

        return $this;
    }
}