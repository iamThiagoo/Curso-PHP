<?php

    // O valor da mesma é mantido e alterado a cada execução de uma função
    // É interessante pois geralmente as varipaveis de escopo local sempre serão resetadas.

    function Numero(){
        $numero = 5;
        $numero++;

        echo $numero;
    }

    Numero();
    Numero();
    Numero();

    function Numero2(){
        static $numero = 8; // O objetivo é manter o valor após a chamada da função para que não seja resetada
        $numero++;

        echo $numero;
    }

    Numero2();
    Numero2();
    Numero2();
?>