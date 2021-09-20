<?php
    setcookie("nome", "Thiago", time() + 6000);

    if(isset($_COOKIE["nome"])){
        $nome = $_COOKIE["nome"];
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cookie</title>
    </head>
    <body>
        <p>Seja bem vindo <?= $nome ?> ao MyPets!</p>
    </body>
</html>