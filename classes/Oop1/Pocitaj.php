<?php

/**
 * Description of classes
 *
 * @author Admin
 */
class Oop1_Pocitaj {
    public $cislo1;
    public $cislo2;

    public function __construct($cislo1, $cislo2) {
        $this->cislo1 = $cislo1;
        $this->cislo2 = $cislo2;
    }
    
    public function sucet() {
        return  $this->cislo1 + $this->cislo2;
    }
    
    public function rozdiel() {
        return  $this->cislo1 - $this->cislo2;
    }
    
        public function sucin() {
        return  $this->cislo1 * $this->cislo2;
    }
    
        public function podiel() {
        return  $this->cislo1 / $this->cislo2;
    }

    
}
