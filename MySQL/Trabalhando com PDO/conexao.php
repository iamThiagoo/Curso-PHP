<?php

    // Para conectar ao banco de dados iremos passar alguns parâmetros
    // São eles: banco de dados, host, nome do banco, usuário e senha;
    
    $user = "root";
    $psw = "";

    $conn = new PDO("mysql:host=localhost;dbname=busca", $user, $psw);