<?php

    $host = "localhost";
    $user = "root";
    $psw = "";
    $db = "busca";

    $conn = new mysqli($host, $user, $psw, $db);

    // A sequência será: 
    // prepare => bind_param => execute => get_result => fetch_all
    // Depois fechamos a conexão;

    $letra = "%t%";

    $stmt = $conn->prepare("SELECT * FROM cidades WHERE nome LIKE ?");

    $stmt->bind_param("s", $letra);

    $stmt->execute();

    $resultados = $stmt->get_result();

    $data = $resultados->fetch_all();

    print_r($data); // Retorna os dados que contém a letra