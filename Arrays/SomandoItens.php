<?php

    // Para somar todos os números de um array sem ter que usar for é utilizando a função array_sum() e como parâmetro
    // se passa o array escolhido

    $numeros = range(1, 1000);
    print_r($numeros);
    echo "<br><br>";

    echo "Resultado da soma: &nbsp;";
    print_r(array_sum($numeros)); // Resultado da soma de todos os números de 1 até 1000

    // Ele irá ignorar o que não é NÚMERO.