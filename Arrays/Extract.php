<?php

    // Com o extract nós podemos formar variáveis com as chaves de arrays associativos
    // caso você use o extract e o nome da chave já tiver em uma variável no escopo global, será sobrescrito.

    $arr = [
        "nome" => "Thiago",
        "turma" => 309,
        "escola" => "Escola Fulano",
        "cidade" => "Caxias do Sul",
    ];

    print_r($arr);
    echo "<br><br>";

    extract($arr);

    echo $nome . "<br>";
    echo $cidade . "<br>";
    echo $escola . "<br>";