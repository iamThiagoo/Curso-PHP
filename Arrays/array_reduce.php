<?php

    // A função array_reduce tem como objetivo reduzir o array em apenas um valor
    // Como o segundo parâmetro você irá passar o nome da função em string

    $arr = range(1,50);

    function soma($a, $b){
        return $a + $b;
    }

    echo(array_reduce($arr, "soma"));
    // Ele vai ficar reutilizando a função até o resultado ser atigindo.