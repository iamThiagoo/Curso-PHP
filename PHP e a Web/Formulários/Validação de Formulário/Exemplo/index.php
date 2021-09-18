<?php

    $validacoes = [];

    if(count($_POST) > 0){

        if($_POST["nome"] === ""){
            $validacoes[] = "É necessário preencher o nome!";
        }

        if($_POST["email"] === ""){
            $validacoes[] = "É necessário preencher o email!";
        }

        if($_POST["senha"] !== $_POST["valid"]){
            $validacoes[] = "As senhas precisam ser iguais!";
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Validações</title>
        <style>
            li{
                color: blue;
            }
        </style>
    </head>
    <body>
        <?php if(count($validacoes)): ?>
            <ul>
                <?php foreach($validacoes as $validacao): ?>
                    <li><?= $validacao ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <form action="index.php" method="POST">
            <div>
                <input type="text" name="nome" placeholder="Digite o seu nome">
            </div>
            <div>
                <input type="email" name="email" placeholder="Digite o seu email">
            </div>
            <div>
                <input type="password" name="senha" placeholder="Digite a sua senha">
            </div>
            <div>
                <input type="password" name="valid" placeholder="Digite novamente a sua senha">
            </div>
            <div>
                <input type="submit" value="Confirmar">
            </div>
        </form>
    </body>
</html>