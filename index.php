<?php
    $nombres="Juan Nelson";
    $edad=40;
    $dui="01805810-6";
    echo "Variable nombres -> ";
    echo $nombres;
    $arreglos=array('Juan','Maria', 'Pedro','Oscar','Maday','Luis');
    echo "<br>";
    //echo $arreglos[2];
    echo count($arreglos);
    echo "<br>";

    for($i=0; $i < count($arreglos) ; $i++) {
        echo $arreglos[$i];
        echo "<br>";
    }

    foreach ($arreglos as $nombres) {
        echo $nombres;
        echo "<br>";
    }

    while ($a < count($arreglos)) {
        echo "<br>";
        echo $arreglos[$a];
        $a=$a+1;
    }

    if($edad>=18){
        echo  "la persona es mayor de edad";
    }else{
        echo "la persona es menor de edad";
    }






?>

