<?php
    require_once('../classes/Oop1/Obsah.php');
    @$cislo1 = $_POST['cislo1'];
    @$cislo2 = $_POST['cislo2'];
    @$cislo3 = $_POST['cislo3'];
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="" method="post" name="kalkulacka">
            <p>1. číslo (malý kruh - priemmer)<br>
            <input type="text" name="cislo1">
            </p>
            <p>2. číslo (obdélnik - obvod)<br>
            <input type="text" name="cislo2">
            </p>
            <p>3. číslo (velký kruh - priemer)<br>
            <input type="text" name="cislo3">
            </p>
            <p>&nbsp;</p>
            <input type="submit" name="vypocitaj" value="Vypočítaj">
        </form>
        
        <p>
            <?php
                if(isset($_POST['vypocitaj'])){
                    
                    $checkNum1 = (!isset($cislo1) || ($cislo1 == '')) ? true : false;
                    $checkNum2 = (!isset($cislo2) || ($cislo2 == '')) ? true : false;
                    $checkNum3 = (!isset($cislo3) || ($cislo3 == '')) ? true : false;
                    
                    if($checkNum1 || $checkNum2 || $checkNum3){
                        if($checkNum1){
                        echo'Zabudli ste vložiť 1. číslo!<br>';                        
                        }
                        if($checkNum2){
                        echo'Zabudli ste vložiť 2. číslo!<br>';                        
                        }
                        if($checkNum3){
                        echo'Zabudli ste vložiť 3. číslo!<br>';                        
                        }
                    }else{
                        $vysledok = new Oop1_Obsah($cislo1, $cislo2, $cislo3);
                        echo "<hr><h3>Výsledok</h3>";
                        echo "Obsah kruhu je: " . $vysledok->obsah() . "<br>";
                        }
                    }
                
            ?>
        </p>
    </body>
</html>
