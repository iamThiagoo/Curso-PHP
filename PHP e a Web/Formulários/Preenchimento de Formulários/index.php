<?php

    $usuario = [ // Dados mockados: não precisamos ter um banco de dados para fazer uma solicitação
        "nome" => "Thiago",
        "idade" => 17,
        "cidade" => "Caxias do Sul",
        "país" => "Brasil",
        "hobby" => "programar"
    ];

    if($usuario){
        $nome = $usuario["nome"];
        $idade = $usuario["idade"];
        $cidade = $usuario["cidade"];
        $país = $usuario["país"];
        $hobby = $usuario["hobby"];
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Preenchimento de Formulários</title>
        <style>
            *{
                padding: 0;
                margin: 0;
                box-sizing: 0;
                font-family:Helvetica, sans-serif;
                outline: none;
            }
            main{
                height: 100vh;
                width: 100%;
                display: grid;
                place-items: center;
            }
            .inputizin{
                border: 2px solid gray;
                border-radius: 1rem;
                margin-bottom: 1rem;
            }   
            .inputizin input{
                border: 0;
                background: none;
                padding: 10px;
                font-size: 17px;
                width: 100%;
            }
        </style>
    </head>
    <body>
        <main>
            <form action="backend.php" method="GET">
                <div class="inputizin">
                    <input type="text" name="nome" placeholder="Digite o seu nome" value="<?= $nome; ?>">
                </div>
                <div class="inputizin">
                    <input type="text" name="idade" placeholder="Digite a sua idade" value="<?= $idade; ?>">
                </div>
                <div class="inputizin">
                    <input type="text" name="cidade" placeholder="Digite a sua cidade" value="<?= $cidade; ?>">
                </div>
                <div class="inputizin">
                    <input type="text" name="país" placeholder="Digite o país" value="<?= $país; ?>">
                </div>
                <div class="inputizin">
                    <input type="text" name="hobby" placeholder="Digite o seu hobby" value="<?= $hobby; ?>">
                </div>
                <div class="inputizin" id="submit">
                    <input type="submit" value="Confirmar">
                </div>
            </form>
        </main>
    </body>
</html>