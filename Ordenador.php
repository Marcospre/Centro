<?php

class Ordenador{
    private string $SO;
    private string $CodHZ;
    private bool $esSobremesa;
    
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
    public function getesSobremesa(){
        
        return $this->esSobremesa ?"Si":"No";
    }
    
    public function toString(){
        return $this->getCodHZ()."-".$this->getSO()."- Sobremesa: ".$this->getesSobremesa();
    }

    function __construct(string $SO, string $CodHZ, bool $esSobremesa){
        $this->SO = $SO;
        $this->CodHZ = $CodHZ;
        $this->esSobremesa = $esSobremesa;
    }
    
    
}