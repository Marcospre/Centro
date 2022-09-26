<?php
abstract class Espacio{
    
    private bool $puntoWifi;
    private int $puntosRed;
   
    
    function getPuntoWifi(){
        return $this->puntoWifi;
    }
    function getPuntosRed(){
        return $this->puntosRed;
    }
    function setPuntoWifi(bool $puntoWifi){
        $this->puntoWifi = $puntoWifi;
    }
    function setPuntosRed(int $puntosRed){
        $this->puntosRed = $puntosRed;
    }
    
    
}