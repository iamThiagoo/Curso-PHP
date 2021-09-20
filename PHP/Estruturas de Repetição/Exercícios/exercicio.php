<?php

    $arr = ["Uva", 2, true, false, "Banana", 15555, "Beringela", "Thiago", 144, "Paulo", "BMW", "Ferrari", 688, NULL, 12.9, 25.5];
    $x = count($arr); // Conta o número de índices do seu array, independente do número;
    $i = 0;

    while($i < $x){
        if(is_string($arr[$i])){
            echo $arr[$i] . "<br>";
        }

        $i++;
    }

    echo "<br>Saiu da estrutura de repetição";
?>