<?php

    $pessoa1 = [
        "nome" => "Thiago", 
        "idade" => 17,
        "profissão" => "estudante",
        "cidade" => "Caxias do Sul",
        "país" => "Brasil",        
    ];

    $nomePessoa = $pessoa1["nome"];
    $idadePessoa = $pessoa1["idade"];

    if($idadePessoa >= 18){
        $situação = "APROVADO";
    }
    else{
        $situação = "REPROVADO pois é menor de idade.";         
    }

    echo "O aluno $nomePessoa de $idadePessoa anos se encontra: $situação.";

?>