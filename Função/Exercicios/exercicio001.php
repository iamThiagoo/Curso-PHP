<?php

    $cidades = ["Caxias do Sul", "São Paulo", "Cuíaba", "Rio de Janeiro", "Recife", "Salvador"];

    $convertendo = implode("...  ", $cidades); // Implode() transforma o seu ARRAY em uma única STRING, e você escolhe
    // qual caracter que vai separá-los.

    echo $convertendo;