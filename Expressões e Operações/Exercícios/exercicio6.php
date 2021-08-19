<?php

    $a = 5;
    $b = 5;
    $c = 50;

    if($a === $b){
        echo "$a e $b são idênticos. <br>";
    }

    if($a === $c){
        echo "$a e $c são idênticos.<br>";
    }

    if($a !== $b || $a != $c){
        echo "Não são idênticos.";
    }

?>