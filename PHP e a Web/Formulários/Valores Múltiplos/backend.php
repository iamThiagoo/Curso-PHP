<?php

        $nome = $_POST["nome"];
        $senha = $_POST["senha"];
        $email = $_POST["email"];
        
        $comidas = implode(", ", $_POST["comida"]);

?>

<p>O seu nome é <?= $nome ?>, seu email é <?= $email ?> e sua senha é <?= $senha ?>. Você gosta de <?= $comidas ?></p>