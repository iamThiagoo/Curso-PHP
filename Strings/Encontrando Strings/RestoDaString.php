<?php

    // Existe uma função chamada de strstr() que o objetivo dela é achar uma palavra como o strpos() e strrpos()
    // e se ela achar aquela palavra, ela retornará o resto da string e não apenas seu índice.

    $frase = "A linguagem que estou estudando bastante e que estou gostando bastante é o PHP.";
    $buscando = strstr($frase, "bastante"); 

    echo $buscando . "<br>"; // Retornou o resto da nossa string pois é true
    if($buscando === false){
        echo "A palavra 'bastante' não foi encontrada! <br>";
    }

    $buscando2 = strstr($frase, "JavaScript");

    echo $buscando2 . "<br>";
    if($buscando2 === false){
        echo "A palavra 'JavaScript' não foi encontrada! <br>";
    }