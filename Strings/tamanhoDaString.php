<?php

    // Para descobrir quantos caracteres uma string possui é utilizado a função strlen() "string length";
    $nomeCompleto = "Thiago Ferreira";
    echo strlen($nomeCompleto) . "<br><br>";

    echo "Cadastro de usuário <br>";
    $userName = "ThiaguinhoHAHAH";
    $lenUser = strlen($userName);

    if($lenUser < 15){
        echo "Usuário cadastrado com sucesso <br>";
    }
    else{
        echo "Não cadastrado. Nome de usuário muito grande! <br>";
    }

?>