<?php

    // Em alguns momentos, nós vamos querer saber quantos argumentos/parâmetros a nossa função recebe
    // Para isso temos as funções: func_get_args() e func_num_args();

    function soma($a, $b ,$c){
        print_r (func_get_args()); // Retorna um Array com os valores dos parâmetros. Ex: Array([0] => 8, [1] => 10, [2] => 15);

        echo "<br>";

        print_r (func_num_args()); // Retorna a quantidade de valores. EX: 3

        return $a + $b + $c;
    }

    soma(8,10,15);