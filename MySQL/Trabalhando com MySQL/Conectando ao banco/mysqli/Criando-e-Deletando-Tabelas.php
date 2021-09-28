<?php

    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "busca";

    $conn = new mysqli($host, $usuario, $senha, $database);

    $newtable = "CREATE TABLE brasileirao(id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, nome VARCHAR(100), fundação INT, técnico VARCHAR(150))";

    $conn->query($newtable);

    $conn->close();

    // Não se esqueça de: FECHAR A CONEXÃO e DE DAR UM REFRESH NA PÁGINA PARA APARECER A TABELA NA SUA DATABASE;