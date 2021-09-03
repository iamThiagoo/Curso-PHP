<?php

    // Com a função array_reverse() podemos obter o array ao inverso

    echo "Array normal: <br>";
    $arr = ["Caxias do Sul", "São Paulo", "Montauri", "Porto Alegre", "Rio de Janeiro"];
    print_r($arr);

    echo "<br><br>";

    $arrReverse = array_reverse($arr);
    
    echo "Array invertido: <br>";
    print_r($arrReverse);