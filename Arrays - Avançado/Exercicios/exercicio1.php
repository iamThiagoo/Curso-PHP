<?php

    $arr = range(10, 45);

    for($i = 0; $i < count($arr); $i+=6){
        if($arr[$i] > 30){
            echo $arr[$i] . " => esse número é muito alto <br>";
        }
        else{
            echo $arr[$i] . "<br>";
        }
    }