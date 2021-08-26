<?php

    function aoQuadrado($numero){
        return $numero ** 2;
    }

    $conta1 = aoQuadrado(2);
    echo $conta1 . "<br>";

    $conta2 = aoQuadrado($conta1);
    echo $conta2 . "<br>";

    $conta3 = aoQuadrado($conta2);
    echo $conta3 . "<br>";