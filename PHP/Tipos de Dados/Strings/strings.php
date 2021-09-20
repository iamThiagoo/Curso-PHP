<?php 

    $nome = "Thiago";

    echo "Eu sou o $nome <br>";
    echo 'Eu sou o $nome <br>'; // Apenas as ASPAS DUPLAS irão interpretar as variáveis.


    // Para checar se uma string é de fato uma string usamos a função: is_string() e passamos um parâmetro dentro dela
    if(is_string("Olá, tudo bem?")){
        echo "É uma string.<br>";
    }
    else{
        echo "Não é uma string.<br>";
    }

    if(is_string(5555.55)){
        echo "É uma string.";
    }
    else{
        echo "Não é uma string.";
    }

?>