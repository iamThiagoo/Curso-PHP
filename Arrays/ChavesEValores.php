<?php

    // Em arrays associativos, caso a gente nao saiba qual é a chave dele há uma maneira de descobrir 
    // com a função array_keys()

    $arr = [
        "marca" => "Uno",
        "motor" => "1.0",
        "teto-solar" => false,
        "câmbio" => "manual",
        "portas" => 4,
        "ar-condicionado" => true
    ];

    print_r($arr);

    // Caso não tenha acesso as chaves é só usar a função array_keys() que retornará um array apenas contendo as chaves;
    echo "<br><br>";
    print_r(array_keys($arr));

    // Caso queira usar apenas os valores das chaves de forma separada, é indicado usar a função array_values()
    echo "<br><br>";
    print_r(array_values($arr)); // Retorna apenas os valores das chaves
    echo "<br><br>";

    // Caso você queira saber se a chave existe no nosso array, iremos usar a função array_key_exists() e mesclar ele com 
    // um if. E passaremos como parâmetro o nome da chave que a gente quer saber se existe o não e o segundo parâmetro o array

    if(array_key_exists("pneus", $arr)){
        echo "EXISTE SIM";
    }
    else{
        echo "EXISTE NÃO";
    }

    echo "<br><br>";

    // Outra função que tem a mesma funcionalidade que arrays_key_exists() é o isset(), porém vamos colocar ele de uma maneira
    // diferente

    if(isset($arr["motor"])){
        echo "EXISTE SIM";
    }
    else{
        echo "EXISTE NÃO";
    }

    // O isset também vale para verificar se existe variáveis com algum nome