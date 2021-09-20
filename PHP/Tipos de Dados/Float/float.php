<?php

    // Floats são TODOS os números com casas decimais
    // E são separados por .

    $numero = 5.22222;

    if(is_float($numero)) {
        echo "Esse número é um float.";
    }
    else{
        echo "Esse número não é um float.";
    }

    echo "<br>";

    $numero2 = 5;
    if(is_float($numero2)){
        echo "Esse número é um float.";
    }
    else{
        echo "Esse número não é um float.";
    }

    // HARD-CODE: É quando eu escrevo/imponho algo de forma manual
    // EXEMPLO: if(is_float(655665566500));

?>