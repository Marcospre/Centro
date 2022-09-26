<?php

abstract class Persona{
    private string $name;
    private string  $DNI;
    private string  $email;
    
    abstract function __construct(?string $name,string  $DN, ?string  $email );
        
    
    
    
}
?>