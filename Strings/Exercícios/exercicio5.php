<?php

    $str = "Carro - Navio - Helicóptero - Barco - Jangada";
    $arr = explode("-", $str);
    
    for($i = 0; $i < count($arr); $i++){
        static $contador = 1;

        echo "Item $contador: $arr[$i] <br>";

        $contador++;
    }