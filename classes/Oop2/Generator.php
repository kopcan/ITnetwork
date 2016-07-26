<?php

class Oop2_Generator {
    public $array = array(
        array("Veľký","Malý","Tlstý","Chudý","Nedočkavý","Perverzný","Ambiciózny","Nedočkavý","Úchvatny","Dobrodužný"),
        array("manažér","gorila","pes","doktor","sused","traktor","parašutista","krokodil","leguan","drak"),
        array("tančil","spieval","pózoval","utekal","cvicil","lietal","sa učil","ležal","oddychoval","štrikoval"),
        array("pod stolom","na streche","v umývadle","na záchode","na pláži","v ústave","v pizzerii","v obchode","v autoservise","na tatre")
       );
    
    
    public function vypis(){

        echo "<ul>";
        for($i=0; $i<9; $i++){
            
            echo "<li>".$this->array[0][rand(0,count($this->array[0])-1)]." ".$this->array[1][rand(0,count($this->array[1])-1)]." ".$this->array[2][rand(0,count($this->array[2])-1)]." ".$this->array[3][rand(0,count($this->array[3])-1)].".</li>";
        }
        echo "<ul>";
    }
}
