<?php   

    // Podemos calcular a diferença entre duas datas com o método diff();

    $dataA = new DateTime();
    $dataA->setDate(2003,12,6);

    $dataB = new DateTime();

    $diferença = $dataB->diff($dataA);
    
    print_r($diferença);