<?php

    // Temos mais dois métodos para o DateTime(); 
    // O setDate() e o setTime():
    // O setDate: Recebe ano, mês, dia, alterando completamente a data;
    // O setTime: Recebe hora, minuto e segundo, alterando o tempo da data;
    
    echo "SetDate: <br>";
    $data = new DateTime();
    print_r($data);
    
    echo "<br>";
    $data->setDate(2003, 12, 6);

    print_r($data);
    echo "<br><br>";

    echo "SetTime: <br>";
    $data->setTime(12,30,59);
    print_r($data);
    echo "<br><br>";

    echo "Data Formatada:";
    echo $data->format("D-M,Y");