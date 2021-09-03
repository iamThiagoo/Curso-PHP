<?php

    $nome = "Jake";
    $animal = "cachorro";
    $raça = "vira-lata";
    $idade = 8;
    $peso = 14;
    $cor = "Branco e Preto";
    $castrado = true;

    $cadastroAnimal = compact("nome", "animal", "raça", "idade", "peso", "cor", "castrado");

    print_r($cadastroAnimal);
    echo "<br><br>";

    foreach($cadastroAnimal as $caracteristica => $value){
        echo "$caracteristica: $value <br>";
    }