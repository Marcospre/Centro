<?php

class CentroFP{
    private string $cod;
    private string $nombre;
    private $espacios = array();
    
    public function getCod()
    {
        return $this->cod;
    }

    
    public function getNombre()
    {
        return $this->nombre;
    }

    
    public function setCod($cod)
    {
        $this->cod = $cod;
    }

   
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    function __construct(string $cod, string $nombre){
        $this->cod = $cod;
        $this -> nombre= $nombre;
    }
}