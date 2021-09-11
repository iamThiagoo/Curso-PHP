<?php

    $compras = [
        "Carro" => 40000,
        "Sofá" => 2000,
        "Geladeira" => 2500,
        "Televisao" => 2000,
        "Teclado" => 400,
        "Mesa" => 600,
        "Rancho" => 1000,
        "Micro-ondas" => 750
    ];

    function comprasCaras($array){
        $produtosCaros = [];

        foreach($array as $produto => $preco){
            if($preco > 500){
                array_push($produtosCaros, $produto);
            }
        }

        return $produtosCaros;
    }

    $itemsCaros = comprasCaras($compras);
    print_r($itemsCaros);

?>