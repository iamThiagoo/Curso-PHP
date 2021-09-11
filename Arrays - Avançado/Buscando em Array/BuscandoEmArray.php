<?php

    // Com a função in_array() nós conseguimos verificar se um item está no nosso array
    // Ele retornara boolean e passaremos dois parâmetros: o item, o array

    $arr = ["Thiago", 17, "Caxias do Sul", "Estudante", "Jake", 8, "Programador"];

    if(in_array("cabelo", $arr)){
        echo "Achei o item <br>";
    }
    else{
        echo "Não existe o item <br>";
    }   

    if(in_array("nome", $arr)){
        echo "Achei o item <br>";
    }
    else{
        echo "Não existe o item <br>";
    }

    if(in_array("Thiago", $arr)){
        echo "Achei o item <br>";
    }
    else{
        echo "Não existe o item <br>";
    }

    if(in_array("Estudante", $arr)){
        echo "Achei o item <br>";
    }
    else{
        echo "Não existe o item <br>";
    }