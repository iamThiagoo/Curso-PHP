<?php

    // Para descobrir o número de itens dentro de um array, se usa a função count.
    // E com ele você pode usar em estruturas condicionais, estruturas de repetição, etc.
    // É importante ressaltar que ele funciona com arrays: criado manualmente, criado com range e com arrays associativos.
    $arr = ["Thiago", 17, 20, "Caxias", "Jake", 29, "Hehe"];

    echo count($arr) . "<br>";

    if(count($arr) > 10){
        echo "Seu array têm mais de 10 itens!";
    }
    else{
        echo "Seu elemento têm menos de 10 itens!";
    }