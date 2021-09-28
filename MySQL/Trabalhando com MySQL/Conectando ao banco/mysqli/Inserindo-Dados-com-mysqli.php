<?php 

    $server = "localhost";
    $user = "root";
    $psw = "";
    $database = "busca";

    $conn = new mysqli($server, $user, $psw, $database);

    // $newtable = "CREATE TABLE users(id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, nome VARCHAR(100), email VARCHAR(200), senha VARCHAR(15))";

    $table = "users";

    $q = "INSERT INTO $table (nome, email, senha) VALUES ('Thiago', 'thiagoteste@teste.com', 'teste123456')";

    $conn->query($q);
    $conn->close();