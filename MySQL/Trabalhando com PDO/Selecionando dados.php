<?php

    $host = "localhost";
    $db = "busca";
    $user = "root";
    $psw = "";

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $psw);

    // É igual as outras operações com a sequência: prepare, bindParam, execute
    // Porém vamos ter dois métodos: o fetch e o fetchAll
    // Fetch: recebe a primeira ocorrência;
    // FetchAll: recebe todos os dados;

    $id = 7;

    $stmt = $conn->prepare("SELECT * FROM cidades WHERE id > :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    print_r($resultado); // Apenas a primeira ocorrência

    echo "<br><br>";

    $resultado2 = $stmt->fetchAll(PDO::FETCH_ASSOC);
    print_r($resultado2);