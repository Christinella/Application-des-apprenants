<?php

namespace Models;


class FaitPartie
{
    private $_Id_Promo;
    private $_Id_User;


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
}