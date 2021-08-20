<?php

    // Com os OPERADORES DE CONVERSÃO (CAST) nós podemos forçar uma variável ser de um determinado tipo.
    // Nem todos são úteis, os mais utilizados são para converter uma string em número;
    // OPERADORES: int, bool, float, string, array, object e unset;
    // EX: $a = (float) "5.34" 

    $a = (int) "25";
    $b = "30";
    
    echo gettype($a);
    echo "<br>";
    echo gettype($b);

?>