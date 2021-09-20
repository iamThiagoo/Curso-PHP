<?php

    // Ela é muito utilizada porém é ORIENTADA a um ARRAY, então nós não iremos fazer um loop 
    // mas sim uma interação com um array.

    $cidades = ["Caxias do Sul", "Munich", "Paris", "Sarandi", "Tóquio", "Rio de Janeiro", "São Paulo", "Nova Iorque"];

    foreach($cidades as $cidade){ // Você chama o array ($cidades) e da o nome aos items ($cidade), sendo que pode ser qualquer nome
        echo "O nome do índice atual é: $cidade <br>";

        if($cidade === "Caxias do Sul"){
            echo "Cidade não encontrada <br>";
        }
    }

?>