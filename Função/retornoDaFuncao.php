<?php

    function soma($a, $b){
        return $a + $b;
    }

    soma(5,5); // Blz, a gente tem o resultado mas e se eu quiser usar o resultado dele no meu código, o que faço?

    $conta1 = soma(40, 20); // É chamar a função com o seu devido parâmetro dentro de uma variável.
    $conta2 = soma($conta1, 150);
    
    echo $conta1 . "<br>";
    echo $conta2 . "<br>";