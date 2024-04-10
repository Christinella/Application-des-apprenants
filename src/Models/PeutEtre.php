<?php

namespace Models;


class FaitPartie
{
    private $_Id_Cours;
    private $_Id_User;
    private $_Absent;
    private $_Retard;



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
     * Get the value of _Absent
     */
    public function getAbsent()
    {
        return $this->_Absent;
    }

    /**
     * Set the value of _Absent
     */
    public function setAbsent($_Absent): self
    {
        $this->_Absent = $_Absent;

        return $this;
    }

    /**
     * Get the value of _Retard
     */
    public function getRetard()
    {
        return $this->_Retard;
    }

    /**
     * Set the value of _Retard
     */
    public function setRetard($_Retard): self
    {
        $this->_Retard = $_Retard;

        return $this;
    }
}