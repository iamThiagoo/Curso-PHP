<?php

    // Depurar o código = Tentar achar algum problema no código
    // Para depurar código a gente utiliza 2 funções para verificar os dados formatados:
    // São eles: print_r e var_dump(), sendo que os dois apresentam os dados de uma forma semelhante
    // Porém o var_dump() exibe de uma forma "human readable", ou seja, uma forma mais bonita de ser lido para um humano
    
    $arr = ["Thiago", "Matheus", "Jéssica", "Steve", "Bill", 17, "50"];

    var_dump($arr);
    // Resultado: array(7) { [0]=> string(6) "Thiago" [1]=> string(7) "Matheus" [2]=> string(8) "Jéssica" [3]=> string(5) "Steve" [4]=> string(4) "Bill" [5]=> int(17) [6]=> string(2) "50" }

    echo "<br>";

    print_r($arr);
    // Resultado: Array ( [0] => Thiago [1] => Matheus [2] => Jéssica [3] => Steve [4] => Bill [5] => 17 [6] => 50 )


    // Dá para perceber que a função var_dump() é mais completa por nos mostrar: 
    // 1° Quantos índices nós temos
    // 2° Qual o tipo de dados de cada índice

