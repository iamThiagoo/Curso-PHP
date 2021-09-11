<?php

    // Array Multidimensional nada mais é que um array com vários outros arrays, conhecido também como matriz
    // Para acessá-los, devemos utilizar os índices, o primeiro indicando qual o array e o segundo o índice dentro desse array
    // Ex: $arr[1][0] => Acessando o primeiro elemento do segundo array

    $arr = [
        [1,2,3],
        [4,5,6],
        [7,8,9],
        [10,11,12,13,14]
    ]; // Um array com outros 4 arrays dentro de si.

    print_r($arr);
    echo "<br>";
    echo $arr[2][2]; // Acessando o número 9

    // Interessante ressaltar que podemos usar o count dentro do nosso array multidimensional
    echo "<br>";
    echo count($arr[3]); // Ele retorna quantos valores há dentro do nosso último array que se encontra na matriz