<?php

    $operacao = "5" * 12;

    echo $operacao;
    echo "<br>";
    echo gettype($operacao); // Usamos gettype() para descobrir o tipo da nossa variável;

    echo "<br>"; 

    $nome = "Thiago";
    echo gettype($nome);

    echo "<br>"; 

    $float = 12.2;
    echo $float;
    echo "<br>"; 
    echo gettype($float); // Double === Float

?>