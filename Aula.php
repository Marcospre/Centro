<?php
class Aula extends Espacio {
    private string $numero;
    private bool $proyector;
    private bool $pizarraDifgital;
    private bool $pantallaTactil;
    private Ordenador $ordenadores = array();
    
    
    
    public function addOrdenador(Ordenador $orde){
        if(count($this->ordenadores) < $this->getPuntosRed()){
            $this->ordenadores[] = $orde;
        }else{
            echo "No se pueden añadir mas ordenadores";
        }
        
    }
    
    public function addOrdenadores(Ordenador $ordenas){
        $sum = count($ordenas) + count($this->ordenadores);
        
        if($sum <= $this->getPuntosRed()){
            $this->ordenadores[] = ordenas;
        }
    }
    
    public function getNumero()
    {
        return $this->numero;
    }

   
    public function getProyector()
    {
        return $this->proyector;
    }

   
    public function getPizarraDifgital()
    {
        return $this->pizarraDifgital;
    }

   
    public function getPantallaTactil()
    {
        return $this->pantallaTactil;
    }

    
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    
    public function setProyector($proyector)
    {
        $this->proyector = $proyector;
    }

   
    public function setPizarraDifgital($pizarraDifgital)
    {
        $this->pizarraDifgital = $pizarraDifgital;
    }

   
    public function setPantallaTactil($pantallaTactil)
    {
        $this->pantallaTactil = $pantallaTactil;
    }

    function __construct(string $puntosRed, string $puntoWifi,string $numero, bool $proyector, bool $pizarraDifgital, bool $pantallaTactil){
        $this->numero = $numero;
        $this->protector = $proyector;
        $this->pizarraDigital = $pizarraDifgital;
        $this->pantallaTactil = $pantallaTactil;
        parent::setPuntosRed($puntosRed);
        parent::setPuntoWifi($puntoWifi);
    }
    
    
    
    
}