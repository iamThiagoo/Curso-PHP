<?php

    // Caso a gente tenha muito elementos em um array e gostariamos de dividi-los em arrays menores usaremos a função:
    // array_chunk(), como parâmetros passaremos o array que está os elementos e o número que gostaríamos que cada array
    // tivesse

    $arr = range(1, 100);
    print_r($arr);

    echo "<br><br>";

    $chunk = array_chunk($arr, 25);
    print_r($chunk); // Assim teremos um array, com outros 4 arrays dentro de si com 25 elementos cada.

    echo "<br><br>";

    echo $chunk[1][24]; // Acessando o elemento "50"