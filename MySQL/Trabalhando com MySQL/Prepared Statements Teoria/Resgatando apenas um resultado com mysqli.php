<?php

    $host = "localhost";
    $user = "root";
    $psw = "";
    $db = "busca";

    $conn = new mysqli($host, $user, $psw, $db);

    $id = 1;

    $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");

    $stmt->bind_param("i", $id);

    $stmt->execute();

    $resultado = $stmt->get_result();

    $dados = $resultado->fetch_row();
    
    print_r($dados);
    
    $conn->close();