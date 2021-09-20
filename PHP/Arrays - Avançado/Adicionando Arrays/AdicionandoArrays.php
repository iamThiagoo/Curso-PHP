<?php

    // Para adicionar arrays de forma individual, pode ser feito colocando o índice e acrescentando um dado

    $arr = [];

    $arr[0] = "Thiago";
    $arr[1] = 17;

    print_r($arr);

    echo "<br>";

    // Caso você não saiba em qual índice que o seu array está, pode usar a função array_push();
    array_push($arr, "Caxias do Sul");
    print_r($arr);
    echo "<br>";

        // Também posso fazer desse jeito
        $arr[] = "Brasil";
        print_r($arr);