<?php 

    // Podemos alterar a case de apenas uma palavras com as seguintes funções do PHP
    // São elas: ucfirst() e ucwords();

    // Primeira letra em maiúscula, nesse caso o "o" da frase
    $frase = "o rato roeu a roupa do Rei de Roma";
    echo ucfirst($frase) . "<br>";

    // Todas as letras das palavras em maiúsculas.
    $frase2 = "o menino olhou para o céu e após, chorou.";
    echo ucwords($frase2);