<?php

    // A função para checar se o número é INTEIRO ou não é ----> is_int();
    // Ele irá retornar um valor booleano;
    // Para validar esse valor que iremos receber precisamos de uma estrutura condicional, pode ser um IF;

    $n = 5.5;

    if (is_int($n)){
        echo "É inteiro";
    }
    else{
        echo "Não é inteiro";
    }

?>