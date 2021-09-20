<?php

    // Para transformar uma string em maiúscula ou minúscula nos iremos contar com o auxílio de 2 funções
    // São elas: strtolower() e strtoupper.

    $minhaString = "O meu cachorro comeu todo o meu Sucrilhos.";
    echo "String normal: '$minhaString' <br>";

    $minhaStringMaiuscula = strtoupper($minhaString);
    echo "String maiúscula: '$minhaStringMaiuscula' <br>";

    $minhaStringMinuscula = strtolower($minhaString);
    echo "String minúscula: '$minhaStringMinuscula' <br>";