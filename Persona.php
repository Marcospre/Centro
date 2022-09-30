<?php

abstract class Persona{
    private string $name;
    private string  $DNI;
    private string  $email;
    
    
    public function getName(){
        return $this->name;
    }
    
    public function getDNI(){
        return $this->DNI;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    
    function __construct(string $name,string  $DNI, string  $email ){
        $this->name = $name;
        $this->DNI = $DNI;
        $this->email = $email;
    }
    
   
        
}
?>