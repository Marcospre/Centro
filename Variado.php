<?php

class Variado extends Espacio {
    private string $tipo;
   
    
    function __construct($puntoWifi, $puntosRed, $tipo){
        $this->tipo = $tipo;
        parent::setPuntosRed($puntosRed);
        parent::setPuntoWifi($puntoWifi);
        
    }
    public function getTipo()
    {
        return $this->tipo;
    }

   
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    
}
?>