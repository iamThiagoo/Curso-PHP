<?php

    // No PhP temos uma função chamada range() que cria um array de forma rápida
    $arr = range(1, 15); // Array de 1 a 15
    print_r($arr);

    // Também podemos com o range adicionar como o terceiro parâmetro a step dele
    $arr2 = range(0, 10000, 1000); // Ir de 0 a 10.000 porém indo de 1000 em 1000
    echo "<br>";
    print_r($arr2);