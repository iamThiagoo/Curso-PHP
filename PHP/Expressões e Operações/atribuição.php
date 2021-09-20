<?php

    // O mais comum é o = (para atribuir um valor a uma variável) porém nós possuímos outros operadores
    // Temos também: +=, -=, /=, *= e %=
    // Cada um deles fará uma operação antes da atribuição

    // +=
    $a = 5;
    $a += 15; // $a = $a + 15;
    echo $a . "<br>";

    // -=
    $b = 50;
    $b -= 25; // $b = $b + 25;
    echo $b . "<br>";

    // *=
    $c = 10;
    $c *= 15; // $b = $c * 15;
    echo $c . "<br>";

    // /=
    $d = 100;
    $d /= 3; // $d = $d / 3;
    echo $d . "<br>";


    $e = 15;
    $f = 99;
    $f += $e;
    echo $f;

?>