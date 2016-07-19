<?php
    require_once('../classes/Oop1/Parkuj.php');
    @$spz = $_POST['spz'];
    @$barva = $_POST['barva'];
    @$typ = $_POST['typ'];
    @$znacka = $_POST['znacka'];
    @$vyrobeno = $_POST['vyrobeno'];
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="" method="post" name="auto">
            <p>SPZ<br>
            <input type="text" name="spz">
            </p>
            <p>Barva<br>
            <input type="text" name="barva">
            </p>
            <p>Typ<br>
            <input type="text" name="Ttyp">
            </p>
            <p>Značka<br>
            <input type="text" name="znacka">
            </p>
            <p>Vyrobeno<br>
            <input type="text" name="vyrobeno">
            </p>
            <p>&nbsp;</p>
            <input type="submit" name="zaparkuj" value="Zaparkuj">
        </form>
        
        <p>
            <?php
                if(isset($_POST['zaparkuj'])){
                    
                    $checkSPZ = (!isset($spz) || ($spz == '')) ? true : false;
                    $checkBarva = (!isset($barva) || ($barva == '')) ? true : false;
                                        
                    if($checkSPZ || $checkBarva){
                        if($checkSPZ){
                        echo'Zabudli ste vložiť údaj o SPZ!<br>';                        
                        }
                        if($checkBarva){
                        echo'Zabudli ste vložiť Farbu auta!<br>';                        
                        }
                       
                    }else{
                        $auto = new Oop1_Auto($barva, $spz, $typ,$znacka,$vyrobeno);
                        $garaz = new Oop1_Garaz();
                        $auto->parkuj($garaz);
                        //$auto->parkuj();
                        //$garaz = new Oop1_Garaz($barva, $spz);
                        echo "V garáži je zaparkované: $garaz <br>";
                        //echo "SPZ: ". $vysledok->spz();
                        }
                    }
                
            ?>
        </p>
    </body>
</html>