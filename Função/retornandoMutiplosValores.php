<?php

    // Quando nós quisermos retornar múltiplos valores atráves de uma função, nós podemos criar um Array
    // com esses valores e acessa-lós através de seus índices de forma isolada com a nova variável que contém o retorno.

    function meusDados($nome, $idade){
        $apresentação = "Olá $nome";
        $continuacao = ", soube que você possui $idade anos!";

        return [$apresentação, $continuacao]; // Virou um array
    }

    $dados = meusDados("Thiago", 17);

    print_r($dados);

    echo "<br>";

    echo $dados[0] . $dados[1]; // Concatenei os dois índices do meu array, formando assim uma frase