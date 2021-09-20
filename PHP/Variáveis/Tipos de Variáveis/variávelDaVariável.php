<?php

    // Variável da variável parece complicado mas não é;
    // Nós iremos declarar uma variável normal com um "$"
    // Aí nós podemos criar com o nome do valor que ela for receber

    $x = "nome";
    $$x = "Thiago"; // É como se nós estivessemos declarando essa variável: $nome = "Thiago";

    echo $x;

    echo "<br>";

    echo $nome;

?>