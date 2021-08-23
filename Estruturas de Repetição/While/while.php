<?php

    // Estrutura de Repetição pode executar um código "n" vezes.
    $x = 0;

    while($x <= 10){
        echo $x . "<br>";
        $x++;
    }

    echo "<br>";

    // Também pode fazer o seguinte:
    $y = 0;

    while($y <= 10){
        echo $y . "<br>";
        $y += 2; // y = y + 2;
    }

    echo "<br>";

    // Podemos usar ifs também
    $z = 0;

    while($z <= 20){
        if($z % 2 != 0){
            echo $z . "<br>";
        }

        $z++;
    }

?>