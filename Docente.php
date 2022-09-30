<?php
class Docente extends Persona{
    private int $sueldo;
    private Despacho $despacho;
 
    public function getSueldo()
    {
        return $this->sueldo;
    }

    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;
    }
    
    public function getName(){
        return parent::getName();
    }

    function __construct($name , $DNI, $email = "", $sueldo = 0){
       
        
        parent::__construct($name, $DNI, $email);
        $this->sueldo = $sueldo;
  
    }
    
    
}