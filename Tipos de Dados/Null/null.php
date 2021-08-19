<?php

    // NULL é definido por ele mesmo, sendo NULL
    // Um caso de uso do NULL é checar se um valor é vazio ou não, usando a função is_null();

    $null = NULL; // Podemos utilizá-lo para informar a um outro programador que vamos utilizar essa variável porém naquele momento do código, ela está vazia.

    if(is_null($null)){
        echo "É NULL!";
    }
    else{
        echo "Não é NULL!";
    }

?>