<?php 

    // O prepared statements é um novo jeito de inserir dados ao nosso banco de forma mais segura

    $host = "localhost";
    $user = "root";
    $psw = "";
    $db = "busca";

    $conn = new mysqli($host, $user, $psw, $db);

    // Para inserir dados com prepared statements se usa na seguinte ordem:
    // prepare => bind_param => execute

    $cidade = "Palmas";

    $stmt = $conn->prepare("INSERT INTO cidades (nome) VALUES (?)"); // Apenas um dado = um ?
    $stmt->bind_param("s", $cidade); // Um ? = um tipo de dado, temos s = string, i = integer, d = double

    $stmt->execute(); 