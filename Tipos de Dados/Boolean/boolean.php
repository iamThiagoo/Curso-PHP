<?php
    // Boolean recebe dois valores: True e False.
    // Alguns são considerados falsos como: 0   ,  0.0   , "0" , []  , NULL

    // Para checar se um valor é boolean usamos a função "is_bool();"

    if(is_bool(5 < 2)){
        echo "É boolean<br>";
    }   
    else{
        echo "Não é boolean<br>";
    }

    if(is_bool(2 < 0)){
        echo "É boolean<br>";
    }   
    else{
        echo "Não é boolean<br>";
    }

    if(is_bool(15)){
        echo "É boolean<br>";
    }   
    else{
        echo "Não é boolean<br>";
    }

    if(is_bool("EEEEEE")){
        echo "É boolean";
    }   
    else{
        echo "Não é boolean";
    }

?>