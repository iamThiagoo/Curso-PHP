<?php

    // É o mais utilizado pois é mais direto
    // (contador, condição, incremento/decremento)
    
    $arr = ["Thiago", "Thaís", 55, true, false, NULL, "Paulo", 14.5, 44, 99, "Gabriel"];

    for($i = 0; $i < count($arr); $i++){
    
        $indiceAtual = $arr[$i];

        if(is_string($indiceAtual)){
            echo $indiceAtual . "<br>";
        }
    }
?>