<?php

    // Para ordenar o array pelo valor da chave no array associativo, se usa a função asort() e ksort()
    // O asort vai ordernar pelo valor das chaves de forma crescente e arsort() por decrescente;
    // E o ksort vai ordenar pelo nome das chaves

    $pessoa = [
        "Nome" => "Thiago",
        "Idade" => 17,
        "Peso" => 66,
        "Cabelo" => "Castanho",
        "Olho" => "Castanho", 
        "Morando em" => "Caxias do Sul", 
        "Pets" => "Cachorro",
        "Profissão" => "Estudante"
    ];

    asort($pessoa);
    echo ("Com a função asort(): <br>");
    print_r($pessoa); // Nesse método irão ser ordenados primeiro os números e depois os valores com "C", "Estudante" e por fim "Thiago"
    echo "<br><br>";

    ksort($pessoa);
    echo ("Com a função ksort(): <br>");
    print_r($pessoa); // Nesse método serão ordenadas conforme o nome da chave => "Cabelo", "Idade", "Morando em", "Nome" e por aí vai.