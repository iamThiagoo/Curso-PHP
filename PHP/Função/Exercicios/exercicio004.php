<?php

    function velocidadeMaxima($vel){
        if(is_numeric($vel)){
            echo "A velocidade máxima do carro é de $vel km/h. <br>";
        }
        else{
            echo "Ocorreu um erro! Por favor insira um número válido. <br>";
        }
    }

    velocidadeMaxima(250);
    velocidadeMaxima(125.5);
    velocidadeMaxima("teste");
    velocidadeMaxima("Thiago");