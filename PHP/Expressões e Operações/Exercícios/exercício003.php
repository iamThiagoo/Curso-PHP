<?php

    $numero = 12;
    $numero2 = 10;

    $soma = $numero + $numero2;
    echo $soma . "<br>";

    $subtracao = $numero - $numero2;
    echo $subtracao . "<br>";

    $divisao = $numero / $numero2;
    echo $divisao . "<br>";

    $multiplicacao = $numero * $numero2;
    echo $multiplicacao . "<br>";

    $resultado = $soma + $subtracao  + $divisao + $multiplicacao;

    echo "<br>" . "RESULTADO = " . $resultado;

    $resto = $numero % $numero2;
    echo "<br>". "<br>". "RESTO DE 12 POR 10 = " . $resto; // 12 / 10 = 2 pois 10 * 1 = 10 e sobrará 2.
?>