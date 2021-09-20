<?php

    $velocidadeCarro = 66;
    $velocidadeMaxima = 60;

    if($velocidadeCarro > $velocidadeMaxima){
        echo "O motorista foi multado por excesso de velocidade!";
    }
    else if($velocidadeCarro === $velocidadeMaxima){
        echo "O motorista está em no limite!";
    }
    else{
        echo "O motorista está na velocidade correta!";
    }
?>