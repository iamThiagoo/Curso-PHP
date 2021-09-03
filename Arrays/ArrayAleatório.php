<?php

    // Para organizar o array de uma forma aleatório, se utiliza a função shuffle() e como parâmetro será passado o array
    // escolhido

    $musicas = [
        "Demeanor - Pop Smoke", 
        "Changes - XXXTENTACION", 
        "Witchblades - Lil Peep", 
        "Congratulations - Post Malone",
        "Dior - Pop Smoke", 
        "In the End - Linkin Park",
        "Psycho - Post Malone"
    ];
    shuffle($musicas);

    echo "Você está ouvindo agora $musicas[0]";
