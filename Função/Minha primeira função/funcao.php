<?php

    function soma($a, $b){
        global $arr;

        $c = $a + $b;
        return array_push($arr, $c); //  array_push(O nome do nosso array, variável que entrará nela);
    }

    $arr = [];
    
    soma(3, 5);
    soma(1, 15);
    soma(3, 25);
    soma(5, 100);
    soma(55, 600);

?>