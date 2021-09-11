<?php

    // Datas que forem criadas com dataTime() podem ser comparadas entre si;

    $dataA = new DateTime();
    $dataB = new DateTime();

    $dataB->setDate(2003, 12, 6);

    if($dataA > $dataB){
        echo "A primeira data é maior que a segunda! <br>";
    }
    else{
        echo "A segunda data é maior que a primeira! <br>";
    }