<?php

    // Outra coisa que é possível no PHP é calcular a diferença entre os arrays (dois ou mais)
    // Para isso usaremos a função array_diff() e como parâmetros iremos colocar quantos arrays queremos.

    $arr = range(1,20);
    $arr2 = range(1,15);

    $diferenca = array_diff($arr, $arr2);
    print_r($diferenca);

    echo "<br>"; 

    // Vale ressaltar que vai retornar a diferença do primeiro em relação aos demais

    // Por exemplo se fosse o contrário
    print_r(array_diff($arr2, $arr));
    // Iria retornar vazio, pois foi encontrado todos os elementos do $arr2 em relação a variável $arr.