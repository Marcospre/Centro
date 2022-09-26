<?php

class Ordenador{
    private string $SO;
    private string $CodHZ;
    
    public function getSO()
    {
        return $this->SO;
    }

    
    public function getCodHZ()
    {
        return $this->CodHZ;
    }

    
    public function setSO($SO)
    {
        $this->SO = $SO;
    }

  
    public function setCodHZ($CodHZ)
    {
        $this->CodHZ = $CodHZ;
    }

    function __construct(string $SO, string $CodHZ){
        $this->SO = $SO;
        $this->CodHZ = $CodHZ;
    }
    
    
}