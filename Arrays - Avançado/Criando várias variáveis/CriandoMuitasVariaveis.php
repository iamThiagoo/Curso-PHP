<?php

    // No PHP também podemos fazer uma desconstrução, ou seja, colocar uma varíaveis para cada índice do nosso array
    // Para isso iremos usar a função list() e como parâmetro passaremos variáveis = nome do array escolhido

    $pessoa = [
        "Thiago", 
        17,
        "estudante",
        "Caxias do Sul",
        "viajar"
    ];

    print_r($pessoa);
    echo "<br>";

    list($nome, $idade, $cargo, $cidadeNatal, $entretenimento) = $pessoa; 

    echo $nome; // Imprime "Thiago" na tela como o esperado
    echo "<br>";
    echo $idade;
    echo "<br>";

    echo "Me chamo $nome, tenho $idade anos e atualmente sou $cargo. Moro e sempre morei em $cidadeNatal e o que mais gosto de fazer é $entretenimento.";