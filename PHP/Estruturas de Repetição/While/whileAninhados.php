<?php

    // Como no IFS, nós podemos aninhar as nossas estruturas de repetições.
    // É importante ressaltar que o WHILE EXTERNO vai executar todo o WHILE INTERNO antes de ir para a próxima execução do loop.

    $x = 0;

    while($x <= 10){
        echo "while EXTERNO $x <br>";

        $y = 0; // Outra estrutura de controle para o while INTERNO
        while($y <= 5){
            echo "while INTERNO $y <br>";

            $y++; // Não esqueça de incrementar para ir para a próxima execução no nosso while INTERNO
        }

        if($x === 9){
            echo "<br>Parando a execução, chegamos na ${x}° execução. Infelizmente não podemos continuar...";
            break; // Juntando com o break para sair da estrutura de repetição quando chegar na 9° execução.
        }

        echo "<br><br>";

        $x++;
    }

?>