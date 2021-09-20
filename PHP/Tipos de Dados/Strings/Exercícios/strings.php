<?php

    $nome = "Thiago";
    $sobrenome = "Ferreira";
    $idade = 17;
    $cidade = "Caxias do Sul";

    echo "Olá, eu sou o $nome $sobrenome. Tenho $idade anos e moro em $cidade. <br>"; // Aspas duplas
    echo 'Olá, eu sou o $nome $sobrenome. Tenho $idade anos e moro em $cidade. <br>'; // Aspas simples
    echo 'Olá, eu sou o ', $nome, " ", $sobrenome , '. Tenho ' , $idade , ' anos e moro em ' , $cidade , '. <br>';
?>