<?php

    function apresentacao($nome, $idade){
        if(is_string($nome) && (is_int($idade) && $idade < 120)){
            echo "Olá eu sou o $nome e tenho $idade anos.<br>";
        }
        else{
            echo "Por favor, coloque valores válidos! <br>";
        }
    }

    apresentacao("Thiago", 17);
    apresentacao(555, 120);
    apresentacao("Thiago", 1222);
    apresentacao(true, 17);