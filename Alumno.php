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
    
    public function printHTML()
    {
        echo '<h2>Datos del Alumno</h2>';
        echo '<p>Nombre : '. parent::getName().'</p>';
        echo '<p>DNI : '.parent::getDNI().'</p>';
        echo '<p>Email : '.parent::getEmail().'</p>';
        echo '<p>Codigo Matricula : '.$this->codMatricula.'</p>';
        echo '<p>Ciclo : '.$this->ciclo.'</p>';
        echo '<p>Tutor : '.$this->tutor->getName().'</p>';
        
    }
    
    public function toHTML(){
        return  '<h2>Datos del Alumno</h2>'.
                '<p>Nombre : '.parent::getName() .'</p>'.
                '<p>DNI : '.parent::getDNI().'</p>'.
                '<p>Email : '.parent::getEmail().'</p>'.
                '<p>Codigo Matricula : '.$this->codMatricula.'</p>'.
                '<p>Ciclo : '.$this->ciclo.'</p>'.
                '<p>Tutor : '.$this->tutor->getName().'</p>';
    }
    
    public function generarCod(){
        return $this->ciclo.$this->DNI;
    }
    

    function __construct($name, $DNI, $email, $ciclo, $tutor){
       
        parent::__construct($name, $DNI, $email);
       $this->ciclo = $ciclo;
       $this->tutor = $tutor;
       $this->codMatricula =$ciclo.$DNI;
    }
    
    public static function getAlumnosUnselizados($nombreFichero){
        
        $s = file_get_contents($nombreFichero);
        $alumnos = unserialize($s);
        return $alumnos;
    }
    
    public static function guardarSerializado($nombreFichero, $alumnos){
        // guardar coches en archivo
        $s = serialize($alumnos);
        // almacenamos $s en algún lugar en el que page2.php puede encontrarlo.
        file_put_contents($nombreFichero, $s);
    }
   
    
}