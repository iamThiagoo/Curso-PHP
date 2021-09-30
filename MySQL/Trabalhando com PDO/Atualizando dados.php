<?php

    $host = "localhost";
    $db = "busca";
    $user = "root";
    $psw = "";

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $psw);

    $cidade = "Rio Branco";
    $id = 9;

    $stmt = $conn->prepare("UPDATE cidades SET nome = :cidade WHERE id = :id");

    $stmt->bindParam(":cidade", $cidade);
    $stmt->bindParam(":id", $id);

    $stmt->execute();