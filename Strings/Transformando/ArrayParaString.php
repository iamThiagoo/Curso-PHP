<?php

    // Para converter um array em string iremos usar a função implode();
    // O parâmetro do implode() é o mesmo que a do explode(): Primeiro o separador e segundo o Array que será convertido;

    $cidades = ["Caxias do Sul", "Bento Gonçalves", "Farroupilha", "Porto Alegre", "Rio de Janeiro", "São Paulo"];
    $stringCidades = implode(", ", $cidades);
    echo $stringCidades;