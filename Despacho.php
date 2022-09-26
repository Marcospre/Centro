<?php
class Despacho extends Espacio {
    private string $nombre;
    private Ordenador $ordenador;
    
   
    public function getNombre()
    {
        return $this->nombre;
    }

    
    public function getOrdenador()
    {
        return $this->ordenador;
    }

    
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    
    public function setOrdenador($ordenador)
    {
        $this->ordenador = $ordenador;
    }

    function __construct(string $nombre, string $puntosRed, string $puntoWifi, Ordenador $ordenador){
        $this->nombre = $nombre;
        $this->ordenador = $ordenador;
        parent::setPuntosRed($puntosRed);
        parent::setPuntoWifi($puntoWifi);
    }
    
    
}

?>