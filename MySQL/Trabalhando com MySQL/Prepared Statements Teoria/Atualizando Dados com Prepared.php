<?php

    $host = "localhost";
    $user = "root";
    $psw = "";
    $database = "busca";

    $conn = new mysqli($host, $user, $psw, $database);

    $id = 23;
    $nome = "Santa Maria";

    $stmt = $conn->prepare("UPDATE cidades SET nome = ? WHERE id = ?");

    $stmt->bind_param("si", $nome, $id);

    $stmt->execute();

    if($stmt->error){
        echo "Ocorreu um erro: " . $stmt->error;
    }