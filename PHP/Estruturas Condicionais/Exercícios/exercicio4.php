<?php

    $a = 10;
    if(is_numeric($a)){
        echo "<br>$a É um numeral.<br>";

        $a *= 2;

        if($a > 100){
            echo "O novo valor ficou acima de 100, se tornando $a<br>";
        }
        else{
            echo "O novo valor ficou abaixo de 100, se tornando $a<br>";
        }
    }
    else{
        echo "$a NÃO é um numeral<br>";
    }

    $b = "Thiago";
    if(is_numeric($b)){
        echo "<br>$b É um numeral.<br>";

        $b *= 2;

        if($b > 100){
            echo "O novo valor ficou acima de 100, se tornando $b<br>";
        }
        else{
            echo "O novo valor ficou abaixo de 100, se tornando $b<br>";
        }
    }
    else{
        echo "<br>$b NÃO é um numeral<br>";
    }

    $c = 140;
    if(is_numeric($c)){
        echo "<br>$c É um numeral.<br>";

        $c *= 2;

        if($c > 100){
            echo "O novo valor ficou acima de 100, se tornando $c<br>";
        }
        else{
            echo "O novo valor ficou abaixo de 100, se tornando $c<br>";
        }
    }
    else{
        echo "<br>$c NÃO é um numeral<br>";
    }

    $d = 18.9;
    if(is_numeric($d)){
        echo "<br>$d É um numeral.<br>";

        $d *= 2;

        if($d > 100){
            echo "O novo valor ficou acima de 100, se tornando $d<br>";
        }
        else{
            echo "O novo valor ficou abaixo de 100, se tornando $d<br>";
        }
    }
    else{
        echo "<br>$d NÃO é um numeral<br>";
    }

?>