<?php
class Alumno extends Persona{
    private string $codMatricula;
    private string $ciclo;
    private Docente $tutor;
   
   
    public function getTutor()
    {
        return $this->tutor;
    }

    
    public function setTutor($tutor)
    {
        $this->tutor = $tutor;
    }

    public function getCodMatricula()
    {
        return $this->codMatricula;
    }

    
    public function getCiclo()
    {
        return $this->ciclo;
    }

    
    public function setCodMatricula($codMatricula)
    {
        $this->codMatricula = $codMatricula;
    }

   
    public function setCiclo($ciclo)
    {
        $this->ciclo = $ciclo;
    }
    
    

    function __construct($name, $DNI, $email, $codMatricula, $ciclo, $tutor){
       $this->codMatricula = $codMatricula;
       $this->ciclo = $ciclo;
       $this->name = $name;
       $this->DNI = $DNI;
       $this->email = $email;
       $this->tutor = $tutor;
    }
    
   
    
   
    
}