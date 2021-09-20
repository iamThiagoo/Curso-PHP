<?php

    $a = 14;
    $b = 80;
    $c = 15;

    $soma = $a + $b + $c;
    $subtracao = $a - $b - $c;
    $divisao = $a / $b / $c;
    $multi = $a * $b * $c;

    echo $soma, "<br>" , $subtracao, "<br>", $divisao, "<br>" ,$multi;

    echo "<br>";

    $a = 5 / 2;
    if(is_float($a)){
        echo "É float!";
    }
    else{
        echo "Não é float!";
    }

    
    $nome = "Thiago";
    $restoFrase = "legal!";
    echo "<br>" . $nome . " é um cara " .  $restoFrase; // O ponto "." concatena strings.

?>