<?php

    // Arrays associativos tem o mesmo propósito que um array normal, porém você irá escrevê-lo com chaves e valor;
    // Exemplo: $arr = ['nome' => "Thiago", idade => 17, ...];
    // Chaves entre aspas e a seta apontando para o valor

    $arr = ["nome" => "Thiago", "idade" => 17, "corOlho" => "castanhos", "corCamisa" => "preta", "corCalca" => "azul"];
    
    print_r($arr);
    echo "<br>";
    echo $arr["nome"];
    echo "<br>";
    echo $arr["idade"];
    echo "<br>";
    echo $arr["corOlho"];
?>