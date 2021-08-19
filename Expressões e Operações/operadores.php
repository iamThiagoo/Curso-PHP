<?php

    // O objetivo de um operador é calcular e retornar um valor ou retornar um boolean
    // Temos alguns operadores muito utilizados como: +, -, **, > , < , >= , <= e etc.

    function elevado($a, $b){
        echo $a ** $b; // 5 x 5 x 5 x 5 x 5
        echo "<br>";
    }

    elevado(5, 5);

    function soma($a, $b){
        echo $a + $b;
        echo "<br>";
    }

    soma(10, 6);

    function conta($a, $b, $c){
        echo $a + $b * $c;
    }

    conta(1, 3, 6);

?>