<?php
class Oop1_Garaz {
    public $auto;
    
    public function vloz($auto){
        $this->auto = $auto;
    }
    
    public function __toString(){
        return "V garĂˇĹľi je auto s SPZ " . $this->auto->spz . " barvy " . $this->auto->barva . ".";
    }
    
}

class Oop1_Auto {
    public $barva;
    public $spz;
    public $typ;
    public $tovarenskaZnacka;
    public $rokVyroby;
    
    
    
    public function __construct($barva, $spz, $typ, $tovarenskaZnacka, $rokVyroby){
        $this->barva = $barva;
        $this->spz = $spz;
        $this->typ = $typ;
        $this->tovarenskaZnacka = $tovarenskaZnacka;
        $this->rokVyroby = $rokVyroby;
    } 
    
    public function parkuj($garaz){
        $garaz->vloz($this);
    }
}


