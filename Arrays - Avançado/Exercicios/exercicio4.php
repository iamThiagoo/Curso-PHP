<?php

    $arr = ["batata", "maça", "pera", "feijão", "arroz"];
    $removidos = array_splice($arr, 2, 2);

    echo "Novo array: <br>";
    print_r($arr);
    echo "<br><br>";

    echo("Elementos que foram removidos: <br>");
    print_r($removidos);