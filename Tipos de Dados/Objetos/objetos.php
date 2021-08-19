<?php

    // PHP possui o paradigma de orientação a objetos
    // Podemos criar classes e métodos 
    // Os objetos possuem métodos => ações
    // propriedades => características

    // Para criar um objetos, nós precisamos de um molde que é o CLASS

    class Pessoa{
        function falar(){ // Método
            echo "Olá, meu nome é Thiago. Tudo bem?";
        }
    }

    $thiago = new Pessoa();
    $thiago->idade = 17; // Propriedade

    echo $thiago->idade;
    echo "<br>";
    $thiago->falar();
?>
