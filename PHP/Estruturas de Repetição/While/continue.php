<?php

    // O Continue é bem parecido com o Break
    // A diferença entre eles é que o CONTINUE irá para a próxima execução da estrutura
    // Enquanto o Break quebra a estrutura

    $i = 0;
    while($i < 10){

        if($i === 6){ // Se você quer que dê certo, o CONTINUE precisa vir antes das instruções;
            $i++;
            continue;
        }

        echo "Estamos na ${i}° execução<br>";
        $i++;
    }

?>