<?php

    // Com a função strrpos(), podemos encontrar a última ocorrência da string
    // E o restante é a mesma funcionalidade que o strpos()

    $str = "A melhor coisa do mundo é comer marshmallows e mais marshmallows";
    $buscandoUltimaOcorrencia = strrpos($str, "marshmallows");
    echo $buscandoUltimaOcorrencia; // Nos retornou o esperado, o índice da última ocorrencia da palavra "marshmallows".

    echo "<br>";

    $buscandoUltimaOcorrencia2 = strrpos($str, "JavaScript");
    if($buscandoUltimaOcorrencia2 === false){
        echo "Palavra 'JavaScript' não encontrada!";
    }