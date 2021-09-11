<?php

    // Com a função substr() podemos resgatar apenas uma parte da string;
    // Para isso o parâmetro dessa função é dividida em 3: string(que vamos achar algo), inicio(índice inicial), 
    // fim(comprimento da palavra) sendo o fim opcional;

    $str = "O cachorro roubou o chapéu do senhor!";
    echo substr($str, 2, 8); // Formou a palavra "cachorro";
            // string: total.
                // O índice que ela começa, lembrando que começa do 0.
                    // Seu comprimento, cachorro tem 8 letras, então foi 8 como último parâmetro.   

    echo "<br>";

    $str2 = "Thiago nasceu em Caxias do Sul";
    echo substr($str2, 17); // Último parâmetro é opcional = pega o resto da string.