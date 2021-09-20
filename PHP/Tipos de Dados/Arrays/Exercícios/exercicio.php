<?php

    $carro = ["nome" => "Corolla", "ano" => 2021, "capacidade" => 5, "cavalos" => 200, "km" => 50];

    print_r($carro);
    echo "<br>";

    echo $carro["nome"];
    echo "<br>";

    echo $carro["ano"];
    echo "<br>";

    echo $carro["capacidade"];
    echo "<br>";
    
    echo $carro["cavalos"];
    echo "<br>";

    echo $carro["km"];
    echo "<br>";


    $carro2 = [ // Quando possuímos um array muito grande, podemos abrí-lo
        "nome" => "Renagade",
        "marca" => "Jeep",
        "blindado" => false, 
        "ano" => 2021,
        "km" => 50
    ];

    print_r($carro2);
    echo "<br><br>";

    $nomeCarro = $carro2["nome"];
    $marcaCarro = $carro2["marca"];
    $anoCarro = $carro2["ano"];
    $kmCarro = $carro2["km"];

    echo "O nome do carro é $nomeCarro da marca $marcaCarro, ele está disponível pelo ano de $anoCarro e possuí ${kmCarro}km/h rodados desde então.";

?>
