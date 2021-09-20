<?php

    // Foreach já praticado bastante vezes antes é usado para manipular índices de arrays
    // Mas algo não visto antes é usar as chaves na impressão de arrays associativos

    $mercado = [
        "item1" => "Pão", 
        "item2" => "Refrigerante", 
        "item3" => "Pizza Congelada", 
        "item4" => "Frutas",
        "item5" => "Carnes",
        "item6" => "Tortas",
        "item7" => "Biscoitos",
        "item8" => "Chocolates",
        "item9" => "Sucos",
        "item10" => "Leites"
    ];

    // Imprimindo apenas o valor
    foreach($mercado as $item){
        echo $item . "<br>";
    }
    
    echo "<br><br>";

    // Caso queira imprimir a chave junto com o valor é apenas usar a setinha, após usar a variável $value
    // Aí o que antes era considerado o valor passa a ser a chave e o valor passa para essa nova variável
    foreach($mercado as $item => $value){
        echo "$item: $value <br>";
    }
    // Caso queira imprimir apenas a chave também é possível