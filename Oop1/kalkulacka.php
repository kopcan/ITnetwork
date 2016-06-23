<?php
    require_once('../classes/Oop1/Pocitaj.php');
    @$cislo1 = $_POST['cislo1'];
    @$cislo2 = $_POST['cislo2'];
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="" method="post" name="kalkulacka">
            <p>1. číslo<br>
            <input type="text" name="cislo1">
            </p>
            <p>2. číslo<br>
            <input type="text" name="cislo2">
            </p>
            <p>&nbsp;</p>
            <input type="submit" name="vypocitaj" value="Vypočítaj">
        </form>
        
        <p>
            <?php
                if(isset($_POST['vypocitaj'])){
                    
                    $checkNum1 = (!isset($cislo1) || ($cislo1 == '')) ? true : false;
                    $checkNum2 = (!isset($cislo2) || ($cislo2 == '')) ? true : false;
                    
                    if($checkNum1 || $checkNum2){
                        if($checkNum1){
                        echo'Zabudli ste vložiť 1. číslo!<br>';                        
                        }
                        if($checkNum2){
                        echo'Zabudli ste vložiť 2. číslo!<br>';                        
                        }          
                    }else{
                        $vysledok = new Oop1_Pocitaj($cislo1, $cislo2);
                        echo "<hr><h3>Výsledok</h3>";
                        echo "Súčet: " . $vysledok->sucet() . "<br>";
                        echo "Rozdiel: " . $vysledok->rozdiel() . "<br>";
                        echo "Súčin: " . $vysledok->sucin() . "<br>";
                        echo "Podiel: " . $vysledok->podiel() . "<br>";
                        }
                    }
                
            ?>
        </p>
    </body>
</html>
