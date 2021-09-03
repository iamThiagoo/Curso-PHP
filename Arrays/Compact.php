<?php

    // Se o com o extract a gente transforma as chaves de um array em variáveis
    // Com a função compact() a gente tranforma variáveis em um array
    // dentro do compact a gente coloca as variáveis em forma de string, e o compact dentro de uma variável.

    $nome = "Ana"; 
    $sobrenome = "de Paula";
    $idade = 25;
    $cidadeNatal = "São Paulo";
    $cidadeAtual = "Recife";
    $estadoCivil = "Solteira";
    $filhos = 0;
    $escolaridade = "Cursando Ensino Superior";
    $telefone = "(055) 9999 - 9999";

    $pessoa = compact("nome", "sobrenome", "idade", "cidadeNatal", "cidadeAtual", "estadoCivil", "filhos", "escolaridade", "telefone");

    print_r($pessoa);