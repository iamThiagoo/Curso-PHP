<?php

    // Também são considerados tipos de variáveis.
    // Este recurso acaba ajudando a criar funções com valores dinâmicos.
    // Sendo que nós podemos alterá-los a cada invocação.

    function falaNome($nome){
        echo $nome;
        echo "<br>";
    }

    falaNome("Thiago");
    falaNome("Nathália");

    function soma($a, $b){
        echo $a + $b;
        echo "<br>";
    }

    soma(10, 15);
    soma(55,10)
    
?>