<?php

    $a = 3;
    $b = 6;
    $c = 6;

    if($a === 3 && $b === 6){ // As duas condições estão corretas então vai ser impresso esse bloco.
        echo "A e B são verdadeiros. <br>";
    }
    if($a === 3 || $b === 9){ // Uma condição é verdadeira, já é o suficiente para ser impressa.
        echo "A ou B é verdadeiro. <br>";
    }

?>