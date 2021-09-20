<?php
    
    function nomeCompleto($nome, $sobrenome){
        $nomePessoa = $nome . " ". $sobrenome;
        echo $nomePessoa . "<br>";
    }

    nomeCompleto("Thiago", "Ferreira");
    nomeCompleto("Diego", "Maradona");
    nomeCompleto("Kevin", "De Bruyne");