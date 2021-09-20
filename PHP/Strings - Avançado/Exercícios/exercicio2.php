<?php

    $str = "O rato roeu a roupa do Rei de Roma";
    echo $str . "<br>";
    
    $contador = 0; // Podemos deixar o contador dentro ou fora, se for deixar dentro use "static" para que assim ele não zere toda vez que for fazer o loop

    for($i = 0; $i < strlen($str); $i++){
        // static $contador = 0;

        if($str[$i] === "a"){
            $contador++;
        }
    }

    echo "Nós temos nessa string, $contador a's no total.";
?>