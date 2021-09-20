<?php

    // Com a função array_slice() podemos resgatar uma faixa de elementos do array
    // Passamos 3 parâmetros: o array, índice inicial e quantos elementos queremos pegar a partir do índice 

    $arr = ["Caxias do Sul", "São Paulo", "Belo Horizonte", "Roma", "Munich", "Paris"];

    print_r(array_slice($arr, 2, 4)); // Retorna o indice inicial e o número de índices que resgatamos

    // Lembrando que o último parâmetro é opcional