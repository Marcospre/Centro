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

    function __construct($name, $DNI, $email, $sueldo, $despacho){
        $this->sueldo = $sueldo;
        $this->name = $name;
        $this->DNI = $DNI;
        $this->email = $email;
        $this->sueldo = $sueldo;
        $this->despacho = $despacho;
    }
    
    
}