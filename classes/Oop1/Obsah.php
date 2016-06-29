<?php

class Oop1_Obsah {
    public $maly_kruh;
    public $velky_kruh;
    public $obdelnik;
    public $obsah;
    
    public function __construct($maly_kruh, $obdelnik, $velky_kruh){
        $this->maly_kruh = $maly_kruh;
        $this->obdelnik = $obdelnik;
        $this->velky_kruh = $velky_kruh;
        
    }
    
    public function obsah(){
        
        return ((M_PI*$this->velky_kruh*$this->velky_kruh) - 
                ((2*M_PI*$this->maly_kruh*$this->maly_kruh)+ 
                $this->obdelnik));
    }
    
}
