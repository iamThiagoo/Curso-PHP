<?php

    $arr = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

    for($i = 0; $i < count($arr); $i++){
        
        $numeroAtual = $arr[$i];

        if($numeroAtual % 2 === 0){
            echo $numeroAtual . "<br>";
        }
    }

?>