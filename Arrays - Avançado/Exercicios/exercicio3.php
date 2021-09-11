<?php

    $carro = [
        "Jaguar",
        3.00,
        "azul",
        18,
        "teto solar",
        "automático"    
    ];

    list($marca, $motor, $cor, $km, $caracteristica, $cambio) = $carro;

    echo "Esse carro da marca $marca possui um motor de $motor, temos ele apenas na cor $cor e sua quilometragem é de apenas $km km sem contar com o seu $caracteristica.";