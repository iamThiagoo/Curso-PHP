<?php

    $host = "localhost";
    $user = "root";
    $psw = "";
    $db = "busca";

    $conn = new mysqli($host, $user, $psw, $db);

    $q = "SELECT nome FROM cidades";

    $result = $conn->query($q);

    $conn->close();

    // Um resultado
    $cidade = $result->fetch_assoc();
    print_r($cidade);

    echo "<br><br>";

    // Todos os resultados
    $cidades = $result->fetch_all();
    print_r($cidades);