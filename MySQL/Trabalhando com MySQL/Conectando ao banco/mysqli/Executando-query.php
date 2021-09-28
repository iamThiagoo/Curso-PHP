<?php 

    $server = "localhost";
    $user = "root";
    $psw = "";
    $db = "usuarios";

    $conn = new mysqli($server, $user, $psw, $db);

    $sql = "SELECT * FROM pessoas";
    $result = $conn->query($sql); // Realizamos uma query

    print_r($result); // Retornar um objeto especificando alguns dados, como: quantas linhas possui e quantas colunas.

    $conn->close(); // Fechamos a conexão para deixar ela mais perfomática