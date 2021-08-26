<?php

    $listaDeCompras = ["Farinha", "Mandioca", "Sucrilhos", "Banana", "Refrigerante", "Pão de Queijo", "Jabuticaba", "Waffer", "Pastel"];

    function listaParaString($lista){
        $str = "Você levou esses items do mercado: ";
        $arr = implode(", ", $lista);

        return $str . $arr;
    }

    echo listaParaString($listaDeCompras);