<?php

    // Podemos interpolar variáveis em strings em duas formas;
    // Utilizando as aspas duplas e colocando a variável e também com chaves e o nome da variável
    // Não há diferenças entre elas

    $nome = "Thiago";

    echo "Olá, eu sou o $nome" . "<br>";
    echo "Olá, eu sou o {$nome}" . "<br>";