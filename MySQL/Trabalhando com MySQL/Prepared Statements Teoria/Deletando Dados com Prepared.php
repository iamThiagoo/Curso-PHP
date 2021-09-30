<?php   

    $server = "localhost";
    $user = "root";
    $psw = "";
    $db = "busca";

    $conn = new mysqli($server, $user, $psw, $db);

    $id = 23;

    $stmt = $conn->prepare("DELETE FROM cidades WHERE id = ?");

    $stmt->bind_param("i", $id);

    $stmt->execute();

    // Especifique o WHERE...