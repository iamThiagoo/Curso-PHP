<?php

    function definirCorCarro($cor = "vermelho"){
        return "A cor do carro é $cor." . "<br>";
    }

    echo definirCorCarro();
    echo definirCorCarro("azul");
    echo definirCorCarro("verde");
    echo definirCorCarro("prata");
    echo definirCorCarro();