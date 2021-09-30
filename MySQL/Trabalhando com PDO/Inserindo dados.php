<?php

    $host = "localhost";
    $db = "busca";
    $user = "root";
    $psw = "";

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $psw);

    $cidade = "Flores da Cunha";

    $stmt = $conn->prepare("INSERT INTO cidades(nome) VALUES (:cidade)");

    $stmt->bindParam(":cidade", $cidade);

    $stmt->execute();