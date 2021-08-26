<?php

    $arr = [1,5,84,147,12,4,7,6,7,8,9,17,25,4,8,92.555, 100,589,7555,1155,9988,8777,495710,2];

    function minhaFuncao(){
        global $arr;
        $novoArr = [];

        foreach($arr as $numero){
            if($numero > 7){
                array_push($novoArr, $numero);
            }
        }

        print_r($novoArr);
    }

    minhaFuncao();